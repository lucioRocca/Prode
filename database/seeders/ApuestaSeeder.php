<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apuestas')->insert([
            'equipoL' => 2,
            'equipoV' => 0,
            'partido_id' => 1,
            'user_id' => 1,
            'grupo_id' => 1,
            'created_at' => Carbon::Now(),
        ]);
    }
}
