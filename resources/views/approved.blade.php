<?php $title = (request()->is('approved-appoint/*')) ? 'Approved Appointment': 'Not Approved Appointment' ?>

@extends('layouts.admin_layout')
@section('title', $title)
@section('content')

<style>
    .image-block{
        display: flex;
        height: 300px;
        text-align:center;
    }

    .image-block img{
        width: 100%;
        height: auto;
        object-fit: cover;
    }
</style>
<div class="col-md-3"></div>
<div class="col-md-8" style="margin-top:2%;">

    <div class="row">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <div class="col-lg-12">
            <h1 class="title">{{ $title }}</h1>
        </div>
        <hr noshade>
    </div>

    <div class="row">
        <div class="col-lg-12 mt-3">
            @foreach($data as $datas)
            <div class="form-title">ข้อมูลนัดตรวจรถ</div>
            <div class="col-12 pt-lg-3 box-form">
                <div class="row py-1">
                    <div class="col-lg-1 pr-0 font-weight-bold">ชื่อลูกค้า</div>
                    <div class="col-lg-5 text-data">{{ $datas->nametitle }} {{ $datas->firstname }} {{ $datas->lastname }}</div>
                    <div class="col-lg-2 font-weight-bold text-center">เบอร์โทรศัพท์</div>
                    <div class="col-lg-4 text-data">{{ $datas->tel }}</div>
                </div>
                <div class="row py-1">
                    <div class="col-lg-1 pr-0 font-weight-bold">ผู้ติดต่อ</div>
                    <div class="col-lg-5 text-data">{{ $datas->contact }}</div>
                    <div class="col-lg-2 font-weight-bold text-center">เบอร์ผู้ติดต่อ</div>
                    <div class="col-lg-4 text-data">{{ $datas->tel_contact }}</div>
                </div>
                <div class="row py-1">
                    <div class="col-lg-1 font-weight-bold">ยี่ห้อ</div>
                    <div class="col-lg-3 text-data">{{ $datas->name_brand }}</div>
                    <div class="col-lg-1 font-weight-bold text-center">รุ่น</div>
                    <div class="col-lg-3 text-data">{{ $datas->name_model }}</div>
                    <div class="col-lg-1 font-weight-bold text-center">ทะเบียน</div>
                    <div class="col-lg-3 text-data">{{ $datas->carregnum }}</div>
                </div>
                <div class="row py-1">
                    <div class="col-lg-2 font-weight-bold">รถจากเต็นท์</div>
                    <div class="col-lg-3 text-data">{{ $datas->dealer_name }}</div>
                </div>
                <div class="row py-1">
                    <div class="col-lg-2 font-weight-bold">วันที่นัดตรวจรถ</div>
                    <div class="col-lg-4 text-data">{{ date('d-m-Y', strtotime($datas->inspectiondate)) }}</div>
                    <div class="col-lg-2 font-weight-bold text-center">ช่างที่ไปตรวจ</div>
                    <div class="col-lg-4 text-data">{{ $datas->name_tech }}</div>
                </div>
                <div class="row py-2 mt-3">
                    <div class="col-lg-6">
                        <div class="font-weight-bold text-center">รูปเลขไมล์รถ</div>
                        <div class="p-3 image-block"><img src="{{ URL::asset('images/'.$datas->mile_img) }}"></div>
                        <div class="btnCustom text-center">
                            <input type="checkbox" name="mile_img" id="mile_img1" value="1" {{ ($datas->mile_status == 1) ? 'checked' : '' }} disabled>
                            <label for="mile_img1">ผ่าน</label>

                            <input type="checkbox" name="mile_img" id="mile_img0" value="2" {{ ($datas->mile_status == 2) ? 'checked' : '' }} disabled>
                            <label for="mile_img0">ไม่ผ่าน</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="font-weight-bold text-center">รูปเล่มทะเบียนรถ</div>
                        <div class="p-3 image-block"><img src="{{ URL::asset('images/'.$datas->num_img) }}"></div>
                        <div class="btnCustom text-center">
                            <input type="checkbox" name="num_img" id="num_img1" value="1" {{ ($datas->num_status == 1) ? 'checked' : '' }} disabled>
                            <label for="num_img1">ผ่าน</label>

                            <input type="checkbox" name="num_img" id="num_img0" value="2" {{ ($datas->num_status == 2) ? 'checked' : '' }} disabled>
                            <label for="num_img0">ไม่ผ่าน</label>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-12 text-center">
                    <a href="{{ (request()->is('approved-appoint/*')) ? route('approved-appoint.index') : route('not-approved-appoint.index') }}" class="btn btn-sm btn-danger">
                        <i class="fa fa-undo" aria-hidden="true"></i>
                        ย้อนกลับ
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
