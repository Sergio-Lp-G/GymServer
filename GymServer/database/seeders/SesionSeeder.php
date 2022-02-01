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
            'date'=>'2022-01-25',
            'startime' => '10:00:00',
            'endtime' => '11:50:00',
            'activity_id'=>1
        ]);
        Sesion::create([
            'date'=>'2022-01-25',
            'startime' => '12:00:00',
            'endtime' => '12:50:00',
            'activity_id'=>2
        ]);
        Sesion::create([
            'date'=>'2022-01-25',
            'startime' => '13:00:00',
            'endtime' => '13:50:00',
            'activity_id'=>3
        ]);
    }
}
