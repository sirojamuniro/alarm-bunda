<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Child;
use App\Models\User;
use App\Models\Sibling;

class ManagementChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = auth()->user()->child;

        return view('admin.child.list',compact('result'));
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
        // dd($request->user_id);
        $result = Child::updateOrCreate(
            ['user_id'=>$request->user_id],
            $request->except(['_token','name_sibling','age_sibling','user_id']));

        // foreach ($request->name_sibling as $name){
        //     $sibling = Sibling::updateOrCreate(
        //         ['child_id'=>$result->id],
        //         ['name'=>$name]);
        // }
        // foreach ($request->age_sibling as $age){
        //     $sibling = Sibling::where('id',$sibling->id)->update([
        //     'age'=>$age,
        //     ]);
        // }

        return redirect()->route('child.index');
    }

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
        $result = Child::where('id',$id)->update($request->all());

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Child::where('id',$id)->delete();

        return $result;
    }
}
