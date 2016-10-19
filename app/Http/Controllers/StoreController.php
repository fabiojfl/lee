<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;
use CodeCommerce\Product;
use CodeCommerce\Tag;
use Illuminate\Http\Request;
use CodeCommerce\SubCategory;

class StoreController extends Controller
{
	private $category;
	private $product;
	private $tag;
	private $sub_category;
	
	public function __construct(Category $category, Product $product, Tag $tag,  SubCategory $sub_category)
	{
		$this->category = $category;
		$this->product  = $product;
		$this->tag      = $tag;
		$this->sub_category = $sub_category;
	}

	public function index()
	{
		$categories   = $this->category->all();
		$subCategories = $this->sub_category->all();
		$pFeatured    = $this->product->featured()->get();
		$pRecommended = $this->product->recommended()->get();

		return view('store.index', compact('categories', 'pFeatured', 'pRecommended','subCategories'));
	}

	public function category($id)
	{
		$categories  = $this->category->all();
		$subCategories = $this->sub_category->all();
		$category    = $this->category->find($id);
		$products    = $this->product->ofCategory($id)->get();

		return view('store.category',compact('categories','products','category','subCategories'));

	}
	

	public function product($id)
	{
		$categories = $this->category->all();
		$subCategories = $this->sub_category->all();
		$product   = $this->product->find($id);
		$tags  = $this->tag->all();

		return view('store.product',compact('categories','product','tags','subCategories'));
	}


}
