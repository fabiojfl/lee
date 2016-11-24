<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Newsletter;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;

class AdminNewsletterController extends Controller
{
    public function __construct(Newsletter $newsletter, Category $category)
    {
        $this->newsletter = $newsletter;
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->all();
        $newslatters = $this->newsletter->paginate(25);

        return view('admin.newsletters.index', compact('newslatters','categories'));
    }

    public function create()
    {
        return view('admin.newsletters.create');
    }

    public function store(Request $request)
    {

        $this->newsletter->create($request->all());
        return redirect()->route('admin.newsletters.message');
    }

    public function message()
    {
        $categories = $this->category->all();
        return view('admin.newsletters.message');
    }
}
