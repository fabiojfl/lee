<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Category;
use CodeCommerce\Product;
use CodeCommerce\SubCategory;
use CodeCommerce\Order;

class AdminSubCategoriesController extends Controller
{
	private $category;
	private $product;
	private $subCategory;
	
	public function __construct(Category $category, SubCategory $subCategory, Product $product, Order $order)
	{
		$this->category 	= $category;
		$this->product 		= $product;
		$this->subCategory 	= $subCategory;
	}
	
	public function index()
	{
		$categories = $this->category->all();
		$subCategories = $this->subCategory->paginate(15);
		return view('admin.sub_categories.index',compact('subCategories', 'categories'));
	}
	
	public function create()
	{
		
		$listCategories = $this->category->lists('name', 'id');
		$categories = $this->category->all();
		
		$subCategories = $this->subCategory->all();
		$product = $this->product->all();
	
		return view('admin.sub_categories.create',compact('categories', 'product', 'subCategories', 'listCategories'));
	}
	
	public function store(Request $request)
	{
		$input = $request->all();
		$subCategory = $this->subCategory->fill($input);
		
		$subCategory->save();
		return redirect()->route('admin.sub_categories.index');
	}
	
	public function edit($id)
	{
		//menu
		$subCategories = $this->subCategory->all();
		
		$listCategories = $this->category->lists('name', 'id');
		$sub_category = $this->subCategory->find($id);
		
		
		$categories = $this->subCategory->all();
		$product = $this->product->all();
		
		
		return view('admin.sub_categories.edit',compact('sub_category','listCategories','categories','product','subCategories'));
	}
	
	public function update(Request $request, $id)
	{
		$this->subCategory->find($id)->update($request->all());
		return redirect()->route('admin.sub_categories.index');
	}
	
	public function destroy($id)
	{
		$this->subCategory->find($id)->delete();
		return redirect()->route('admin.sub_categories.index');
	}
}
