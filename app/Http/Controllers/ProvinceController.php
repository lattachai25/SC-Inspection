<?php

namespace App\Http\Controllers;

use App\province;
use DB;
use App\appointment;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $province = Province::all();
        // return view('add-inspection-appointment',compact('province'));
    }
    // public function district(Request $request)
    // {
    //     if($request->ajax()){
    //     $query = District::where('f_province_id',$request->province_id)->get()->toArray();
    //     return response()->json($query);      
    //     }
    // }
    // public function subdistrict(Request $request)
    // {
    //      if($request->ajax()){
    //      $query = SubDistrict::where('f_district_id',$request->district_id)->get()->toArray();
    //   return response()->json($query);
    //      }
    // }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\province  $province
     * @return \Illuminate\Http\Response
     */
    public function show(province $province)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\province  $province
     * @return \Illuminate\Http\Response
     */
    public function edit(province $province)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\province  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, province $province)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(province $province)
    {
        //
    }
}
