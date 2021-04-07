<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Blog;
use App\Models\Topic;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    //VISTA BLOGS
    public function index()
    {
        $blogs = Blog::simplePaginate(12);
        $temas = Topic::all();

        return view ('blogs.posts')
        ->with('blogs', $blogs)
        ->with('temas', $temas);
    }

    //VISTA INDEX
    public function principal()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();

        return view ('index')->with('blogs', $blogs);
    }
    
    //VISTA CREAR
    //FORMULARIO DE CREACIÓN
    public function create()
    {
        $temas = Topic::all();

        return view('blogs.create')->with('temas', $temas);
    }

    public function store(Request $request)
    {
        $blog = Blog::create([
            'name' => $request->name,
            'area' => $request->area,
            'description' => $request->description,
            'youtube' => $request->youtube,
            'topic_id' => $request->topic_id,
        ]);

        return view('blogs.show')->with('blog' ,$blog);
    }

    //VISTA DE UNA SOLA BLOG
    public function show($id)
    {
        $blog = Blog::find($id);
        $temas = Topic::all();

        return view('blogs.show')
        ->with('blog' ,$blog)
        ->with('temas', $temas);
    }

    //ACTUALIZAR O EDITAR BLOG
    public function edit($id)
    {
        $blog = Blog::find($id);
        $temas = Topic::all();
        return view('blogs.edit')
        ->with('blog', $blog)
        ->with('temas', $temas);
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        $blog->update([
            'name' => $request->name,
            'area' => $request->area,
            'description' => $request->description,
            'youtube' => $request->youtube,
            'topic_id' => $request->topic_id,
        ]);

        return view('blogs.show')->with('blog' ,$blog);
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);

        $blog->delete();

        return redirect()->route('blogs.index');
    }
}
