<?php

namespace Database\Seeders;

use App\Models\User;
use DateTime;
use DB;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User',
            'dni' => '12345678X',
            'email' => 'Dessarrollo de app web',
            'password' => 'password',
            'weight' => 80.00,
            'height' => 177.25,
            'birthday' => DateTime::createFromFormat('Y-m-d H:i:s','2000-01-01 00:00:00'),
            'gender'=>'m'
        ]);

    }
}
