<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\User;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;



class AdminProfilesController extends Controller
{
    public function __construct(User $user)
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        return view('store.profile.show');
    }
}
