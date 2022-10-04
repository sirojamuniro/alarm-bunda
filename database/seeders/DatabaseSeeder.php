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
        $this->call([
            MonthSeeder::class,
            BodySeeder::class,
            WeightSeeder::class,
            KPSPSeeder::class,
            HeadSeeder::class,
            KIPISeeder::class,
            ImunitationSeeder::class
        ]);
    }
}
