<?php

namespace App\Http\Controllers;

use App\detail;
use Illuminate\Http\Request;
use App\brand;
use App\add_inspection_car;
use App\add_inspection_date;
use App\images_mn;
use App\im_puk;
use DB;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $id_car = $request->input('id_car');
        $id_detail = $request->input('id_detail');
        $inspectiontype = $request->input('inspectiontype');

        if($id_detail == '' && $id_car != '' && $inspectiontype == '0'){

        $inputdetailF = new detail([

            'id_car' => $request->input('id_car'),

            'carrs01' => $request->input('carrs01'),
            'carrs02' => $request->input('carrs02'),
            'carrs03' => $request->input('carrs03'),
            'carrs04' => $request->input('carrs04'),
            'carrs05' => $request->input('carrs05'),
            'carrs06' => $request->input('carrs06'),
            'carrs07' => $request->input('carrs07'),
            'carrs08' => $request->input('carrs08'),
            'carrs09' => $request->input('carrs09'),
            'carrs10' => $request->input('carrs10'),
            'carrs11' => $request->input('carrs11'),
            'carrs12' => $request->input('carrs12'),

            'carin01' => $request->input('carin01'),
            'carin02' => $request->input('carin02'),
            'carin03' => $request->input('carin03'),
            'carin04' => $request->input('carin04'),
            'carin05' => $request->input('carin05'),
            'carin06' => $request->input('carin06'),
            'carin07' => $request->input('carin07'),
            'carin08' => $request->input('carin08'),

            'exterior_01' => $request->input('exterior_01'),
            'exterior_02' => $request->input('exterior_02'),
            'exterior_03' => $request->input('exterior_03'),
            'exterior_04' => $request->input('exterior_04'),
            'exterior_05' => $request->input('exterior_05'),
            'exterior_06' => $request->input('exterior_06'),
            'exterior_07' => $request->input('exterior_07'),
            'exterior_08' => $request->input('exterior_08'),
            'exterior_09' => $request->input('exterior_09'),
            'exterior_10' => $request->input('exterior_10'),
            'exterior_11' => $request->input('exterior_11'),
            'exterior_12' => $request->input('exterior_12'),
            'exterior_13' => $request->input('exterior_13'),
            'exterior_14' => $request->input('exterior_14'),
            'exterior_15' => $request->input('exterior_15'),
            'exterior_16' => $request->input('exterior_16'),
            'exterior_17' => $request->input('exterior_17'),
            'exterior_18' => $request->input('exterior_18'),
            'exterior_19' => $request->input('exterior_19'),
            'exterior_20' => $request->input('exterior_20'),

            'interior_01' => $request->input('interior_01'),
            'interior_02' => $request->input('interior_02'),
            'interior_03' => $request->input('interior_03'),
            'interior_04' => $request->input('interior_04'),
            'interior_05' => $request->input('interior_05'),
            'interior_06' => $request->input('interior_06'),
            'interior_07' => $request->input('interior_07'),
            'interior_08' => $request->input('interior_08'),
            'interior_09' => $request->input('interior_09'),
            'interior_10' => $request->input('interior_10'),
            'interior_11' => $request->input('interior_11'),
            'interior_12' => $request->input('interior_12'),
            'interior_13' => $request->input('interior_13'),
            'interior_14' => $request->input('interior_14'),
            'interior_15' => $request->input('interior_15'),

            'chasis_01' => $request->input('chasis_01'),
            'chasis_02' => $request->input('chasis_02'),
            'chasis_03' => $request->input('chasis_03'),

            'comment' => $request->input('comment')

        ]);


        $inputdetailF->save();

        }
        else if($id_detail == '' && $id_car != '' && $inspectiontype == '1'){

            $inputdetailW = new detail([

                'id_car' => $request->input('id_car'),

                'carrs01' => $request->input('carrs01'),
                'carrs02' => $request->input('carrs02'),
                'carrs03' => $request->input('carrs03'),
                'carrs04' => $request->input('carrs04'),
                'carrs05' => $request->input('carrs05'),
                'carrs06' => $request->input('carrs06'),
                'carrs07' => $request->input('carrs07'),
                'carrs08' => $request->input('carrs08'),
                'carrs09' => $request->input('carrs09'),
                'carrs10' => $request->input('carrs10'),
                'carrs11' => $request->input('carrs11'),
                'carrs12' => $request->input('carrs12'),

                'carin01' => 'null',
                'carin02' => 'null',
                'carin03' => 'null',
                'carin04' => 'null',
                'carin05' => 'null',
                'carin06' => 'null',
                'carin07' => 'null',
                'carin08' => 'null',

                'exterior_01' => $request->input('exterior_01'),
                'exterior_02' => $request->input('exterior_02'),
                'exterior_03' => $request->input('exterior_03'),
                'exterior_04' => $request->input('exterior_04'),
                'exterior_05' => $request->input('exterior_05'),
                'exterior_06' => $request->input('exterior_06'),
                'exterior_07' => $request->input('exterior_07'),
                'exterior_08' => $request->input('exterior_08'),
                'exterior_09' => $request->input('exterior_09'),
                'exterior_10' => $request->input('exterior_10'),
                'exterior_11' => $request->input('exterior_11'),
                'exterior_12' => $request->input('exterior_12'),
                'exterior_13' => $request->input('exterior_13'),
                'exterior_14' => $request->input('exterior_14'),
                'exterior_15' => $request->input('exterior_15'),
                'exterior_16' => $request->input('exterior_16'),
                'exterior_17' => $request->input('exterior_17'),
                'exterior_18' => $request->input('exterior_18'),
                'exterior_19' => $request->input('exterior_19'),
                'exterior_20' => $request->input('exterior_20'),

                'interior_01' => $request->input('interior_01'),
                'interior_02' => $request->input('interior_02'),
                'interior_03' => $request->input('interior_03'),
                'interior_04' => $request->input('interior_04'),
                'interior_05' => $request->input('interior_05'),
                'interior_06' => $request->input('interior_06'),
                'interior_07' => $request->input('interior_07'),
                'interior_08' => $request->input('interior_08'),
                'interior_09' => $request->input('interior_09'),
                'interior_10' => $request->input('interior_10'),
                'interior_11' => $request->input('interior_11'),
                'interior_12' => $request->input('interior_12'),
                'interior_13' => $request->input('interior_13'),
                'interior_14' => $request->input('interior_14'),
                'interior_15' => $request->input('interior_15'),

                'chasis_01' => $request->input('chasis_01'),
                'chasis_02' => $request->input('chasis_02'),
                'chasis_03' => $request->input('chasis_03'),

                'comment' => $request->input('comment')

            ]);


            $inputdetailW->save();


        }
        else
        {
                $images = DB::table('add_inspection_cars')
                ->select('add_inspection_cars.id as id_car','add_inspection_cars.fromtent','im_puks.*',
                        'images_mns.id as id_imfull','add_inspection_dates.inspectiontype')
                ->join('im_puks','add_inspection_cars.id','=','im_puks.id_car')
                ->join('add_inspection_dates','add_inspection_cars.id','=','add_inspection_dates.id')
                ->leftjoin('images_mns','add_inspection_cars.id','=','images_mns.id_car')
                ->where([['add_inspection_cars.id', '=', $id_car],['im_puks.status_admin', '=', '1']])
                ->where('images_mns.type_image', '=', 2)
                ->groupBy('add_inspection_cars.id')
                ->get();


                return view('upimages',compact('images'));
                // echo $images;

        }


        $images = DB::table('add_inspection_cars')
        ->select('add_inspection_cars.id as id_car','add_inspection_cars.fromtent','im_puks.*',
                 'images_mns.id as id_imfull','add_inspection_dates.inspectiontype')
        ->join('im_puks','add_inspection_cars.id','=','im_puks.id_car')
        ->join('add_inspection_dates','add_inspection_cars.id','=','add_inspection_dates.id')
        ->leftjoin('images_mns','add_inspection_cars.id','=','images_mns.id_car')
        ->where([['add_inspection_cars.id', '=', $id_car],['im_puks.status_admin', '=', '1']])
        ->where('images_mns.type_image', '=', 2)
        ->groupBy('add_inspection_cars.id')
        ->get();


        return view('upimages',compact('images'));
        // echo $images;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detail $detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail $detail)
    {
        //
    }
}
