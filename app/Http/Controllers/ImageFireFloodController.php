<?php

namespace App\Http\Controllers;

use App\image_fire_flood;
use Illuminate\Http\Request;

use App\brand;
use App\add_inspection_car;
use App\images_mn;
use App\im_puk;
use Validator;
use DB;

class ImageFireFloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
                return view('upimg_fire_flood');
    }

    function action1(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_flood1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_flood1');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_flood1 = 'flood1-'.$new_name;
                $image->move(public_path('images_test'), $new_name_flood1);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_flood1,
                'message_flood1'   => $new_name_flood1,
                'uploaded_image_flood1' => '<img src="/images_test/'.$new_name_flood1.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_flood1'   => $validation->errors()->all(),
                    'uploaded_image_flood1' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }
    function action2(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_flood2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_flood2');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_flood2 = 'flood2-'.$new_name;
                $image->move(public_path('images_test'), $new_name_flood2);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_flood2,
                'message_flood2'   => $new_name_flood2,
                'uploaded_image_flood2' => '<img src="/images_test/'.$new_name_flood2.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_flood2'   => $validation->errors()->all(),
                    'uploaded_image_flood2' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }
    function action3(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_fire1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_fire1');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_fire1 = 'fire1-'.$new_name;
                $image->move(public_path('images_test'), $new_name_fire1);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_fire1,
                'message_fire1'   => $new_name_fire1,
                'uploaded_image_fire1' => '<img src="/images_test/'.$new_name_fire1.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_fire1'   => $validation->errors()->all(),
                    'uploaded_image_fire1' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }
    function action4(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_fire2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_fire2');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_fire2 = 'fire2-'.$new_name;
                $image->move(public_path('images_test'), $new_name_fire2);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_fire2,
                'message_fire2'   => $new_name_fire2,
                'uploaded_image_fire2' => '<img src="/images_test/'.$new_name_fire2.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_fire2'   => $validation->errors()->all(),
                    'uploaded_image_fire2' => '',
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

        // $inputAll = $request->all();
        // var_dump($inputAll);

        $id_car_im = $request->input('id_car_im');

        if($id_car_im==''){

            // flood1
            $image_flood1 = $request->file('image_flood1');
            if($image_flood1 != ''){
                $new_name_fl1 = rand() . '.' . $image_flood1->getClientOriginalExtension();
                $new_name_flood1 = 'Flood-1'.$new_name_fl1;
                $image_flood1->move(public_path('images'), $new_name_flood1);
                $i1 = '1';
            }else{
                $new_name_flood1='null';
                $i1 = '0';
            }

            // flood2
            $image_flood2 = $request->file('image_flood2');
            if($image_flood2 != ''){
                $new_name_fl2 = rand() . '.' . $image_flood2->getClientOriginalExtension();
                $new_name_flood2 = 'Flood-2'.$new_name_fl2;
                $image_flood2->move(public_path('images'), $new_name_flood2);
                $i2 = '1';
            }else{
                $new_name_flood2='null';
                $i2 = '0';
            }

            // fire1
            $image_fire1 = $request->file('image_fire1');
            if($image_fire1 != ''){
                $new_name_fi1 = rand() . '.' . $image_fire1->getClientOriginalExtension();
                $new_name_fire1 = 'Fire-1'.$new_name_fi1;
                $image_fire1->move(public_path('images'), $new_name_fire1);
                $i3 = '1';
            }else{
                $new_name_fire1='null';
                $i3 = '0';
            }

            // fire2
            $image_fire2 = $request->file('image_fire2');
            if($image_fire2 != ''){
                $new_name_fi2 = rand() . '.' . $image_fire2->getClientOriginalExtension();
                $new_name_fire2 = 'Fire-2'.$new_name_fi2;
                $image_fire2->move(public_path('images'), $new_name_fire2);
                $i4 = '1';
            }else{
                $new_name_fire2='null';
                $i4 = '0';
            }

            // echo "<br><br>Fire 1 : ".$new_name_fire1.' / Fire 2 : '.$new_name_fire2.' / Flood 1 : '.$new_name_flood1.' / Flood 2 : '.$new_name_flood2;

            $sum = $i1+$i2+$i3+$i4;

            if($sum >= 1 ){
                    $inputf = new image_fire_flood([

                        'id_car' => $request->input('id_car'),
                        'id_dealer' => $request->input('fromtent'),
                        'confirm_tech' => $request->input('userID'),
                        'im_fire1' => $new_name_fire1 ,
                        'im_fire2' => $new_name_fire2 ,
                        'im_flood1' => $new_name_flood1 ,
                        'im_flood2' => $new_name_flood2 ,
                        ]);

                    $inputf->save();
            }

            return redirect('/edit')->with('success', 'ได้ทำการเพิ่ม การประชุมย่อย เรียบร้อยแล้ว');
        }
        else
        {
            return redirect('/edit')->with('success', 'ได้ทำการเพิ่ม การประชุมย่อย เรียบร้อยแล้ว');
            //  update data images

            // echo $id_imf = $request->input('id_imf');

            // // flood1
            // $image_flood1 = $request->file('image_flood1');
            // if(isset($image_flood1)){
            // if($image_flood1 != ''){
            //     $new_name_fl1 = rand() . '.' . $image_flood1->getClientOriginalExtension();
            //     $new_name_flood1 = 'Flood-1'.$new_name_fl1;
            //     // $image_flood1->move(public_path('images'), $new_name_flood1);
            //     $i1 = '1';

            //      // update data image_fire1
            //      $dataimfl1 = image_fire_flood::where('id_imf', $id_imf);
            //      $dataimfl1->im_flood1 = $new_name_flood1;

            //     //  $dataimfl1->save();
            //     echo $dataimfl1;
            //     }
            // }

            // // flood2
            // $image_flood2 = $request->file('image_flood2');
            // if(isset($image_flood2)){
            // if($image_flood2 != ''){
            //     $new_name_fl2 = rand() . '.' . $image_flood2->getClientOriginalExtension();
            //     $new_name_flood2 = 'Flood-2'.$new_name_fl2;
            //     // $image_flood2->move(public_path('images'), $new_name_flood2);
            //     $i2 = '1';

            //     // update data image_fire1
            //     $dataimfl2 = image_fire_flood::where("id_imf", $id_imf);
            //     $dataimfl2->im_flood2 = $new_name_flood2;

            //     $dataimfl2->save();
            //     // echo $new_name_flood2;
            //     }
            // }

            // // fire1
            // $image_fire1 = $request->file('image_fire1');
            // if($image_fire1 != ''){
            //     $new_name_fi1 = rand() . '.' . $image_fire1->getClientOriginalExtension();
            //     $new_name_fire1 = 'Fire-1'.$new_name_fi1;
            //     $image_fire1->move(public_path('images'), $new_name_fire1);
            //     $i3 = '1';

            //     // update data image_fire1
            //     $dataimf1 = image_fire_flood::find($id_imf);
            //     $dataimf1->im_fire1 = $new_name_fire1;

            //     $dataimf1->save();

            // }else{
            //     $new_name_fire1='null';
            //     $i3 = '0';
            // }

            // // fire2
            // $image_fire2 = $request->file('image_fire2');
            // if($image_fire2 != ''){
            //     $new_name_fi2 = rand() . '.' . $image_fire2->getClientOriginalExtension();
            //     $new_name_fire2 = 'Fire-2'.$new_name_fi2;
            //     $image_fire2->move(public_path('images'), $new_name_fire2);
            //     $i4 = '1';

            //     // update data image_fire2
            //     $dataimf2 = image_fire_flood::find($id_imf);
            //     $dataimf2->im_fire2 = $new_name_fire2;

            //     $dataimf2->save();

            // }else{
            //     $new_name_fire2='null';
            //     $i4 = '0';
            // }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\image_fire_flood  $image_fire_flood
     * @return \Illuminate\Http\Response
     */
    public function show(image_fire_flood $image_fire_flood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\image_fire_flood  $image_fire_flood
     * @return \Illuminate\Http\Response
     */
    public function edit(image_fire_flood $image_fire_flood)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\image_fire_flood  $image_fire_flood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, image_fire_flood $image_fire_flood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\image_fire_flood  $image_fire_flood
     * @return \Illuminate\Http\Response
     */
    public function destroy(image_fire_flood $image_fire_flood)
    {
        //
    }
}
