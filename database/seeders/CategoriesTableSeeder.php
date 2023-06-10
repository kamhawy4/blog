<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Categories::factory()->count(2)->create();
    }
}
