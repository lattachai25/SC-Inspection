<?php

namespace App\Http\Controllers;

use App\add_inspection_car;
use Illuminate\Http\Request;
use App\province;
use App\Validator;

class AddInspectionCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('users');
    }

    public function imageUpload()
    {
        // $data = carregnum::all();
        return view('addreport');
    }


    function action(Request $request)
    {


        $validation = Validator::make($request->all(), [
                'image_0' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);


            if($validation->passes())
            {
                $image = $request->file('image_0');
                $new_00 = rand() . '.' . $image->getClientOriginalExtension();
                $new_im_00 = '01_'.$new_00;
                $image->move(public_path('images_test'), $new_im_00);
                return response()->json([
                'message_0'   => $new_im_00,
                'uploaded_image_0' => '<img src="/images_test/'.$new_im_00.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_0'   => $validation->errors()->all(),
                    'uploaded_image_0' => '',
                    'class_name'  => 'alert-success'
                ]);
            }

    }


    function action1(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_num' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
            if($validation->passes() && $validation != '')
            {
                $image = $request->file('image_num');
                $new_name_n = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_num = 'num'.$new_name_n;
                $image->move(public_path('images_test'), $new_name_num);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_num,
                'message_num'   => $new_name_num,
                'uploaded_image_num' => '<img src="/images_test/'.$new_name_num.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
            return response()->json([
                'message_num'   => $validation->errors()->all(),
                'uploaded_image_num' => '',
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\add_inspection_car  $add_inspection_car
     * @return \Illuminate\Http\Response
     */
    public function show(add_inspection_car $add_inspection_car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\add_inspection_car  $add_inspection_car
     * @return \Illuminate\Http\Response
     */
    public function edit(add_inspection_car $add_inspection_car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\add_inspection_car  $add_inspection_car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, add_inspection_car $add_inspection_car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\add_inspection_car  $add_inspection_car
     * @return \Illuminate\Http\Response
     */
    public function destroy(add_inspection_car $add_inspection_car)
    {
        //
    }
}
