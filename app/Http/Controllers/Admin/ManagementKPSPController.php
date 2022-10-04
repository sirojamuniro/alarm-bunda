<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Month;
use App\Models\KPSP;
use App\Models\CountKPSP;
use App\Models\AnswerKPSP;


class ManagementKPSPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idMonth = [4,7,10,13,16,19,22,25];
        $month = Month::whereIn('id',$idMonth)->get();
        $result = KPSP::all();

        return view('admin.kpsp.list',compact('result','month'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function question(Request $request)
    {
        $idMonth = $request->month_id;
        $result = KPSP::where(['month_id'=>$idMonth])->get();

        return view('admin.kpsp.create',compact('result'));
    }
    public function create(Request $request)
    {
        $idMonth = $request->month_id;
        $result = KPSP::where(['month_id'=>$idMonth])->get();

        return view('admin.kpsp.create',compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $counts = $request->count;
        $no=[];
        $yes=[];
        $status=null;
        // dd($counts);
        foreach($counts as $count){
            // dd($count);
            if((int) $count == 2){
                $no[] += (int)$count;
            }
            if((int) $count == 1){
                $yes[] += (int)$count;
            }
        }
        // dd(count($no));
        if(count($yes) == 9 || count($yes) == 10 || count($no) == 1){
                $status = "Pekembangan Anak Sesuai Dengan Tahap Pekembangan (S)";
                $saran ="Pertahankan stimulasi pada anak";
        }
        if(count($yes) == 7 || count($yes) == 8 || count($no) == 2 ||  count($no) == 3){
            $status = "Pekembangan Anak Meragukan (M)";
            $saran = "Lakukan stimulasi secara rutin dan lakukan skrining KPSP 2 minggu lagi";
        }
        if(count($yes) < 7 || count($no) > 3){
            $status = "Perkembangan Anak Kurang atau Ada Penyimpangan (P)";
            $saran = "Rujuk anak ke poli tumbuh kembang";
        }

        return redirect()->route('kpsp.show.detail')->with(['status' => "${status}",'saran'=>"${saran}"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.kpsp.show');
    }

    public function showKPSP($id)
    {
        return view('admin.kpsp.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
