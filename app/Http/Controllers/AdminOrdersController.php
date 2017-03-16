<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\OrderItem;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Order;
use CodeCommerce\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Auth;
use CodeCommerce\User;

class AdminOrdersController extends Controller
{
    private $order;
    private $items;
    private $user;
    
    public function __construct(Order $order, OrderItem $items, User $user)
    {
    	$this->order = $order;
        $this->items = $items;
        $this->user  = $user;
    }
    
    public function index()
    {
    	$orders		= $this->order->paginate(25);
    	return view('admin.orders.index',compact('orders'));
    }

    public function editStatus($id)
    {
    	$order 		= $this->order->find($id);
    	return view('admin.orders.edit_status', compact('order'));
    }
    
    public function updateStatus(OrderRequest $request, $id)
    {
		$this->order->find($id)->update($request->all());
		return redirect()->route('admin.orders.index');
    }

    public function show($id)
    {
    	
    	$userId = Auth::user()->id;
    	$user = $this->user->find($userId);
        //$order = $this->order->find($id);
        $orderItems = $this->items->where('order_id', '=', $id)->get();
        $orderItem = $this->items->find($id);

        return view('admin.orders.show', compact('order','orderItems','orderItem','user'));
    }

}
