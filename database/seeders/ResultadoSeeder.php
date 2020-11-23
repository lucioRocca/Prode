<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'equipoL' => 2,
            'equipoV' => 0,
            'partido_id' => 1,
            'created_at' => Carbon::Now(),
        ]);
    }
}
