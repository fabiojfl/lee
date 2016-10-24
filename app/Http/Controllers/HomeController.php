<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Http\Requests;
use CodeCommerce\User;
use Illuminate\Http\Request;
use CodeCommerce\Order;
use Illuminate\Support\Facades\Auth;
use CodeCommerce\SubCategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Order $order, Category $category)
    {
        $this->middleware('auth');
	    $this->order = $order;
        $this->category = $category;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	//$userId = Auth::user()->id;
	//$orders = $this->order->where('user_id', auth()->user()->id )->get();
	
	//Aula 06 - Iniciando ACL com Laravel	parou 10:00
	$orders = $this->order->all();
	//$this->authorize('admin-order', $orders);
        $categories = $this->category->all();

        return view('home',compact('orders', 'categories'));
    }

    public function update($idOrder)
   {

	$order = $this->order->find($idOrder);
	
	$this->authorize('admin-order',$order);
   	return view('home-test', compact('order'));
   }
}
