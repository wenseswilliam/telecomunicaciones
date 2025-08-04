<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // insertar registro detalle
         DB::table('detalle')->insert([
            [
            'nombre'=>'fibra optica 1h',
            'precio'=>'430',
            'relacion con la marca'=>'cable drop',
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
             [
            'nombre'=>'fibra optica 2h',
            'precio'=>'680',
            'relacion con la marca'=>'cable drop',
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
        ]);
    }
}
