<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PredefinedAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PredefinedAnswer::factory(20)->create();
    }
}
