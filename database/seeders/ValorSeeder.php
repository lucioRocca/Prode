<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ValorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('valors')->insert([
            'valor' => 50,
            'premio1' => 1000,
            'premio2' => 600,
            'premio3' => 200,
            'premio4' => 200,
        ]);
    }
}
