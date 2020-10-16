@extends('layouts.admin_layout')
@section('title', 'Inspection Appointment')
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
<div class="col-md-2"></div>
<div class="col-md-9" style="margin-left:5%; margin-top:2%;">
    <div class="col-12">
        <h3 class="title">Pending Appointment</h3>
        @if(session('alert'))
            <div class="alert alert-success">
                {{ session('alert')}}
            </div>
        @endif
    </div>
    <hr noshade>
    <div class="row">
        <div class="col-lg-12 mt-3">

            @foreach($datas as $data)
            <div class="form-title">ข้อมูลนัดตรวจรถ</div>
            <form method="post" action="{{ route('pending.update', $data->id_car)}}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="col-12 pt-lg-3 box-form">
                    <input type="hidden" name="userID" value="{{ $userID = Auth::user()->id }}">
                    <div class="row py-1">
                        <div class="col-lg-1 pr-0 font-weight-bold">ชื่อลูกค้า</div>
                        <div class="col-lg-5 text-data">{{ $data->nametitle }} {{ $data->firstname }} {{ $data->lastname }}</div>
                        <div class="col-lg-2 font-weight-bold text-center">เบอร์โทรศัพท์</div>
                        <div class="col-lg-4 text-data">{{ $data->tel }}</div>
                    </div>
                    <div class="row py-1">
                        <div class="col-lg-1 pr-0 font-weight-bold">ผู้ติดต่อ</div>
                        <div class="col-lg-5 text-data">{{ $data->contact }}</div>
                        <div class="col-lg-2 font-weight-bold text-center">เบอร์ผู้ติดต่อ</div>
                        <div class="col-lg-4 text-data">{{ $data->tel_contact }}</div>
                    </div>
                    <div class="row py-1">
                        <div class="col-lg-1 font-weight-bold">ยี่ห้อ</div>
                        <div class="col-lg-3 text-data">{{ $data->name_brand }}</div>
                        <div class="col-lg-1 font-weight-bold text-center">รุ่น</div>
                        <div class="col-lg-3 text-data">{{ $data->name_model }}</div>
                        <div class="col-lg-1 font-weight-bold text-center">ทะเบียน</div>
                        <div class="col-lg-3 text-data">{{ $data->carregnum }}</div>
                    </div>
                    <div class="row py-1">
                        <div class="col-lg-2 font-weight-bold">รถจากเต็นท์</div>
                        <div class="col-lg-3 text-data">{{ $data->dealer_name }}</div>
                    </div>
                    <div class="row py-1">
                        <div class="col-lg-2 font-weight-bold">วันที่นัดตรวจรถ</div>
                        <div class="col-lg-4 text-data">{{ date('d-m-Y', strtotime($data->inspectiondate)) }}</div>
                        <div class="col-lg-2 font-weight-bold text-center">ช่างที่ไปตรวจ</div>
                        <div class="col-lg-4 text-data">{{ $data->name_tech }}</div>
                    </div>
                    <div class="row py-2 mt-3">
                        <div class="col-lg-6">
                            <div class="font-weight-bold text-center">รูปเลขไมล์รถ</div>
                            <div class="p-3 image-block "><img src="{{ URL::asset('images/'.$data->mile_img) }}"></div>
                            <div class="btnCustom text-center">
                                <input type="radio" name="mile_img" id="mile_img1" value="1">
                                <label for="mile_img1">ผ่าน</label>

                                <input type="radio" name="mile_img" id="mile_img0" value="2" checked>
                                <label for="mile_img0">ไม่ผ่าน</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="font-weight-bold text-center">รูปเล่มทะเบียนรถ</div>
                            <div class="p-3 image-block"><img src="{{ URL::asset('images/'.$data->num_img) }}"></div>
                            <div class="btnCustom text-center">
                                <input type="radio" name="num_img" id="num_img1" value="1">
                                <label for="num_img1">ผ่าน</label>

                                <input type="radio" name="num_img" id="num_img0" value="2" checked>
                                <label for="num_img0">ไม่ผ่าน</label>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-sm btn-success" onclick="alert('อนุมัติการนัดตรวจรถแล้ว')"><i class="fa fa-check" aria-hidden="true" ></i> ยืนยัน</button>
                        <a href="{{ route('pending.index') }}" class="btn btn-sm btn-danger"><i class="fa fa-times" aria-hidden="true"></i> ยกเลิก</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
