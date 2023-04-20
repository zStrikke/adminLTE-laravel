<?php

namespace Database\Seeders;

use App\Models\DailyReport;
use App\Models\PredefinedAnswer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ClientSeeder::class,
            NotationSeeder::class,
            PredefinedAnswerSeeder::class,
            DailyReportSeeder::class,
            TicketSeeder::class,
        ]);
    }
}
