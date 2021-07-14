<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index(Requ)
  {
    $posts = Post::all();
    return view('posts.index', ['posts' => $posts]);
  }

  public function edit(Post $post)
  {
    return view('posts.edit', ['post' => $post]);
  }

  public function update(Post $post)
  {
    
    request()->validate([
      'title'=>'required',
      'content'=>'required'
    ]);
    $post->update(extract($post));
    redirect('/posts');
  }
  
  public function create()
  {
    return view('posts.create');
  }
  
  public function store()
  {
    request()->validate([
      'title'=>'required',
      'content'=>'required'
    ]);
    Post::create([
      'title'=>request('title'),
      'content'=>request('content')
    ]);
    redirect('/posts');
  }
}
