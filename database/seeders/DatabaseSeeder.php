<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Country;
use App\Models\Product;
use Database\Factories\ContinentFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ContinentsTableSeeder::class);
        Country::factory(10)->create();

        Product::factory(100)->create();
    }
}
