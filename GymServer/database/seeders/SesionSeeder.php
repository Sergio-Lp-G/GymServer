<?php

namespace Database\Seeders;

use App\Models\Sesion;
use Illuminate\Database\Seeder;

class SesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sesion::create([
            'startime' => '1999-01-01 00:00:00',
            'endtime' => '2000-01-01 12:00:00',
            'activity_id'=>1
        ]);
        Sesion::create([
            'startime' => '2022-01-25 12:00:00',
            'endtime' => '2022-01-25 12:50:00',
            'activity_id'=>1
        ]);
        Sesion::create([
            'startime' => '2022-01-25 13:00:00',
            'endtime' => '2022-01-25 13:50:00',
            'activity_id'=>2
        ]);
    }
}
