<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function indexComments() {
        
        $comments = Comment::all();
        return view('indexComments', compact('comments'));
    }

    public function createComments() {

        return view('comment-store');
    }
    public function storeComments(Request $request) {

        $datiValidi = $request -> validate([
            'post_id' => 'required',
            'creation_time' => 'required',
            'like' => 'required|numeric',
            'body' => 'required'
        ]);

        // dd($datiValidi);

        $post = Post::findOrFail($datiValidi['post_id']);

        $comment = Comment::make($datiValidi);
        $comment -> post() -> associate($post);
        $comment -> save();

        return redirect('/comments');
    }

    public function createPosts() {

        return view('post-store');
    }
    public function storePosts(Request $request) {

        $datiValidi = $request -> validate([
            'creation_time' => 'required',
            'title' => 'required',
            'body' => 'required'
        ]);

        // dd($datiValidi);

        $post = Post::create($datiValidi);

        return redirect('/posts');
    }

    public function editPost($id) {

        $post = Post::findOrFail($id);
        return view('post-edit', compact('post'));
    }

    public function updatePost(Request $request, $id) {

        $datiValidi = $request -> validate([
            'creation_time' => 'required',
            'title' => 'required',
            'body' => 'required'
        ]);

        // dd($datiValidi, $id);

        $post = Post::findOrFail($id);
        $post -> update($datiValidi);

        return redirect('/posts');
    }

    public function destroyPost($id) {

        $post = Post::findOrFail($id);

        $post -> delete();

        return redirect('/posts');
    }

    // public function showComments() {

    //     $posts = DB::table('posts')
    //             ->whereYear('creation_time', '>', 1999)
    //             ->get();

    //     return view('index', compact('posts')); 
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
