<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::paginate(10);
        return view('Post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //validate

        $this->validate($request,[
            'title'=>'required|min:10',
            'content'=>'required|min:20',

        ]);
        $p = new Post;
        $p->title =$request->title;
        $p->content = $request->content;
        $p->save();

        //redirect

        return back()->withMessage('Post Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $posts= Post::find($id);
        return view('Post.single', compact('posts'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
        $posts= Post::find($id);
        return view('Post.edit', compact('posts'));
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
        //validate

        $this->validate($request,[
            'title'=>'required|min:10',
            'content'=>'required|min:20',

        ]);
        $p = Post::find($id);
        $p->title =$request->title;
        $p->content = $request->content;
        $p->save();

        //redirect

        return redirect()->route('Post.show',$p->id)->withMessage('Post Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Post::find($id);
        $p->delete();
        return redirect()->route('Post.index')->withMessage('Post unisten');
    }
}
