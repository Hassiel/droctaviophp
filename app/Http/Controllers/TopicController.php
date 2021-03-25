<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{

    public function index()
    {
        ///Colleción de Tareas
        $temas = Topic::all();

        return view('temas.index') ->with('temas', $temas);
    }

    public function create()
    {
        return view('temas.create');
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
        return view('show')->with('tema', $tema);

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
