<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Topic;
use App\Models\Blog;
use Illuminate\Http\Request;

class FrontTemasController extends Controller
{
    public function index()
    {
        return redirect()->route('blog.index');;
    }

    public function show($id)
    {
        $tema = Topic::find($id);
        $blogs = Blog::all();
        $temas = Topic::all();

        return view('tema.show')
        ->with('tema', $tema)
        ->with('blogs', $blogs)
        ->with('temas', $temas);

    }
}
