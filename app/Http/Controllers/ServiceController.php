<?php

namespace App\Http\Controllers;

use App\service;
use Illuminate\Http\Request;
use App\add_inspection_custo;
use App\add_inspection_car;
use App\add_inspection_date;
use DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('add_inspection_custos')
        ->select('add_inspection_custos.*','add_inspection_cars.*','add_inspection_dates.*','brands.*','models.*')
        ->join('add_inspection_cars','add_inspection_custos.id','=','add_inspection_cars.id')
        ->join('add_inspection_dates','add_inspection_custos.id','=','add_inspection_dates.id')
        ->join('brands','add_inspection_cars.carbrand','=','brands.id_brand')
        ->join('models','add_inspection_cars.carmodel','=','models.id_model')
        ->join('im_puks','add_inspection_cars.id','=','im_puks.id_car')
        ->where('im_puks.status_admin', '=', 1)
        ->orderBy('add_inspection_custos.id', 'DESC')
        ->paginate(20);

        return view('service', compact('data'));
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
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $datas = DB::table('add_inspection_custos')
        // ->join('add_inspection_cars', 'add_inspection_custos.id', '=', 'add_inspection_cars.id')
        // ->join('add_inspection_dates', 'add_inspection_custos.id', '=', 'add_inspection_dates.id')
        // ->where('add_inspection_custos.id', '=', $id)
        // ->get();

        $datas = DB::table('add_inspection_custos')
        ->select('add_inspection_custos.*','add_inspection_cars.*','add_inspection_dates.*',
                 'provinces.name_th','amphures.name_th as name_am','districts.name_th as name_dis',
                 'brands.name_brand','models.name_model','n.car_color as color_n','ccs.cc',
                 'sub_models.sub_model','b.car_color as color_b','dealers.dealer_name','packages.package_name',
                 'technicians.name_tech')

        ->join('add_inspection_cars', 'add_inspection_custos.id', '=', 'add_inspection_cars.id')
        ->join('add_inspection_dates', 'add_inspection_custos.id', '=', 'add_inspection_dates.id')
        ->join('provinces', 'add_inspection_custos.province', '=', 'provinces.id')
        ->join('amphures', 'add_inspection_custos.district', '=', 'amphures.id')
        ->join('districts', 'add_inspection_custos.subdistrict', '=', 'districts.id')
        ->join('brands','add_inspection_cars.carbrand','=','brands.id_brand')
        ->join('models','add_inspection_cars.carmodel','=','models.id_model')
        ->join('sub_models','add_inspection_cars.submodel','=','sub_models.id_sub_model')
        ->join('colors as b','add_inspection_cars.oldcolor','=','b.id_color')
        ->join('colors as n','add_inspection_cars.newcolor','=','n.id_color')
        ->join('ccs','add_inspection_cars.cc','=','ccs.id_cc')
        ->join('dealers','add_inspection_cars.fromtent','=','dealers.id_dealer')
        ->join('packages','add_inspection_dates.package','=','packages.id_package')
        ->join('technicians','add_inspection_dates.inspector','=','technicians.id_tech')

        ->where('add_inspection_custos.id', '=', $id)
        ->groupBy('add_inspection_custos.id')
        ->get();

        return view('print_form', compact('datas'));
        // print_form
        // print_from
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        //
    }
}
