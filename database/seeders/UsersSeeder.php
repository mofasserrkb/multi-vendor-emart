<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            //admin
            [
            'full_name'=>'mofasser',
            'password' => Hash::make('111'),
            'email' =>'mofasserrakib@gmail.com',
            'role' =>'admin',
            'status' =>'active',
            ],
            [
                //vendor
                'full_name'=>'mofasser vendor',
                'password' => Hash::make('111'),
                'email' =>'vendor@gmail.com',
                'role' =>'vendor',
                'status' =>'active',
            ],
            [
                //customer
                'full_name'=>'mofasser customer',
                'password' => Hash::make('111'),
                'email' =>'customer@gmail.com',
                'role' =>'customer',
                'status' =>'active',
            ],
        ]);
    }
}
