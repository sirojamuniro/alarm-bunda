<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Weight;
class WeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statusSSKB = "sskb";//sangat sangat kekurangan berat badan
        $statusSKB = "skb";//sangat kekurangan berat badan
        $statusKB = "kb";//kekurangan berat badan
        $statusN = "n";//normal
        $statusKBB = "kbb";//kelebihan berat badan
        $statusSKBB = "skbb";//sangat kelebihan berat baadan
        $statusSSKBB = "sskbb";//sangat kelebihan berat badan

        $valueSSKB = [2.1,2.9,3.8,4.4,4.9,5.3,5.7,5.9,6.2,6.4,6.6,6.8,6.9,7.1,7.2,7.4,
        7.5,7.7,7.8,8.0,8.1,8.2,8.4,8.5,8.6];

        $valueSKB = [2.5,3.4,4.3,5.0,5.6,6.0,6.4,6.7,6.9,7.1,7.4,7.6,7.7,7.9,8.1,
        8.3,8.4,8.6,8.8,8.9,9.1,9.2,9.4,9.5,9.7];

        $valueKB = [2.9,3.9,4.9,5.7,6.2,6.7,7.1,7.4,7.7,8.0,8.2,8.4,8.6,8.8,9.0,9.2,9.4,
        9.6,9.8,10.0,10.1,10.3,10.5,10.7,10.8];

        $valueN = [3.3,4.5,5.6,6.4,7.0,7.5,7.9,8.3,8.6,8.9,9.2,9.4,9.6,9.9,10.1,10.3,10.5,
        10.7,10.9,11.1,11.3,11.5,11.8,12.0,12.2];

        $valueKBB = [3.9,5.1,6.3,7.2,7.8,8.4,8.8,9.2,9.6,9.9,10.2,10.5,10.8,11.0,11.3,
        11.5,11.7,12.0,12.2,12.5,12.7,12.9,13.2,13.4,13.6];

        $valueSKBB = [4.4,5.8,7.1,8.0,8.7,9.3,9.8,10.3,10.7,11.0,11.4,11.7,12.0,12.3,12.6,
        12.8,13.1,13.4,13.7,13.9,14.2,14.5,14.7,15.0,15.3];

        $valueSSKBB = [5.0,6.6,8.0,9.0,9.7,10.4,10.9,11.4,11.9,12.3,12.7,13.0,13.3,13.7,14.0,
        14.3,14.6,14.9,15.3,15.6,15.9,16.2,16.5,16.8,17.1,];

        $numberSSKB = 1;
        $numberSKB = 1;
        $numberKB = 1;
        $numberN = 1;
        $numberKBB = 1;
        $numberSKBB = 1;
        $numberSSKBB = 1;
        foreach ($valueSSKB as $sskb) {


            Weight::firstOrcreate([
                  'name'=>$sskb,
                  'status'=>$statusSSKB,
                  'month_id'=>$numberSSKB++
              ]);

          }

          foreach ($valueSKB as $skb) {
              Weight::firstOrcreate([
                  'name'=>$skb,
                  'status'=>$statusSKB,
                  'month_id'=>$numberSKB++
              ]);
          }

          foreach ($valueKB as $kb) {
              Weight::firstOrcreate([
                  'name'=>$kb,
                  'status'=>$statusKB,
                  'month_id'=>$numberKB++
              ]);
          }

          foreach ($valueN as $n) {
              Weight::firstOrcreate([
                  'name'=>$n,
                  'status'=>$statusN,
                  'month_id'=>$numberN++
              ]);
          }

          foreach ($valueKBB as $kbb) {
              Weight::firstOrcreate([
                  'name'=>$kbb,
                  'status'=>$statusKBB,
                  'month_id'=>$numberKBB++
              ]);
          }

          foreach ($valueSKBB as $skbb) {
              Weight::firstOrcreate([
                  'name'=>$skbb,
                  'status'=>$statusSKBB,
                  'month_id'=>$numberSKBB++
              ]);
          }

          foreach ($valueSSKBB as $sskbb) {
              Weight::firstOrcreate([
                  'name'=>$sskbb,
                  'status'=>$statusSSKBB,
                  'month_id'=>$numberSSKBB++
              ]);
          }

        }

}
