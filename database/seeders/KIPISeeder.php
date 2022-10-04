<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
class KIPISeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = [
            "title"=>"Jadwal Imunisasi Anak",
            "description"=>"(Menurut IDAI 2020)",
            'image'=>"Jadwal-Imunisasi-2020-final_page-0001.jpg"
        ];
        Image::firstOrCreate($value);
    }
}
