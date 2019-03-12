<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::where('id',1)->latest()->get();
        $posts = Post::latest()->get();
        
        return view('front.pages.index')->with(['categories'=>$categories,'posts'=>$posts]);
    }
}
