<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Laravel!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about()
    {
        $data = array(
            'title' => 'About',
            'services' => ['Web Design', 'Programming', 'SEO' ],
        );
        return view('pages.about')->with($data);
    }
}
