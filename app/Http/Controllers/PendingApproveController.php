<?php

namespace App\Http\Controllers;

use DB;
use App\PendingApprove;
use App\images_mn;
use App\im_puk;
use Illuminate\Http\Request;

class PendingApproveController extends Controller
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
                    ->where([['mile.status', '=', '0'], ['num.status', '=', '0'], ['mile.type_image', '=', '0'], ['num.type_image', '=', '1']])
                    ->paginate(10);

        return view('tablepending_approve', compact('datas'));
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
     * @param  \App\PendingApprove  $pendingApprove
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datas = DB::table('add_inspection_custos')
                    ->select('add_inspection_custos.*', 'add_inspection_cars.*', 'add_inspection_dates.*', 'dealers.dealer_name', 'brands.name_brand', 'models.name_model', 'technicians.name_tech','mile.id as id_images', 'mile.name_image as mile_img', 'mile.status as mile_status', 'num.name_image as num_img', 'num.status as num_status', 'mile.id_car')
                    ->join('add_inspection_cars', 'add_inspection_custos.id', '=', 'add_inspection_cars.id')
                    ->join('add_inspection_dates', 'add_inspection_custos.id', '=', 'add_inspection_dates.id')
                    ->join('dealers', 'add_inspection_cars.fromtent', '=', 'dealers.id_dealer')
                    ->join('brands', 'add_inspection_cars.carbrand', '=', 'brands.id_brand')
                    ->join('models', 'add_inspection_cars.carmodel', '=', 'models.id_model')
                    ->join('technicians', 'add_inspection_dates.inspector', '=', 'technicians.id_tech')
                    ->join('images_mns as mile', 'add_inspection_custos.id', '=', 'mile.id_car')
                    ->join('images_mns as num', 'add_inspection_custos.id', '=', 'num.id_car')
                    ->where([['mile.status', '=', '0'], ['num.status', '=', '0'], ['mile.type_image', '=', '0'], ['num.type_image', '=', '1'], ['mile.id_car', '=', $id]])
                    ->paginate(10);
        return view('approvement', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PendingApprove  $pendingApprove
     * @return \Illuminate\Http\Response
     */
    public function edit(PendingApprove $pendingApprove)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PendingApprove  $pendingApprove
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_car)
    {
        $status_mi = $request->get('mile_img');
        $status_nu = $request->get('num_img');

        $sum = $status_mi+$status_nu;

        if($sum=='2'){
                $status_admin = '1';

                $status_mile = $request->get('mile_img');
                $status_num = $request->get('num_img');
                $userid = $request->get('userID');
        }else{
                $status_admin = '2';
                $userid = $request->get('userID');

                if($status_mi=='0'){
                    $status_mile = '2';
                }else{
                    $status_mile = $request->get('mile_img');
                }
                if($status_nu=='0'){
                    $status_num = '2';
                }else{
                    $status_num = $request->get('num_img');
                }
        }

        // echo $userid;
        //Type 0 -> mile
        $update = DB::table('images_mns')
        ->where([['id_car', '=', $id_car], ['type_image', '=', '0']])
        ->update(['status' => $status_mile]);
        $update = DB::table('images_mns')
        ->where([['id_car', '=', $id_car], ['type_image', '=', '0']])
        ->update(['confirm' => $userid]);

        //Type 1 -> num
        $update = DB::table('images_mns')
        ->where([['id_car', '=', $id_car], ['type_image', '=', '1']])
        ->update(['status' => $status_num]);
        $update = DB::table('images_mns')
        ->where([['id_car', '=', $id_car], ['type_image', '=', '1']])
        ->update(['confirm' => $userid]);

        // status admin = 1 /confirm admin = 1
        $update = DB::table('im_puks')
        ->where('id_car', '=', $id_car)
        ->update(['status_admin' => $status_admin]);
        $update = DB::table('im_puks')
        ->where('id_car', '=', $id_car)
        ->update(['confirm_admin' => $userid]);



        return redirect('pending');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PendingApprove  $pendingApprove
     * @return \Illuminate\Http\Response
     */
    public function destroy(PendingApprove $pendingApprove)
    {
        //
    }
}
