<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $title = "home";
        return view('pages.home', compact('title'));
    }

    public function about(){
        $title = "about";
        return view('pages.about', compact('title'));
    }

    public function projects(){
        $title = "projects";
        return view('pages.projects', compact('title'));
    }

}
