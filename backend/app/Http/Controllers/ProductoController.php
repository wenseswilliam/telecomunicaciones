<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Producto::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validacion post
        $request->validate([
            'nombre'=>'required',

        ]);

        $producto=producto::create($request->all());

        return response()->json([
            'mensaje'=>'Producto creado exitosamente',
            'producto'=>$producto
        ], 201 );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //mostrar por id show
        $producto=producto::find($id);
        if(!$producto){
            return response()->json(
                [
                    'mensaje'=>'categoria no encontrada'
                ], 404
                );
        }

return response()->json($producto,200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // actualizar
        $producto=producto::find($id);
        if(!$producto){
            return response()->json(
                [
                    'mensaje'=>'categoria no encontrada'
                ], 404
                );
        }
            $request->validate([
            'nombre'=>'required',

        ]);
        $producto->update($request->all());


        return response()->json([
            'mensaje'=>'Producto actualizada exitosamente',
            'producto'=>$producto
        ], 201 );


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // eliminar
         $producto=producto::find($id);
          if(!$producto){
            return response()->json(
                [
                    'mensaje'=>'categoria no encontrada'
                ], 404
                );
        }

        $producto->delete();
        return response()->json([
            'mensaje'=>'Categoria eliminada exitosamente'
        ], 200);
    }
}
