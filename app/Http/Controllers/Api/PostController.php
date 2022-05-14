<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentsResource;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostsResource;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @return PostsResource
     */
    public function index(){
        $posts =post::paginate(env('POSTS_PER_PAGE'));
        return new PostsResource($posts);
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
     * @param $id
     * @return PostResource
     */
    public function show($id)
    {
        $post =post::find($id);
        return  new PostResource($post);
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

    /**
     * @param $id
     * @return CommentsResource
     */
    public function comments($id){
        $post =post::find($id);
        $comments =$post->comments()->paginate(env('COMMENTS_PER_PAGE'));
        return new CommentsResource($comments);
    }
}
