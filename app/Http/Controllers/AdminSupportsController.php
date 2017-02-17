<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use Illuminate\Http\Request;
use CodeCommerce\Support;
use CodeCommerce\Http\Requests;

class AdminSupportsController extends Controller
{
    private $support;

    public function __construct(Support $support, Category $category)
    {
        $this->support = $support;
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->all();
        $supports = $this->support->all();

        return view('admin.supports.index',compact('categories', 'supports'));
    }

    public function create()
    {
        $categories = $this->category->all();
        return view('admin.supports.create',compact('categories'));
    }

    public function store(Requests\SupportRequest $request)
    {
        $this->support->create($request->all());
        return redirect()->route('admin.supports.message');
    }

    public function message()
    {
        $categories = $this->category->all();

        return view('admin.supports.message',compact('categories'));
    }

    public function show($id)
    {
        $categories = $this->category->all();
        $support = $this->support->find($id);

        return view('admin.supports.show',compact('categories','support'));
    }
}
