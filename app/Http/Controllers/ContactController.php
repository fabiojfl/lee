<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;
use CodeCommerce\Http\Requests\ContactRequest;
use CodeCommerce\Http\Requests;
use CodeCommerce\Contact;
use CodeCommerce\Category;
use Session;

class ContactController extends Controller
{
	private $contact;
	private $category;
	
    public function __construct(Contact $contact, Category $category)
	{
		$this->contact  = $contact;
		$this->category = $category;
	}
	
	public function index()
	{
		$contacts    = $this->contact->all();
		$categories  = $this->category->all();
		
		return view('admin.contacts.index',compact('contacts','categories'));
	}
	
	public function create()
	{
		return view('store.pages.contact');
	}
	
	public function store(ContactRequest $request)
	{
		$this->contact->create($request->all());
		Session::flash('flash_message','Mensagem enviada com sucesso.');
		return redirect()->route('store.pages.contact');
	}
	
	public function show($id)
	{
		$categories  = $this->category->all();
		$contact = $this->contact->find($id); 
		return view('admin.contacts.show', compact('categories','contact'));
	}
}
