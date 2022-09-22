<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BodyLength;

class BodySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genderFemale = 'female';
        $genderBoy = 'male';
        $statusSP = "sp";//sangatpendek
        $statusP = "p";//pendek
        $statusN = "n";//normal
        $statusT = "t";//tinggi

        $valueSPBoys = [44.20,43.90,52.40,55.30,57.60,59.60,61.20,62.70,
                        64.00,65.20,66.40,67.60,68.60,69.60,70.60,71.60,
                        72.50,73.30,74.20,75.00,75.80,76.50,77.20,78.00,
                        78.70];
        $valuePBoys = [ 44.20,48.90,52.40,55.30,57.60,59.60,61.20,62.70,64.00,
        65.20,66.40,67.60,68.60,69.60,70.60,71.60,72.50,73.30,
        74.20,75.00,75.80,76.50,77.20,78.00,78.70];

        $valueNBoys = [46.10,50.80,54.40,57.30,59.70,61.70, 63.30,64.80,66.20,67.50,
        68.70,69.90,71.00,72.10, 73.10, 74.10, 75.00, 76.00, 76.90,
         77.70, 78.60, 79.40, 80.20, 81.00,81.70];
        
        $valueTBoys = [53.7,58.6,62.4,65.5,68.0,70.1,71.9,73.5,75.0,76.5,77.9,79.2,
        80.5,81.8,83.0,84.2,85.4,86.5,87.7,88.8,89.8,90.9,91.9,92.9];

        $valueSPGirls = [ 43.60,47.80,51.00,53.50,55.60,57.40,58.90,60.30,61.70,
        62.90,64.10,65.20,66.30,67.30,68.30,69.30,70.20,71.10,
        72.00,72.80,73.70,74.50,75.20,76.00];
        
        $valuePGirls = [  43.60,47.80,51.00,53.50,55.60,57.40,58.90,60.30,61.70,62.90,
        64.10,65.20,66.30,67.30,68.30,72.00,70.20,71.10,72.10,72.80,
        73.70,74.50,75.20,76.00,76.70];

        $valueNGirls = [        45.40,49.80,53.00,55.60,57.80,59.60,61.20,62.70,64.00,
        65.30,65.00,67.70,68.90,70.00,71.00,74.80,73.00,74.44,
        74.90,75.80,76.70,77.50,78.40,79.20,80.00,];

        $valueTGirls = [      53.90,57.60,61.10, 64.00,66.40,68.50,70.30,71.90,73.50,
        75.00,76.40,77.80,79.20,80.50,81.70,83.00,84.20,85.40,
        86.50,87.60,88.70,89.80,90.80,91.80,92.90,];

        foreach ($valueSPBoys as $valueSPBoy) {
            
            BodyLength::firstOrcreate([
                'name'=>$valueSPBoy,
                'gender'=>$genderBoy,
                'status'=>$statusSP
            ]);
        }

        foreach ($valuePBoys as $valuePBoy) {
            BodyLength::firstOrcreate([
                'name'=>$valuePBoy,
                'gender'=>$genderBoy,
                'status'=>$statusP
            ]);
        }

        foreach ($valueNBoys as $valueNBoy) {
            BodyLength::firstOrcreate([
                'name'=>$valueNBoy,
                'gender'=>$genderBoy,
                'status'=>$statusN
            ]);
        }

        foreach ($valueTBoys as $valueTBoy) {
            BodyLength::firstOrcreate([
                'name'=>$valueTBoy,
                'gender'=>$genderBoy,
                'status'=>$statusT
            ]);
        }

        foreach ($valueSPGirls as $valueSPGirl) {
            BodyLength::firstOrcreate([
                'name'=>$valueSPGirl,
                'gender'=>$genderFemale,
                'status'=>$statusSP
            ]);
        }

        foreach ($valuePGirls as $valuePGirl) {
            BodyLength::firstOrcreate([
                'name'=>$valuePGirl,
                'gender'=>$genderFemale,
                'status'=>$statusP
            ]);
        }

        foreach ($valueNGirls as $valueNGirl) {
            BodyLength::firstOrcreate([
                'name'=>$valueNGirl,
                'gender'=>$genderFemale,
                'status'=>$statusN
            ]);
        }

        foreach ($valueTGirls as $valueTGirl) {
            BodyLength::firstOrcreate([
                'name'=>$valueTGirl,
                'gender'=>$genderFemale,
                'status'=>$statusT
            ]);
        }
       
    }
}
