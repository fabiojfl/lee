<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\User;
use Illuminate\Http\Request;
use CodeCommerce\Http\Requests;

class RegisterController extends Controller
{
    private $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function index()
    {
        return view('register.index');
    }

    public function store(Requests\RegisterRequest $request)
    {
        $input = $request->all();

        $data = [
            'email' => $input['email'],
            'password' => $input['password'],
        ];

        $input['is_admin'] = $request->get('is_admin') ? true : false;
        $input['password'] = bcrypt($input['password']);

        $user = $this->userModel->fill($input);
        $user->save();

        //Auth::attempt($data);


        return redirect()->route('home');
    }
    
    public function update(Request $request, $id)
    {
    	$input = $request->all();
    	$input['is_admin'] = $request->get('is_admin') ? true : false;
    	$this->userModel->find($id)->update($input);
    	return redirect()->route('admin.users.index');
    }
    
    public function show($id)
    {
        $user = $this->userModel->find($id);

        return view('register.show', compact('user'));
    }
}
