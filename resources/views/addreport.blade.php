@extends('layouts.admin_layout')
@section('title', 'ข้อมูลตรวจสภาพรถยนต์')
@section('content')

{{-- <!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('dropzone/dist/min/dropzone.min.css')}}">

<!-- JS -->
<script src="{{asset('dropzone/dist/min/dropzone.min.js')}}" type="text/javascript"></script>

    <!-- Script -->
    <script>
        var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone(".dropzone",{
            maxFilesize: 3,  // 3 mb
            acceptedFiles: ".jpeg,.jpg,.png,.pdf",
        });
        myDropzone.on("sending", function(file, xhr, formData) {
           formData.append("_token", CSRF_TOKEN);
        });
    </script> --}}

<div class="col-md-2"></div>
<div class="col-md-9" style="margin-left:5%; margin-top:2%;">

    <div class="row">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <div class="col-12">
            <h3 class="title">ข้อมูลตรวจสภาพรถยนต์</h3>
        </div>
        <hr noshade>
        <div class="col-12">
    @foreach($datas as $data)

                    <?php

                        $idins = $data->id;
                        $id_car = $data->id_car;
                        // $idinspec = 'inspec-'.str_pad(($idins),6,'0',STR_PAD_LEFT);
                        $date = substr(date("Y"),2);
                        $idinspec = 'CS'.$date.str_pad(($idins),5,'0',STR_PAD_LEFT);
                        // echo 'รหัสตรวจสภาพรถยนต์ : '.$id_car;

                    ?>

        <form action='{{ route('detail.store') }}' method='POST' enctype='multipart/form-data' id="add_detail">
            @csrf

                <div class="form-title">ข้อมูลทั่วไป</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row">
                        <label class="col-lg-2" for="custName">ชื่อลูกค้า</label>
                        <input class="col-lg-5 form-control form-control-sm form-border" type="text" name="custName" id="custName" value="{{$data->firstname}}&emsp;{{$data->lastname}}" required disabled>

                        <label class="col-lg-2" for="date-time" align="right">วันและเวลาที่ลงข้อมูล</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="date-time" id="date-time" value="<?php date_default_timezone_set("Asia/Bangkok"); echo date("d-m-Y h:i A"); ?>" required disabled>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="idCard">เลขประจำตัวประชาชน</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="idCard" id="idCard" value="{{$data->idcard}}" disabled>

                        <label class="col-lg-2 pl-lg-5" for="tel" align="right">เบอร์โทรศัพท์</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="tel" id="tel" value="{{$data->tel}}" disabled>

                        <label class="col-lg-1" for="email" align="right">Email</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="email" id="email" disabled>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="inspectionNo">เลขที่ตรวจสภาพรถ</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="inspectionNo" id="inspectionNo" value="{{$idinspec}}" disabled>

                        <label class="col-lg-2" for="inspectionType" align="right">ประเภทการตรวจสภาพ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="inspectionType" id="inspectionType" disabled>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="0" {{($data->inspectiontype ==='0') ? 'selected' : ''}}>Premium</option>
                            <option value="1" {{($data->inspectiontype ==='1') ? 'selected' : ''}}>Standard</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="inspector">ผู้ตรวจสภาพรถ</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="inspector" id="inspector" value="{{$data->name_tech}}" disabled>

                        <label class="col-lg-2" for="checkedby" align="right">ตรวจสอบโดย</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="checkedby" id="checkedby" value="{{$data->name_tech}}" disabled>
                    </div>
                </div>

                <input type="hidden" name="id_car" value="{{$data->id}}">
                <input type="hidden" name="id_detail" value="{{$data->id_detail}}">
                <input type="hidden" name="inspectiontype" value="{{$data->inspectiontype}}">

                <div class="form-title mt-3 mt-lg-0">การบริการตรวจเช็คระบบขับเคลื่อน</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="carrs01">1. สถานะเครื่องยนต์</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carrs01" id="carrs01_1" value="0" {{ $data->carrs01 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carrs01_1">ผ่าน</label>

                            <input type="radio" name="carrs01" id="carrs01_2" value="1" {{ $data->carrs01 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carrs01_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="carrs02">2. สถานะเกียร์</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carrs02" id="carrs02_1" value="0" {{ $data->carrs02 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carrs02_1">ผ่าน</label>

                            <input type="radio" name="carrs02" id="carrs02_2" value="1" {{ $data->carrs02 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carrs02_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="carrs03">3. สถานะ ECU, ECM</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carrs03" id="carrs03_1" value="0" {{ $data->carrs03 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carrs03_1">ผ่าน</label>

                            <input type="radio" name="carrs03" id="carrs03_2" value="1" {{ $data->carrs03 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carrs03_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="carrs04">4. สถานะระบบเบรค</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carrs04" id="carrs04_1" value="0" {{ $data->carrs04 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carrs04_1">ผ่าน</label>

                            <input type="radio" name="carrs04" id="carrs04_2" value="1" {{ $data->carrs04 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carrs04_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="carrs05">5. ระบบปรับอากาศและทำความร้อน</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carrs05" id="carrs05_1" value="0" {{ $data->carrs05 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carrs05_1">ผ่าน</label>

                            <input type="radio" name="carrs05" id="carrs05_2" value="1" {{ $data->carrs05 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carrs05_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="carrs06">6. ชุดส่งกำลังเพลาหน้าและท้าย</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carrs06" id="carrs06_1" value="0" {{ $data->carrs06 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carrs06_1">ผ่าน</label>

                            <input type="radio" name="carrs06" id="carrs06_2" value="1" {{ $data->carrs06 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carrs06_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="carrs07">7. ระบบระบายความร้อนเครื่องยนต์</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carrs07" id="carrs07_1" value="0" {{ $data->carrs07 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carrs07_1">ผ่าน</label>

                            <input type="radio" name="carrs07" id="carrs07_2" value="1" {{ $data->carrs07 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carrs07_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="carrs08">8. ระบบกันสะเทือนหน้าและหลัง</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carrs08" id="carrs08_1" value="0" {{ $data->carrs08 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carrs08_1">ผ่าน</label>

                            <input type="radio" name="carrs08" id="carrs08_2" value="1" {{ $data->carrs08 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carrs08_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="carrs09">9. ระบบความปลอดภัย Airbag</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carrs09" id="carrs09_1" value="0" {{ $data->carrs09 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carrs09_1">ผ่าน</label>

                            <input type="radio" name="carrs09" id="carrs09_2" value="1" {{ $data->carrs09 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carrs09_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="carrs10">10. ระบบบังคับเลี้ยว</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carrs10" id="carrs10_1" value="0" {{ $data->carrs10 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carrs10_1">ผ่าน</label>

                            <input type="radio" name="carrs10" id="carrs10_2" value="1" {{ $data->carrs10 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carrs10_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="carrs11">11. Security System</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carrs11" id="carrs11_1" value="0" {{ $data->carrs11 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carrs11_1">ผ่าน</label>

                            <input type="radio" name="carrs11" id="carrs11_2" value="1" {{ $data->carrs11 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carrs11_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="carrs12">12. Turbo</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carrs12" id="carrs12_1" value="0" {{ $data->carrs12 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carrs12_1">ผ่าน</label>

                            <input type="radio" name="carrs12" id="carrs12_2" value="1" {{ $data->carrs12 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carrs12_2">ไม่ผ่าน</label>
                        </div>
                    </div>
                </div>

        <?php

                // check inspaction

                $inspec = $data->inspectiontype;
                // echo $inspec;
            if($inspec == '0'){

             ?>
                <div class="form-title mt-3 mt-lg-0">การบริการตรวจเช็คสภาพรถยนต์</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="carin01">1. ไมล์แท้</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carin01" id="carin01_1" value="0" {{ $data->carin01 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carin01_1">ผ่าน</label>

                            <input type="radio" name="carin01" id="carin01_2" value="1" {{ $data->carin01 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carin01_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="carin02">2. รถไม่เคยประสบภัยน้ำท่วมจมน้ำ</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carin02" id="carin02_1" value="0" {{ $data->carin02 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carin02_1">ผ่าน</label>

                            <input type="radio" name="carin02" id="carin02_2" value="1" {{ $data->carin02 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carin02_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="carin03">3. รถไม่เคยประสบภัยไฟไหม้</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carin03" id="carin03_1" value="0" {{ $data->carin03 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carin03_1">ผ่าน</label>

                            <input type="radio" name="carin03" id="carin03_2" value="1" {{ $data->carin03 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carin03_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="carin04">4. รถไม่เคยเกิดอุบัติเหตุรุนแรงชนหนัก จนทำให้โครงสร้างรถมีปัญหาความปลอดภัย</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carin04" id="carin04_1" value="0" {{ $data->carin04 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carin04_1">ผ่าน</label>

                            <input type="radio" name="carin04" id="carin04_2" value="1" {{ $data->carin04 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carin04_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="carin05">5. รถเลขเครื่องตรง</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carin05" id="carin05_1" value="0" {{ $data->carin05 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carin05_1">ผ่าน</label>

                            <input type="radio" name="carin05" id="carin05_2" value="1" {{ $data->carin05 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carin05_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="carin06">6. รถเลขตัวถังตรง</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carin06" id="carin06_1" value="0" {{ $data->carin06 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carin06_1">ผ่าน</label>

                            <input type="radio" name="carin06" id="carin06_2" value="1" {{ $data->carin06 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carin06_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="carin07">7. รถสภาพสีเดิม</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carin07" id="carin07_1" value="0" {{ $data->carin07 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carin07_1">ผ่าน</label>

                            <input type="radio" name="carin07" id="carin07_2" value="1" {{ $data->carin07 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carin07_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="carin08">8. แบตเตอรี่ทำงานปกติ</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carin08" id="carin08_1" value="0" {{ $data->carin08 == '0' ? 'checked' : ''}} @if($data->id_detail == '')checked @else disabled @endif>
                            <label for="carin08_1">ผ่าน</label>

                            <input type="radio" name="carin08" id="carin08_2" value="1" {{ $data->carin08 == '1' ? 'checked' : ''}} @if($data->id_detail == '') @else disabled @endif>
                            <label for="carin08_2">ไม่ผ่าน</label>
                        </div>
                    </div>
                </div>
            <?php  } ?>

                <div class="form-title mt-3 mt-lg-0">รายละเอียดรถยนต์</div>
                <div class="mt-3 mt-lg-0 p-0" style="background-color: #00385B; border-top: 0.5px solid #ffffff;">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#cardetails" id="pills-cardetails-tab" data-toggle="pill" role="tab" aria-controls="pills-cardetails" aria-selected="true">ข้อมูลรถ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#exterior" id="pills-exterior-tab" data-toggle="pill" role="tab" aria-controls="pills-exterior" aria-selected="false">Exterior Plan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#interior" id="pills-interior-tab" data-toggle="pill" role="tab" aria-controls="pills-interior" aria-selected="false">Interior Plan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#chasis" id="pills-chasis-tab" data-toggle="pill" role="tab" aria-controls="pills-chasis" aria-selected="false">Chasis Plan</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#picture" id="pills-picture-tab" data-toggle="pill" role="tab" aria-controls="pills-picture" aria-selected="false">อัพโหลดรูปภาพ</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#inspectorcomment" id="pills-inspectorcomment-tab" data-toggle="pill" role="tab" aria-controls="pills-inspectorcomment" aria-selected="false">ความเห็นจากผู้เช็ครถ</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#history" id="pills-history-tab" data-toggle="pill" role="tab" aria-controls="pills-history" aria-selected="false">ประวัติรถ</a>
                        </li> -->
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="col-12 pt-lg-3 box-form tab-pane show active" id="cardetails" role="tabpanel" aria-labelledby="pills-cardetails-tab">
                        <div class="form-group row">
                            <label class="col-lg-1" for="carBrand">ยี่ห้อ</label>
                            <select class="col-lg-3 form-control form-control-sm form-border" name="carBrand" id="carBrand" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->name_brand }}</option>
                            </select>

                            <label class="col-lg-1" for="carModel" align="right">รุ่น</label>
                            <select class="col-lg-3 form-control form-control-sm form-border" type="text" name="carModel" id="carModel" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->name_model }}</option>
                            </select>

                            <label class="col-lg-1" for="subModel" align="right">รุ่นย่อย</label>
                            <select class="col-lg-3 form-control form-control-sm form-border" type="text" name="subModel" id="subModel" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->sub_model }}</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-1" for="oldColor">สีเดิม</label>
                            <select class="col-lg-2 form-control form-control-sm form-border" name="oldColor" id="oldColor" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->color_b }}</option>
                            </select>

                            <label class="col-lg-1" for="newColor" align="right">สีปัจจุบัน</label>
                            <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="newColor" id="newColor" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->color_n }}</option>
                            </select>

                            <label class="col-lg-1" for="year" align="right">ปี</label>
                            <input class="col-lg-1 form-control form-control-sm form-border" type="text" name="year" id="year" value="{{$data->year}}" disabled>

                            <label class="col-lg-2" for="seatNum" align="right">จำนวนที่นั่ง</label>
                            <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="seatNum" id="seatNum" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option value="2" {{($data->seatnum ==='2') ? 'selected' : ''}}>2</option>
                                <option value="4" {{($data->seatnum ==='4') ? 'selected' : ''}}>4</option>
                                <option value="5" {{($data->seatnum ==='5') ? 'selected' : ''}}>5</option>
                                <option value="5" {{($data->seatnum ==='6') ? 'selected' : ''}}>6</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="place">สถานที่ตรวจเช็ครถ</label>
                            <select class="col-lg-2 form-control form-control-sm form-border" name="place" id="place" value="{{$data->place}}" disabled>
                                <option value="ดับเบิ้ลยู สมาร์ท">ดับเบิ้ลยู สมาร์ท</option>
                            </select>

                            <label class="col-lg-2 pl-lg-5" for="registerType" align="right">ประเภทจดทะเบียน</label>
                            <div class="col-lg-4 btnCustom">
                                <input type="radio" name="registerType" id="registerType1" value="0" {{ $data->geartype == '0' ? 'checked' : ''}} disabled>
                                <label for="registerType1">รถยนต์ส่วนบุคคล</label>

                                <input type="radio" name="registerType" id="registerType2" value="1" {{ $data->geartype == '1' ? 'checked' : ''}} disabled>
                                <label for="registerType2">จดในนามบริษัท</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="type_car">ประเภทรถ</label>
                            <select class="col-lg-2 form-control form-control-sm form-border" name="type_car" id="type_car" disabled>
                                <option>{{ $data->type_car }}</option>
                            </select>
                            <label class="col-lg-2" for="imported_car" align="right">ประเภทรถนำเข้า</label>
                            <div class="col-lg-2 btnCustom">
                                <input type="radio" name="imported_car" id="imported_car1" value="นำเข้า" {{ $data->imported_car == 'นำเข้า' ? 'checked' : ''}} disabled>
                                <label for="imported_car1">นำเข้า</label>
                                <input type="radio" name="imported_car" id="imported_car2" value="ไม่นำเข้า" {{ $data->imported_car == 'ไม่นำเข้า' ? 'checked' : ''}} disabled>
                                <label for="imported_car2">ไม่นำเข้า</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="carRegNum">ทะเบียนรถ</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="carRegNum" id="carRegNum" value="{{$data->carregnum}}" disabled>

                            <label class="col-lg-2 pl-lg-5" for="mileage" align="right">เลขไมล์ปัจจุบัน</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="mileage" id="mileage" value="{{$data->mileage}}" disabled>

                            <label class="col-lg-2 pl-lg-5" for="dateRegister" align="right">วันที่จดทะเบียนรถ</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="dateRegister" id="dateRegister" value="{{$data->dateregister}}" disabled>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="numOwners">จำนวนเจ้าของเดิม</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="numOwners" id="numOwners" value="{{$data->numowners}}" disabled>

                            <label class="col-lg-2" for="cc" align="right">ความจุเครื่องยนต์ (CC)</label>
                            {{-- <input class="col-lg-1 form-control form-control-sm form-border" type="text" name="cc" id="cc" value="{{$data->cc}}" disabled> --}}
                            <select class="col-lg-1 form-control form-control-sm form-border" type="text" name="cc" id="cc" value="{{$data->cc}}" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->cc }}</option>
                            </select>

                            <label class="col-lg-2 " for="gearType" align="right">ระบบเกียร์</label>
                            <div class="col-lg-3 btnCustom">
                                <input type="radio" name="gearType" id="gearType1" value="0" {{ $data->geartype == '0' ? 'checked' : ''}} disabled>
                                <label for="gearType1">เกียร์ธรรมดา</label>

                                <input type="radio" name="gearType" id="gearType2" value="1" {{ $data->geartype == '1' ? 'checked' : ''}} disabled>
                                <label for="gearType2">เกียร์อัตโนมัติ</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="engine">หมายเลขเครื่องยนต์</label>
                            <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="engine" id="engine" value="{{$data->engine}}" disabled>

                            <label class="col-lg-2 pl-lg-5" for="vin" align="right">หมายเลขตัวถัง</label>
                            <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="vin" id="vin" value="{{$data->vin}}" disabled>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="fuelType">ประเภทเชื้อเพลิง</label>
                            <div class="col-lg-6 btnCustom">
                                <input type="checkbox" name="benzine" id="benzine" value="1" {{ $data->benzine == '1' ? 'checked' : ''}} disabled>
                                <label for="benzine">เบนซิน</label>
                                <input type="checkbox" name="diesel" id="diesel" value="1" {{ $data->diesel == '1' ? 'checked' : ''}} disabled>
                                <label for="diesel">ดีเซล</label>
                                <input type="checkbox" name="hybrid" id="hybrid" value="1" {{ $data->hybrid == '1' ? 'checked' : ''}} disabled>
                                <label for="hybrid">ไฮบริด</label>
                                <input type="checkbox" name="electric" id="electric" value="1" {{ $data->electric == '1' ? 'checked' : ''}} disabled>
                                <label for="electric">ไฟฟ้า</label>
                                <input type="checkbox" name="lpg" id="lpg" value="1" {{ $data->lpg == '1' ? 'checked' : ''}} disabled>
                                <label for="lpg">LPG</label>
                                <input type="checkbox" name="ngv" id="ngv" value="1" {{ $data->ngv == '1' ? 'checked' : ''}} disabled>
                                <label for="ngv">NGV</label>
                                <input type="checkbox" name="cng" id="cng" value="1" {{ $data->cng == '1' ? 'checked' : ''}} disabled>
                                <label for="cng">CNG</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="carInsurance">รถมีประกันหรือไม่</label>
                            <div class="col-lg-2 btnCustom">
                                <input type="radio" name="carInsurance" id="carInsurance1" value="0" {{ $data->carinsurance == '0' ? 'checked' : ''}} disabled>
                                <label for="carInsurance1">มี</label>
                                <input type="radio" name="carInsurance" id="carInsurance2" value="1" {{ $data->carinsurance == '1' ? 'checked' : ''}} disabled>
                                <label for="carInsurance2">ไม่มี</label>
                            </div>

                            <label class="col-lg-2" for="expInsurance">วันหมดอายุประกันภัย</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="expInsurance" id="expInsurance" value="{{$data->expinsurance}}" disabled>

                            <label class="col-lg-2 pl-lg-5" for="insurance" align="right">บริษัทประกันภัย</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="insurance" id="insurance" value="{{$data->insurance}}" disabled>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-1" for="tent">รถเต็นท์</label>
                            <div class="col-lg-2 btnCustom">
                                <input type="radio" name="tent" id="tent1" value="0" {{ $data->tent == '0' ? 'checked' : ''}} disabled>
                                <label for="tent1">ใช่</label>
                                <input type="radio" name="tent" id="tent2" value="1" {{ $data->tent == '1' ? 'checked' : ''}} disabled>
                                <label for="tent2">ไม่ใช่</label>
                            </div>

                            <label class="col-lg-1 pl-lg-0" for="fromTent">รถจากเต็นท์</label>
                            <select class="col-lg-2 form-control form-control-sm form-border" name="fromTent" id="fromTent" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->dealer_name }}</option>
                            </select>

                            <label class="col-lg-1" for="price" align="right">ราคา</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="price" id="price" value="{{$data->price}}" disabled>

                            <label class="col-lg-1 pl-lg-0" for="payment" align="right">ผ่อนงวดละ</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="payment" id="payment" value="{{$data->payment}}" disabled>
                        </div>
                    </div>

                    <div class="col-12 pt-lg-3 box-form tab-pane" id="exterior" role="tabpanel" aria-labelledby="pills-exterior-tab">
                        <div class="position-absolute">
                            <table class="table table-sm">
                                <tr>
                                    <td style="border-right: 1px solid #d9d9d9;">O</td>
                                    <!-- <td>Original</td> -->
                                    <td>ดั้งเดิม</td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid #d9d9d9;">N</td>
                                    <!-- <td>New Parts</td> -->
                                    <td>ชิ้นส่วนใหม่</td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid #d9d9d9;">BP</td>
                                    <!-- <td>New Body Paint Job</td> -->
                                    <td>ทำสีใหม่</td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid #d9d9d9;">D</td>
                                    <!-- <td>Dent Mark</td> -->
                                    <td>มีรอยบุบ</td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid #d9d9d9;">S</td>
                                    <!-- <td>Scrated Mark</td> -->
                                    <td>มีรอยขีดข่วน</td>
                                </tr>
                            </table>
                        </div>
                        <table cellspacing="0" style="margin: 0 auto; background-image: url('{{ asset('images/exterior/exterior.png') }}'); background-repeat: no-repeat; background-size: auto 600px;">
                            <tr>
                                <!-- left -->
                                <td style="height: 600px; width: 125px; vertical-align: top;">
                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="บังโคลนหน้าซ้าย" style="margin-top: 30px; width: 115px; height: 55px;">
                                        <select name="exterior_01" id="exterior_01" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_01 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_01 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_01 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_01 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_01 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ล้อหน้าซ้าย" style="width: 82px; height: 61px;">
                                        <select name="exterior_19" id="exterior_19" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_19 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_19 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_19 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_19 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_19 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="สเกิ้ตซ้าย" style="width: 24px; height: 240px; float: left;">
                                        <select name="exterior_18" id="exterior_18" style="margin-top: 30px; margin-left: -15px;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_18 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_18 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_18 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_18 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_18 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ประตูหน้าซ้าย" style="width: 98px; height: 120px; float: left;">
                                        <select name="exterior_20" id="exterior_20" style="display: flex; margin: 50px auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_20 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_20 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_20 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_20 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_20 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ประตูหลังซ้าย" style="width: 98px; height: 120px; float: left;">
                                        <select name="exterior_16" id="exterior_16" style="display: flex; margin: 40px auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_16 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_16 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_16 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_16 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_16 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ล้อหลังซ้าย" style="width: 75px; height: 61px; clear: both;">
                                        <select name="exterior_17" id="exterior_17" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_17 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_17 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_17 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_17 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_17 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ซุ้มล้อซ้าย" style="width: 105px; height: 85px;">
                                        <select name="exterior_15" id="exterior_15" style="margin-top: 40px;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_15 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_15 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_15 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_15 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_15 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>
                                </td>

                                <!-- middle -->
                                <td style="height: 600px; width: 202px; vertical-align: top;">
                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="กันชนหน้า" style="width: 202px; height: 44px; float: left;">
                                        <select name="exterior_03" id="exterior_03" style="display: flex; margin: 7px auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_03 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_03 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_03 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_03 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_03 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ฝากระโปรงหน้า" style="width: 202px; height: 103px; float: left;">
                                        <select name="exterior_02" id="exterior_02" style="display: flex; margin: 36px auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_02 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_02 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_02 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_02 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_02 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div style="width: 202px; height: 94px; clear: both;">&nbsp;</div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="หลังคา" style="width: 202px; height: 151px; float: left;">
                                        <select name="exterior_14" id="exterior_14" style="display: flex; margin: 60px auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_14 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_14 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_14 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_14 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_14 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="กระจกหลัง" style="width: 202px; height: 95px; float: left;">
                                        <select name="exterior_11" id="exterior_11" style="display: flex; margin: 35px auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_11 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_11 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_11 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_11 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_11 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ฝากระโปรงหลัง" style="width: 202px; height: 65px; float: left;">
                                        <select name="exterior_13" id="exterior_13" style="display: flex; margin: 15px auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_13 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_13 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_13 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_13 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_13 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="กันชนหลัง" style="width: 202px; height: 42px; float: left;">
                                        <select name="exterior_12" id="exterior_12" style="display: flex; margin: 5px auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_12 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_12 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_12 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_12 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_12 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>
                                </td>

                                <!-- right -->
                                <td style="height: 600px; width: 125px; vertical-align: top;">
                                    <div class="carplan-img" data-toggle="tooltip" data-placement="right" title="บังโคลนหน้าขวา" style="margin-top: 30px; width: 115px; height: 55px; float: right;">
                                        <select name="exterior_04" id="exterior_04" style="float: right;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_04 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_04 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_04 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_04 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_04 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="right" title="ล้อหน้าขวา" style="width: 82px; height: 61px; float: right;">
                                        <select name="exterior_06" id="exterior_06" style="float: right;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_06 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_06 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_06 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_06 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_06 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ประตูหน้าขวา" style="width: 98px; height: 120px; float: left;">
                                        <select name="exterior_05" id="exterior_05" style="display: flex; margin: 50px auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_05 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_05 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_05 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_05 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_05 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="right" title="สเกิ้ตขวา" style="width: 24px; height: 240px; float: right;">
                                        <select name="exterior_07" id="exterior_07" style="margin-top: 30px;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_07 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_07 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_07 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_07 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_07 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ประตูหลังขวา" style="width: 98px; height: 120px; float: left;">
                                        <select name="exterior_09" id="exterior_09" style="display: flex; margin: 40px auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_09 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_09 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_09 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_09 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_09 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="right" title="ล้อหลังขวา" style="width: 75px; height: 61px; float: right;">
                                        <select name="exterior_08" id="exterior_08" style="float: right;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_08 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_08 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_08 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_08 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_08 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="right" title="ซุ้มล้อขวา" style="width: 105px; height: 85px; float: right;">
                                        <select name="exterior_10" id="exterior_10" style="float: right; margin-top: 40px;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="O" {{($data->exterior_10 ==='O') ? 'selected' : ''}}>O</option>
                                            <option value="N" {{($data->exterior_10 ==='N') ? 'selected' : ''}}>N</option>
                                            <option value="BP" {{($data->exterior_10 ==='BP') ? 'selected' : ''}}>BP</option>
                                            <option value="D" {{($data->exterior_10 ==='D') ? 'selected' : ''}}>D</option>
                                            <option value="S" {{($data->exterior_10 ==='S') ? 'selected' : ''}}>S</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-12 pt-lg-3 box-form tab-pane" id="interior" role="tabpanel" aria-labelledby="pills-interior-tab">
                        <div class="position-absolute">
                            <table class="table table-sm">
                                <tr>
                                    <th>ระดับปัญหา</th>
                                </tr>
                                <tr>
                                    <td>ไม่มี</td>
                                </tr>
                                <tr>
                                    <td>น้อย</td>
                                </tr>
                                <tr>
                                    <td>ปานกลาง</td>
                                </tr>
                                <tr>
                                    <td>มาก</td>
                                </tr>
                                <tr>
                                    <td>มากที่สุด</td>
                                </tr>
                            </table>
                        </div>
                        <table cellspacing="0" style="margin: 0 auto; background-image: url('{{ asset('images/interior/interior.png') }}'); background-repeat: no-repeat; background-size: auto 500px;">
                            <tr>
                                <!-- left -->
                                <td style="height: 500px; width: 100px; padding-left: 20px; vertical-align: top;">
                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="แผงประตูซ้าย" style="width: auto; height: 120px; margin-top: 20px;">
                                        <select name="interior_07" id="interior_07" style="margin: -5px auto 20px -40px;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($data->interior_07 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($data->interior_07 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($data->interior_07 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($data->interior_07 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($data->interior_07 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ระบบหน้าต่าง" style="width: auto; height: 238px;">
                                        <select name="interior_14" id="interior_14" style="margin: 60px auto 0 -40px;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($data->interior_14 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($data->interior_14 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($data->interior_14 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($data->interior_14 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($data->interior_14 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>
                                </td>

                                <!-- middle -->
                                <td style="height: 500px; width: 305px; vertical-align: top;">
                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ระบบแสงสว่างภายนอก" style="width: 305px; height: 30px; float: left;">
                                        <select name="interior_12" id="interior_12" style="display: flex; margin: -10px auto auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($data->interior_12 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($data->interior_12 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($data->interior_12 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($data->interior_12 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($data->interior_12 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="เครื่องปรับอากาศ" style="width: 65px; height: 45px; float: left;">
                                        <select name="interior_10" id="interior_10" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($data->interior_10 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($data->interior_10 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($data->interior_10 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($data->interior_10 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($data->interior_10 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ระบบวิทยุ" style="width: 90px; height: 45px; float: left; margin-left: 40px;">
                                        <select name="interior_13" id="interior_13" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($data->interior_13 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($data->interior_13 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($data->interior_13 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($data->interior_13 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($data->interior_13 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="แผงหน้าปัดรถยนต์" style="width: 72px; height: 45px; float: left; margin-left: 8px;">
                                        <select name="interior_02" id="interior_02" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($data->interior_02 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($data->interior_02 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($data->interior_02 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($data->interior_02 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($data->interior_02 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="เบาะหน้าซ้าย" style="width: 115px; height: 145px; float: left; margin-top: 54px;">
                                        <select name="interior_03" id="interior_03" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($data->interior_03 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($data->interior_03 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($data->interior_03 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($data->interior_03 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($data->interior_03 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="คอนโซล" style="width: 70px; height: 145px; float: left;">
                                        <select name="interior_06" id="interior_06" style="margin-top: 53px;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($data->interior_06 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($data->interior_06 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($data->interior_06 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($data->interior_06 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($data->interior_06 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="right" title="พวงมาลัย" style="width: 106px; height: 40px; float: left;">
                                        <select name="interior_01" id="interior_01" style="display: flex; margin: 0 auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($data->interior_01 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($data->interior_01 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($data->interior_01 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($data->interior_01 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($data->interior_01 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="เบาะหน้าขวา" style="width: 115px; height: 145px; float: left; margin-top: 14px;">
                                        <select name="interior_04" id="interior_04" style="float: right;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($data->interior_04 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($data->interior_04 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($data->interior_04 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($data->interior_04 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($data->interior_04 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ระบบแสงสว่างภายใน" style="width: 70px; height: 45px; float: left; margin-top: -45px; margin-left: 115px;">
                                        <select name="interior_11" id="interior_11" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($data->interior_11 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($data->interior_11 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($data->interior_11 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($data->interior_11 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($data->interior_11 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="เบาะหลัง" style="width: 300px; height: 145px; float: left; margin-top: 11px;">
                                        <select name="interior_05" id="interior_05" style="display: flex; margin: 40px auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($data->interior_05 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($data->interior_05 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($data->interior_05 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($data->interior_05 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($data->interior_05 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="พื้นที่เก็บสัมภาระ" style="width: 300px; height: 63px; float: left;">
                                        <select name="interior_09" id="interior_09" style="display: flex; margin: 15px auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($data->interior_09 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($data->interior_09 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($data->interior_09 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($data->interior_09 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($data->interior_09 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>
                                </td>

                                <!-- right -->
                                <td style="height: 500px; width: 100px; padding-right: 20px; vertical-align: top;">
                                    <div class="carplan-img" data-toggle="tooltip" data-placement="right" title="แผงประตูขวา" style="width: auto; height: 120px; margin-top: 20px;">
                                        <select name="interior_08" id="interior_08" style="float: right; margin: -5px -35px auto auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($data->interior_08 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($data->interior_08 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($data->interior_08 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($data->interior_08 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($data->interior_08 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div class="position-absolute" style="top: 150px; right: 100px;">
                            <div>เพดานหลังคา</div>
                            <div class="carplan-img">
                                <select name="interior_15" id="interior_15" @if($data->id_detail == '') @else disabled @endif>
                                    <option value="0" {{($data->interior_15 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                    <option value="25" {{($data->interior_15 ==='25') ? 'selected' : ''}}>น้อย</option>
                                    <option value="50" {{($data->interior_15 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                    <option value="75" {{($data->interior_15 ==='75') ? 'selected' : ''}}>มาก</option>
                                    <option value="100" {{($data->interior_15 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 pt-lg-3 box-form tab-pane" id="chasis" role="tabpanel" aria-labelledby="pills-chasis-tab">
                        <div class="position-absolute">
                            <table class="table table-sm">
                                <tr>
                                    <td style="border-right: 1px solid #d9d9d9;">NH</td>
                                    <!-- <td>Non Heavy Accident</td> -->
                                    <td>ไม่ประสบอุบัติเหตุหนัก</td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid #d9d9d9;">H</td>
                                    <!-- <td>Heavy Accident</td> -->
                                    <td>ประสบอุบัติเหตุหนัก</td>
                                </tr>
                            </table>
                        </div>
                        <table cellspacing="0" style="margin: 0 auto; background-image: url('{{ asset('images/chassis/chassis.png') }}'); background-repeat: no-repeat; background-size: auto 600px;">
                            <tr>
                                <td style="height: 600px; width: 390px; vertical-align: top;">
                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ห้องเครื่องยนต์" style="width: 390px; height: 171px; float: left;">
                                        <select name="chasis_01" id="chasis_01" style="display: flex; margin: 60px auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="NH" {{($data->chasis_01 ==='NH') ? 'selected' : ''}}>NH</option>
                                            <option value="H" {{($data->chasis_01 ==='H') ? 'selected' : ''}}>H</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ห้องโดยสาร" style="width: 390px; height: 320px; float: left;">
                                        <select name="chasis_02" id="chasis_02" style="display: flex; margin: 50px auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="NH" {{($data->chasis_02 ==='NH') ? 'selected' : ''}}>NH</option>
                                            <option value="H" {{($data->chasis_02 ==='H') ? 'selected' : ''}}>H</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ห้องเก็บสัมภาระ" style="width: 390px; height: 108px; float: left;">
                                        <select name="chasis_03" id="chasis_03" style="display: flex; margin: 40px auto;" @if($data->id_detail == '') @else disabled @endif>
                                            <option value="NH" {{($data->chasis_03 ==='NH') ? 'selected' : ''}}>NH</option>
                                            <option value="H" {{($data->chasis_03 ==='H') ? 'selected' : ''}}>H</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-12 pt-lg-3 box-form tab-pane" id="inspectorcomment" role="tabpanel" aria-labelledby="pills-inspectorcomment-tab">
                        <label for="comment">ความคิดเห็นจากผู้ตรวจสภาพรถ</label>
                    @if($data->id_detail=='')
                        <textarea class="form-control form-border mb-3" rows="5" name="comment" id="comment">This Vehicle, {{$data->year}} {{$data->name_brand}} {{ $data->name_model }} with Chassis number {{$data->engine}} was Inspected on the <?php date_default_timezone_set("Asia/Bangkok"); echo date("d F Y"); ?> by Mr. Wasawad Wasuthasawat. The Inspector did not find irregularities with the 16 Inspection Details stated in this report. It can be concluded that at the time of Inspection, the said Inspection Analysis has passed the Inspection standard of Mittare Insurance Public Co., LTD.</textarea>
                    @else
                        <textarea class="form-control form-border mb-3" rows="5" name="comment" id="comment" disabled>{{$data->comment}}</textarea>
                    @endif
                    </div>

                    <!-- <div class="col-12 pt-lg-3 box-form tab-pane" id="history" style="max-height: 550px; overflow: auto;" role="tabpanel" aria-labelledby="pills-history-tab">
                        <div class="col-lg-12 mb-2">
                            <form>
                                <div class="row upload-box">
                                    <table align="center">
                                        <tbody>
                                            <tr>
                                                <td width="100px">วันที่ :</td>
                                                <td><input class="form-control form-control-sm form-border" type="date" name="hisdate" id="hisdate" style="width: 160px;"></td>
                                            </tr>
                                            <tr>
                                                <td>เลขไมล์ :</td>
                                                <td><input class="form-control form-control-sm form-border" type="text" name="hismileage" id="hismileage" style="width: 160px;"></td>
                                            </tr>
                                            <tr>
                                                <td>รายละเอียด :</td>
                                                <td><input class="form-control form-control-sm form-border" type="text" name="hisdetails" id="hisdetails" style="width: 300px;"></td>
                                            </tr>
                                            <tr>
                                                <td>สถานที่ :</td>
                                                <td><input class="form-control form-control-sm form-border" type="text" name="hisplace" id="hisplace" style="width: 300px;"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="text-align: center; padding-top: 5px;"><button type="button" class="btn btn-success btn-sm">ADD</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <form>
                                <table class="table table-bordered table-hover table-sm text-center bg-white">
                                    <thead>
                                        <tr>
                                            <th width="10px">ลำดับ</th>
                                            <th width="60px">วันที่</th>
                                            <th width="50px">เลขไมล์</th>
                                            <th width="200px">รายละเอียด</th>
                                            <th width="120px">สถานที่</th>
                                            <th width="10px">ลบ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align: middle;">1</td>
                                            <td style="vertical-align: middle;">02-06-2020</td>
                                            <td style="vertical-align: middle;">111</td>
                                            <td style="vertical-align: middle;"></td>
                                            <td style="vertical-align: middle;"></td>
                                            <td style="vertical-align: middle;">
                                                <a href="" style="color: red; font-weight: 800;">&#10007;</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div> -->
                </div>

                <div class="col-12 pt-2 pt-lg-3 pb-lg-4">
                    <div class="col-12 text-center">
                        <a href="{{ route('edit.index') }}"><button class="btn btn-danger" type="button"><i class="fa fa-times" aria-hidden="true"></i> ยกเลิก</button></a>

                        @if($id_car!='')
                        {{-- บันทึกแล้ว --}}
                            <button class="btn btn-success" type="submit">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i> NEXT</button>
                        @else
                        {{-- ยังไม่ได้บันทึก --}}
                            <button class="btn btn-success" type="submit" onclick="return alert('บันทึกข้อมูลตรวจสภาพรถยนต์ เลขที่ : {{$idinspec}} เรียบร้อยแล้ว')">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i> บันทึก</button>
                            {{-- <i class="fa fa-floppy-o" aria-hidden="true"></i> NEXT</button> --}}
                        @endif
                    </div>
                    <!-- <div class="col-12 text-center my-3">
                        <a href=""></a><button class="btn btn-purple" type="button"><i class="fa fa-car" aria-hidden="true"></i> พิมพ์ใบตรวจสภาพรถ</button>
                        <a href=""></a><button class="btn btn-primary" type="button"><i class="fa fa-certificate" aria-hidden="true"></i> พิมพ์ใบรับรอง</button>
                    </div> -->
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>

<script type="text/javascript">

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

</script>


@endsection
