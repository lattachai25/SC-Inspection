@extends('layouts.admin_layout')

@section('title', 'Approved Appointment')
@section('content')
<div class="col-md-3"></div>
<div class="col-md-8" style="margin-top:2%;">

    <div class="row">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <div class="col-lg-12">
            <h1 class="title">Approved Appointment</h1>
        </div>
        <hr noshade>
    </div>

    <div class="row">
        <div class="col-lg-12 mt-3 table-responsive">
            <table class="table table-striped table-hover table-sm bg-white">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อเต็นท์</th>
                        <th>ชื่อลูกค้า</th>
                        <th>เบอร์โทร</th>
                        <th>ยี่ห้อ</th>
                        <th>รุ่น</th>
                        <th>ทะเบียนรถ</th>
                        <th>วันที่</th>
                        <th>ผู้ติดต่อ</th>
                        <th>เบอร์ผู้ติดต่อ</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach($data as $datas)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$datas->dealer_name}}</td>
                        <td>{{$datas->nametitle}} {{$datas->firstname}} {{$datas->lastname}}</td>
                        <td>{{$datas->tel}}</td>
                        <td>{{$datas->name_brand}}</td>
                        <td>{{$datas->name_model}}</td>
                        <td>{{$datas->carregnum}}</td>
                        <td>{{date('d-m-Y', strtotime($datas->inspectiondate))}}</td>
                        <td>{{$datas->contact}}</td>
                        <td>{{$datas->tel_contact}}</td>
                        <td width="40px" style="text-align: center; vertical-align: middle;">
                            <a href="{{ route('approved-appoint.show', $datas->id) }}" title="ดูข้อมูล"><button class="btn btn-primary py-0 px-1"><i class="fa fa-search"></i></button></a>
                        </td>
                    </tr>
                    @php $i++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">{{ $data->onEachSide(1)->links() }}</div>
        <div class="col-4"></div>
    </div>
</div>
@endsection
