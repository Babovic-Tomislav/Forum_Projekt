<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Post;
use Illuminate\Http\Request;
use App\Comment;
use Auth;
use Cookie;
use Illuminate\Cookie\CookieJar;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

            $posts = Post::paginate(15);


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
        $p->user_id = auth()->id();
        $p->save();

        //redirect

        return redirect('Post/'.$p->id);
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
        $comments=Comment::where('post_id','=', $id)->paginate(15);
        return view('Post.single', compact('posts', 'comments'));

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
        return redirect()->route('Post.index')->withMessage('Post obrisan');
    }
}
