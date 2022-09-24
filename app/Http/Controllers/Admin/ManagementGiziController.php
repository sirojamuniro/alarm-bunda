<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\BodyLength;
use App\Models\userGizi;
use App\Models\Month;
use App\Models\Weight;
use Illuminate\Http\Request;

class ManagementGiziController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $month = Month::all();
        $result = BodyLength::with('month')->get();

        return view('admin.gizi.listtb',compact('result','month'));
    }
    public function listBB()
    {
        $month = Month::all();
        $result = Weight::with('month')->get();

        return view('admin.gizi.listbb',compact('result','month'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->type == 'tb'){
            $reqBodyLength = $request->name;
            $reqGender = $request->gender;
            $reqMonth = $request->month_id;
            $getBodies = BodyLength::where(['gender'=>$reqGender,'month_id'=>$reqMonth])->get();
            $closest = null;
            $status = null;
            foreach($getBodies as $getBody){

                if ($closest === null || abs($reqBodyLength - $closest) > abs($getBody->name - $reqBodyLength)) {
                    $closest = $getBody->name;
                    $status = $getBody->status;

                }
            }
            return redirect()->route('gizi.showtb')->with(['status' => "${status}"]);
        }
        if($request->type == 'bb'){
            $reqBodyLength = $request->name;
            $reqMonth = $request->month_id;
            $getBodies = Weight::where(['month_id'=>$reqMonth])->get();
            $closest = null;
            $status = null;
            foreach($getBodies as $getBody){

                if ($closest === null || abs($reqBodyLength - $closest) > abs($getBody->name - $reqBodyLength)) {
                    $closest = $getBody->name;
                    $status = $getBody->status;

                }
            }
            return redirect()->route('gizi.detail-bb')->with(['status' => "${status}"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.gizi.showtb');
    }

    public function showTb()
    {
        return view('admin.gizi.showtb');
    }

    public function showBb()
    {
        return view('admin.gizi.showbb');
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
