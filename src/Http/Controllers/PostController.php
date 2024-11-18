<?php

namespace Tabler\TablerForm\Http\Controllers;

use Illuminate\Http\Request;
use Tabler\TablerForm\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        // dd(config('tabler-form.test'));
        //Post::create(['title' =>'title1']);
        $posts = Post::all();
        return view('tabler-form::index',[
            'posts' => $posts,
        ]);
    }

}
