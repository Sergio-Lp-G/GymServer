<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Activity::create([
            'name' => 'Correr muchisimo',
            'description' => 'Correr por correr porque por alguna razon te gusta sentirte fatal contigo mismo al ver que no aguantas corriendo ni 2 minutos', 
            'duration' => 50,
            'participants' => 25
        ]);
    }
}
