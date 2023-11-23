<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class AssignmentController extends Controller
{

    public function home(){
        return view('home-page.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
     
        return view('pages.contact');
    }

    public function project(){

        $blogs = Blog::all();
        return view('pages.project', compact('blogs'));
    }

    public function contactSubmit(Request $request){
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'message' => ['required'],
        ]
    );     
    }
}
