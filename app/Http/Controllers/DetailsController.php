<?php

namespace App\Http\Controllers;

use App\details;
use Illuminate\Http\Request;
use DB;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('insp-details');
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
     * @param  \App\details  $details
     * @return \Illuminate\Http\Response
     */
    public function show(details $details, $id)
    {
        $datas = DB::table('add_inspection_cars as c')
        ->select('c.year as year', 'b.name_brand as brand', 'm.name_model as model',
         's.sub_model as sub_model', 'c.dateregister', 'c.geartype as geartype',
         'cs1.car_color as oldcolor', 'cs2.car_color as newcolor', 'ccs.cc as cc',
         'c.numowners as numowner', 'c.mileage as mile', 'c.seatnum as seat',
         'c.benzine as benzine', 'c.diesel as diesel', 'c.hybrid as hybrid', 'c.electric as electric', 'c.lpg as lpg', 'c.ngv as ngv', 'c.cng as cng',
         'c.carregnum as carnum', 'c.registertype as registertype', 'c.engine as engine',
         'c.vin as vin', 'c.carinsurance as insurance', 'c.expinsurance as exp',
         'c.insurance as insure','details.*','im_puks.*','add_inspection_dates.inspectiontype')
        ->join('add_inspection_dates', 'c.id', '=', 'add_inspection_dates.id')
        ->join('sub_models as s', 's.id_sub_model', '=', 'c.submodel')
        ->join('models as m', 'm.id_model', '=', 'c.carmodel')
        ->join('brands as b', 'b.id_brand', '=', 'c.carbrand')
        ->join('colors as cs1', 'cs1.id_color', '=', 'c.oldcolor')
        ->join('colors as cs2', 'cs2.id_color', '=', 'c.newcolor')
        ->join('ccs',  'ccs.id_cc', '=', 'c.cc')
        ->join('dealers as d', 'd.id_dealer', '=', 'c.fromtent')
        ->join('details', 'c.id', '=', 'details.id_car')
        ->join('im_puks', 'c.id', '=', 'im_puks.id_car')
        ->where('c.id', '=', $id)
        ->first();

        return view('insp-details', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\details  $details
     * @return \Illuminate\Http\Response
     */
    public function edit(details $details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\details  $details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, details $details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\details  $details
     * @return \Illuminate\Http\Response
     */
    public function destroy(details $details)
    {
        //
    }
}
