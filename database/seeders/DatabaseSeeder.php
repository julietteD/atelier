<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         \App\Models\News::factory(10)->create();
         \App\Models\Sections::factory(10)->create();
         \App\Models\Subsections::factory(10)->create();
         \App\Models\Abouts::factory(1)->create();
         \App\Models\Subsectimages::factory(20)->create();
    }
}
