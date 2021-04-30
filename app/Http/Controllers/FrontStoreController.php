<?php

namespace App\Http\Controllers;

use Image;
use Str;
use Auth;
use App\Models\Producto;
use Illuminate\Http\Request;


class FrontStoreController extends Controller
{
     public function index()
    {
        $productos=Producto::simplePaginate(12);

        return view('store.index')
        ->with('productos', $productos);
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        $productos = Producto::inRandomOrder()->take(3)->get();

        return view('store.show')
        ->with('producto', $producto)
        ->with('productos', $productos);;
    }
}
