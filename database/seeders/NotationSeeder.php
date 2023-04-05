<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Client;

class NotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $clientes = Client::all();

        $users->each(function($user, $key) use ($clientes){

            // Q: Por que no usando ->count(3) ?
            /**
             * A: Porque si se hace asi, entiendo que, se crea en memoria 3 objetos iguales
             * haciendo que la llamada a $clientes->random() sea siempre la misma, mismo id.
             * Asi nos aseguramos que se asigna a un cliente distinto.
             * Y paso de complicarme la vida
             */

            \App\Models\Notation::factory()
                ->for($user)
                ->for($clientes->random())
                ->create();

            \App\Models\Notation::factory()
                ->for($user)
                ->for($clientes->random())
                ->create();

            \App\Models\Notation::factory()
                ->for($user)
                ->for($clientes->random())
                ->create();

            /**
             * Ademas asi si en un futuro quiero que un mismo usuario tenga 3 notas para
             * el mismo cliente lo hago con el ->count(X). A mi ahora me interesa
             * que cada usuario tenga 3 notas hechas a clientes aleatorios y que
             * coincidan diferentes usuarios en mismo cliente a poder ser.
             */
        });
    }
}
