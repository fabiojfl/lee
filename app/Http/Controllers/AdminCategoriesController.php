<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Http\Requests\CategoryRequest;
use CodeCommerce\Order;
use CodeCommerce\Product;
use Illuminate\Http\Request;
use CodeCommerce\SubCategory;



class AdminCategoriesController extends Controller {

	private $category;
    private $product;
    private $order;
    private $subCategory;

    public function __construct(Category $category, Product $product, Order $order, SubCategory $subCategory)
    {
        $this->category = $category;
        $this->product = $product;
        $this->order = $order;
        $this->subCategory = $subCategory;
    }

    public function index()
    {
        $categories = $this->category->paginate(15);
        $subCategories =  $this->subCategory->all();
        return view('admin.categories.index',compact('categories','subCategories'));
    }

    public function create()
    {
        $categories = $this->category->all();
        $subCategories =  $this->subCategory->all();
        $product = $this->product->all();
        $order = $this->order->all();

        return view('admin.categories.create',compact('categories', 'product','order','subCategories'));
    }

    public function store(CategoryRequest $request)
    {
        $input = $request->all();
        $category = $this->category->fill($input);
        $category->save();
        return redirect()->route('admin.categories.index');
    }

    public function edit($id)
    {
        $categories = $this->category->all();
        $subCategories =  $this->subCategory->all();
        $product = $this->product->all();
        $order = $this->order->all();

        $category = $this->category->find($id);
        return view('admin.categories.edit',compact('category','categories','product', 'order','subCategories'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $this->category->find($id)->update($request->all());
        return redirect()->route('admin.categories.index');
    }

    public function destroy($id)
    {
        $this->category->find($id)->delete();
        return redirect()->route('admin.categories.index');
    }


}
