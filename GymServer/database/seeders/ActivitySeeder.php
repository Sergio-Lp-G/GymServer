<?php

namespace Database\Seeders;
use App\Models\Activity;
use DB;

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
            'name'=>'IFC303',
            'days'=>'Dessarrollo de app web',
            'sessions'=>2,
            'schedule'=>'calendario',
            'duration'=>7,
            'participants'=>4
        ]);

        
    }
}
