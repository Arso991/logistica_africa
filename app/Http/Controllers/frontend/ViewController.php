<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        return view('apps.pages.frontend.index');
    }

    public function about()
    {
        return view('apps.pages.frontend.about');
    }

    public function catalog()
    {
        return view('apps.pages.frontend.catalog');
    }

    public function posts()
    {
        return view('apps.pages.frontend.posts');
    }

    public function contact()
    {
        return view('apps.pages.frontend.contact');
    }
}
