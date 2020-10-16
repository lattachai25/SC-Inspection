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
            <h3 class="title">แก้ไขข้อมูลนัดตรวจรถ</h3>
        </div>
        <hr noshade>
        <br>
        <a style="margin-right:3%">
            @foreach($datas as $key => $id_maxs)
            {{-- {{ $idmax = $id_maxs->id }} --}}

                    <?php
                        $idmax = $id_maxs->id;
                        $insshow = $id_maxs->ins;
                        $date = substr(date("Y"),2);
                        $idCS = 'CS'.$date.str_pad(($idmax),5,'0',STR_PAD_LEFT);
                        $ins_maxins = 'INS'.str_pad(($insshow),5,'0',STR_PAD_LEFT);
                        echo ' รหัสตรวจสภาพรถยนต์ : '.$idCS;

                    ?>
            @endforeach
        </a>
        <br><br>

        <div class="col-12">

            @foreach($datas as $data)

            {{-- <form action="" method='POST'> --}}

            <form action="{{ route('appointment.update',$data->id) }}" method='POST'>
                @method('PATCH')
                @csrf
                <div class="form-title">ข้อมูลลูกค้า</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row">
                        <label class="col-lg-1" for="nameTitle">คำนำหน้า</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="nametitle" id="nameTitle" required>
                            <option selected hidden>---  กรุณาเลือก  ---</option>
                            <option value="นาย" {{($data->nametitle ==='นาย') ? 'selected' : ''}}>นาย</option>
                            <option value="นาง" {{($data->nametitle ==='นาง') ? 'selected' : ''}}>นาง</option>
                            <option value="นางสาว" {{($data->nametitle ==='นางสาว') ? 'selected' : ''}}>นางสาว</option>
                            <option value="บริษัท" {{($data->nametitle ==='บริษัท') ? 'selected' : ''}}>บริษัท</option>
                            <option value="เต๊นท์" {{($data->nametitle ==='เต๊นท์') ? 'selected' : ''}}>เต็นท์</option>
                        </select>

                        <label class="col-lg-1" for="firstname" align="right">ชื่อ</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="firstname" id="firstname" value="{{$data->firstname}}" required>

                        <label class="col-lg-1" for="lastname" align="right">นามสกุล</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="lastname" id="lastname" value="{{$data->lastname}}" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-1" for="address">ที่อยู่</label>
                        <input class="col-lg-6 form-control form-control-sm form-border" type="text" name="address" id="address" value="{{$data->address}}" required>

                        <label class="col-lg-1" for="province" align="right">จังหวัด</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="province" id="province" value="{{$data->province}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_pro }}" selected hidden>{{ $data->name_th }}</option>
                            @foreach($province as $key => $datas)
                            <option value="{{ $datas->id }}">{{ $datas->name_th }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="district">เขต/อำเภอ</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="district" id="district" value="{{$data->district}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_am }}">{{ $data->name_am }}</option>
                        </select>

                        <label class="col-lg-2" for="subdistrict" align="right">แขวง/ตำบล</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="subdistrict" id="subdistrict" value="{{$data->subdistrict}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_dis }}">{{ $data->name_dis }}</option>
                        </select>

                        <label class="col-lg-2" for="postalCode" align="right">รหัสไปรษณีย์</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="postalcode" id="postalCode" value="{{$data->postalcode}}" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="idCard">เลขประจำตัวประชาชน</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="idcard" id="idCard" value="{{$data->idcard}}">

                        <label class="col-lg-2" for="tel" align="right">เบอร์โทรศัพท์</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="tel" id="tel" value="{{$data->tel}}" required>

                        <label class="col-lg-2" for="customerType" align="right">ประเภทสมาชิก</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="customertype" id="customerType" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="สมาชิกทั่วไป" {{($data->customertype ==='สมาชิกทั่วไป') ? 'selected' : ''}}>สมาชิกทั่วไป</option>
                            <option value="สมาชิกรูปแบบเต๊นท์" {{($data->customertype ==='สมาชิกรูปแบบเต๊นท์') ? 'selected' : ''}}>สมาชิกรูปแบบเต็นท์</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="contact">ผู้ติดต่อ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="contact" id="contact" value="{{$data->contact}}">

                        <label class="col-lg-2" for="tel_contact" align="right">เบอร์โทร - ผู้ติดต่อ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="tel_contact" id="tel_contact" value="{{$data->tel_contact}}">
                    </div>
                </div>

                <div class="form-title mt-3 mt-lg-0">ข้อมูลรถ</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row">
                        <label class="col-lg-1" for="carbrand">ยี่ห้อ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="carbrand" id="carbrand" value="{{$data->carbrand}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_brand }}" selected hidden>{{ $data->name_brand }}</option>
                            @foreach($brand as $key => $datas)
                            <option value="{{ $datas->id_brand }}">{{ $datas->name_brand }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="carmodel" align="right">รุ่น</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" type="text" name="carmodel" id="carmodel" value="{{$data->carmodel}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_model }}">{{ $data->name_model }}</option>
                        </select>

                        <label class="col-lg-1" for="submodel" align="right">รุ่นย่อย</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" type="text" name="submodel" id="submodel" value="{{$data->submodel}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_sub_model }}">{{ $data->sub_model }}</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-1" for="oldcolor">สีเดิม</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="oldcolor" id="oldcolor" value="{{$data->oldcolor}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_b }}" selected hidden>{{ $data->n_b }}</option>
                            @foreach($col as $key => $datas)
                            <option value="{{ $datas->id_color }}">{{ $datas->car_color }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="newcolor" align="right">สีปัจจุบัน</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="newcolor" id="newcolor" value="{{$data->newcolor}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_n }}" selected hidden>{{ $data->n_n }}</option>
                            @foreach($col as $key => $datas)
                            <option value="{{ $datas->id_color }}">{{ $datas->car_color }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="year" align="right">ปี</label>
                        <input class="col-lg-1 form-control form-control-sm form-border" type="text" name="year" id="year" value="{{$data->year}}" required>

                        <label class="col-lg-2" for="seatNum" align="right">จำนวนที่นั่ง</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="seatnum" id="seatNum" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="2" {{($data->seatnum ==='2') ? 'selected' : ''}}>2</option>
                            <option value="4" {{($data->seatnum ==='4') ? 'selected' : ''}}>4</option>
                            <option value="5" {{($data->seatnum ==='5') ? 'selected' : ''}}>5</option>
                            <option value="6" {{($data->seatnum ==='6') ? 'selected' : ''}}>6</option>
                            <option value="7" {{($data->seatnum ==='7') ? 'selected' : ''}}>7</option>
                            <option value="11" {{($data->seatnum ==='11') ? 'selected' : ''}}>11</option>
                            <option value="12" {{($data->seatnum ==='12') ? 'selected' : ''}}>12</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="place">สถานที่ตรวจเช็ครถ</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="place" id="place" value="{{$data->place}}" required>
                            <option value="ดับเบิ้ลยู สมาร์ท">ดับเบิ้ลยู สมาร์ท</option>
                        </select>

                        <label class="col-lg-2 pl-lg-5" for="registerType" align="right">ประเภทจดทะเบียน</label>
                        <div class="col-lg-4 btnCustom">
                            <input type="radio" name="registertype" id="registerType1" value="0" {{ $data->geartype == '0' ? 'checked' : ''}}>
                            <label for="registerType1">รถยนต์ส่วนบุคคล</label>

                            <input type="radio" name="registertype" id="registerType2" value="1" {{ $data->geartype == '1' ? 'checked' : ''}}>
                            <label for="registerType2">จดในนามบริษัท</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="type_car">ประเภทรถ</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="type_car" id="type_car" required>
                            <option value="{{ $data->id_type }}" selected hidden>{{ $data->name_type }}</option>
                            @foreach($type_car as $key => $type_cars)
                                <option value="{{ $type_cars->id_type }}">{{ $type_cars->type_car }}</option>
                            @endforeach
                        </select>
                        <label class="col-lg-2" for="imported_car" align="right">ประเภทรถนำเข้า</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="imported_car" id="imported_car1" value="นำเข้า" {{ $data->imported_car == 'นำเข้า' ? 'checked' : ''}}>
                            <label for="imported_car1">นำเข้า</label>
                            <input type="radio" name="imported_car" id="imported_car2" value="ไม่นำเข้า" {{ $data->imported_car == 'ไม่นำเข้า' ? 'checked' : ''}}>
                            <label for="imported_car2">ไม่นำเข้า</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="carRegNum">ทะเบียนรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="carregnum" id="carRegNum" value="{{$data->carregnum}}" required>

                        <label class="col-lg-2 pl-lg-5" for="mileage" align="right">เลขไมล์ปัจจุบัน</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="mileage" id="mileage" value="{{$data->mileage}}" required>

                        <label class="col-lg-2 pl-lg-5" for="dateRegister" align="right">วันที่จดทะเบียนรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="dateregister" id="dateRegister" value="{{$data->dateregister}}" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="numOwners">จำนวนเจ้าของเดิม</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="numowners" id="numOwners" value="{{$data->numowners}}" required>

                        <label class="col-lg-2" for="cc" align="right">ความจุเครื่องยนต์ (cc)</label>
                        {{-- <input class="col-lg-1 form-control form-control-sm form-border" type="text" name="cc" id="cc" value="{{$data->cc}}" required> --}}
                        <select class="col-lg-1 form-control form-control-sm form-border" type="text" name="cc" id="cc" value="{{$data->cc}}" >
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_cc }}">{{ $data->cc }}</option>
                            @foreach($cc as $key => $datas)
                            <option value="{{ $datas->id_cc }}">{{ $datas->cc }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-2" for="gearType" align="right">ระบบเกียร์</label>
                        <div class="col-lg-3 btnCustom">
                            <input class="form-control" type="radio" name="geartype" id="gearType1" value="0" {{ $data->geartype == '0' ? 'checked' : ''}}>
                            <label for="gearType1">เกียร์ธรรมดา</label>

                            <input type="radio" name="geartype" id="gearType2" value="1" {{ $data->geartype == '1' ? 'checked' : ''}}>
                            <label for="gearType2">เกียร์อัตโนมัติ</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="engine">หมายเลขเครื่องยนต์</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="engine" id="engine" value="{{$data->engine}}" required>

                        <label class="col-lg-2 pl-lg-5" for="vin" align="right">หมายเลขตัวถัง</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="vin" id="vin" value="{{$data->vin}}" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="fuelType">ประเภทเชื้อเพลิง</label>
                        <div class="col-lg-6 btnCustom">
                            <input type="checkbox" name="benzine" id="benzine" value="1" {{ $data->benzine == '1' ? 'checked' : ''}}>
                            <label for="benzine">เบนซิน</label>
                            <input type="checkbox" name="diesel" id="diesel" value="1" {{ $data->diesel == '1' ? 'checked' : ''}}>
                            <label for="diesel">ดีเซล</label>
                            <input type="checkbox" name="hybrid" id="hybrid" value="1" {{ $data->hybrid == '1' ? 'checked' : ''}}>
                            <label for="hybrid">ไฮบริด</label>
                            <input type="checkbox" name="electric" id="electric" value="1" {{ $data->electric == '1' ? 'checked' : ''}}>
                            <label for="electric">ไฟฟ้า</label>
                            <input type="checkbox" name="lpg" id="lpg" value="1" {{ $data->lpg == '1' ? 'checked' : ''}}>
                            <label for="lpg">LPG</label>
                            <input type="checkbox" name="ngv" id="ngv" value="1" {{ $data->ngv == '1' ? 'checked' : ''}}>
                            <label for="ngv">NGV</label>
                            <input type="checkbox" name="cng" id="cng" value="1" {{ $data->cng == '1' ? 'checked' : ''}}>
                            <label for="cng">CNG</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="carInsurance">รถมีประกันหรือไม่</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carinsurance" id="carInsurance1" value="0" {{ $data->carinsurance == '0' ? 'checked' : ''}}>
                            <label for="carInsurance1">มี</label>
                            <input type="radio" name="carinsurance" id="carInsurance2" value="1" {{ $data->carinsurance == '1' ? 'checked' : ''}}>
                            <label for="carInsurance2">ไม่มี</label>
                        </div>

                        <label class="col-lg-2" for="expInsurance">วันหมดอายุประกันภัย</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="expinsurance" id="expInsurance"  value="{{$data->expinsurance}}">

                        <label class="col-lg-2 pl-lg-5" for="insurance" align="right">บริษัทประกันภัย</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="insurance" id="insurance"  value="{{$data->insurance}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-1" for="tent">รถเต็นท์</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="tent" id="tent1" value="0" {{ $data->tent == '0' ? 'checked' : ''}}>
                            <label for="tent1">ใช่</label>
                            <input type="radio" name="tent" id="tent2" value="1" {{ $data->tent == '1' ? 'checked' : ''}}>
                            <label for="tent2">ไม่ใช่</label>
                        </div>

                        <label class="col-lg-1 pl-lg-0" for="fromtent">รถจากเต็นท์</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="fromtent" id="fromtent">
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_dealer }}" selected hidden>{{ $data->dealer_name }}</option>
                            @foreach($dealer as $key => $datas)
                            <option value="{{ $datas->id_dealer }}">{{ $datas->dealer_name }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="price" align="right">ราคา</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="price" id="price"  value="{{$data->price}}">

                        <label class="col-lg-1 pl-lg-0" for="payment" align="right">ผ่อนงวดละ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="payment" id="payment" value="{{$data->payment}}">
                    </div>
                </div>

                <div class="form-title mt-3 mt-lg-0">วันนัดตรวจรถ</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row">
                        <label class="col-lg-2" for="inspectiontype">ประเภทการตรวจสภาพ</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="inspectiontype" id="inspectiontype" value="{{$data->inspectiontype}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="0" {{($data->inspectiontype ==='0') ? 'selected' : ''}}>Premium</option>
                            <option value="1" {{($data->inspectiontype ==='1') ? 'selected' : ''}}>Standard</option>
                        </select>

                        <label class="col-lg-2 pl-lg-5" for="inspector" align="right">ช่างที่ไปตรวจรถ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="inspector" id="inspector" value="{{$data->inspector}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_tech }}" selected hidden>{{ $data->name_tech }}</option>
                            @foreach($tech as $key => $datas)
                            <option value="{{ $datas->id_tech }}">{{ $datas->name_tech }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2" for="inspectionDate">วันที่นัดตรวจรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="inspectiondate" id="inspectionDate" value="{{$data->inspectiondate}}" required>

                        <label class="col-lg-2 pl-lg-5" for="inspectionTime" align="right">เวลาที่นัดตรวจรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="time" name="inspectiontime" id="inspectionTime" value="{{$data->inspectiontime}}" required>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-1" for="package">แพคเกจ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="package" id="package">
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_package }}" selected hidden>{{ $data->package_name }}</option>
                            @foreach($pac as $key => $datas)
                            <option value="{{ $datas->id_package }}">{{ $datas->package_name }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-2 pl-lg-5" for="remark" align="right">Remark</label>
                        <textarea class="col-lg-5 form-control form-control-sm form-border" name="remark" id="remark" onKeyPress class="form-control">
                            {{$data->remark}}
                        </textarea>
                    </div>
                    <br>

                    {{-- </form> --}}
                    <div class="list-group-item">

                        <label class="col-lg-5" for="package">รูปเลขไมล์รถ</label>
                        <label class="col-lg-1" for="package"></label>
                        <label class="col-lg-5" for="package">รูปเล่มทะเบียนรถ</label>

                            {{--  images --}}
                        @foreach($images as $image)
                        <div class="row">
                            <div class="col-md-6 list-group-item">
                                    <div class="row">
                                        <div class="col-md-11">
                                            {{-- <input type="file" name="image_mile" class="form-control" height="2%" value="{{$image->image_mile}}" disabled> --}}
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="alert col-md-11" id="message" style="display: none;"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <img src="/images/{{$image->image_mile}}" class="img-thumbnail" width="80%" align="center" />
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6 list-group-item">
                                    <div class="row">
                                        <div class="col-md-11">
                                            {{-- <input type="file" name="image_num" class="form-control" height="2%" value="{{$image->image_num}}" disabled> --}}
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="alert col-md-11" id="message_num" style="display: none"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <img src="/images/{{$image->image_num}}" class="img-thumbnail" width="80%" align="center" />
                                        </div>
                                    </div>
                            </div>
                        </div>
                        @endforeach
                     </div>
                </div>

                <div class="col-12 pt-2 pt-lg-4 text-center">
                    <button class="btn btn-success" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>บันทึกการแก้ไข</button>
                    <a href="{{ route('appointment.index')}}"> <button class="btn btn-danger" type="button"><i class="fa fa-times" aria-hidden="true"></i> ยกเลิก</button></a>
                </div>
            </form>

            @endforeach

            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
</div>
</div>


<script type="text/javascript">
    $('#province').change(function(){
        var provinceID = $(this).val();
        if(provinceID){
            $.ajax({
               type:"GET",
               url:"{{url('get-districte-list')}}?province_id="+provinceID,
               success:function(res){
                if(res){
                    $("#district").empty();
                    $("#district").append('<option disabled selected>---  กรุณาเลือก  ---</option>');
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
            $("#subdistrict").empty();
        }
    });
    $('#district').on('change',function(){
        var districtID = $(this).val();
        if(districtID){
            $.ajax({
               type:"GET",
               url:"{{url('get-subdise-list')}}?amphure_id="+districtID,
               success:function(res){
                if(res){
                    $("#subdistrict").empty();
                    $("#subdistrict").append('<option disabled selected>---  กรุณาเลือก  ---</option>');
                    $.each(res,function(key,value){
                        $("#subdistrict").append('<option value="'+key+'">'+value+'</option>');
                    });

                }else{
                   $("#subdistrict").empty();
                }
               }
            });
        }else{
            $("#subdistrict").empty();
        }
        // alert(districtID);
       });
//  brand - model - sub_model
$('#carbrand').change(function(){
    var carBrandID = $(this).val();
    if(carBrandID){
        $.ajax({
           type:"GET",
           url:"{{url('get-model-list')}}?carBrand_id="+carBrandID,
           success:function(res){
            if(res){
                $("#carmodel").empty();
                $("#carmodel").append('<option disabled selected>---  กรุณาเลือก  ---</option>');
                $.each(res,function(key,value){
                    $("#carmodel").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#carmodel").empty();
            }
           }
        });
    }else{
        $("#carmodel").empty();
        $("#subModel").empty();
    }
});
$('#carmodel').on('change',function(){
    var carModelID = $(this).val();
    if(carModelID){
        $.ajax({
           type:"GET",
           url:"{{url('get-submodel-list')}}?id_model="+carModelID,
           success:function(res){
            if(res){
                $("#submodel").empty();
                $("#submodel").append('<option disabled selected>---  กรุณาเลือก  ---</option>');
                $.each(res,function(key,value){
                    $("#submodel").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#submodel").empty();
            }
           }
        });
    }else{
        $("#submodel").empty();
    }
    // alert(carModelID);
   });

    </script>


@endsection
