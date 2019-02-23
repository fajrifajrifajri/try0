<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function aboutme(){
        return view('pages.aboutme');
    }

    public function java(){
        return view('pages.java');
    }

    public function eastern(){
        return view('pages.eastern');
    }

    public function wonderfulindonesia(){
        return view('posts.wonderful-indonesia');
    }
}
