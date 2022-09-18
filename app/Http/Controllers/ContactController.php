<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function submit(Request $request, Message $message){

        $message->fill($request->input())->save();
        // dd($message);
        return back()->with('success', 'Merci de nous avoir contacté !');
    }

    public function newsletter(Request $request, Newsletter $newsletter){

        $newsletter->fill($request->input())->save();
        // dd($message);
        return back()->with('success', 'Merci pour votre enregistrement à notre newsletter !');
    }
}
