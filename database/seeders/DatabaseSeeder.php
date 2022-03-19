<?php

namespace Database\Seeders;

use App\Models\Models\Product;
use App\Models\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ProductSeeder::class,
            // ReviewSeeder::class,
        ]);
        Product::factory(50)->create();
        Review::factory(200)->create();
    }
}
