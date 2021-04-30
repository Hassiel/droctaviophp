<?php

namespace App\Http\Controllers;

use Image;
use Str;
use Auth;
use App\Models\Blog;
use App\Models\Topic;
use App\Models\Producto;
use Illuminate\Http\Request;

class FrontBlog extends Controller
{
    //VISTA BLOGS
    public function index()
    {
        $blogs = Blog::simplePaginate(12);
        $temas = Topic::all();

        return view ('blog.index')
        ->with('blogs', $blogs)
        ->with('temas', $temas);
    }

    //VISTA INDEX
    public function principal()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $productos = Producto::inRandomOrder()->take(3)->get();


        return view ('index')
        ->with('blogs', $blogs)
        ->with('productos', $productos);;
    }

    public function privacidad()
    {
        return view('privacy');
    }

    //VISTA DE UNA SOLA BLOG
    public function show($id)
    {
        $blog = Blog::find($id);

        return view('blog.show')->with('blog', $blog);
    }
}
