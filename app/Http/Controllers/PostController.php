<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function list(){
        $posts = Post::orderBy('created_at','desc')->paginate(3);


        return view('posts',['posts' => $posts]);
    }

    public function show(Post $post){

        $posts = Post::orderBy('created_at','desc')->limit(5)->get();
        // dd($posts);
        return view('post',['post' => $post,'posts' => $posts]);
    }


    public function commentSend(Request $request, Comment $comment,$post){

        // dd($post);
        $comment->post_id = $post;
        $comment->fill($request->input())->save();
        // dd($message);
        return back()->with('success', 'Votre commentaire a été posté avec succès !');
    }
}

