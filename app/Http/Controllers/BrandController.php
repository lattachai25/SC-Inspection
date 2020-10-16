<?php

namespace App\Http\Controllers;

use App\brand;
use App\add_inspection_car;
use App\images_mn;
use App\im_puk;
use App\image_fire_flood;
use Illuminate\Http\Request;
use DB;
use Validator;

class BrandController extends Controller
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

    public function imageUpload()
    {
        // $data = carregnum::all();
        return view('upload-img');
    }

    function action22(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'image_2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($validation->passes())
        {
            $image = $request->file('image_2');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $new_name_car = 'FI-'.$new_name;
            $image->move(public_path('images_test'), $new_name_car);
            return response()->json([
            // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
            'message_2'   => $new_name_car,
            'uploaded_image_2' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
            'class_name'  => 'alert-success'
            ]);
        }
        else
        {
            return response()->json([
                'message_2'   => $validation->errors()->all(),
                'uploaded_image_2' => '',
                'class_name'  => 'alert-success'
                // 'class_name'  => 'alert-danger'
            ]);
        }
    }

    function action33(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_3');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'BI-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_3'   => $new_name_car,
                'uploaded_image_3' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_3'   => $validation->errors()->all(),
                    'uploaded_image_3' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function action44(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_4' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_4');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'CN-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_4'   => $new_name_car,
                'uploaded_image_4' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_4'   => $validation->errors()->all(),
                    'uploaded_image_4' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function action5(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_5' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_5');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'EN-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_5'   => $new_name_car,
                'uploaded_image_5' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_5'   => $validation->errors()->all(),
                    'uploaded_image_5' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function action6(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_6' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_6');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'EI-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_6'   => $new_name_car,
                'uploaded_image_6' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_6'   => $validation->errors()->all(),
                    'uploaded_image_6' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function action7(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_7' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_7');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'ODB-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_7'   => $new_name_car,
                'uploaded_image_7' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_7'   => $validation->errors()->all(),
                    'uploaded_image_7' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function actionA(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_A' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_A');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'FL-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_A'   => $new_name_car,
                'uploaded_image_A' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_A'   => $validation->errors()->all(),
                    'uploaded_image_A' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function actionB(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_B' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_B');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'FR-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_B'   => $new_name_car,
                'uploaded_image_B' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_B'   => $validation->errors()->all(),
                    'uploaded_image_B' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function actionC(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_C' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_C');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'BL-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_C'   => $new_name_car,
                'uploaded_image_C' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_C'   => $validation->errors()->all(),
                    'uploaded_image_C' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function actionD(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_D' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_D');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'BR-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_D'   => $new_name_car,
                'uploaded_image_D' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_D'   => $validation->errors()->all(),
                    'uploaded_image_D' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
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

                        $inspectiontype = $request->input('inspectiontype');
                        $idimf = $request->input('id_imfull');
                        $id_car = $request->input('id_car');

                        $image2 = $request->file('image_2');
        if($image2 != ''){
                        $new_name_2 = rand() . '.' . $image2->getClientOriginalExtension();
                        $new_name_im2 = 'FI-'.$new_name_2;
                        $image2->move(public_path('images'), $new_name_im2);


                            $dataim2 = images_mn::find($idimf);
                            $dataim2->name_image = $new_name_im2;
                            $dataim2->confirm = $request->get('userID');
                            $dataim2->status = '1';

                            // echo "<br>".$dataim2;
                            $dataim2->save();
                        }

                        // "<br>";

                        $image3 = $request->file('image_3');
        if($image3 != ''){
                        $new_name_3 = rand() . '.' . $image3->getClientOriginalExtension();
                        $new_name_im3 = 'BI-'.$new_name_3;
                        $image3->move(public_path('images'), $new_name_im3);


                            $dataim3 = images_mn::find($idimf+1);
                            $dataim3->name_image = $new_name_im3;
                            $dataim3->confirm = $request->get('userID');
                            $dataim3->status = '1';

                            // echo "<br>".$dataim3;
                            $dataim3->save();

                        }

                        // "<br>";

                        $image4 = $request->file('image_4');
        if($image4 != ''){
                        $new_name_4 = rand() . '.' . $image4->getClientOriginalExtension();
                        $new_name_im4 = 'CN-'.$new_name_4;
                        $image4->move(public_path('images'), $new_name_im4);


                            $dataim4 = images_mn::find($idimf+2);
                            $dataim4->name_image = $new_name_im4;
                            $dataim4->confirm = $request->get('userID');
                            $dataim4->status = '1';

                            // echo "<br>".$dataim4;
                            $dataim4->save();

                        }

                        // "<br>";

                        $image5 = $request->file('image_5');
        if($image5 != ''){
                        $new_name_5 = rand() . '.' . $image5->getClientOriginalExtension();
                        $new_name_im5 = 'EN-'.$new_name_5;
                        $image5->move(public_path('images'), $new_name_im5);


                            $dataim5 = images_mn::find($idimf+3);
                            $dataim5->name_image = $new_name_im5;
                            $dataim5->confirm = $request->get('userID');
                            $dataim5->status = '1';

                            // echo "<br>".$dataim5;
                            $dataim5->save();

                        }

                        // "<br>";

                        $image6 = $request->file('image_6');
        if($image6 != ''){
                        $new_name_6 = rand() . '.' . $image6->getClientOriginalExtension();
                        $new_name_im6 = 'EI-'.$new_name_6;
                        $image6->move(public_path('images'), $new_name_im6);


                            $dataim6 = images_mn::find($idimf+4);
                            $dataim6->name_image = $new_name_im6;
                            $dataim6->confirm = $request->get('userID');
                            $dataim6->status = '1';

                            // echo "<br>".$dataim6;
                            $dataim6->save();

                        }

                        // "<br>";

                        $image7 = $request->file('image_7');
        if($image7 != ''){
                        $new_name_7 = rand() . '.' . $image7->getClientOriginalExtension();
                        $new_name_im7 = 'ODB-'.$new_name_7;
                        $image7->move(public_path('images'), $new_name_im7);


                            $dataim7 = images_mn::find($idimf+5);
                            $dataim7->name_image = $new_name_im7;
                            $dataim7->confirm = $request->get('userID');
                            $dataim7->status = '1';

                            // echo "<br>".$dataim7;
                            $dataim7->save();

                        }

                        // "<br>";

                        $imageA = $request->file('image_A');
        if($imageA != ''){
                        $new_name_A = rand() . '.' . $imageA->getClientOriginalExtension();
                        $new_name_imA = 'FL-'.$new_name_A;
                        $imageA->move(public_path('images'), $new_name_imA);


                            $dataimA = images_mn::find($idimf+6);
                            $dataimA->name_image = $new_name_imA;
                            $dataimA->confirm = $request->get('userID');
                            $dataimA->status = '1';

                            // echo "<br>".$dataimA;
                            $dataimA->save();

                        }

                        // "<br>";

                        $imageB = $request->file('image_B');
        if($imageB != ''){
                        $new_name_B = rand() . '.' . $imageB->getClientOriginalExtension();
                        $new_name_imB = 'FR-'.$new_name_B;
                        $imageB->move(public_path('images'), $new_name_imB);


                            $dataimB = images_mn::find($idimf+7);
                            $dataimB->name_image = $new_name_imB;
                            $dataimB->confirm = $request->get('userID');
                            $dataimB->status = '1';

                            // echo "<br>".$dataimB;
                            $dataimB->save();

                        }

                        // "<br>";

                        $imageC = $request->file('image_C');
        if($imageC != ''){
                        $new_name_C = rand() . '.' . $imageC->getClientOriginalExtension();
                        $new_name_imC = 'BL-'.$new_name_C;
                        $imageC->move(public_path('images'), $new_name_imC);


                            $dataimC = images_mn::find($idimf+8);
                            $dataimC->name_image = $new_name_imC;
                            $dataimC->confirm = $request->get('userID');
                            $dataimC->status = '1';

                            // echo "<br>".$dataimC;
                            $dataimC->save();
                        }
                        // "<br>";

                        $imageD = $request->file('image_D');
        if($imageD != ''){
                        $new_name_D = rand() . '.' . $imageD->getClientOriginalExtension();
                        $new_name_imD = 'BR-'.$new_name_D;
                        $imageD->move(public_path('images'), $new_name_imD);


                            $dataimD = images_mn::find($idimf+9);
                            $dataimD->name_image = $new_name_imD;
                            $dataimD->confirm = $request->get('userID');
                            $dataimD->status = '1';

                            // echo "<br>".$dataimD;
                            $dataimD->save();
                        }

                        // "<br>";

                        $vdo = $request->input('file_vdo');
        if($vdo != '' ){


                            $dataimV = images_mn::find($idimf+10);
                            $dataimV->name_image = $request->get('file_vdo');
                            $dataimV->confirm = $request->get('userID');
                            $dataimV->status = '1';

                            // echo "<br>".$dataimV;
                            $dataimV->save();

                        }

                        $status_tech = $request->input('status_tech');
                        $file_vdo = $request->input('file_vdo');

                if($status_tech=='0'){

                        $id_im = $request->input('id_im');

                        $dataim = im_puk::find($id_im);
                        $dataim->im_2 = $new_name_im2;
                        $dataim->im_3 = $new_name_im3;
                        $dataim->im_4 = $new_name_im4;
                        $dataim->im_5 = $new_name_im5;
                        $dataim->im_6 = $new_name_im6;
                        $dataim->im_7 = $new_name_im7;
                        $dataim->im_A = $new_name_imA;
                        $dataim->im_B = $new_name_imB;
                        $dataim->im_C = $new_name_imC;
                        $dataim->im_D = $new_name_imD;
                        $dataim->im_V = $request->get('file_vdo');
                        $dataim->confirm_tech = $request->get('userID');
                        $dataim->status_tech = '1';

                        // echo $dataim;
                        $dataim->save();
                }
                else if($status_tech=='1' && $file_vdo!='')
                {
                        $id_im = $request->input('id_im');

                        $dataim = im_puk::find($id_im);
                        $dataim->im_V = $request->get('file_vdo');

                        $dataim->save();
                }
                else
                {
                    if($inspectiontype=='1')
                    {
                        return redirect('/edit')->with('success', 'ได้ทำการเพิ่ม การประชุมย่อย เรียบร้อยแล้ว');
                    }else{

                        $images = DB::table('add_inspection_cars')
                        ->select('add_inspection_cars.id as id_cars','add_inspection_cars.fromtent','image_fire_floods.*',
                                 'image_fire_floods.id_car as id_car_im')
                        ->leftjoin('image_fire_floods','add_inspection_cars.id','=','image_fire_floods.id_car')
                        ->where('add_inspection_cars.id', '=', $id_car)
                        ->get();

                        return view('upimg_fire_flood',compact('images'));
                    }
                }

        if($inspectiontype=='1')
            {
                return redirect('/edit')->with('success', 'ได้ทำการเพิ่ม การประชุมย่อย เรียบร้อยแล้ว');
            }else{

                $images = DB::table('add_inspection_cars')
                ->select('add_inspection_cars.id as id_cars','add_inspection_cars.fromtent','image_fire_floods.*',
                         'image_fire_floods.id_car as id_car_im')
                ->leftjoin('image_fire_floods','add_inspection_cars.id','=','image_fire_floods.id_car')
                ->where('add_inspection_cars.id', '=', $id_car)
                ->get();

                // echo $images;
                return view('upimg_fire_flood',compact('images'));
            }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show($id_car)
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $inputAll = $request->all();
        var_dump($inputAll);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(brand $brand)
    {
        //
    }
}
