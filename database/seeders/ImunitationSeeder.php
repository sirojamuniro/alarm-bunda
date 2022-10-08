<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Imunitation;
use App\Models\DetailImunitation;
use App\Models\Symptoms;

class ImunitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $valueGejala = [
           ["name"=>"Demam"],
           ["name"=>"Bengkak/Kemerahan"],
           ["name"=>"Mual/Muntah"],
           ["name"=>"Nafas Sesak"],
        ];
        $valueImun = [
            ["name"=>"Hepatitis B"],
            ["name"=>"Polio"],
            ["name"=>"BCG"],
            ["name"=>"DPT"],
            ["name"=>"Hib"],
            ["name"=>"PCV"],
            ["name"=>"Rotavirus"],
            ["name"=>"Influenza"],
            ["name"=>"MR/MMR"],
            ["name"=>"JE"],
            ["name"=>"Varisela"],
            ["name"=>"Hepatitis A"],
            ["name"=>"Tifoid"],
         ];
         foreach ($valueGejala as $gejala) {
            Symptoms::firstOrCreate($gejala);
        }
        foreach ($valueImun as $imun) {
            Imunitation::firstOrCreate($imun);
        }
        for($i=1; $i<=count($valueImun); $i++ )
        {
            for($c=1; $c<=count($valueGejala); $c++){
                DetailImunitation::firstOrCreate([
                    'imunitation_id'=>$i,
                    'sympton_id'=>$c
                ]);
            }
        }

    }
}
