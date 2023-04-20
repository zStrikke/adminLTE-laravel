<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Ticket::factory(50)->create();
    }
}
