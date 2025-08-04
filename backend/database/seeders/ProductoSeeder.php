<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insertar registros a la tabla
        DB::table('producto')->insert([
            [
            'nombre'=>'corning',
            'created_at'=>now(),
            'updated_at'=>now(),
            ],
             [
            'nombre'=>'prysmian',
           'created_at'=>now(),
            'updated_at'=>now(),
            ],
        ]);
    }
}
