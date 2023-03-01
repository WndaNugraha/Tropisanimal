<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin
        $admin = new \App\Models\User();
        $admin->name = "Wanda Nugraha";
        $admin->username = "A W A N 1 0 7";
        $admin->email = "wandanugraha@gmail.com";
        $admin->password = bcrypt('12345678');
        $admin->save();


    }
}
