<?php

namespace App\Http\Controllers;

use App\cr;
use Illuminate\Http\Request;
use App\image_fire_flood;
use DB;
use App\images_mn;
use App\brand;
use App\add_inspection_car;

class car_showController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo $id;
        $datas = DB::table('add_inspection_cars')
        ->select('details.*','im_puks.*','image_fire_floods.*','add_inspection_custos.*','add_inspection_dates.*','add_inspection_cars.*',
                 'provinces.name_th','amphures.name_th as name_am','districts.name_th as name_dis','brands.*','models.*','n.car_color',
                 'ccs.*')
        ->join('add_inspection_custos', 'add_inspection_cars.id', '=', 'add_inspection_custos.id')
        ->join('add_inspection_dates', 'add_inspection_cars.id', '=', 'add_inspection_dates.id')
        ->join('details', 'add_inspection_cars.id', '=', 'details.id_car')
        ->join('im_puks', 'add_inspection_cars.id', '=', 'im_puks.id_car')
        ->join('provinces', 'add_inspection_custos.province', '=', 'provinces.id')
        ->join('amphures', 'add_inspection_custos.district', '=', 'amphures.id')
        ->join('districts', 'add_inspection_custos.subdistrict', '=', 'districts.id')
        ->join('brands','add_inspection_cars.carbrand','=','brands.id_brand')
        ->join('models','add_inspection_cars.carmodel','=','models.id_model')
        ->join('sub_models','add_inspection_cars.submodel','=','sub_models.id_sub_model')
        ->join('colors as n','add_inspection_cars.newcolor','=','n.id_color')
        ->join('ccs','add_inspection_cars.cc','=','ccs.id_cc')
        ->leftjoin('image_fire_floods', 'add_inspection_cars.id', '=', 'image_fire_floods.id_car')
        // ->where('add_inspection_cars.id', '=', $id)
        ->first();


        return view('basic', compact('datas'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr, $id)
    {
        //
        // echo $id;
        $datas = DB::table('add_inspection_cars')
        ->select('details.*','im_puks.*','image_fire_floods.*','add_inspection_custos.*','add_inspection_dates.*','add_inspection_cars.*',
                 'provinces.name_th','amphures.name_th as name_am','districts.name_th as name_dis','brands.*','models.*','n.car_color',
                 'ccs.*')
        ->join('add_inspection_custos', 'add_inspection_cars.id', '=', 'add_inspection_custos.id')
        ->join('add_inspection_dates', 'add_inspection_cars.id', '=', 'add_inspection_dates.id')
        ->join('details', 'add_inspection_cars.id', '=', 'details.id_car')
        ->join('im_puks', 'add_inspection_cars.id', '=', 'im_puks.id_car')
        ->join('provinces', 'add_inspection_custos.province', '=', 'provinces.id')
        ->join('amphures', 'add_inspection_custos.district', '=', 'amphures.id')
        ->join('districts', 'add_inspection_custos.subdistrict', '=', 'districts.id')
        ->join('brands','add_inspection_cars.carbrand','=','brands.id_brand')
        ->join('models','add_inspection_cars.carmodel','=','models.id_model')
        ->join('sub_models','add_inspection_cars.submodel','=','sub_models.id_sub_model')
        ->join('colors as n','add_inspection_cars.newcolor','=','n.id_color')
        ->join('ccs','add_inspection_cars.cc','=','ccs.id_cc')
        ->leftjoin('image_fire_floods', 'add_inspection_cars.id', '=', 'image_fire_floods.id_car')
        ->where('add_inspection_cars.id', '=', $id)
        ->first();



        return view('car_show', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
