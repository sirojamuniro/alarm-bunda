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
        foreach($counts as $count){
            if($count =="no"){
                $no[] += (int)$count;
            }
            if($count =="yes"){
                $yes[] += (int)$count;
            }
        }
        if(count($yes) == 9 || count($yes) == 10){
                $status = "Pekembangan Anak Sesuai Dengan Tahap Pekembangan (S)";
        }
        if(count($yes) == 7 || count($yes) == 8){
            $status = "Pekembangan Anak Meragukan (M)";
        }
        if(count($yes) <= 6 ){
            $status = "Perkembangan Anak Kurang atau Ada Penyimpangan (P)";
        }

        return redirect()->route('kpsp.show.detail')->with(['status' => "${status}"]);
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
