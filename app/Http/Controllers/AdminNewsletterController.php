<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Newsletter;
use CodeCommerce\User;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminNewsletterController extends Controller
{
    public function __construct(Newsletter $newsletter, Category $category, User $user)
    {
        $this->newsletter = $newsletter;
        $this->category   = $category;
        $this->user       = $user;
    }

    public function index()
    {
        $categories = $this->category->all();
        $newslattersers = $this->newsletter->paginate(25);

        return view('admin.newsletters.index', compact('newslatters','categories'));
    }

    public function create()
    {
    	$userId = Auth::User()->id;
    	$user   = $this->user->find($userId);
    	
        return view('admin.newsletters.create', compact('user'));
    }
    
    public function store(Request $request)
    {
    	$this->newsletter->create($request->all());
    	return redirect()->route('admin.newsletters.message');
    }
    
    public function message()
    {
    	$userId = Auth::User()->id;
    	$user   = $this->user->find($userId);
    	$categories = $this->category->all();
    	return view('admin.newsletters.message', compact('user'));
    }
    
    
    public function newslattercreate()
    {
    	return view('store.pages.newslattercreate');
    }
    
    public function newslatterstore(Request $request)
    {
    	$this->newsletter->create($request->all());
    	return redirect()->route('store.pages.message');
    }
    
    public function newslattermessage()
    {
    	//$categories = $this->category->all();
    	
    	return view('store.pages.message');
    }
    

   }
