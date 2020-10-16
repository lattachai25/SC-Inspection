<?php

namespace App\Http\Controllers;

use App\Notapproved;
use Illuminate\Http\Request;
use DB;

class NotapprovedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('add_inspection_custos')
                    ->select('add_inspection_custos.*', 'add_inspection_cars.carregnum', 'add_inspection_dates.*', 'dealers.dealer_name', 'brands.name_brand', 'models.name_model', 'mile.id_car')
                    ->join('add_inspection_cars', 'add_inspection_custos.id', '=', 'add_inspection_cars.id')
                    ->join('add_inspection_dates', 'add_inspection_custos.id', '=', 'add_inspection_dates.id')
                    ->join('dealers', 'add_inspection_cars.fromtent', '=', 'dealers.id_dealer')
                    ->join('brands', 'add_inspection_cars.carbrand', '=', 'brands.id_brand')
                    ->join('models', 'add_inspection_cars.carmodel', '=', 'models.id_model')
                    ->join('images_mns as mile', 'add_inspection_custos.id', '=', 'mile.id_car')
                    ->join('images_mns as num', 'add_inspection_custos.id', '=', 'num.id_car')
                    ->whereRaw('(mile.status = 2 or num.status = 2) AND mile.type_image = "0" AND num.type_image = 1')
                    ->paginate(10);

        return view('tablenotapproved', compact('datas'));
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
     * @param  \App\Notapproved  $notapproved
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('add_inspection_custos')
                    ->select('add_inspection_custos.*', 'add_inspection_cars.*', 'add_inspection_dates.*', 'dealers.dealer_name', 'brands.name_brand', 'models.name_model', 'technicians.name_tech', 'mile.name_image as mile_img', 'mile.status as mile_status', 'num.name_image as num_img', 'num.status as num_status')
                    ->join('add_inspection_cars', 'add_inspection_custos.id', '=', 'add_inspection_cars.id')
                    ->join('add_inspection_dates', 'add_inspection_custos.id', '=', 'add_inspection_dates.id')
                    ->join('dealers', 'add_inspection_cars.fromtent', '=', 'dealers.id_dealer')
                    ->join('brands', 'add_inspection_cars.carbrand', '=', 'brands.id_brand')
                    ->join('models', 'add_inspection_cars.carmodel', '=', 'models.id_model')
                    ->join('technicians', 'add_inspection_dates.inspector', '=', 'technicians.id_tech')
                    ->join('images_mns as mile', 'add_inspection_custos.id', '=', 'mile.id_car')
                    ->join('images_mns as num', 'add_inspection_custos.id', '=', 'num.id_car')
                    ->whereRaw('(mile.status = 2 or num.status = 2) AND mile.type_image = "0" AND num.type_image = 1')
                    ->where('mile.id_car', '=', $id)
                    ->paginate(10);
        return view('approved', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notapproved  $notapproved
     * @return \Illuminate\Http\Response
     */
    public function edit(Notapproved $notapproved)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notapproved  $notapproved
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notapproved $notapproved)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notapproved  $notapproved
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notapproved $notapproved)
    {
        //
    }
}
