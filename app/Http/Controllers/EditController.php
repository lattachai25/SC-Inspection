<?php

namespace App\Http\Controllers;

use App\edit;
use Illuminate\Http\Request;

use App\add_inspection_custo;
use App\add_inspection_car;
use App\add_inspection_date;
use App\appointment;
use DB;

class EditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

        $tasks = add_inspection_date::all();

        return view('edit', compact('data','tasks'));
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
     * @param  \App\edit  $edit
     * @return \Illuminate\Http\Response
     */
    public function show(edit $edit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\edit  $edit
     * @return \Illuminate\Http\Response
     */
    public function edit(edit $edit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\edit  $edit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, edit $edit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\edit  $edit
     * @return \Illuminate\Http\Response
     */
    public function destroy(edit $edit)
    {
        //
    }
}
