<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rol;

use App\Http\Controllers\Controller;




class RolController extends Controller
{

    public function index()
    {
        $rol = Rol::all();
        return $rol;

    }



    // public function store(Request $request)
    // {
    //     $productos = new Productos();
    //     $productos->name = $request->name;
    //     $productos->precio = $request->precio;
    //     $productos->save();
    // }


    // public function update(Request $request)
    // {
    //     $producto = Productos::findOrFail($request->id);
    //     $producto->name = $request->name;
    //     $producto->precio = $request->precio;
    //     $producto->save();
    //     return $producto;

    // }

    // public function destroy(Request $request)
    // {
    //     $productos = Productos::destroy($request->id);
    //     return $productos;

    // }


}
