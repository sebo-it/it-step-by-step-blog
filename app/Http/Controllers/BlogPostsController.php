<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Mews\Purifier\Facades\Purifier;
use Image;

class BlogPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('blogPosts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    { 
        return view('blogPosts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'imageURL' => 'mimetypes:image/jpeg,image/png',
            'category_id' => 'required',
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->content = Purifier::clean($request->content);
        
        //obsluga zdjecia 
        // w metodzie update nie przypisuje domyslnego obrazka, poniewaz w razie potrzeby zostal dodany w create
        if($request->hasFile('imageURL'))
        {
            $image = $request->file('imageURL');
            $filename = $image->getClientOriginalName().'-'.time().'.'.$image->getClientOriginalExtension();
            $location = 'images/'.$filename;
            Image::make($image)->resize(1920,1280)->save($location);
            $post->imageURL = "images/".$filename;
        } else
        {
            $post->imageURL = "images/default_image.jpg";
        }
        
        $post->category_id = $request->category_id;
        $post->save();
             
        return redirect(route('blogPosts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findorFail($id);
        return view('blogPosts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('blogPosts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this ->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'imageURL' => 'mimetypes:image/jpeg,image/png',
            'category_id' => 'required',
        ]);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = Purifier::clean($request->content);

        //obsluga zdjecia 
        // w metodzie update nie przypisuje domyslnego obrazka, poniewaz w razie potrzeby zostal dodany w create
        if($request->hasFile('imageURL'))
        {
            $image = $request->file('imageURL');
            //$filename = $image->getClientOriginalName().'-'.time().'.'.$image->getClientOriginalExtension();
            $filename = $image->getClientOriginalName();
            $location = 'images/'.$filename;
            Image::make($image)->resize(1920,1280)->save($location);
            $post->imageURL = "images/".$filename;
        }
        
        $post->category_id = $request->category_id;
        $post->save();
        return redirect(route('blogPosts.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return redirect(route('blogPosts.index'));
    }

}
