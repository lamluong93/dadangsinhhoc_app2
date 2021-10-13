<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DefValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DefValue::factory(10)->create();
    }
}
