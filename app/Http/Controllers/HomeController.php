<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\User;
use CodeCommerce\Order;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Order $order, Category $category, User $user)
    {
        $this->middleware('auth');
	    $this->order = $order;
        $this->category = $category;
        $this->user = $user;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$userId = Auth::user()->id;
	$userOrders = $this->order->where('user_id', auth()->user()->id )->get();
	$user = $this->user->find($userId);
	$orders = $this->order->all();
	$categories = $this->category->all();

        return view('home',compact('orders', 'categories', 'userOrders', 'user'));
    }

    public function update($idOrder)
   {

	$order = $this->order->find($idOrder);
	
	$this->authorize('admin-order',$order);
   	return view('home-test', compact('order'));
   }
}
