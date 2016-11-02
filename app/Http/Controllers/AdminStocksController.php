<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Stock;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;

class AdminStocksController extends Controller
{

    private $stock;
    private $category;

    public function __construct(Stock $stock, Category $category)
    {
        $this->stock    = $stock;
        $this->category = $category;
    }

    public function index()
    {
        $stocks = $this->stock->paginate(15);
        $categories = $this->category->all();

        return view('admin.stocks.index',compact('stocks','categories'));
    }

    public function create()
    {
        $categories = $this->category->all();
        return view('admin.stocks.create',compact('stocks','categories'));
    }

    public function store(Request $request)
    {
        $this->stock->create($request->all());
        return redirect()->route('admin.stocks.index');
    }

    public function edit($id)
    {
        $categories = $this->category->all();
        $stock = $this->stock->find($id);

        return view('admin.stocks.edit',compact('stock','categories'));
    }


    public function update(Request $request, $id)
    {
        $this->stock->find($id)->update($request->all());
        return redirect()->route('admin.stocks.index');
    }

    public function destroy($id)
    {
        $this->stock->find($id)->delete();
        return redirect()->route('admin.stocks.index');
    }

}
