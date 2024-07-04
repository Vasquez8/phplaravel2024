<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('docente')->insert([
            'nombre' => 'admin',
            'apellido' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);

        DB::table('estudiante')->insert([
            'nombre' => 'alumno',
            'apellido' => 'alumno',
            'email' => 'alumno@alumno.com',
            'password' => Hash::make('alumno'),
        ]);

        // DB::table('asistencias')->insert([
        //     'grupo_id' => $request->grupo_id,
        //     'estudiante_id' => $request->estudiante_id,
        //     'fecha' => $request->fecha,
        //     'hora_entrada' => $request->hora_entrada,
        // ]);
    }
}
