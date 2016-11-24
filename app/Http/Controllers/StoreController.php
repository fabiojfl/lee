<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;
use CodeCommerce\Product;
use CodeCommerce\Tag;
use Illuminate\Http\Request;
use CodeCommerce\SubCategory;
use CodeCommerce\Features;
use CodeCommerce\ProductSlideHome;


class StoreController extends Controller
{
	private $category;
	private $product;
	private $tag;
	private $slideHome;
	
	
	public function __construct(Category $category, Product $product, Tag $tag, Features $feature, ProductSlideHome $slideHome)
	{
		$this->category = $category;
		$this->product  = $product;
		$this->tag      = $tag;
		$this->feature  = $feature;
		$this->slideHome = $slideHome;
		
	}

	public function index()
	{
		$slide    = $this->slideHome->where('id','=', 1);
		$slideHomes    = $this->slideHome->all();
		$categories   = $this->category->all();
		$pFeatured    = $this->product->featured()->get();
		$pRecommended = $this->product->recommended()->get();

		return view('store.index', compact('categories', 'pFeatured', 'pRecommended','slideHomes', 'slide'));
	}

	public function home()
	{
		$slideHomes   = $this->slideHome->all();
		$slide        = $this->slideHome->where('id','=', 1);
		$categories   = $this->category->all();
		$pFeatured    = $this->product->featured()->get();
		$pRecommended = $this->product->recommended()->get();
		
		return view('store.istore', compact('categories', 'pFeatured', 'pRecommended', 'slideHomes', 'slide'));
	}
	public function category($id)
	{
		$categories  = $this->category->all();
		$category    = $this->category->find($id);
		$products    = $this->product->ofCategory($id)->get();

		return view('store.category',compact('categories','products','category'));

	}
	
	public function product($id)
	{
			
		$categories = $this->category->all();
		$products 	= $this->product->all();
		$product   	= $this->product->find($id);
		$tags  		= $this->tag->all();
		$features 			= $this->feature->where('product_id', '=', $id)->get();
		$relatedsProducts 	= $this->product->where('category_id','=', $id)->get();
		
		//ProductRelated
		//$max = App\Flight::where('active', 1)->max('price');
		
		
		return view('store.product',compact('categories','product','tags','products','features', 'relatedsProducts','titleRelated'));
	}
	
	/*
	public function slide($id)
	{
		//$features = $this->feature->where('sale_id', '=', $id)->get();	
		
		$sale      = $this->sale->find($id);
		
		$categories = $this->category->all();
		$products 	= $this->product->all();
		$tags  		= $this->tag->all();
		
		
		//ProductRelated
		//$max = App\Flight::where('active', 1)->max('price');
		
		
		return view('store.sale',compact('sale','categories','product','tags','products','features'));
	}
	*/
	
	
	public function about()
	{
		$categories = $this->category->all();
		
		return view('store.pages.about', compact('categories'));
	}
	
	public function contact()
	{
		$categories = $this->category->all();
		
		return view('store.pages.contact', compact('categories'));
	}


}
