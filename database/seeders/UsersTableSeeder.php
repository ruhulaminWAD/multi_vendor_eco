<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Ruhul Amin',
                'username' => 'ruhulamin',
                'email' => 'ruhulamin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'status' => 'active',

            ],
              //Vendor
            [
                'name' => 'Vendor',
                'username' => 'vendor',
                'email' => 'vendor@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'vendor',
                'status' => 'active',

            ],
              //User OR Customer
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'status' => 'active',

            ],


        ]);

    }
}
