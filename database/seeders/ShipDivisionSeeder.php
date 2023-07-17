<?php

namespace Database\Seeders;

use App\Models\ShipDivision;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShipDivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $DivisionArray = [
            'Barisal',
            'Chittagong',
            'Dhaka',
            'Khulna',
            'Mymensingh',
            'Rajshahi',
            'Rangpur',
            'Sylhet',

        ];
        foreach ($DivisionArray as $Division) {
            ShipDivision::updateOrCreate([
                'division_name' => $Division,
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
