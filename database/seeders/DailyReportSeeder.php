<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DailyReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::all();

        $users->each(function($user, $key){

            $daysTillToday = 5;

            for($i = $daysTillToday; $i >= 0; $i--) {
                \App\Models\DailyReport::factory()
                    ->for($user)
                    ->create([
                        'created_at' => (new \DateTime("- $i days"))->format('Y-m-d 09:30:s')
                    ]);
            }



        });
    }
}
