<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Topic;
use App\Models\Blog;
use Illuminate\Http\Request;

class TopicController extends Controller
{

    public function index()
    {
        return redirect()->route('blogs.index');;
    }

    public function create()
    {
        return redirect()->route('blogs.index');
    }

    public function store(Request $request)
    {
        //MODO PRO
        $tema = Topic::create([
           'name' => $request->name,
        ]);

        return redirect()->back();
    }

    public function show($id)
    {
        $tema = Topic::find($id);
        $blogs = Blog::all();
        $temas = Topic::all();

        return view('temas.show')
        ->with('tema', $tema)
        ->with('blogs', $blogs)
        ->with('temas', $temas);

    }

    public function edit($id)
    {
        $tema = Topic::find($id);
        return view('temas.edit')->with('temas', $tema);
    }

    public function update(Request $request, $id)
    {
        //MODO PRO
        $tema = Topic::find($id);

        $tema->update([
        ]);
        //REGRESO A LA PÁGINA ANTERIOR DEL DETALLE DE TAREA
        //return redirect()->route('tareas.show', $tarea->id);
            if ($request->origen == 'edit'){
                redirect()->route('temas.show', $tema->id);
            }else{
                return redirect()->back();
            }
    }

    public function destroy($id)
    {
         $tema = Topic::find($id);

        $tema->delete();

        return redirect()->back();
    }
}
