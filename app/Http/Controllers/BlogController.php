<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //VISTA PRINCIPAL
    public function index()
    {
        $blogs = Blog::all();

        return view ('posts')->with('blogs', $blogs);
    }

    //VISTA CREAR
    //FORMULARIO DE CREACIÓN
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $blog = Blog::create([
            'name' => $request->name,
            'area' => $request->area,
            'description' => $request->description,
            'youtube' => $request->youtube,
        ]);
    }

    //VISTA DE UNA SOLA BLOG
    public function show($id)
    {
        $blog = Blog::find($id);

        return view('show')->with('blog' ,$blog);
    }

    //ACTUALIZAR O EDITAR BLOG
    public function edit(Blog $blog)
    {
        //
    }

    public function update(Request $request, Blog $blog)
    {
        //
    }

    public function destroy(Blog $blog)
    {
        //
    }
}
