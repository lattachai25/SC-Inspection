<?php

namespace App\Http\Controllers;

use App\report;
use Illuminate\Http\Request;
use App\add_inspection_custo;
use App\add_inspection_car;
use App\add_inspection_date;
use App\User;
use DB;
use Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.

     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $auth_id = Auth::user()->id;

        $data = DB::table('add_inspection_custos')
        ->select('add_inspection_custos.*','add_inspection_cars.*','add_inspection_dates.*','brands.*','models.*','colors.*','im_puks.im_2')
        ->join('add_inspection_cars','add_inspection_custos.id','=','add_inspection_cars.id')
        ->join('add_inspection_dates','add_inspection_custos.id','=','add_inspection_dates.id')
        ->join('brands','add_inspection_cars.carbrand','=','brands.id_brand')
        ->join('models','add_inspection_cars.carmodel','=','models.id_model')
        ->join('colors','add_inspection_cars.newcolor','=','colors.id_color')
        ->join('details','add_inspection_cars.id','=','details.id_car')
        ->join('im_puks','add_inspection_custos.id','=','im_puks.id_car')
        ->where('im_puks.status_tech', '=', 1)
        ->orderBy('add_inspection_custos.id','DESC')

        ->paginate(9);

        //  $po = DB::table('users')
        // // ->select('users.*')
        // ->select('position.*','users.*')
        // ->join('position','users.position','=','position.id_position')
        // ->where('users.id', '=', $auth_id)
        // ->get();

        return view('report', compact('data'));
    }
    public function search() {

        // Sets the parameters from the get request to the variables.
        // $search = Request::get('search');
        $query=request('search_car');

        // Perform the query using Query Builder
        $data = DB::table('add_inspection_custos')
        ->select('add_inspection_custos.*','add_inspection_cars.*','add_inspection_dates.*','brands.*','models.*','colors.*','details.*','im_puks.im_2')
        ->join('add_inspection_cars','add_inspection_custos.id','=','add_inspection_cars.id')
        ->join('add_inspection_dates','add_inspection_custos.id','=','add_inspection_dates.id')
        ->join('brands','add_inspection_cars.carbrand','=','brands.id_brand')
        ->join('models','add_inspection_cars.carmodel','=','models.id_model')
        ->join('colors','add_inspection_cars.newcolor','=','colors.id_color')
        ->join('details','add_inspection_cars.id','=','details.id_car')
        ->join('im_puks','add_inspection_custos.id','=','im_puks.id_car')

        // ->where('im_puks.status_tech', '=', 1)
        ->orwhere('name_brand', 'like' ,'%' . $query . '%')
        ->orwhere('name_model', 'like' ,'%' . $query . '%')
        ->orwhere('year', 'like' ,'%' . $query . '%')
        ->orwhere('car_color', 'like' ,'%' . $query . '%')
        ->orwhere('carregnum', 'like' ,'%' . $query . '%')
        ->orwhere('mileage', 'like' ,'%' . $query . '%')
        ->orwhere('price', 'like' ,'%' . $query . '%')
        ->paginate(9);
        // dd($data);
        return view('report', compact('data'));

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
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $datas = DB::table('add_inspection_custos')
        ->select('add_inspection_custos.*','add_inspection_cars.*','add_inspection_dates.*',
                 'provinces.name_th','amphures.name_th as name_am','districts.name_th as name_dis',
                 'brands.name_brand','models.name_model','n.car_color as color_n','ccs.cc',
                 'sub_models.sub_model','b.car_color as color_b','dealers.dealer_name','packages.package_name',
                 'technicians.name_tech','details.*','type_cars.*')

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
        ->join('type_cars','add_inspection_cars.type_car','=','type_cars.id_type')
        ->leftjoin('details','add_inspection_custos.id','=','details.id_car')
        ->join('im_puks','add_inspection_cars.id','=','im_puks.id_car')

        ->where('im_puks.status_admin', '=', 1)
        ->where('add_inspection_custos.id', '=', $id)
        ->groupBy('add_inspection_custos.id')
        ->get();

    //   return view('views_ins', compact('datas'));


      return view('addreport', compact('datas'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(report $report)
    {
        //
    }
}
