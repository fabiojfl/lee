<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Requests\SlideHomeRequest;
use CodeCommerce\Http\Requests\ProductImageRequest;
use CodeCommerce\Http\Requests\ProductFeatureRequest;
use CodeCommerce\Http\Requests\ProductRequest;

use CodeCommerce\Product;
use CodeCommerce\ProductImage;
use CodeCommerce\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use CodeCommerce\Category;
use CodeCommerce\Features;
use CodeCommerce\ProductSlideHome;
use Session;

class AdminProductsController extends Controller
{
     private $category;
	private $product;
    private $tag;
	private $feature;
	private $homeSlide;

    public function __construct(
        Category $category,
        Product $product,
        Tag $tag,
        Features $feature,
        ProductSlideHome $homeSlide
        )
    {
    	$this->category  = $category;
        $this->product   = $product;
        $this->tag       = $tag;
		$this->feature   = $feature;
		$this->homeSlide = $homeSlide;
		
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = $this->category->all();
        $products = $this->product->paginate(15);
        return view('admin.products.index', compact('products','categories'));
    }

    public function create()
    {
        $listCategories = $this->category->lists('name', 'id');
        $categories     = $this->category->all();

        return view('admin.products.create',compact('listCategories','categories' ));
    }

    public function store(ProductRequest $request)
    {
        $tags = array_filter(array_map('trim', explode(',',$request->tags)));

        $tagsIDs = [];

        foreach($tags as $tagName){
            $tagsIDs[] = Tag::firstOrCreate(['name'=> $tagName])->id;
        }
		
		$input              = $request->all();
        $input['featured']  = $request->get('featured')  ? true : false;
        $input['recommend'] = $request->get('recommend') ? true : false;
        
        $product            = $this->product->fill($input);
        $product->save();

        $product->tags()->sync($this->getTagIds($request->tags));
        return redirect()->route('admin.products.index');

    }

    public function edit($id)
    {
        $listCategories = $this->category->lists('name', 'id');
        $categories     = $this->category->all();
        
        $product = $this->product->find($id);

        return view('admin.products.edit',compact('product', 'categories','listCategories'));
    }

    public function update($id, ProductRequest $request)
    {
        $input = $request->all();
        $input['featured'] = $request->get('featured') ? true : false;
        $input['recommend'] = $request->get('recommend') ? true : false;

        $this->product->find($id)->update($input);
        $product = $this->product->find($id);

        $product->tags()->sync($this->getTagIds($request->tags));


        return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
        $this->product->find($id)->delete();
        return redirect()->route('admin.products.index');
    }

    public function images($id)
    {
        $product = $this->product->find($id);
        return view('admin.products.images', compact('product'));
    }
	
	
    public function createImage($id)
    {
        $product = $this->product->find($id);
        return view('admin.products.create_image', compact('product'));
    }

    public function storeImage(ProductImageRequest $request, $id,ProductImage $productImage)
    {
        $file       = $request->file('image');
        $extension  = $file->getClientOriginalExtension();
        $image      =  $productImage->create(['product_id'=>$id, 'extension'=>$extension]);

        Storage::disk('public_local')->put($image->id.'.'.$extension, File::get($file));

        return redirect()->route('admin.products.images',['id' => $id]);
    }

    public function destroyImage(ProductImage $productImage, $id)
    {
        $image = $productImage->find($id);

        if(file_exists(public_path().'/uploads/'.$image->id.'.'.$image->extension))
        {
            Storage::disk('public_local')->delete($image->id.'.'.$image->extension);
        }

        $product = $image->product;
        $image->delete();

        return redirect()->route('admin.products.images',['id' => $product->id]);
    }
	
	public function features($id)
    {
        $product = $this->product->find($id);
        return view('admin.products.features', compact('product','features'));
    }

    public function createFeature($id)
    {
        $product = $this->product->find($id);
        $categories = $this->category->all();
        return view('admin.products.create_feature', compact('product', 'categories'));
    }

    public function storeFeature(ProductFeatureRequest $request, $id)
    {
        $feature      =  $this->feature->create([
            'product_id'	=>$id,
            'title'			=> $request->title,
            'description'	=> $request->description
        ]);
        return redirect()->route('admin.products.features',['id' => $id]);
    }

    public function destroyFeature($id)
    {
        $feature = $this->feature->find($id)->delete();
        return redirect()->route('admin.products.features',['id' => $feature->id]);
    }
	
	public function homeSlides($id)
    {
		$categories = $this->category->all();
		$product = $this->product->find($id);
		
        return view('admin.slides.index', compact('product', 'categories'));   
    }
	
	public function createSlideImage($id)
	{
		$categories = $this->category->all();
		$product = $this->product->find($id);
        return view('admin.slides.create_slide_home_image', compact('product', 'categories'));
	}		
	
	public function storeHomeSlideImage(SlideHomeRequest $request, $id, ProductSlideHome $productSlideHome)
    {
        $file       = $request->file('image');
        $extension  = $file->getClientOriginalExtension();

        $image      = $productSlideHome->create(['product_id' => $id, 'extension'=>$extension]);

        Storage::disk('public_local')->put('ProductHomeSlide/'.$image->id.'.'.$extension, File::get($file));

        Session::flash('flash_message','Slide Do produto inserido com sucesso!.');
        return redirect()->route('admin.slides.index',['id' => $id]);
    }


    public function destroyHomeSlide(ProductSlideHome $productSlideHome, $id)
    {
        $image = $productSlideHome->find($id);

        if(file_exists(public_path().'/uploads/ProductHomeSlide/'.$image->id.'.'.$image->extension))
        {
            Storage::disk('public_local')->delete($image->id.'.'.$image->extension);
        }

        $product = $image->product;
        $image->delete();

        return redirect()->route('admin.products.images',['id' => $product->id]);
    }


    //search id tags

    public function getTagIds($tags)
    {
        $tagList = array_filter(array_map('trim', explode(',',$tags)));

        $tagsIDs = [];

        foreach($tagList as $tagName)
        {
            $tagsIDs[] = Tag::firstOrCreate(['name'=> $tagName])->id;
        }

        return $tagsIDs;
    }
}
