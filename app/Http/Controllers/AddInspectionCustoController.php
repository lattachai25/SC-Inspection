<?php

namespace App\Http\Controllers;

use App\add_inspection_custo;
use App\add_inspection_car;
use App\add_inspection_date;
use App\type_car;
use App\Province;
use App\district;
use App\subdistrict;
use App\package;
use App\color;
use App\brand;
use App\dealer;
use App\technician;
use App\images_mn;
use App\im_puk;
use App\cc;
use DB;
use Illuminate\Http\Request;
use App\user;

class AddInspectionCustoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // id max
        $id_max = add_inspection_custo::whereRaw('id = (select max(`id`) from add_inspection_custos)')->get();

        // ins max
        // $ins_max = add_inspection_custo::whereRaw('ins = (select max(`ins`) from add_inspection_custos)')->get();

        // data cc
        $tech = technician::all()->sortBy("name_tech");
        // data cc
        $cc = cc::all()->sortBy("cc");
        // data dealer
        $dealer = dealer::all()->sortBy("dealer_name");
        // data brand
        $brand = brand::all()->sortBy("name_brand");
        // data color
        $col = color::all()->sortBy("car_color");
        // data package
        $pac = package::all()->sortBy("package_name");
        // data province
        $province = Province::all()->sortBy("name_th");
        // data type_car
        $type_car = type_car::all()->sortBy("type_car");

        // show data to add-inspection-appointment
        return view('add-inspection-appointment',compact('province','pac','col','brand','dealer','cc','tech','id_max','type_car'));

    }
    public function getdistrictList(Request $request)
    {
        $states = DB::table("amphures")
        ->where("province_id",$request->province_id)
        ->pluck("name_th","id");
        return response()->json($states);
    }
    public function getCityList(Request $request)
    {
        $cities = DB::table("districts")
        ->where("amphure_id",$request->amphure_id)
        ->pluck("name_th","id");
        return response()->json($cities);
    }

    public function getmodelList(Request $request)
    {
        $mode = DB::table("models")
        ->where("id_brand",$request->carBrand_id)
        ->pluck("name_model","id_model");
        return response()->json($mode);
    }
    public function getsubmodelList(Request $request)
    {
        $submode = DB::table("sub_models")
        ->where("id_model",$request->id_model)
        ->pluck("sub_model","id_sub_model");
        return response()->json($submode);
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

        // $inputAll = $request->all();
        // var_dump($inputAll);


        $inputcus = new add_inspection_custo([
            'id' => $request->input('id_car'),
            'ins' => $request->input('ins'),
            'nametitle' => $request->input('nametitle'),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'address' => $request->input('address'),
            'province' => $request->input('province'),
            'district' => $request->input('district'),
            'subdistrict' => $request->input('subdistrict'),
            'postalcode' => $request->input('postalcode'),
            'idcard' => $request->input('idcard'),
            'tel' => $request->input('tel'),
            'customertype' => $request->input('customertype'),
            'contact' => $request->input('contact'),
            'tel_contact' => $request->input('tel_contact'),
        ]);
             //
         $inputcar = new add_inspection_car([
            'id' => $request->input('id_car'),
            'carbrand' => $request->input('carbrand'),
            'carmodel' => $request->input('carmodel'),
            'submodel' => $request->input('submodel'),
            'oldcolor' => $request->input('oldcolor'),
            'newcolor' => $request->input('newcolor'),
            'year' => $request->input('year'),
            'seatnum' => $request->input('seatnum'),
            'place' => $request->input('place'),
            'registertype' => $request->input('registertype'),
            'type_car' => $request->input('type_car'),
            'carregnum' => $request->input('carregnum'),
            'mileage' => $request->input('mileage'),
            'dateregister' => $request->input('dateregister'),
            'numowners' => $request->input('numowners'),
            'cc' => $request->input('cc'),
            'geartype' => $request->input('geartype'),
            'engine' => $request->input('engine'),
            'vin' => $request->input('vin'),
            'benzine' => $request->input('benzine'),
            'diesel' => $request->input('diesel'),
            'hybrid' => $request->input('hybrid'),
            'electric' => $request->input('electric'),
            'lpg' => $request->input('lpg'),
            'ngv' => $request->input('ngv'),
            'cng' => $request->input('cng'),
            'imported_car' => $request->input('imported_car'),
            'carinsurance' => $request->input('carinsurance'),
            'expinsurance' => $request->input('expinsurance'),
            'insurance' => $request->input('insurance'),
            'tent' => $request->input('tent'),
            'fromtent' => $request->input('fromtent'),
            'price' => $request->input('price'),
            'payment' => $request->input('payment'),

            ]);

            $inputdate = new add_inspection_date([

                'id' => $request->input('id_car'),
                'inspectiontype' => $request->input('inspectiontype'),
                'inspector' => $request->input('inspector'),
                'inspectiondate' => $request->input('inspectiondate'),
                'inspectiontime' => $request->input('inspectiontime'),
                'package' => $request->input('package'),
                'remark' => $request->input('remark')

                ]);
            // echo $input;

            $ID_basic = $request->input('inspectiontype');

        if($ID_basic != '2')
        {
        // mile car
            $image0 = $request->file('image_mile');
            $new_name_mi = rand() . '.' . $image0->getClientOriginalExtension();
            $new_name_mile = 'mile'.$new_name_mi;
            $image0->move(public_path('images'), $new_name_mile);

            $input0 = new images_mn([

                'id_car' => $request->input('id_car'),
                'name_image' => $new_name_mile,
                'type_image' => '0',
                'id_dealer' => $request->input('fromtent'),
                'status' => '0',
                'confirm' => '0'

                ]);
            // echo "<br>";

        // number car
            $image1 = $request->file('image_num');
            $new_name_n = rand() . '.' . $image1->getClientOriginalExtension();
            $new_name_num = 'num'.$new_name_n;
            $image1->move(public_path('images'), $new_name_num);
            $input1 = new images_mn([

                'id_car' => $request->input('id_car'),
                'name_image' => $new_name_num,
                'type_image' => '1',
                'id_dealer' => $request->input('fromtent'),
                'status' => '0',
                'confirm' => '0'

                ]);

                $input2 = new images_mn([

                    'id_car' => $request->input('id_car'),
                    'name_image' => 'null',
                    'type_image' => '2',
                    'id_dealer' => $request->input('fromtent'),
                    'status' => '0',
                    'confirm' => '0'

                    ]);



                $input3 = new images_mn([

                    'id_car' => $request->input('id_car'),
                    'name_image' => 'null',
                    'type_image' => '3',
                    'id_dealer' => $request->input('fromtent'),
                    'status' => '0',
                    'confirm' => '0'

                    ]);


                $input4 = new images_mn([

                    'id_car' => $request->input('id_car'),
                    'name_image' => 'null',
                    'type_image' => '4',
                    'id_dealer' => $request->input('fromtent'),
                    'status' => '0',
                    'confirm' => '0'

                    ]);


                $input5 = new images_mn([

                    'id_car' => $request->input('id_car'),
                    'name_image' => 'null',
                    'type_image' => '5',
                    'id_dealer' => $request->input('fromtent'),
                    'status' => '0',
                    'confirm' => '0'

                    ]);


                $input6 = new images_mn([

                    'id_car' => $request->input('id_car'),
                    'name_image' => 'null',
                    'type_image' => '6',
                    'id_dealer' => $request->input('fromtent'),
                    'status' => '0',
                    'confirm' => '0'

                    ]);


                $input7 = new images_mn([

                    'id_car' => $request->input('id_car'),
                    'name_image' => 'null',
                    'type_image' => '7',
                    'id_dealer' => $request->input('fromtent'),
                    'status' => '0',
                    'confirm' => '0'

                    ]);


                $inputA = new images_mn([

                    'id_car' => $request->input('id_car'),
                    'name_image' => 'null',
                    'type_image' => 'A',
                    'id_dealer' => $request->input('fromtent'),
                    'status' => '0',
                    'confirm' => '0'

                    ]);


                $inputB = new images_mn([

                    'id_car' => $request->input('id_car'),
                    'name_image' => 'null',
                    'type_image' => 'B',
                    'id_dealer' => $request->input('fromtent'),
                    'status' => '0',
                    'confirm' => '0'

                    ]);


                $inputC = new images_mn([

                    'id_car' => $request->input('id_car'),
                    'name_image' => 'null',
                    'type_image' => 'C',
                    'id_dealer' => $request->input('fromtent'),
                    'status' => '0',
                    'confirm' => '0'

                    ]);


                $inputD = new images_mn([

                    'id_car' => $request->input('id_car'),
                    'name_image' => 'null',
                    'type_image' => 'D',
                    'id_dealer' => $request->input('fromtent'),
                    'status' => '0',
                    'confirm' => '0'

                    ]);

                // "<br>";

                // $vdo = $request->input('file_vdo');
                $inputVDO = new images_mn([

                    'id_car' => $request->input('id_car'),
                    'name_image' => 'null',
                    'type_image' => 'V',
                    'id_dealer' => $request->input('fromtent'),
                    'status' => '0',
                    'confirm' => '0'

                    ]);

                $inputpuk = new im_puk([

                    'id_car' => $request->input('id_car'),
                    'id_dealer' => $request->input('fromtent'),
                    'status_admin' => '0',
                    'status_tech' => '0',
                    'confirm_admin' => '0',
                    'confirm_tech' => '0',
                    'im_0' => $new_name_mile ,
                    'im_1' => $new_name_num ,
                    'im_2' => 'null',
                    'im_3' => 'null',
                    'im_4' => 'null',
                    'im_5' => 'null',
                    'im_6' => 'null',
                    'im_7' => 'null',
                    'im_A' => 'null',
                    'im_B' => 'null',
                    'im_C' => 'null',
                    'im_D' => 'null',
                    'im_V' => 'null'

                    ]);
            }

                $inputcus->save();
                $inputcar->save();
                $inputdate->save();

    if($ID_basic != '2')
    {
                $input0->save();
                $input1->save();
                $input2->save();
                $input3->save();
                $input4->save();
                $input5->save();
                $input6->save();
                $input7->save();
                $inputA->save();
                $inputB->save();
                $inputC->save();
                $inputD->save();
                $inputVDO->save();

                $inputpuk->save();

        return redirect('/appointment')->with('success', 'ได้ทำการเพิ่ม การประชุมย่อย เรียบร้อยแล้ว');
    }else{
        return redirect('/car_show');
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\add_inspection_custo  $add_inspection_custo
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\add_inspection_custo  $add_inspection_custo
     * @return \Illuminate\Http\Response
     */
    public function edit(add_inspection_custo $add_inspection_custo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\add_inspection_custo  $add_inspection_custo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, add_inspection_custo $add_inspection_custo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\add_inspection_custo  $add_inspection_custo
     * @return \Illuminate\Http\Response
     */
    public function destroy(add_inspection_custo $add_inspection_custo)
    {
        //
    }
}
