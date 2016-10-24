<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;


class AdminUsersController extends Controller
{
    private $userModel;

    public function __construct(User $user, Category $category)
    {
        $this->userModel = $user;
        $this->category  = $category;
    }

    public function index()
    {
        $categories = $this->category->all();
        $users = $this->userModel->paginate(10);
        return view('admin.users.index', compact('users', 'categories'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['is_admin'] = $request->get('is_admin') ? true : false;
        $input['password'] = bcrypt($input['password']);

        $user = $this->userModel->fill($input);
        $user->save();

        return redirect()->route('admin.users.index');
    }

    public function show($id)
    {
        $user = $this->userModel->find($id);

        return view('admin.users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = $this->userModel->find($id);

        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $input['is_admin'] = $request->get('is_admin') ? true : false;
        $this->userModel->find($id)->update($input);
        return redirect()->route('admin.users.index');
    }

    public function destroy($id)
    {
        $this->userModel->find($id)->delete();
        return redirect()->route('admin.users.index');
    }
}
