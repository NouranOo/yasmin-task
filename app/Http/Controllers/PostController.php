<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {

        return view('post');
        // $locale = app()->getLocale();
        // dd($locale);
    }

    public function update(Request $request, Post $post)
    {
        // dd("Ssss", $request->all());
        $data = $request->except('_token');
        $post->create($data);

        return redirect()->back();
    }
}
