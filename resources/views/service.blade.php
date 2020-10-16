@extends('layouts.admin_layout')
@section('title', 'Service Inspection Report')
@section('content')
<div class="col-md-3"></div>
<div class="col-md-8" style="margin-top:2%;">

    <div class="row">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <div class="col-lg-12">
            <h1 class="title">Service Report</h1>
        </div>
        <hr noshade>
    </div>

    <div class="row">
        <div class="col-lg-12 mt-3 table-responsive">
            <table class="table table-striped table-hover table-sm bg-white">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>วันที่ตรวจรถ</th>
                        <th>วันออกรถ</th>
                        <th>วันเปิดกรมธรรม์</th>
                        <th>ยี่ห้อ</th>
                        <th>รุ่น</th>
                        <th>ทะเบียนรถ</th>
                        <th></th>
                    </tr>
                </thead>

                <?php $i = 0; $number = 0; $pa = 0;?>
                <tbody>
                    @foreach($data as $datas)
                    <tr>
                        <td>
                            <?php

                                    if(isset($_GET['page']))
                                    {
                                        $pa = ($_GET['page']-1)*20;
                                    }
                                    else
                                    {
                                        $pa = 0;
                                    }
                                    $datas->id;
                                    $i += 1;
                                    echo $number = $pa+$i;
                            ?>
                        </td>
                        <td>{{date('d-m-Y', strtotime($datas->inspectiondate))}}</td>
                        <td>{{date('d-m-Y', strtotime($datas->dateregister))}}</td>
                        <td>{{date('d-m-Y', strtotime($datas->dateregister))}}</td>
                        <td>{{$datas->name_brand}}</td>
                        <td>{{$datas->name_model}}</td>
                        <td>{{$datas->carregnum}}</td>
                        <td width="40px" style="text-align: center; vertical-align: middle;">
                            <a href="{{ route('service.show', $datas->id)}}" title="ดูข้อมูล"><button class="btn btn-primary py-0 px-1"><i class="fa fa-search"></i></button></a>
                        </td>
                    </tr>
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
