@extends('layouts.admin_layout')
@section('title', 'Not Approved')
@section('content')
<div class="col-md-3"></div>
<div class="col-md-8" style="margin-top:2%;">
<div class="row">
    <div class="col-12">
        <h1 class="title">Not Approved Appointment</h1>
    </div>
    <hr noshade>
    <table class="table table-striped table-hover table-sm bg-white">
        <thead>
            <th>ลำดับ</th>
            <th>ชื่อเต็น</th>
            <th>ชื่อลูกค้า</th>
            <th>เบอร์โทร</th>
            <th>ยี่ห้อ</th>
            <th>รุ่นรถ</th>
            <th>ทะเบียน</th>
            <th>วันที่</th>
            <th>ผู้ติดต่อ</th>
            <th>เบอร์ผู้ติดต่อ</th>
            <th></th>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $data->dealer_name }}</td>
                    <td>{{ $data->firstname }} {{ $data->lastname}}</td>
                    <td>{{ $data->tel }}</td>
                    <td>{{ $data->name_brand }}</td>
                    <td>{{ $data->name_model }}</td>
                    <td>{{ $data->carregnum }}</td>
                    <td>{{ $data->inspectiondate }}</td>
                    <td>{{ $data->contact }}</td>
                    <td>{{ $data->tel_contact }}</td>
                    <td><a href="{{ route('not-approved-appoint.show', $data->id_car )}}" title="ดูข้อมูล"><button class="btn btn-primary py-0 px-1"><i class="fa fa-search"></i></button></a></td>
                </tr>
                <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
