<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Machine;
use App\Models\Post;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Value;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        $banner = Banner::first();
        $about = About::first();
        $services = Service::where('status', true)->latest()->get();
        $categories = Category::latest()->get();
        $machines = Machine::limit(4)->get();

        return view('apps.pages.frontend.index', compact('banner', 'about', 'services', 'categories', 'machines'));
    }

    public function about()
    {
        $about = About::first();
        $values = Value::where('status', true)->latest()->get();

        return view('apps.pages.frontend.about', compact('about', 'values'));
    }

    public function catalog()
    {
        $machines = Machine::latest()->get();

        return view('apps.pages.frontend.catalog', compact('machines'));
    }

    public function posts()
    {
        $posts = Post::where('status', 'publish')->latest()->get();

        return view('apps.pages.frontend.posts', compact('posts'));
    }

    public function post(string $id)
    {
        $post = Post::find($id);
        return view('apps.pages.frontend.post', compact('post'));
    }

    public function contact()
    {
        return view('apps.pages.frontend.contact');
    }

    public function dashboard()
    {
        return view('apps.pages.backend.dashboard');
    }

    public function detail(string $id)
    {
        $machine = Machine::find($id);

        return view('apps.pages.frontend.detail', compact('machine'));
    }

    public function devis()
    {
        return view('apps.pages.frontend.devis');
    }
}
