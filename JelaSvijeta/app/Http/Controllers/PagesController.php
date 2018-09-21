<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        $data = array(
            'title' => 'Jela svijeta',
            'paragraph' => 'Backend zadatak'
        );
        return view('pages.index')->with($data);
    }

    public function meals()
    {
        $title = "Jela";
        return view('pages.meals')->with("title", $title);
    }

    public function ingredients()
    {
        $title = "Namirnice";
        return view('pages.ingredients')->with("title", $title);
    }
    public function tags()
    {
        $title = "Tagovi";
        return view('pages.tags')->with("title", $title);
    }
    public function categories()
    {
        $title = "Kategorije";
        return view('pages.categories')->with("title", $title);
    }
    
}
