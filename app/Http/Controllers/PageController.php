<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = "welcome to laravel!!";//pass a single value to index.blade.php
        // return view('page.index', compact('title')); pass a single value
        return view('page.index')->with('judul', $title); //pass a multiple value as an array
    } 

    public function about(){
        $title = "About Us";
        return view('page.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web design', 'Programming', 'SEO']
        );
        return view('page.services')->with($data);
    }
}

