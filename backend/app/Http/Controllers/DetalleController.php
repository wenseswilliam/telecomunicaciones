<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Detalle;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Detalle::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validar post

         $request->validate([
            'nombre'=>'required',
            'precio'=>'required',
            'relacion con la marca'=>'nullable',
        ]);

          $detalle=detalle::create($request->all());

        return response()->json([
            'mensaje'=>'Detalle creado exitosamente',
            'detalle'=>$detalle
        ], 201 );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //mostrar por id show
          $detalle=detalle::find($id);
        if(!$detalle){
            return response()->json(
                [
                    'mensaje'=>'detalle no encontrado'
                ], 404
                );
        }

return response()->json($detalle,200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // actualizar

        $detalle=detalle::find($id);
        if(!$detalle){
            return response()->json(
                [
                    'mensaje'=>'categoridetalle no encontrada'
                ], 404
                );
        }
            $request->validate([
            'nombre'=>'required',

        ]);
        $detalle->update($request->all());


        return response()->json([
            'mensaje'=>'detalle actualizada exitosamente',
            'detalle'=>$detalle
        ], 201 );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // eliminar

         $detalle=detalle::find($id);
          if(!$detalle){
            return response()->json(
                [
                    'mensaje'=>'detalle no encontrada'
                ], 404
                );
        }

        $detalle->delete();
        return response()->json([
            'mensaje'=>'detalle eliminada exitosamente'
        ], 200);
    }
}
