<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'Super Admin', 'guard_name' => 'web'],
            ['name' => 'CEO', 'guard_name' => 'web'],
            ['name' => 'Account', 'guard_name' => 'web'],
            ['name' => 'Marketing', 'guard_name' => 'web'],
        ]);
    }
}
