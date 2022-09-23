<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Video;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function video(){

        $videos = Video::orderBy('created_at','desc')->paginate(4);

        return view('gallery-video',['videos' => $videos]);
    }

    public function image(){
        $images = Image::orderBy('created_at','desc')->paginate(3);

        return view('gallery-image',['images' => $images]);
    }
}
