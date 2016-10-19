<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Post;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        auth()->loginUsingId(2);

        $post = Post::findOrFail(2);

        if (Gate::denies('show-master', $post))
        {
            abort(403, 'Ops, usuário sem permissão.');
        }


        return view('store.post', compact('post'));
    }
}
