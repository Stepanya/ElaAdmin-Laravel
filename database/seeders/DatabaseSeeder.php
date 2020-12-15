<?php

namespace Database\Seeders;

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
        \App\Models\Persons::factory(150000)->create();
        // \App\Models\WorkAllocation::factory(50)->create();
    }
}
