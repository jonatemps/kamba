<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $posts = Post::orderBy('created_at','desc')->take(2)->get();
        // dd($posts);
        return view('home',['posts' => $posts]);
    }
    public function show(){
        $members = Team::orderBy('created_at','desc')->get();

        return view('about',['members' => $members]);
    }
}
