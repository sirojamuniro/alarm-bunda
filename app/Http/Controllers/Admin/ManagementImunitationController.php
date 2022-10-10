<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Imunitation;
use App\Models\Symptoms;
use App\Models\UserImunitation;
use App\Models\UserSymptom;
use App\Models\User;
use Carbon\Carbon;

class ManagementImunitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $v11 = false;
        $v12 = false;
        $v13 = false;
        $v14 = false;
        $v21 = false;
        $v22 = false;
        $v23 = false;
        $v24 = false;
        $v31 = false;
        $v32 = false;
        $v33 = false;
        $v34 = false;
        $v41 = false;
        $v42 = false;
        $v43 = false;
        $v44 = false;
        $v51 = false;
        $v52 = false;
        $v53 = false;
        $v54 = false;
        $v61 = false;
        $v62 = false;
        $v63 = false;
        $v64 = false;
        $v71 = false;
        $v72 = false;
        $v73 = false;
        $v74 = false;
        $v81 = false;
        $v82 = false;
        $v83 = false;
        $v84 = false;
        $v91 = false;
        $v92 = false;
        $v93 = false;
        $v94 = false;
        $v101 = false;
        $v102 = false;
        $v103 = false;
        $v104 = false;
        $v111 = false;
        $v112 = false;
        $v113 = false;
        $v114 = false;
        $v121 = false;
        $v122 = false;
        $v123 = false;
        $v124 = false;
        $v131 = false;
        $v132 = false;
        $v133 = false;
        $v134 = false;
        $imunitation = Imunitation::get();
        $sympton = Symptoms::get();
        $user = auth()->user()->symptom;
        $date_v1 = null;
        $date_v2 = null;
        $date_v3 = null;
        $date_v4 = null;
        $date_v5 = null;
        $date_v6 = null;
        $date_v7 = null;
        $date_v8 = null;
        $date_v9 = null;
        $date_v10 = null;
        $date_v11 = null;
        $date_v12 = null;
        $date_v13 = null;
        $userDate = auth()->user()->imunitation;
        if(isset($userDate)){
            foreach($userDate as $date){
                if($date->imunitation_id === 1 && isset($date->date)){
                    $date_v1 = date('Y-m-d', strtotime($date->date));
                }
                if($date->imunitation_id === 2 && isset($date->date)){
                    $date_v2 = date('Y-m-d', strtotime($date->date));
                }
                if($date->imunitation_id === 3 && isset($date->date)){
                    $date_v3 = date('Y-m-d', strtotime($date->date));
                }
                if($date->imunitation_id === 4 && isset($date->date)){
                    $date_v4 = date('Y-m-d', strtotime($date->date));
                }
                if($date->imunitation_id === 5 && isset($date->date)){
                    $date_v5 = date('Y-m-d', strtotime($date->date));
                }
                if($date->imunitation_id === 6 && isset($date->date)){
                    $date_v6 = date('Y-m-d', strtotime($date->date));
                }
                if($date->imunitation_id === 7 && isset($date->date)){
                    $date_v7 = date('Y-m-d', strtotime($date->date));
                }
                if($date->imunitation_id === 8 && isset($date->date)){
                    $date_v8 = date('Y-m-d', strtotime($date->date));
                }
                if($date->imunitation_id === 9 && isset($date->date)){
                    $date_v9 = date('Y-m-d', strtotime($date->date));
                }
                if($date->imunitation_id === 10 && isset($date->date)){
                    $date_v10 = date('Y-m-d', strtotime($date->date));
                }
                if($date->imunitation_id === 11 && isset($date->date)){
                    $date_v11 = date('Y-m-d', strtotime($date->date));
                }
                if($date->imunitation_id === 12 && isset($date->date)){
                    $date_v12 = date('Y-m-d', strtotime($date->date));
                }
                if($date->imunitation_id === 13 && isset($date->date)){
                    $date_v13 = date('Y-m-d', strtotime($date->date));
                }
            }
        }
        if(isset($user)){
        foreach($user as $user) {
            if($user->imunitation_id === 1 && $user->sympton_id === 1){
                $v11 = true;
            }
            if($user->imunitation_id === 1 && $user->sympton_id === 2){
                $v12 = true;
            }
            if($user->imunitation_id === 1 && $user->sympton_id === 3){
                $v13 = true;
            }
            if($user->imunitation_id === 1 && $user->sympton_id === 4){
                $v14 = true;
            }
            if($user->imunitation_id === 2 && $user->sympton_id === 1){
                $v21 = true;
            }
            if($user->imunitation_id === 2 && $user->sympton_id === 2){
                $v22 = true;
            }
            if($user->imunitation_id === 2 && $user->sympton_id === 3){
                $v23 = true;
            }
            if($user->imunitation_id === 2 && $user->sympton_id === 4){
                $v24 = true;
            }
            if($user->imunitation_id === 3 && $user->sympton_id === 1){
                $v31 = true;
            }
            if($user->imunitation_id === 3 && $user->sympton_id === 2){
                $v32 = true;
            }
            if($user->imunitation_id === 3 && $user->sympton_id === 3){
                $v33 = true;
            }
            if($user->imunitation_id === 4 && $user->sympton_id === 1){
                $v41 = true;
            }
            if($user->imunitation_id === 4 && $user->sympton_id === 2){
                $v42 = true;
            }
            if($user->imunitation_id === 4 && $user->sympton_id === 3){
                $v43 = true;
            }
            if($user->imunitation_id === 4 && $user->sympton_id === 4){
                $v44 = true;
            }
            if($user->imunitation_id === 5 && $user->sympton_id === 1){
                $v51 = true;
            }
            if($user->imunitation_id === 5 && $user->sympton_id === 2){
                $v52 = true;
            }
            if($user->imunitation_id === 5 && $user->sympton_id === 3){
                $v53 = true;
            }
            if($user->imunitation_id === 5 && $user->sympton_id === 4){
                $v54 = true;
            }
            if($user->imunitation_id === 6 && $user->sympton_id === 1){
                $v61 = true;
            }
            if($user->imunitation_id === 6 && $user->sympton_id === 2){
                $v62 = true;
            }
            if($user->imunitation_id === 6 && $user->sympton_id === 3){
                $v63 = true;
            }
            if($user->imunitation_id === 6 && $user->sympton_id === 4){
                $v64 = true;
            }
            if($user->imunitation_id === 7 && $user->sympton_id === 1){
                $v71 = true;
            }
            if($user->imunitation_id === 7 && $user->sympton_id === 2){
                $v72 = true;
            }
            if($user->imunitation_id === 7 && $user->sympton_id === 3){
                $v73 = true;
            }
            if($user->imunitation_id === 7 && $user->sympton_id === 4){
                $v74 = true;
            }
            if($user->imunitation_id === 8 && $user->sympton_id === 1){
                $v81 = true;
            }
            if($user->imunitation_id === 8 && $user->sympton_id === 2){
                $v82 = true;
            }
            if($user->imunitation_id === 8 && $user->sympton_id === 3){
                $v83 = true;
            }
            if($user->imunitation_id === 8 && $user->sympton_id === 4){
                $v84 = true;
            }
            if($user->imunitation_id === 9 && $user->sympton_id === 1){
                $v91 = true;
            }
            if($user->imunitation_id === 9 && $user->sympton_id === 2){
                $v92 = true;
            }
            if($user->imunitation_id === 9 && $user->sympton_id === 3){
                $v93 = true;
            }
            if($user->imunitation_id === 9 && $user->sympton_id === 4){
                $v94 = true;
            }
            if($user->imunitation_id === 10 && $user->sympton_id === 1){
                $v101 = true;
            }
            if($user->imunitation_id === 10 && $user->sympton_id === 2){
                $v102 = true;
            }
            if($user->imunitation_id === 10 && $user->sympton_id === 3){
                $v103 = true;
            }
            if($user->imunitation_id === 10 && $user->sympton_id === 4){
                $v104 = true;
            }
            if($user->imunitation_id === 11 && $user->sympton_id === 1){
                $v111 = true;
            }
            if($user->imunitation_id === 11 && $user->sympton_id === 2){
                $v112 = true;
            }
            if($user->imunitation_id === 11 && $user->sympton_id === 3){
                $v113 = true;
            }
            if($user->imunitation_id === 11 && $user->sympton_id === 4){
                $v114 = true;
            }
            if($user->imunitation_id === 12 && $user->sympton_id === 1){
                $v121 = true;
            }
            if($user->imunitation_id === 12 && $user->sympton_id === 2){
                $v122 = true;
            }
            if($user->imunitation_id === 12 && $user->sympton_id === 3){
                $v123 = true;
            }
            if($user->imunitation_id === 12 && $user->sympton_id === 4){
                $v124 = true;
            }
            if($user->imunitation_id === 13 && $user->sympton_id === 1){
                $v131 = true;
            }
            if($user->imunitation_id === 13 && $user->sympton_id === 2){
                $v132 = true;
            }
            if($user->imunitation_id === 13 && $user->sympton_id === 3){
                $v133 = true;
            }
            if($user->imunitation_id === 13 && $user->sympton_id === 4){
                $v134 = true;
            }


        }
    }
        // dd($date_v1);
        // $user = UserImunitation::where('user_id',auth()->user()->id)->get();
        // dd($user);
        // $symptopms = Symptoms::with('detailImunitation')->latest()->get();
// dd($symptopms);
        return view('admin.imunitation.index',compact('imunitation','user','sympton','userDate',
        'date_v1',
        'date_v2',
        'date_v3',
        'date_v4',
        'date_v5',
        'date_v6',
        'date_v7',
        'date_v8',
        'date_v9',
        'date_v10',
        'date_v11',
        'date_v12',
        'date_v13',
        'v11',
        'v12',
        'v13',
        'v14',
        'v21',
        'v22',
        'v23',
        'v24',
        'v31',
        'v32',
        'v33',
        'v34',
        'v41',
        'v42',
        'v43',
        'v44',
        'v51',
        'v52',
        'v53',
        'v54',
        'v61',
        'v62',
        'v63',
        'v64',
        'v71',
        'v72',
        'v73',
        'v74',
        'v81',
        'v82',
        'v83',
        'v84',
        'v91',
        'v92',
        'v93',
        'v94',
        'v101',
        'v102',
        'v103',
        'v104',
        'v111',
        'v112',
        'v113',
        'v114',
        'v121',
        'v122',
        'v123',
        'v124',
        'v131',
        'v132',
        'v133',
        'v134',
        ));
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

        $imunitations = $request->imunitation_v1;
        $symptopms_v1 = $request->symptopms_v1;
        // dd($imunitations,$request->imunitation_v2,count($request->imunitation_v2),$symptopms);
        if(isset($imunitations)){
            // $checkImun = UserImunitation::where(['imunitation_id'=>$imunitations,
            // 'user_id'=>auth()->user()->id])->delete();
            $checkImun = UserSymptom::where(['imunitation_id'=>$imunitations,
            'user_id'=>auth()->user()->id])->delete();
            UserImunitation::updateOrCreate(['imunitation_id'=>$imunitations],[
                'imunitation_id'=>$imunitations,
                'user_id'=>auth()->user()->id,
                'date'=>$request->date_v1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
            if(isset($request->symptopms_v1)){
                for ($i = 0; $i < count($symptopms_v1); $i++) {
                    UserSymptom::insert([
                        'sympton_id'=>$symptopms_v1[$i],
                        'imunitation_id'=>$imunitations,
                        'user_id'=>auth()->user()->id,
                        'date'=>$request->date_v1,
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ]);
                }
            }
        }
        if(isset($request->imunitation_v2)){
            $checkImun = UserSymptom::where(['imunitation_id'=>$request->imunitation_v2,'user_id'=>auth()->user()->id])->delete();
            UserImunitation::updateOrCreate(['imunitation_id'=>$request->imunitation_v2],[
                'imunitation_id'=>$request->imunitation_v2,
                'user_id'=>auth()->user()->id,
                'date'=>$request->date_v2,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
            if(isset($request->symptopms_v2)){
                for ($i = 0; $i < count($request->symptopms_v2); $i++) {
                    UserSymptom::insert([
                        'sympton_id'=>$request->symptopms_v2[$i],
                        'imunitation_id'=>$request->imunitation_v2,
                        'user_id'=>auth()->user()->id,
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ]);
                }
            }
        }
        if(isset($request->imunitation_v3)){
            $checkImun = UserSymptom::where(['imunitation_id'=>$request->imunitation_v3,
            'user_id'=>auth()->user()->id])->delete();
            UserImunitation::updateOrCreate(['imunitation_id'=>$request->imunitation_v3],[
                'imunitation_id'=>$request->imunitation_v3,
                'user_id'=>auth()->user()->id,
                'date'=>$request->date_v3,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
            if(isset($request->symptopms_v3)){
            for ($i = 0; $i < count($request->symptopms_v3); $i++) {
                UserSymptom::insert([
                    'sympton_id'=>$request->symptopms_v3[$i],
                    'imunitation_id'=>$request->imunitation_v3,
                    'user_id'=>auth()->user()->id,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
            }
        }
        }
        if(isset($request->imunitation_v4)){
            // dd($request->symptopms_v4);
            $checkImun = UserSymptom::where(['imunitation_id'=>$request->imunitation_v4,
            'user_id'=>auth()->user()->id])->delete();
            UserImunitation::updateOrCreate(['imunitation_id'=>$request->imunitation_v4],[
                'imunitation_id'=>$request->imunitation_v4,
                'user_id'=>auth()->user()->id,
                'date'=>$request->date_v4,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
            if(is_array($request->symptopms_v4) || !empty($request->symptopms_v4)){
                for ($i = 0; $i < count($request->symptopms_v4); $i++) {
                    UserSymptom::insert([
                        'sympton_id'=>$request->symptopms_v4[$i],
                        'imunitation_id'=>$request->imunitation_v4,
                        'user_id'=>auth()->user()->id,
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ]);
                }
            }
        }
        if(isset($request->imunitation_v5)){
            $checkImun = UserSymptom::where(['imunitation_id'=>$request->imunitation_v5,
            'user_id'=>auth()->user()->id])->delete();
            UserImunitation::updateOrCreate(['imunitation_id'=>$request->imunitation_v5],[
                'imunitation_id'=>$request->imunitation_v5,
                'user_id'=>auth()->user()->id,
                'date'=>$request->date_v5,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
            if(isset($request->symptopms_v5)){
            for ($i = 0; $i < count($request->symptopms_v5); $i++) {
                UserSymptom::insert([
                    'sympton_id'=>$request->symptopms_v5[$i],
                    'imunitation_id'=>$request->imunitation_v5,
                    'user_id'=>auth()->user()->id,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
            }
        }
        }
        if(isset($request->imunitation_v6)){
            $checkImun = UserSymptom::where(['imunitation_id'=>$request->imunitation_v6,
            'user_id'=>auth()->user()->id])->delete();
            UserImunitation::updateOrCreate(['imunitation_id'=>$request->imunitation_v6],[
                'imunitation_id'=>$request->imunitation_v6,
                'user_id'=>auth()->user()->id,
                'date'=>$request->date_v6,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
            if(isset($request->symptopms_v6)){
            for ($i = 0; $i < count($request->symptopms_v6); $i++) {
                UserSymptom::insert([
                    'sympton_id'=>$request->symptopms_v6[$i],
                    'imunitation_id'=>$request->imunitation_v6,
                    'user_id'=>auth()->user()->id,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
            }
        }
        }
        if(isset($request->imunitation_v7)){
            $checkImun = UserSymptom::where(['imunitation_id'=>$request->imunitation_v7,
            'user_id'=>auth()->user()->id])->delete();
            UserImunitation::updateOrCreate(['imunitation_id'=>$request->imunitation_v7],[
                'imunitation_id'=>$request->imunitation_v7,
                'user_id'=>auth()->user()->id,
                'date'=>$request->date_v7,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
            if(isset($request->symptopms_v7)){
            for ($i = 0; $i < count($request->symptopms_v7); $i++) {
                UserSymptom::insert([
                    'sympton_id'=>$request->symptopms_v7[$i],
                    'imunitation_id'=>$request->imunitation_v7,
                    'user_id'=>auth()->user()->id,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
            }
        }
        }
        if(isset($request->imunitation_v8)){
            $checkImun = UserSymptom::where(['imunitation_id'=>$request->imunitation_v8,
            'user_id'=>auth()->user()->id])->delete();
            UserImunitation::updateOrCreate(['imunitation_id'=>$request->imunitation_v8],[
                'imunitation_id'=>$request->imunitation_v8,
                'user_id'=>auth()->user()->id,
                'date'=>$request->date_v8,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
            if(isset($request->symptopms_v8)){
            for ($i = 0; $i < count($request->symptopms_v8); $i++) {
                UserSymptom::insert([
                    'sympton_id'=>$request->symptopms_v8[$i],
                    'imunitation_id'=>$request->imunitation_v8,
                    'user_id'=>auth()->user()->id,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
            }
        }
        }
        if(isset($request->imunitation_v9)){
            $checkImun = UserSymptom::where(['imunitation_id'=>$request->imunitation_v9,
            'user_id'=>auth()->user()->id])->delete();
            UserImunitation::updateOrCreate(['imunitation_id'=>$request->imunitation_v9],[
                'imunitation_id'=>$request->imunitation_v9,
                'user_id'=>auth()->user()->id,
                'date'=>$request->date_v9,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
            if(isset($request->symptopms_v9)){
            for ($i = 0; $i < count($request->symptopms_v9); $i++) {
                UserSymptom::insert([
                    'sympton_id'=>$request->symptopms_v9[$i],
                    'imunitation_id'=>$request->imunitation_v9,
                    'user_id'=>auth()->user()->id,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
            }
        }
        }
        if(isset($request->imunitation_v10)){
            $checkImun = UserSymptom::where(['imunitation_id'=>$request->imunitation_v10,
            'user_id'=>auth()->user()->id])->delete();
            UserImunitation::updateOrCreate(['imunitation_id'=>$request->imunitation_v10],[
                'imunitation_id'=>$request->imunitation_v10,
                'user_id'=>auth()->user()->id,
                'date'=>$request->date_v10,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
            if(isset($request->symptopms_v10)){
            for ($i = 0; $i < count($request->symptopms_v10); $i++) {
                UserSymptom::insert([
                    'sympton_id'=>$request->symptopms_v10[$i],
                    'imunitation_id'=>$request->imunitation_v10,
                    'user_id'=>auth()->user()->id,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
            }
        }
        }
        if(isset($request->imunitation_v11)){
            $checkImun = UserSymptom::where(['imunitation_id'=>$request->imunitation_v11,
            'user_id'=>auth()->user()->id])->delete();
            UserImunitation::updateOrCreate(['imunitation_id'=>$request->imunitation_v11],[
                'imunitation_id'=>$request->imunitation_v11,
                'user_id'=>auth()->user()->id,
                'date'=>$request->date_v11,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
            if(isset($request->symptopms_v11)){
            for ($i = 0; $i < count($request->symptopms_v11); $i++) {
                UserSymptom::insert([
                    'sympton_id'=>$request->symptopms_v11[$i],
                    'imunitation_id'=>$request->imunitation_v11,
                    'user_id'=>auth()->user()->id,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
            }
        }
        }
        if(isset($request->imunitation_v12)){
            $checkImun = UserSymptom::where(['imunitation_id'=>$request->imunitation_v12,
            'user_id'=>auth()->user()->id])->delete();
            UserImunitation::updateOrCreate(['imunitation_id'=>$request->imunitation_v12],[
                'imunitation_id'=>$request->imunitation_v12,
                'user_id'=>auth()->user()->id,
                'date'=>$request->date_v12,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
            if(isset($request->symptopms_v12)){
            for ($i = 0; $i < count($request->symptopms_v12); $i++) {
                UserSymptom::insert([
                    'sympton_id'=>$request->symptopms_v12[$i],
                    'imunitation_id'=>$request->imunitation_v12,
                    'user_id'=>auth()->user()->id,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
            }
        }
        }
        if(isset($request->imunitation_v13)){
            $checkImun = UserSymptom::where(['imunitation_id'=>$request->imunitation_v13,
            'user_id'=>auth()->user()->id])->delete();
            UserImunitation::updateOrCreate(['imunitation_id'=>$request->imunitation_v13],[
                'imunitation_id'=>$request->imunitation_v13,
                'user_id'=>auth()->user()->id,
                'date'=>$request->date_v13,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
            if(isset($request->symptopms_v13)){
            for ($i = 0; $i < count($request->symptopms_v13); $i++) {
                UserSymptom::insert([
                    'sympton_id'=>$request->symptopms_v13[$i],
                    'imunitation_id'=>$request->imunitation_v13,
                    'user_id'=>auth()->user()->id,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
            }
        }
        }

        // dd($symptopms);
        // for ($i = 0; $i < count($imunitations); $i++) {
        //     foreach ($symptopms as $symp) {
        //       $insert_array[] = array(
        //       'sympton_id'=>$symp,
        //         'imunitation_id'  => $imunitations[$i],
        //         'user_id'  => auth()->user()->id,
        //           );
        //          }
        //        }

        // foreach ($imunitations as $imun){
        //     $sibling = UserImunitation::create(
        //         ['imunitation_id'=>$imun,
        //         'user_id'=>auth()->user()->id
        //     ]);
        // }
        // dd($symptopms);
        // foreach($imunitations as $imun){

        //     $datas->push([
        //         'imunitation'=>$imun,
        //         ''
        //     ]);
        // }
        // foreach($symptopms as $symp){

        //     $datas->push([
        //         'sympton'=>$symp
        //     ]);
        // }
        // dd($datas);
        // for($i=0; $i <= count($imunitations); $i++){
        //     $datasave = [
        //         'user_id'=>auth()->user()->id,
        //         'sympton_id'=>$symptopms[$i],
        //         'imunitation_id'=>$imunitations[$i],
        //     ];
        //     UserImunitation::insert($datasave);
        // }
        // foreach($imunitations as $imun){
            // $datas


        // }
        // foreach($symptopms as $symp){

        //     $data = UserImunitation::where('user_id',$result->user_id)->update(
        //         ['sympton_id'=>$symp,
        //     ]);

        //     }
        // dd($insert_array);
        // foreach($insert_array as $arr){
        //     $result = UserImunitation::create($arr);
        // }
        return redirect()->route('imunitation.index');
    }

    // public function store(Request $request){
    //     $imunitation = $request->imunitation_id;
    //     $sympton = $request->sympton_id;
    //     $date = $request->date;

    //    $addImunitation= UserImunitation::create([
    //         'imunitation_id'=>$imunitation,
    //         'user_id'=>auth()->user()->id,
    //         'date'=>$date
    //    ]);
    //    foreach($sympton as $symp){
    //     $addSympton = UserSymptom::create([
    //         'user_imunitation_id'=>$addImunitation->id,
    //         'user_id'=>$addImunitation->user_id,
    //         'sympton_id'=>$symp
    //     ]);
    //     }

    // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd($id);
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
