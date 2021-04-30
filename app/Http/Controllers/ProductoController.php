<?php

namespace App\Http\Controllers;

use Image;
use Str;
use Auth;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        $productos=Producto::simplePaginate(12);

        return view('productos.index')
        ->with('productos', $productos);
    }


    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        //Guardar imagenes
        $imagen = $request->file('image');

        $nombreImagen = time() . '-' . Str::slug($request->name) . '.' . $imagen->getClientOriginalExtension();

        $ubicacionImagen = public_path('p_images/' . $nombreImagen);

        Image::make($imagen)->resize(1200, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($ubicacionImagen);

        $producto = Producto::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'image_p' => $nombreImagen,
            'price' => $request->price,
            'model' => $request->model
        ]);

        return redirect()->route('productos.index');
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        $productos = Producto::inRandomOrder()->take(3)->get();

        return view('productos.show')
        ->with('producto', $producto)
        ->with('productos', $productos);;
    }


    public function edit($id)
    {
        return view('productos.edit');
    }


    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);

        $producto->update([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'price' => $request->price,
            'model' => $request->model
        ]);

        return view('productos.show')->with('producto' ,$producto);
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);

        $producto->delete();

        return redirect()->route('productos.index');
    }
}
