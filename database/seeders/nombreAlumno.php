<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nombreAlumno extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            'id' => '100',
            'nombre' => 'Ismael',
            'apellidos' => 'González Bravo',
            'dni' => '99458392K'
        ]);

        DB::table('alumnos')->insert([
            'id' => '200',
            'nombre' => 'Kevin',
            'apellidos' => 'González Geboes',
            'dni' => '72192388Y'
        ]);

        DB::table('alumnos')->insert([
            'id' => '300',
            'nombre' => 'Daniel',
            'apellidos' => 'García Gorreto',
            'dni' => '89672193O'
        ]);
    }
}

                   