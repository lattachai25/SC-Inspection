@extends('layouts.admin_layout')
@section('title', 'Inspection Appointment')
@section('content')
<div class="col-md-2"></div>
<div class="col-md-9" style="margin-top:2%; margin-left:5%;">

    <div class="row">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <div class="col-12">
            <h3 class="title">เพิ่มข้อมูลนัดตรวจรถ</h3>
        </div>
        <hr noshade><br>
        <a style="margin-right:3%">
            @foreach($id_max as $key => $id_maxs)
            {{-- {{ $idmax = $id_maxs->id }} --}}

                    <?php

                        $idmax = $id_maxs->id;
                        $insmax = $id_maxs->ins;
                        $id_car = $idmax+1;
                        $insnext = $insmax+1;
                        $date = substr(date("Y"),2);
                        $idCS = 'CS'.$date.str_pad(($id_car),5,'0',STR_PAD_LEFT);
                        $ins_maxins = 'INS'.str_pad(($insnext),5,'0',STR_PAD_LEFT);
                        echo 'รหัสตรวจสภาพรถยนต์ : '.$idCS;

                    ?>
            @endforeach
        </a>
        <br><br>
        <div class="col-12">
            <form action='{{ route('add-inspection-appointment.store') }}' method='POST' enctype='multipart/form-data' id="add_inspection">
                @csrf
                <input type="hidden" name="id_car" value="{{ $id_car }}">
                <input type="hidden" name="ins" value="{{ $insnext }}">
                {{-- {{ csrf_field() }} --}}
                <div class="form-title">ข้อมูลลูกค้า</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row">
                        <label class="col-lg-1" for="nameTitle">คำนำหน้า</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="nametitle" id="nameTitle" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="บริษัท">บริษัท</option>
                            <option value="เต๊นท์">เต็นท์</option>
                        </select>

                        <label class="col-lg-1" for="firstname" align="right">ชื่อ</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="firstname" id="firstname" required>

                        <label class="col-lg-1" for="lastname" align="right">นามสกุล</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="lastname" id="lastname" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-1" for="address">ที่อยู่</label>
                        <input class="col-lg-6 form-control form-control-sm form-border" type="text" name="address" id="address" required>

                        <label class="col-lg-1" for="province" align="right">จังหวัด</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="province" id="province" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                            @foreach($province as $key => $data)
                            <option value="{{ $data->id }}">{{ $data->name_th }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="district">เขต/อำเภอ</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="district" id="district" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                        </select>

                        <label class="col-lg-2" for="subDistrict" align="right">แขวง/ตำบล</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="subdistrict" id="subDistrict" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                        </select>

                        <label class="col-lg-2" for="postalCode" align="right">รหัสไปรษณีย์</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="postalcode" id="postalCode" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="idCard">เลขประจำตัวประชาชน</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="idcard" id="idCard">

                        <label class="col-lg-2" for="tel" align="right">เบอร์โทร - ลูกค้า</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="tel" id="tel" required>

                        <label class="col-lg-2" for="customerType" align="right">ประเภทสมาชิก</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="customertype" id="customerType" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                            <option value="สมาชิกทั่วไป">สมาชิกทั่วไป</option>
                            <option value="สมาชิกรูปแบบเต๊นท์" selected>สมาชิกรูปแบบเต็นท์</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="contact">ผู้ติดต่อ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="contact" id="contact" required>

                        <label class="col-lg-2" for="tel_contact" align="right">เบอร์โทร - ผู้ติดต่อ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="tel_contact" id="tel_contact" required>
                    </div>
                </div>

                <div class="form-title mt-3 mt-lg-0">ข้อมูลรถ</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row">
                        <label class="col-lg-1" for="carBrand">ยี่ห้อ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="carbrand" id="carBrand" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                            @foreach($brand as $key => $brands)
                            <option value="{{ $brands->id_brand }}">{{ $brands->name_brand }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="carModel" align="right">รุ่น</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" type="text" name="carmodel" id="carModel" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                        </select>

                        <label class="col-lg-1" for="subModel" align="right">รุ่นย่อย</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" type="text" name="submodel" id="subModel" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-1" for="oldColor">สีเดิม</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="oldcolor" id="oldColor" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                            @foreach($col as $key => $cols)
                            <option value="{{ $cols->id_color }}">{{ $cols->car_color }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="newColor" align="right">สีปัจจุบัน</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="newcolor" id="newColor" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                            @foreach($col as $key => $cols)
                            <option value="{{ $cols->id_color }}">{{ $cols->car_color }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="year" align="right">ปี</label>
                        <input class="col-lg-1 form-control form-control-sm form-border" type="text" name="year" id="year" required>

                        <label class="col-lg-2 " for="seatNum" align="right">จำนวนที่นั่ง</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="seatnum" id="seatNum" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                            <option value="2">2</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="11">11</option>
                            <option value="12">12</option>

                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="place">สถานที่ตรวจเช็ครถ</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="place" id="place" required>
                            <option value="ดับเบิ้ลยู สมาร์ท">ดับเบิ้ลยู สมาร์ท</option>
                        </select>

                        <label class="col-lg-2 pl-lg-5" for="registerType" align="right">ประเภทจดทะเบียน</label>
                        <div class="col-lg-4 btnCustom">
                            <input type="radio" name="registertype" id="registerType1" value="0" checked>
                            <label for="registerType1">รถยนต์ส่วนบุคคล</label>

                            <input type="radio" name="registertype" id="registerType2" value="1">
                            <label for="registerType2">จดในนามบริษัท</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="type_car">ประเภทรถ</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="type_car" id="type_car" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                            @foreach($type_car as $key => $type_cars)
                                <option value="{{ $type_cars->id_type }}">{{ $type_cars->type_car }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-2" for="imported_car" align="right">ประเภทรถนำเข้า</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="imported_car" id="imported_car1" value="นำเข้า" checked>
                            <label for="imported_car1">นำเข้า</label>
                            <input type="radio" name="imported_car" id="imported_car2" value="ไม่นำเข้า">
                            <label for="imported_car2">ไม่นำเข้า</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="carRegNum">ทะเบียนรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="carregnum" id="carRegNum" required>

                        <label class="col-lg-2 pl-lg-5" for="mileage" align="right">เลขไมล์ปัจจุบัน</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="mileage" id="mileage" required>

                        <label class="col-lg-2 pl-lg-5" for="dateRegister" align="right">วันที่จดทะเบียนรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="dateregister" id="dateRegister" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="numOwners">จำนวนเจ้าของเดิม</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="numowners" id="numOwners" required>

                        {{-- <label class="col-lg-2" for="cc">ความจุเครื่องยนต์ (CC)</label>
                        <input class="col-lg-1 form-control form-control-sm form-border" type="text" name="cc" id="cc" required> --}}

                        <label class="col-lg-2" for="cc" align="right">ความจุเครื่องยนต์ (CC)</label>
                        <select class="col-lg-1 form-control form-control-sm form-border" type="text" name="cc" id="cc" required>
                            <option selected hidden>---  กรุณาเลือก  ---</option>
                            @foreach($cc as $key => $ccs)
                            <option value="{{ $ccs->id_cc }}" {{ ($ccs->cc == '1.8' ? 'selected' : '')}}>{{ $ccs->cc }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-2" for="gearType" align="right">ระบบเกียร์</label>
                        <div class="col-lg-3 btnCustom">
                            <input type="radio" name="geartype" id="gearType1" value="0" checked>
                            <label for="gearType1">เกียร์ธรรมดา</label>

                            <input type="radio" name="geartype" id="gearType2" value="1">
                            <label for="gearType2">เกียร์อัตโนมัติ</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="engine">หมายเลขเครื่องยนต์</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="engine" id="engine" required>

                        <label class="col-lg-2 pl-lg-5" for="vin" align="right">หมายเลขตัวถัง</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="vin" id="vin" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="fuelType">ประเภทเชื้อเพลิง</label>
                        <div class="col-lg-6 btnCustom">
                            <input type="checkbox" name="benzine" id="benzine" value="1">
                            <label for="benzine">เบนซิน</label>
                            <input type="checkbox" name="diesel" id="diesel" value="1">
                            <label for="diesel">ดีเซล</label>
                            <input type="checkbox" name="hybrid" id="hybrid" value="1">
                            <label for="hybrid">ไฮบริด</label>
                            <input type="checkbox" name="electric" id="electric" value="1">
                            <label for="electric">ไฟฟ้า</label>
                            <input type="checkbox" name="lpg" id="lpg" value="1">
                            <label for="lpg">LPG</label>
                            <input type="checkbox" name="ngv" id="ngv" value="1">
                            <label for="ngv">NGV</label>
                            <input type="checkbox" name="cng" id="cng" value="1">
                            <label for="cng">CNG</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="carInsurance" >รถมีประกันหรือไม่</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carinsurance" id="carInsurance1" value="0" checked>
                            <label for="carInsurance1">มี</label>
                            <input type="radio" name="carinsurance" id="carInsurance2" value="1">
                            <label for="carInsurance2">ไม่มี</label>
                        </div>

                        <label class="col-lg-2" for="expInsurance">วันหมดอายุประกันภัย</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="expinsurance" id="expInsurance">

                        <label class="col-lg-2 pl-lg-5" for="insurance" align="right">บริษัทประกันภัย</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="insurance" id="insurance">
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-1" for="tent">รถเต็นท์</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="tent" id="tent1" value="0" checked>
                            <label for="tent1">ใช่</label>
                            <input type="radio" name="tent" id="tent2" value="1">
                            <label for="tent2">ไม่ใช่</label>
                        </div>

                        <label class="col-lg-1 pl-lg-0" for="fromTent">รถจากเต็นท์</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="fromtent" id="fromTent" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                            @foreach($dealer as $key => $dealers)
                                <option value="{{ $dealers->id_dealer }}">{{ $dealers->dealer_name }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="price" align="right">ราคา</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="price" id="price" required>

                        <label class="col-lg-1 pl-lg-1" for="payment">ผ่อนงวดละ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="payment" id="payment" required>
                    </div>
                </div>

                <div class="form-title mt-3 mt-lg-0">วันนัดตรวจรถ</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row">
                        <label class="col-lg-2" for="inspectionType">ประเภทการตรวจสภาพ</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="inspectiontype" id="inspectionType" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                            <option value="0">Premium</option>
                            <option value="1">Standard</option>
                            <option value="2">Basic</option>
                        </select>

                        <label class="col-lg-2 pl-lg-5" for="inspector" align="right">ช่างที่ไปตรวจรถ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="inspector" id="inspector" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                            @foreach($tech as $key => $techs)
                            <option value="{{ $techs->id_tech }}">{{ $techs->name_tech }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2" for="inspectionDate">วันที่นัดตรวจรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="inspectiondate" id="inspectionDate" required>

                        <label class="col-lg-2 pl-lg-5" for="inspectionTime" align="right">เวลาที่นัดตรวจรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="time" name="inspectiontime" id="inspectionTime" required>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-1" for="package">แพคเกจ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="package" id="package" required>
                            <option value="" selected hidden>---  กรุณาเลือก  ---</option>
                            @foreach($pac as $key => $pacs)
                            <option value="{{ $pacs->id_package }}">{{ $pacs->package_name }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-2 pl-lg-5" for="remark" align="right">Remark</label>
                        <textarea class="col-lg-5 form-control form-control-sm form-border" name="remark" id="remark"></textarea>
                    </div>
                    <br>
                {{-- </form> --}}
                    <div class="list-group-item" id="images_NM">

                        <label class="col-lg-5" for="package">รูปเลขไมล์รถ</label>
                        <label class="col-lg-1" for="package"></label>
                        <label class="col-lg-5" for="package">รูปเล่มทะเบียนรถ</label>

                            {{--  images --}}
                        <div class="row">
                            <div class="col-md-6 list-group-item">
                                {{-- <form method="post" id="upload_form_mile" enctype="multipart/form-data">
                                    {{ csrf_field() }} --}}
                                    <div class="row">
                                        <div class="col-md-11">
                                            <input type="file" name="image_mile" class="form-control" height="2%" value="0" required>
                                        </div>
                                        <div class="col-md-1">
                                            {{-- <button class="btn btn-success" onclick="images1()">ADD</button> --}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="alert col-md-11" id="message" style="display: none;"></div>
                                        {{-- <input type="text" id="message" style="display: none;" name="message" > --}}

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <span id="uploaded_image"></span>
                                        </div>
                                    </div>
                                {{-- </form> --}}
                            </div>
                            <div class="col-md-6 list-group-item">
                                {{-- <form method="post" id="upload_form_num" enctype="multipart/form-data">
                                    {{ csrf_field() }} --}}
                                    <div class="row">
                                        <div class="col-md-11">
                                            <input type="file" name="image_num" class="form-control" height="2%" value="1" required>

                                        </div>
                                        <div class="col-md-1">
                                            {{-- <button type="submit" class="btn btn-success">ADD</button> --}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="alert col-md-11" id="message_num" style="display: none"></div>
                                        {{-- <input type="text" id="message_num" name="message_num" > --}}
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <span id="uploaded_image_num"></span>
                                        </div>
                                    </div>
                                {{-- </form> --}}
                            </div>
                        </div>
                     </div>

        {{-- <form action='{{ route('add-inspection-appointment.store') }}' method='POST' enctype='multipart/form-data' id="add_inspection">
            @csrf --}}
                <div class="col-12 pt-2 pt-lg-4 text-center">
                    <button class="btn btn-success" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> บันทึก</button>
                   <a href="{{ route('appointment.index')}}"> <button class="btn btn-danger" type="button"><i class="fa fa-times" aria-hidden="true"></i> ยกเลิก</button></a>
                </div>
        </form>

        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
</div>
</div>
<script type="text/javascript">

$('#inspectionType').change(function(){
    var ID_basic = $(this).val();
    // alert(ID_basic);

    if(ID_basic=='2')
    {
        $("#images_NM").remove();
    }else{
        $("#images_NM").addClass();
    }

});

$('#province').change(function(){
    var provinceID = $(this).val();
    if(provinceID){
        $.ajax({
           type:"GET",
           url:"{{url('get-district-list')}}?province_id="+provinceID,
           success:function(res){
            if(res){
                $("#district").empty();
                $("#district").append('<option value="" selected hidden>---  กรุณาเลือก  ---</option>');
                $.each(res,function(key,value){
                    $("#district").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#district").empty();
            }
           }
        });
    }else{
        $("#district").empty();
        $("#subDistrict").empty();
    }
});
$('#district').on('change',function(){
    var districtID = $(this).val();
    if(districtID){
        $.ajax({
           type:"GET",
           url:"{{url('get-subdis-list')}}?amphure_id="+districtID,
           success:function(res){
            if(res){
                $("#subDistrict").empty();
                $("#subDistrict").append('<option value="" selected hidden>---  กรุณาเลือก  ---</option>');
                $.each(res,function(key,value){
                    $("#subDistrict").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#subDistrict").empty();
            }
           }
        });
    }else{
        $("#subDistrict").empty();
    }
    // alert(districtID);
   });


//  brand - model - sub_model
$('#carBrand').change(function(){
    var carBrandID = $(this).val();
    if(carBrandID){
        $.ajax({
           type:"GET",
           url:"{{url('get-model-list')}}?carBrand_id="+carBrandID,
           success:function(res){
            if(res){
                $("#carModel").empty();
                $("#carModel").append('<option value="" selected hidden>---  กรุณาเลือก  ---</option>');
                $.each(res,function(key,value){
                    $("#carModel").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#carModel").empty();
            }
           }
        });
    }else{
        $("#carModel").empty();
        $("#subModel").empty();
    }
});
$('#carModel').on('change',function(){
    var carModelID = $(this).val();
    if(carModelID){
        $.ajax({
           type:"GET",
           url:"{{url('get-submodel-list')}}?id_model="+carModelID,
           success:function(res){
            if(res){
                $("#subModel").empty();
                $("#subModel").append('<option value="" selected hidden>---  กรุณาเลือก  ---</option>');
                $.each(res,function(key,value){
                    $("#subModel").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#subModel").empty();
            }
           }
        });
    }else{
        $("#subModel").empty();
    }
    // alert(carModelID);
   });



//  images mile

$(document).ready(function(){
        $('#add_inspection').on('change', function(event){
            event.preventDefault();
            // var imagesD = $(this).val();
            // alert(imagesD);
            $.ajax({
            url:"{{ route('ajaxupload.action') }}",
            method:"POST",
            data:new FormData(this),
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(data)
                {
                    $('#message').css('display', 'block');
                    $('#message').html(data.message);
                    $('#message').addClass(data.class_name);
                    $('#uploaded_image').html(data.uploaded_image);
                }
            })
        });

});

   //  images num-car
$(document).ready(function(){
    $('#add_inspection').on('change', function(event){
        event.preventDefault();
        $.ajax({
        url:"{{ route('ajaxuploadnum.action1') }}",
        method:"POST",
        data:new FormData(this),
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(data)
            {
                $('#message_num').css('display', 'block');
                $('#message_num').html(data.message_num);
                $('#message_num').addClass(data.class_name);
                $('#uploaded_image_num').html(data.uploaded_image_num);
            }
        })
    });

});

</script>


@endsection
