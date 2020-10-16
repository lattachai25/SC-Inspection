<?php

namespace App\Http\Controllers;

use App\cc;
use Illuminate\Http\Request;

class CcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('form_car');
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
     * @param  \App\cc  $cc
     * @return \Illuminate\Http\Response
     */
    public function show(cc $cc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cc  $cc
     * @return \Illuminate\Http\Response
     */
    public function edit(cc $cc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cc  $cc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cc $cc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cc  $cc
     * @return \Illuminate\Http\Response
     */
    public function destroy(cc $cc)
    {
        //
    }
}
