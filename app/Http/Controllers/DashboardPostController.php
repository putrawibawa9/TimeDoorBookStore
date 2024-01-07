<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index',[
            'posts' => Post::latest()->paginate(10)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create',[
            'categories' => Category::all(),
            'authors' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug'=> 'required',
            'body'=> 'required',
            'category_id'=> 'required',
            'user_id'=> 'required',
        ]);

        $validatedData['excerpt']= Str::limit($request->body,20);
        


        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success','New Book Added');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show',[
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit',[
            'post' => $post,
            'categories' => Category::all(),
            'authors' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'body'=> 'required',
            'category_id'=> 'required',
            'user_id'=> 'required',

        ];

        if($request->slug != $post->slug){
            $rules['slug'] = 'required';
        }

        $validatedData =$request->validate($rules);
        $validatedData['excerpt']= Str::limit($request->body,20);
        
    
    
        Post::where('id', $post->id)
            ->update($validatedData);
    
        return redirect('/dashboard/posts')->with('success','update success');
    
    }
   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success','Delete Success');
    }
}
