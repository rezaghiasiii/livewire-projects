<?php

namespace Database\Seeders;

use App\Models\Continent;
use Illuminate\Database\Seeder;

class ContinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $continents = [
            [
                'name' => 'Europe'
            ],
            [
                'name' => 'Asia'
            ],
            [
                'name' => 'Africa'
            ],
            [
                'name' => 'South America'
            ],
            [
                'name' => 'North America'
            ],
        ];

        foreach ($continents as $key => $value){
            Continent::create($value);
        }
    }
}
