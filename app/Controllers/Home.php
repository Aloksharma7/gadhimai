<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function blog()
    {
        return view('blog/blogs');
    }
    public function history()
    {
        return view('history');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function contact()
    {
        return view('contact');
    }
    
}
