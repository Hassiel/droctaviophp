<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    //VISTA BLOGS
    public function index()
    {
        $blogs = Blog::all();

        return view ('posts')->with('blogs', $blogs);
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
        return view('create');
    }

    public function store(Request $request)
    {
        $blog = Blog::create([
            'name' => $request->name,
            'area' => $request->area,
            'description' => $request->description,
        ]);

        return view('show')->with('blog' ,$blog);
    }

    //VISTA DE UNA SOLA BLOG
    public function show($id)
    {
        $blog = Blog::find($id);

        return view('show')->with('blog' ,$blog);
    }

    //ACTUALIZAR O EDITAR BLOG
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('edit')->with('blog', $blog);
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        $blog->update([
            'name' => $request->name,
            'area' => $request->area,
            'description' => $request->description,
        ]);

        return view('show')->with('blog' ,$blog);
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);

        $blog->delete();

        return redirect()->route('blogs.index');
    }
}
