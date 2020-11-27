<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FechaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fechas')->insert([
            'fecha' => 1,
            'fecha_cierre' => strtotime("27-11-2019 20:00:00"),
            'torneo_id' => 1,
        ]);
    }
}
