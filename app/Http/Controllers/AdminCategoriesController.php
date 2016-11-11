<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Http\Requests\CategoryRequest;
use CodeCommerce\Order;
use CodeCommerce\Product;
use Illuminate\Http\Request;
use CodeCommerce\SubCategory;
use Session;

class AdminCategoriesController extends Controller {

	private $category;
    private $product;
    private $order;
	
    
    public function __construct(Category $category, Product $product, Order $order)
    {
        $this->category = $category;
        $this->product 	= $product;
        $this->order 	= $order;	
    }

    public function index()
    {
        $categories = $this->category->paginate(15);
        $Categories =  $this->category->all();
        return view('admin.categories.index',compact('categories'));
    }

    public function create()
    {
        $categories =  $this->category->all();
        $product = $this->product->all();
        $order = $this->order->all();

        return view('admin.categories.create',compact('categories', 'product','order'));
    }

    public function store(CategoryRequest $request)
    {
        $input = $request->all();
        $category = $this->category->fill($input);
        $category->save();
		
		Session::flash('flash_message','Categoria de produtos criada.');
        return redirect()->route('admin.categories.index');
    }

    public function edit($id)
    {
        $categories = $this->category->all();
        $product = $this->product->all();
        $order = $this->order->all();

        $category = $this->category->find($id);
        return view('admin.categories.edit',compact('category','categories','product', 'order'));
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
