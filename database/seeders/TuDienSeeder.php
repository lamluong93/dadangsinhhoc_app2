<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TuDienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\TuDien::factory(10)->create();
        DB::table('tu_diens')->insert([
            'value' => Str::random(10),
            'description' => Str::random(100),
            'type' => Str::random(25),
        ]);
    }
}
