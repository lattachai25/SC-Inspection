<?php

namespace App\Http\Controllers;
use App\add_inspection_custo;
use App\add_inspection_car;
use App\add_inspection_date;
use App\type_car;
use App\images_mn;
use App\im_puk;
use App\appointment;
use App\Province;
use App\district;
use App\subdistrict;
use App\package;
use App\color;
use App\brand;
use App\dealer;
use App\technician;
use App\cc;
use DB;
use Auth;
use Validator;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        // $data = add_inspection_custo::all();

        $data = DB::table('add_inspection_custos')
        ->select('add_inspection_custos.*','add_inspection_cars.*','add_inspection_dates.*','brands.*','models.*')
        ->join('add_inspection_cars','add_inspection_custos.id','=','add_inspection_cars.id')
        ->join('add_inspection_dates','add_inspection_custos.id','=','add_inspection_dates.id')
        ->join('brands','add_inspection_cars.carbrand','=','brands.id_brand')
        ->join('models','add_inspection_cars.carmodel','=','models.id_model')
        ->orderBy('add_inspection_custos.id', 'DESC')
        ->paginate(20);

        return view('appointment', compact('data'));
    }

    public function search() {

        // Sets the parameters from the get request to the variables.
        // $search = Request::get('search');
        $query=request('search');

        // Perform the query using Query Builder
        $data = DB::table('add_inspection_custos')
        ->select('add_inspection_custos.*','add_inspection_cars.*','add_inspection_dates.*',
                 'brands.*','models.*')

        ->join('add_inspection_cars', 'add_inspection_custos.id', '=', 'add_inspection_cars.id')
        ->join('add_inspection_dates', 'add_inspection_custos.id', '=', 'add_inspection_dates.id')
        ->join('brands','add_inspection_cars.carbrand','=','brands.id_brand')
        ->join('models','add_inspection_cars.carmodel','=','models.id_model')
        ->where('firstname', 'like' ,'%' . $query . '%')
        ->orwhere('idcard', 'like' ,'%' . $query . '%')
        ->orwhere('tel', 'like' ,'%' . $query . '%')
        ->orwhere('name_brand', 'like' ,'%' . $query . '%')
        ->orwhere('name_model', 'like' ,'%' . $query . '%')
        ->orwhere('inspectiondate', 'like' ,'%' . $query . '%')
        ->paginate(20);
        // dd($data);
        return view('appointment', compact('data'));

    }

    public function imageUpload()
    {
        // $data = carregnum::all();
        return view('add-inspection-appointment');
    }
    public function imageUploadPost()
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images_test'), $imageName);

        // echo $imageName;

        return back()
            ->with('success',$imageName)
            ->with('image',$imageName);

    }


    function action(Request $request)
    {


        $validation = Validator::make($request->all(), [
                'image_mile' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240'
            ]);


            if($validation->passes() && $validation != '')
            {
                $image = $request->file('image_mile');
                $new_name_mi = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_mile = 'mile'.$new_name_mi;
                $image->move(public_path('images_test'), $new_name_mile);
                return response()->json([
                'message'   => $new_name_mile,
                'uploaded_image' => '<img src="/images_test/'.$new_name_mile.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message'   => $validation->errors()->all(),
                    'uploaded_image' => '',
                    'class_name'  => 'alert-success'
                ]);
            }

    }


    function action1(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_num' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240'
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
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $auth_id = Auth::user()->id;

         $datas = DB::table('add_inspection_custos')
        ->select('add_inspection_custos.*','add_inspection_cars.*','add_inspection_dates.*',
                 'provinces.name_th','amphures.name_th as name_am','districts.name_th as name_dis',
                 'brands.name_brand','models.name_model','n.car_color as color_n','ccs.cc',
                 'sub_models.sub_model','b.car_color as color_b','dealers.dealer_name','packages.package_name',
                 'technicians.name_tech','type_cars.*')

        ->join('add_inspection_cars', 'add_inspection_custos.id', '=', 'add_inspection_cars.id')
        ->join('add_inspection_dates', 'add_inspection_custos.id', '=', 'add_inspection_dates.id')
        ->join('provinces', 'add_inspection_custos.province', '=', 'provinces.id')
        ->join('amphures', 'add_inspection_custos.district', '=', 'amphures.id')
        ->join('districts', 'add_inspection_custos.subdistrict', '=', 'districts.id')
        ->join('brands','add_inspection_cars.carbrand','=','brands.id_brand')
        ->join('models','add_inspection_cars.carmodel','=','models.id_model')
        ->leftjoin('sub_models','add_inspection_cars.submodel','=','sub_models.id_sub_model')
        ->join('colors as b','add_inspection_cars.oldcolor','=','b.id_color')
        ->leftjoin('colors as n','add_inspection_cars.newcolor','=','n.id_color')
        ->join('ccs','add_inspection_cars.cc','=','ccs.id_cc')
        ->leftjoin('dealers','add_inspection_cars.fromtent','=','dealers.id_dealer')
        ->join('packages','add_inspection_dates.package','=','packages.id_package')
        ->join('technicians','add_inspection_dates.inspector','=','technicians.id_tech')
        ->join('type_cars','add_inspection_cars.type_car','=','type_cars.id_type')

        ->where('add_inspection_custos.id', '=', $id)
        ->groupBy('add_inspection_custos.id')
        ->get();


         $images = DB::table('add_inspection_custos')
        ->select('m.name_image as image_mile','nu.name_image as image_num')
        ->join('images_mns as m','add_inspection_custos.id','=','m.id_car')
        ->join('images_mns as nu','add_inspection_custos.id','=','nu.id_car')

        ->where('m.type_image', '=', '0')
        ->where('nu.type_image', '=', '1')
        ->where('add_inspection_custos.id', '=', $id)
        ->get();


        $position = DB::table('users')
        // ->select('users.*')
        ->select('position.*','users.*')
        ->join('position','users.position','=','position.id_position')
        ->where('users.id', '=', $auth_id)
        ->get();

      return view('views_ins', compact('datas','images','position'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
            // $data = add_inspection_custo::find($id);
            // return view('edit_ins', compact('data'));

            $datas = DB::table('add_inspection_custos')
            ->select('add_inspection_custos.*','add_inspection_cars.*','add_inspection_dates.*',
                     'provinces.name_th','amphures.name_th as name_am','districts.name_th as name_dis',
                     'provinces.id as id_pro','amphures.id as id_am','districts.id as id_dis',
                     'brands.*','models.*','ccs.*','b.id_color as id_b','n.id_color as id_n','sub_models.*','packages.*',
                     'technicians.*','dealers.*','b.car_color as n_b','n.car_color as n_n','type_cars.type_car as name_type','type_cars.id_type')

            ->join('add_inspection_cars', 'add_inspection_custos.id', '=', 'add_inspection_cars.id')
            ->join('add_inspection_dates', 'add_inspection_custos.id', '=', 'add_inspection_dates.id')
            ->join('provinces', 'add_inspection_custos.province', '=', 'provinces.id')
            ->join('amphures', 'add_inspection_custos.district', '=', 'amphures.id')
            ->join('districts', 'add_inspection_custos.subdistrict', '=', 'districts.id')
            ->join('brands','add_inspection_cars.carbrand','=','brands.id_brand')
            ->join('models','add_inspection_cars.carmodel','=','models.id_model')
            ->leftjoin('sub_models','add_inspection_cars.submodel','=','sub_models.id_sub_model')
            ->join('colors as b','add_inspection_cars.oldcolor','=','b.id_color')
            ->leftjoin('colors as n','add_inspection_cars.newcolor','=','n.id_color')
            ->join('ccs','add_inspection_cars.cc','=','ccs.id_cc')
            ->leftjoin('dealers','add_inspection_cars.fromtent','=','dealers.id_dealer')
            ->join('packages','add_inspection_dates.package','=','packages.id_package')
            ->join('technicians','add_inspection_dates.inspector','=','technicians.id_tech')
            ->join('type_cars','add_inspection_cars.type_car','=','type_cars.id_type')
            ->where('add_inspection_custos.id', '=', $id)
            ->groupBy('add_inspection_custos.id')
            ->get();

            $images = DB::table('add_inspection_custos')
            ->select('m.name_image as image_mile','nu.name_image as image_num')
            ->join('images_mns as m','add_inspection_custos.id','=','m.id_car')
            ->join('images_mns as nu','add_inspection_custos.id','=','nu.id_car')

            ->where('m.type_image', '=', '0')
            ->where('nu.type_image', '=', '1')
            ->where('add_inspection_custos.id', '=', $id)
            ->get();

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
        return view('edit_ins',compact('datas','province','pac','col','brand','dealer','cc','tech','images','type_car'));

        // return view('edit_ins', compact('datas','province'));
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $inputAll = $request->all();
        // var_dump($inputAll);
        // var_dump('---->>>>'.$id);
        // data customer
        $data = add_inspection_custo::find($id);
        $data->nametitle = $request->get('nametitle');
        $data->firstname = $request->get('firstname');
        $data->lastname = $request->get('lastname');
        $data->address = $request->get('address');
        $data->province = $request->get('province');
        $data->district = $request->get('district');
        $data->subdistrict = $request->get('subdistrict');
        $data->postalcode = $request->get('postalcode');
        $data->idcard = $request->get('idcard');
        $data->tel = $request->get('tel');
        $data->customertype = $request->get('customertype');
        $data->contact = $request->get('contact');
        $data->tel_contact = $request->get('tel_contact');

        $data->save();

        // data car
        $data = add_inspection_car::find($id);
        $data->carbrand = $request->get('carbrand');
        $data->carmodel = $request->get('carmodel');
        $data->submodel = $request->get('submodel');
        $data->oldcolor = $request->get('oldcolor');
        $data->newcolor = $request->get('newcolor');
        $data->year = $request->get('year');
        $data->seatnum = $request->get('seatnum');
        $data->place = $request->get('place');
        $data->registertype = $request->get('registertype');
        $data->type_car = $request->get('type_car');
        $data->carregnum = $request->get('carregnum');
        $data->mileage = $request->get('mileage');
        $data->dateregister = $request->get('dateregister');
        $data->numowners = $request->get('numowners');
        $data->cc = $request->get('cc');
        $data->geartype = $request->get('geartype');
        $data->engine = $request->get('engine');
        $data->vin = $request->get('vin');
        $data->benzine = $request->get('benzine');
        $data->diesel = $request->get('diesel');
        $data->hybrid = $request->get('hybrid');
        $data->electric = $request->get('electric');
        $data->lpg = $request->get('lpg');
        $data->ngv = $request->get('ngv');
        $data->cng = $request->get('cng');
        $data->imported_car = $request->get('imported_car');
        $data->carinsurance = $request->get('carinsurance');
        $data->expinsurance = $request->get('expinsurance');
        $data->insurance = $request->get('insurance');
        $data->tent = $request->get('tent');
        $data->fromtent = $request->get('fromtent');
        $data->price = $request->get('price');
        $data->payment = $request->get('payment');

        $data->save();

        // data date ,remark
        $data = add_inspection_date::find($id);
        $data->inspectiontype = $request->get('inspectiontype');
        $data->inspector = $request->get('inspector');
        $data->inspectiondate = $request->get('inspectiondate');
        $data->inspectiontime = $request->get('inspectiontime');
        $data->package = $request->get('package');
        $data->remark = $request->get('remark');

        $data->save();

        return redirect('appointment')->with('success', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = add_inspection_custo::find($id);
        $data->delete();
        $data = add_inspection_car::find($id);
        $data->delete();
        $data = add_inspection_date::find($id);
        $data->delete();
        $data = images_mn::where('id_car', $id);
        $data->delete();
        $data = im_puk::where('id_car', $id);
        $data->delete();

        return redirect('appointment')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
        //  echo $id;
    }


}
