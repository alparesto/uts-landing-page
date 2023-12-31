<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    public function index() {
        $posts = Posts::all();
        
        return view('berita', [
            'on' => 'Daftar Berita',
            'posts' => $posts
        ]);
    }
}
