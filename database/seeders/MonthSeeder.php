<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Month;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for( $i=0; $i<=24; $i++ )
        {
            Month::firstOrCreate([
                'name'=>"Bulan {$i}"
            ]);
        }
    }
}
