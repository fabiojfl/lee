<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Requests\ProductImageRequest;
use CodeCommerce\Http\Requests\ProductRequest;
use CodeCommerce\Product;
use CodeCommerce\ProductImage;
use CodeCommerce\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use CodeCommerce\Category;
use CodeCommerce\SubCategory;

class AdminProductsController extends Controller {

    private $category;
	private $product;
    private $tag;
    private $subCategory;

    public function __construct(Category $category, SubCategory $subCategory,  Product $product, Tag $tag)
    {
    	$this->category = $category;
        $this->product  = $product;
        $this->tag      = $tag;
        $this->subCategory = $subCategory;

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
    	$listSubCategories = $this->subCategory->lists('name', 'id');
        $listCategories = $this->category->lists('name', 'id');
        $categories     = $this->category->all();

        return view('admin.products.create',compact('listCategories', 'listSubCategories', 'categories' ));
    }

    public function store(ProductRequest $request)
    {
        $tags = array_filter(array_map('trim', explode(',',$request->tags)));

        $tagsIDs = [];

        foreach($tags as $tagName){
            $tagsIDs[] = Tag::firstOrCreate(['name'=> $tagName])->id;
        }

        $input['featured']  = $request->get('featured')  ? true : false;
        $input['recommend'] = $request->get('recommend') ? true : false;
        $input              = $request->all();
        $product            = $this->product->fill($input);
        $product->save();

        $product->tags()->sync($this->getTagIds($request->tags));
        return redirect()->route('admin.products.index');

    }

    public function edit($id)
    {
    	$listSubCategories = $this->subCategory->lists('name', 'id');
        $listCategories = $this->category->lists('name', 'id');
        $categories     = $this->category->all();
        
        $product = $this->product->find($id);

        return view('admin.products.edit',compact('product', 'categories','listSubCategories','listCategories'));
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
