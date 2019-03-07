<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\validation\Rule;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =Post::all();
        // $posts =Post::with('category')->get();
        // dd('posts');

        return view ('back.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view ('back.post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            //  dd($request->all());
            // dd($request->all());
            //validate the form data

            $validatedData = $request->validate([
                'title' => 'required|unique:posts',
                'description' => 'required',
            ]);
            //save the form date to database
            $post = new post;
            $post->title = $request->title;
            $post->category_id = $request->category;
            $post->description = $request->description;
            $post->user_id = 1;
            $post->slug = str_slug($request->title);
            $post->save();
            
            // dd($post);
            // return 'successful';
                //   return redirect()->back();
                  return redirect()->route('posts.create')->with('success','message successfully');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // dump($post);
        return view('back.post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Post $post)
    // {
        //
        // dd($request->all());
    //     $id = $post->id;




    //     $post->update()->where('id',$post->id);
    // }
   

        public function update(Request $request, $id)
        {
            $validatedData = $request->validate([
                'title' => 'required',Rule::unique('posts')->ignore('id'),
                'description' => 'required',
            ]);
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('posts.index')->with('success','message successfully updated');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        // dd($post);
        // return view('back.post.edit',compact('post'));
        $post->delete();
        return redirect()->back()->with('success','message successfully deleted');
    }
}
