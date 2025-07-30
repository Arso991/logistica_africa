<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Machine;
use App\Models\Post;
use App\Models\Service;
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

    public function catalog(Request $request)
    {
        $query = Machine::query();

        // Recherche par nom
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Filtrage par catégorie
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        $machines = $query->latest()->paginate(12);
        $categories = Category::all(); // Pour le filtre dans la vue

        return view('apps.pages.frontend.catalog', compact('machines', 'categories'));
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
        $cart = session()->get('cart', []);
        return view('apps.pages.frontend.devis', compact('cart'));
    }

    public function congrats()
    {
        return view('apps.pages.frontend.congrats');
    }

    public function searchStore(Request $request)
    {
        $machines = Machine::all();

        if ($request->has('query') && $request->input('query') != '') {
            $query = $request->input('query');

            $machines = Machine::where(function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%");
            })
                ->paginate(9);
        } else {
            $machines = Machine::latest()->paginate(9);
        }

        return view('apps.pages.frontend.catalog', compact('machines'));
    }
}
