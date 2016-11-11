<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;
use CodeCommerce\Http\Requests\ContactRequest;
use CodeCommerce\Http\Requests;
use CodeCommerce\Contact;
use Session;

class ContactController extends Controller
{
    public function __construct(Contact $contact)
	{
		$this->contact = $contact;
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
}
