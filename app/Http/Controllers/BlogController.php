<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //VISTA PRINCIPAL
    public function index()
    {
        return view ('posts');
    }

    //VISTA CREAR
    //FORMULARIO DE CREACIÓN
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    //VISTA DE UNA SOLA BLOG
    public function show(Blog $blog)
    {
        //
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
