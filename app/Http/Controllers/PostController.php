<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index() {
        return view('post.index');
   }

   public function byq() {
        return view('post.byq');
   }   

   public function create() {
        return view('post.create');
   }

   public function store() {
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        \App\Models\Post::create($data);

        return redirect('/post');
   }

   public function edit(\App\Models\Post $post) {
        return view('post.edit', compact('post'));
   }

   public function update(\App\Models\Post $post) {
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post->update($data);

        return redirect('/post');
   }

}
