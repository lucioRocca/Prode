<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partidos')->insert([
            'equipoL_id' => 1,
            'equipoV_id' => 2,
            'fecha_id' => 1,
        ]);

        DB::table('partidos')->insert([
            'equipoL_id' => 3,
            'equipoV_id' => 4,
            'fecha_id' => 1,
        ]);
    }
}
