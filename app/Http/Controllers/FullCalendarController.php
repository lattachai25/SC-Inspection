<?php

namespace App\Http\Controllers;


use App\add_inspection_car;
use App\add_inspection_date;
use App\add_inspection_custo;
use Calendar;
use DB;
use App\Event;
use Illuminate\Http\Request;
use Redirect,Response;

class FullCalendarController extends Controller
{
    public function index()
    {
        $tasks = DB::table('add_inspection_custos')
        ->select('add_inspection_custos.*','add_inspection_cars.*','add_inspection_dates.*','dealers.*','brands.*','models.*','b.*')
        ->join('add_inspection_cars','add_inspection_custos.id','=','add_inspection_cars.id')
        ->join('add_inspection_dates','add_inspection_custos.id','=','add_inspection_dates.id')
        ->join('dealers','add_inspection_cars.fromtent','=','dealers.id_dealer')
        ->join('brands','add_inspection_cars.carbrand','=','brands.id_brand')
        ->join('models','add_inspection_cars.carmodel','=','models.id_model')
        ->join('colors as b','add_inspection_cars.newcolor','=','b.id_color')
        ->get();

        // $tasks = add_inspection_date::all();

        return view('fullcalendar', compact('tasks'));

    }
    public function show($id)
    {
        //
        $tasks = DB::table('add_inspection_custos')
        ->select('add_inspection_custos.*','add_inspection_cars.*','add_inspection_dates.*','dealers.*','brands.*','models.*','b.*')
        ->join('add_inspection_cars','add_inspection_custos.id','=','add_inspection_cars.id')
        ->join('add_inspection_dates','add_inspection_custos.id','=','add_inspection_dates.id')
        ->join('dealers','add_inspection_cars.fromtent','=','dealers.id_dealer')
        ->join('brands','add_inspection_cars.carbrand','=','brands.id_brand')
        ->join('models','add_inspection_cars.carmodel','=','models.id_model')
        ->join('colors as b','add_inspection_cars.newcolor','=','b.id_color')
        ->get();

        $datas = DB::table('add_inspection_custos')
        ->select('add_inspection_custos.*','add_inspection_cars.*','add_inspection_dates.*','dealers.*','brands.*','models.*','b.*')
        ->join('add_inspection_cars','add_inspection_custos.id','=','add_inspection_cars.id')
        ->join('add_inspection_dates','add_inspection_custos.id','=','add_inspection_dates.id')
        ->join('dealers','add_inspection_cars.fromtent','=','dealers.id_dealer')
        ->join('brands','add_inspection_cars.carbrand','=','brands.id_brand')
        ->join('models','add_inspection_cars.carmodel','=','models.id_model')
        ->join('colors as b','add_inspection_cars.newcolor','=','b.id_color')
        ->where('add_inspection_custos.id', '=', $id)
        ->get();


        return view('fullcalendar', compact('datas','tasks'));
    }


}
