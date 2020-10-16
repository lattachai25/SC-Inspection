<?php

namespace App\Http\Controllers;

use App\technician;
use Illuminate\Http\Request;

class TechnicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $technician = technician::all();

        return view('technician',compact('technician'));
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
        // $inputAll = $request->all();
        // var_dump($inputAll);

        $input = new technician([
            'name_tech' => $request->input('name_tech')
        ]);

        $input->save();

        return redirect('/technician')->with('success', 'ได้ทำการเพิ่ม เรียบร้อยแล้ว');
        // return redirect()->back()->with('message', 'ได้ทำการเพิ่ม เรียบร้อยแล้ว !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function show(technician $technician)
    {
        //
        // return view('car_show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function edit(technician $technician)
    {
        //
        $tech = technician::all();

        return view('technician', compact('tech'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, technician $technician)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\technician  $technician
     * @return \Illuminate\Http\Response
     */
    public function destroy(technician $technician)
    {
        //
    }
}
