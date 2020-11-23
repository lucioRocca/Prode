<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'Talleres',
            'escudo' => '123.jpeg',
        ]);

        DB::table('users')->insert([
            'nombre' => 'River',
            'escudo' => '123.jpeg',
        ]);
    }
}
