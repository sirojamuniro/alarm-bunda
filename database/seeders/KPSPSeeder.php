<?php

namespace Database\Seeders;

use App\Models\KPSP;
use Illuminate\Database\Seeder;

class KPSPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kpsp3Month = [
            [
                'name'=>'Pada waktu bayi telentang, apakah masing- masing lengan dan tungkai bergerak dengan mudah? Jawab TIDAK bila salah satu atau kedua tungkai atau lengan bayi bergerak tak terarah/tak terkendali.',
                'description'=>'Gerak Kasar'
            ],
            [
                'name'=> 'Pada waktu bayi telentang apakah ia melihat dan menatap wajah anda?',
                'description'=> 'Sosialisasi dan
                kemandirian'
            ],
            [
                'name'=> 'Apakah bayi dapat mengeluarkan suara- suara lain (ngoceh), disamping menangis?',
                'description'=>'Bicara dan bahasa'
            ],
            [
                'name'=> 'Pada waktu bayi telentang, apakah ia dapat mengikuti gerakan anda dengan menggerakkan kepalanya dari kanan/kiri ke tengah?',
                'description'=>'Gerak halus'
            ],
            [
                'name'=> 'Pada waktu bayi telentang, apakah. Ia dapat mengikuti gerakan anda dengan menggerakkan kepalanya dari satu sisi hampir sampai pada sisi yang lain?',
                'description'=>'Gerak halus'
            ],
            [
                'name'=>'Pada waktu anda mengajak bayi berbicara dan tersenyum, apakah ia tersenyum kembali kepada anda?',
                'description'=>'Sosialisasi & kemandirian'
            ],
            [
                'name'=>'Pada waktu bayi telungkup di alas yang datar, apakah ia dapat mengangkat kepalanya seperti pada gambar ini?',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Pada waktu bayi telungkup di alas yang datar, apakah ia dapat mengangkat kepalanya sehingga membentuk sudut 45° seperti pada gambar ?',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Pada waktu bayi telungkup di alas yang datar, apakah ia dapat mengangkat kepalanya dengan tegak seperti pada',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Apakah bayi suka tertawa keras walau tidak digelitik atau diraba-raba?',
                'description'=>'Bicara dan bahasa'
            ]

        ];

        $kpsp6Month =[
            [
                'name'=>'Pada waktu bayi telentang, apakah ia dapat mengikuti gerakan anda dengan menggerakkan kepala sepenuhnya dari satu sisi ke sisi yang lain?',
                'description'=>'gerak halus'
            ],
            [
                'name'=>'Dapatkah bayi mempertahankan posisi kepala dalam keadaan tegak clan stabil? Jawab TIDAK bila kepala bayi cenderung
                jatuh ke kanan/kiri atau ke dadanya
                ',
                'description'=>'gerak kasar'
            ],
            [
                'name'=>'Sentuhkan pensil di punggung tangan atau ujung jari bayi. (jangan meletakkan di atas telapak tangan bayi). Apakah bayi dapat menggenggam pensil itu selama beberapa detik?',
                'description'=>'gerak halus'
            ],
            [
                'name'=>'Ketika bayi telungkup di alas datar, apakah ia dapat mengangkat dada dengan kedua lengannya sebagai penyangga seperti pada gambar ?',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Pernahkah bayi mengeluarkan suara gembira bernada tinggi atau memekik tetapi bukan menangis?',
                'description'=>'Bicara & bahasa'
            ],
            [
                'name'=>'Pernahkah bayi berbalik paling sedikit dua kali, dari telentang ke telungkup atau sebaliknya?',
                'description'=>'gerak kasar'
            ],
            [
                'name'=>'Pernahkah anda melihat bayi tersenyurn ketika melihat mainan yang lucu, gambar atau binatang peliharaan pada saat ia bermain sendiri?',
                'description'=>'Sosialisasi& kemandirian'
            ],
            [
                'name'=>'Dapatkah bayi mengarahkan matanya pada benda kecil sebesar kacang, kismis atau uang logam? Jawab TIDAK jika ia tidak
                dapat mengarahkan matanya.
                ',
                'description'=>'gerak halus'
            ],
            [
                'name'=>'Dapatkah bayi meraih mainan yang
                diletakkan agak jauh namun masih berada dalam jangkauan tangannya?
                ',
                'description'=>'gerak halus'
            ],
            [
                'name'=>'Pada posisi bayi telentang, pegang kedua tangannya lalu tarik perlahan-lahan ke posisi duduk. Dapatkah bayi mempertahankan lehernya secara kaku seperti gambar di sebelah kiri? Jawab TIDAK bila kepala bayi jatuh kembali seperti gambar sebelah kanan',
                'description'=>'Gerak kasar'
            ],
        ];

        $kpsp9Month =[
            [
                'name'=>'Pada posisi bayi telentang, pegang kedua tangannya lalu tarik perlahan-lahan ke posisi clucluk. Dapatkah bayi mempertahankan lehernya secara kaku seperti gambar di sebelah kiri ? Jawab TIDAK bila kepala bayi jatuh kembali seperti gambar sebelah kanan.',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Pernahkah anda melihat bayi memindahkan mainan atau kue kering dari satu tangan ke tangan yang lain? Benda-benda panjang seperti sendok atau kerincingan bertangkai tidak ikut dinilai.',
                'description'=>'Gerak halus'
            ],
            [
                'name'=>'Tarik perhatian bayi dengan memperlihatkan selendang, sapu tangan atau serbet, kemudian jatuhkan ke lantai. Apakah bayi mencoba mencarinya? Misalnya mencari di
                bawah meja atau di belakang kursi?
                ',
                'description'=>'Gerak halus'
            ],
            [
                'name'=>'Apakah bayi dapat memungut dua benda seperti mainan/kue kering, dan masing- masing tangan memegang satu benda pada saat yang sama? Jawab TIDAK bila bayi tidak pernah melakukan perbuatan ini',
                'description'=>'Gerak halus'
            ],
            [
                'name'=>'Jika anda mengangkat bayi melalui ketiaknya ke posisi berdiri, dapatkah ia menyangga sebagian berat badan dengan kedua kakinya? Jawab YA bila ia mencoba
                berdiri dan sebagian berat badan tertumpu pada kedua kakinya.
                ',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Dapatkah bayi memungut dengan tangannya benda-benda kecil seperti kismis,
                kacang-kacangan, potongan biskuit, dengan gerakan miring atau menggerapai seperti gambar ?

                ',
                'description'=>'Gerak halus'
            ],
            [
                'name'=>'Tanpa disangga oleh bantal, kursi atau dinding, dapatkah bayi duduk sendiri selama 60 detik?',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Apakah bayi dapat makan kue kering sendiri?',
                'description'=>'Sosialisasi &
                kemandirian
                '
            ],
            [
                'name'=>'Pada waktu bayi bermain sendiri dan anda diam-diam datang berdiri di belakangnya, apakah ia menengok ke belakang seperti mendengar kedatangan anda? Suara keras tidak ikut dihitung. Jawab YA hanya jika anda
                melihat reaksinya terhadap suara yang perlahan atau bisikan.
                ',
                'description'=>'Bicara & bahasa'
            ],
            [
                'name'=>'Letakkan suatu mainan yang dinginkannya di luar jangkauan bayi, apakah ia mencoba mendapatkannya dengan mengulurkan lengan atau badannya?',
                'description'=>'Sosialisasi & kemandirian'
            ],
        ];

        $kpsp12Month =[
            [
                'name'=>'Jika anda bersembunyi di belakang sesuatu/di pojok, kemudian muncui dan menghilang secara berulang-ulang di hadapan anak, apakah ia mencari anda atau mengharapkan anda muncul kembali?',
                'description'=>'Sosialisasi & kemandirian'
            ],
            [
                'name'=>'Letakkan pensil di telapak tangan bayi. Coba ambil pensil tersebut dengan perlahan-lahan. Sulitkah anda mendapatkan
                pensil itu kembali?
                ',
                'description'=>'Gerak halus'
            ],
            [
                'name'=>'Apakah anak dapat berdiri selama 30 detik atau lebih dengan berpegangan pada kursi/meja?',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Apakah anak dapat mengatakan 2 suku kata yang sama, misalnya: “ma-ma”, “da-da”
                atau “pa-pa”. Jawab YA bila ia mengeluarkan salah—satu suara tadi.
                ',
                'description'=>'Bicara & bahasa'
            ],
            [
                'name'=>'Apakah anak dapat mengangkat badannya ke posisi berdiri tanpa bantuan anda?',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Apakah anak dapat membedakan anda dengan orang yang belum ia kenal? la akan menunjukkan sikap malu-malu atau ragu- ragu pada saat permulaan bertemu dengan orang yang belum dikenalnya',
                'description'=>'Sosialisasi & kemandirian'
            ],
            [
                'name'=>'Apakah anak dapat mengambil Benda kecil seperti kacang atau kismis, dengan meremas di antara ibu jari dan jarinya?',
                'description'=>'Gerak halus'
            ],
            [
                'name'=>'Apakah anak dapat duduk sendiri tanpa bantuan?',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Sebut 2-3 kata yang dapat ditiru oleh anak (tidak perlu kata-kata yang lengkap).
                Apakah ia mencoba meniru menyebutkan kata-kata tadi ?
                ',
                'description'=>'Bicara & bahasa'
            ],
            [
                'name'=>'Tanpa bantuan, apakah anak dapat mempertemukan dua kubus kecil yang ia
                pegang? Kerincingan bertangkai dan tutup panel tidak ikut dinilai.
                ',
                'description'=>'Gerak halus'
            ],
        ];

        $kpsp15Month =[
            [
                'name'=>'Tanpa bantuan, apakah anak dapat mempertemukan dua kubus kecil yang ia pegang? Kerincingan bertangkai dan tutup, panci tidak ikut dinilai',
                'description'=>'Gerak halus'
            ],
            [
                'name'=>'Apakah anak dapat jalan sendiri atau jalan dengan berpegangan?',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Tanpa bantuan, apakah anak dapat bertepuk tangan atau melambai-lambai? Jawab TIDAK bila ia membutuhkan
                kemandirian bantuan.
                ',
                'description'=>'Sosialisasi & kemandirian'
            ],
            [
                'name'=>'Apakah anak dapat mengatakan “papa” ketika ia memanggil/melihat ayahnya, atau mengatakan “mama” jika memanggil/melihat ibunya? Jawab YA bila anak mengatakan
                salah satu diantaranya.
                ',
                'description'=>'Bicara & bahasa'
            ],
            [
                'name'=>'Dapatkah anak berdiri sendiri tanpa
                berpegangan selama kira-kira 5 detik?
                ',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Dapatkan anak berdiri sendiri tanpa berpegangan selama 30 detik atau lebih?',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Tanpa berpegangan atau menyentuh lantai, apakah anak dapat membungkuk untuk memungut mainan di lantai dan kemudian berdiri kembali?',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Apakah anak dapat menunjukkan apa yang diinginkannya tanpa menangis atau merengek? Jawab YA bila ia menunjuk, menarik atau mengeluarkan suara yang menyenangkan',
                'description'=>'Sosialisasi & kemandirian'
            ],
            [
                'name'=>'Apakah anak dapat berjalan di sepanjang ruangan tanpa jatuh atau terhuyung- huyung?',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Apakah anak dapat mengambil benda kecil seperti kacang, kismis, atau potongan biskuit dengan menggunakan ibu',
                'description'=>'Gerak halus'
            ],
        ];

        $kpsp18Month =[
            [
                'name'=>'Tanpa bantuan, apakah anak dapat bertepuk tangan atau melambai-lambai? Jawab TIDAK bila ia membutuhkan bantuan.',
                'description'=>'Sosialisasi & kemandirian'
            ],
            [
                'name'=>'Apakah anak dapat mengatakan “papa” ketika ia memanggil/melihat ayahnya, atau mengatakan “mama” jika
                memanggil/melihat ibunya?
                ',
                'description'=>'Bicara & bahasa'
            ],
            [
                'name'=>'Apakah anak dapat berdiri sendiri tanpa berpegangan selama kira-kira 5 detik?',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Apakah anak dapat berdiri sendiri tanpa berpegangan selama 30 detik atau lebih?',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Tanpa berpegangan atau menyentuh lantai, apakah anak dapat membungkuk
                untuk memungut mainan di lantai clan kemudian berdiri kembali?
                ',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Apakah anak dapat menunjukkan apa yang diinginkannya tanpa menangis atau merengek? Jawab YA bila ia menunjuk, menarik atau mengeluarkan suara yang menyenangkan.',
                'description'=>'Sosialisasi &kemandirian'
            ],
            [
                'name'=>'Apakah anak dapat berjalan di sepanjang ruangan tanpa jatuh atau terhuyung-huyung?',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Apakah anak anak dapat mengambil benda kecil seperti kacang, kismis, atau potongan biskuit dengan menggunakan ibu jari dan jari ',
                'description'=>'Gerak halus'
            ],
            [
                'name'=>'Jika anda menggelindingkan bola ke anak, apakah ia
                menggelindingkan/melemparkan kembali bola pada anda?
                ',
                'description'=>'Gerak halus; Sosialisasi & kemandirian'
            ],
            [
                'name'=>'Apakah anak dapat memegang sendiri cangkir/gelas dan minum dari tempat
                tersebut tanpa tumpah?
                ',
                'description'=>'Sosialisasi & kemandirian'
            ],
        ];

        $kpsp21Month =[
            [
                'name'=>'Tanpa berpegangan atau menyentuh lantai, apakah anak dapat membungkuk untuk memungut mainan di lantai dan kemudian berdiri kembali?',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Apakah anak dapat menunjukkan apa yang diinginkannya tanpa menangis atau merengek? Jawab YA bila ia menunjuk,
                menarik atau mengeluarkan suara yang menyenangkan.
                ',
                'description'=>'Sosialisasi &kemandirian'
            ],
            [
                'name'=>'Apakah anak dapat berjalan di sepanjang ruangan tanpa jatuh atau terhuyung-
                huyung?
                ',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Apakah anak dapat mengambil benda kecil seperti kacang, kismis, atau potongan biskuit dengan menggunakan ibu jari clan jari telunjuk seperti pada gambar ?',
                'description'=>'Gerak halus'
            ],
            [
                'name'=>'Jika anda menggelindingkan bola ke anak,
                apakah ia menggelindingkan/melemparkan kembali bola pada anda?
                ',
                'description'=>'Gerak halus'
            ],
            [
                'name'=>'Apakah anak dapat memegang sendiri cangkir/gelas clan minum dari tempat
                tersebut tanpa tumpah?
                ',
                'description'=>'Sosialisasi &kemandirian'
            ],
            [
                'name'=>'Jika anda sedang melakukan pekerjaan
                rumah tangga, apakah anak meniru apa yang anda lakukan?
                ',
                'description'=>'Sosialisasi &kemandirian'
            ],
            [
                'name'=>'Apakah anak dapat meletakkan satu kubus di atas Gerak halus Ya Tida kubus yang lain tanpa menjatuhkan kubus itu? Kubus yang digunakan ukuran 2.5-5.0 cm',
                'description'=>'Gerak halus'
            ],
            [
                'name'=>'Apakah anak dapat mengucapkan paling sedikit 3 kata yang mempunyai arti selain “papa” dan “mama”?.',
                'description'=>'Bicara & bahasa'
            ],
            [
                'name'=>'Apakah anak dapat berjalan mundur 5 langkah atau lebih tanpa kehilangan
                keseimbangan? (Anda mungkin dapat melihatnya ketika anak menarik mainannya)
                ',
                'description'=>'Gerak kasar'
            ],
        ];

        $kpsp24Month =[
            [
                'name'=>'Jika anda sedang melakukan pekerjaan rumah tangga, apakah anak meniru apa yang anda lakukan?',
                'description'=>'Sosialisasi & kemandirian'
            ],
            [
                'name'=>'Apakah anak dapat meletakkan 1 buah kubus di atas kubus yang lain tanpa menjatuhkan kubus itu? Kubus yang digunakan ukuran 2.5 — 5 cm.',
                'description'=>'Gerak halus'
            ],
            [
                'name'=>'Apakah anak dapat mengucapkan paling sedikit 3 kata yang mempunyai arti selain
                "papa" dan "mama"?
                ',
                'description'=>'Bicara & bahasa'
            ],
            [
                'name'=>'langkah atau lebih tanpa kehilangan keseimbangan?
                (Anda mungkin dapat melihatnya ketika
                anak menarik mainannya).
                ',
                'description'=>'Gerak kasar'
            ],
            [
                'name'=>'Dapatkah anak melepas pakaiannya seperti: baju, rok, atau celananya? (topi dan kaos kaki tidak ikut dinilai).',
                'description'=>'Gerak halus
                ; sosialisasi &
                kemandirian
                ',
                'description'=>null
            ],
            [
                'name'=>'Dapatkah anak berjalan naik tangga sendiri? Jawab YA jika ia naik tangga dengan posisi tegak atau berpegangan pada dinding atau pegangan tangga.
                Jawab TIDAK jika ia naik tangga dengan merangkak atau anda tidak membolehkan anak naik tangga atau anak harus
                berpegangan pada seseorang.
                ',
                'description'=>null
            ],
            [
                'name'=>'Tanpa bimbingan, petunjuk atau bantuan anda, dapatkah anak menunjuk dengan benar paling sedikit satu bagian badannya (rambut, mata, hidung, mulut, atau bagian
                badan yang lain)?
                ',
                'description'=>null
            ],
            [
                'name'=>'Dapatkah anak makan nasi sendiri tanpa
                banyak tumpah?
                ',
                'description'=>null
            ],
            [
                'name'=>'Dapatkah anak membantu memungut mainannya sendiri atau membantu mengangkat piring jika diminta?',
                'description'=>null
            ],
            [
                'name'=>'Dapatkah anak menendang bola kecil (sebesar bola tenis) ke depan tanpa
                berpegangan pada apapun? Mendorong tidak ikut dinilai.
                ',
                'description'=>null
            ],
        ];

        foreach ($kpsp3Month as $month3) {
            KPSP::firstOrcreate([
                  'name'=>$month3['name'],
                  'description'=>$month3['description'],
                  'month_id'=>4
              ]);
        }

        foreach ($kpsp6Month as $month6) {
            KPSP::firstOrcreate([
                  'name'=>$month6['name'],
                  'description'=>$month6['description'],
                  'month_id'=>7
              ]);
        }
        foreach ($kpsp9Month as $month9) {
            KPSP::firstOrcreate([
                  'name'=>$month9['name'],
                  'description'=>$month9['description'],
                  'month_id'=>10
              ]);
        }
        foreach ($kpsp12Month as $month12) {
            KPSP::firstOrcreate([
                  'name'=>$month12['name'],
                  'description'=>$month12['description'],
                  'month_id'=>13
              ]);
        }
        foreach ($kpsp15Month as $month15) {
            KPSP::firstOrcreate([
                  'name'=>$month15['name'],
                  'description'=>$month15['description'],
                  'month_id'=>16
              ]);
        }
        foreach ($kpsp18Month as $month18) {
            KPSP::firstOrcreate([
                  'name'=>$month18['name'],
                  'description'=>$month18['description'],
                  'month_id'=>19
              ]);
        }
        foreach ($kpsp21Month as $month21) {
            KPSP::firstOrcreate([
                  'name'=>$month21['name'],
                  'description'=>$month21['description'],
                  'month_id'=>22
              ]);
        }
        foreach ($kpsp24Month as $month24) {
            KPSP::firstOrcreate([
                  'name'=>$month24['name'],
                  'description'=>$month24['description'],
                  'month_id'=>25
              ]);
        }
        foreach ($kpsp3Month as $month3) {
            KPSP::firstOrcreate([
                  'name'=>$month3['name'],
                  'description'=>$month3['description'],
                  'month_id'=>4
              ]);
        }
        foreach ($kpsp3Month as $month3) {
            KPSP::firstOrcreate([
                  'name'=>$month3['name'],
                  'description'=>$month3['description'],
                  'month_id'=>4
              ]);
        }
        foreach ($kpsp3Month as $month3) {
            KPSP::firstOrcreate([
                  'name'=>$month3['name'],
                  'description'=>$month3['description'],
                  'month_id'=>4
              ]);
        }
    }
}
