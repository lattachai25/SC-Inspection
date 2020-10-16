@extends('layouts.admin_layout')
@section('title', 'Inspection Report')
@section('content')
<div class="col-md-3"></div>
<div class="col-md-8" style="margin-top:2%;">

<script>
        // search ***************
        $(document).ready(function(){
        $("#search_car").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#search a").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
             });
        });
        });

</script>

    <div class="row">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <div class="col-12">
            <h1 class="title">Inspection Report</h1>
        </div>
        <hr noshade>
        <div class="col-12 mb-3">
            <form action="/search_rep" method="GET">
                {{-- <div class="form-group col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <input class="col-12 form-control form-control-sm" type="input" name="brand" id="brand" placeholder="ยี่ห้อรถ">
                </div> --}}
                <div class="form-row">
                    <label class="col-lg-1 mt-0 mt-lg-auto title-search" for="search_car">ค้นหา</label>
                    <input class="col-lg-5 form-control form-control-sm" type="text" name="search_car" id="search_car" placeholder="ยี่ห้อ, รุ่น, ปี, สี, เลขทะเบียน, เลขไมล์, ราคาขาย"
                    value="<?php if(isset($query)){ echo $query;}?>">
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        @foreach($data as $datas)
        <?php  $Gear=array('0'=>'เกียร์ธรรมดา','1'=>'เกียร์อัตโนมัติ'); ?>

            <div id="search" class="col-md-6 col-lg-4 my-2">
                <a href="{{ route('insp-details.show', $datas->id) }}">
                    <div class="card">
                        <div class="card-img">
                            {{$datas->id}}
                            <img src="/images/{{$datas->im_2}}" height="auto" width="100%">
                        </div>
                        <div class="card-header"><b>{{$datas->year}}</b> <b>{{$datas->name_brand}}</b> <b>{{$datas->name_model}}</b></div>
                        <div class="card-body py-2">
                            <div class="row">
                                <div class="col-5 font-weight-bold">รุ่น</div>
                                <div class="col-7">{{$datas->name_model}}</div>
                            </div>
                            <div class="row">
                                <div class="col-5 font-weight-bold">ปี</div>
                                <div class="col-7">{{$datas->year}}</div>
                            </div>
                            <div class="row">
                                <div class="col-5 font-weight-bold">ระบบเกียร์</div>
                                <div class="col-7">{{$Gear[$datas->geartype]}}</div>
                            </div>
                            <div class="row">
                                <div class="col-5 font-weight-bold">สี</div>
                                <div class="col-7">{{$datas->car_color}}</div>
                            </div>
                            <div class="row">
                                <div class="col-5 font-weight-bold">เลขทะเบียน</div>
                                <div class="col-7">{{$datas->carregnum}}</div>
                            </div>
                            <div class="row">
                                <div class="col-5 font-weight-bold">เลขไมล์ (กม.)</div>
                                <div class="col-7">{{$datas->mileage}}</div>
                            </div>
                        </div>
                        <div class="card-footer" style="border: none;">ราคาขาย <b>{{$datas->price}}</b> บาท</div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="row py-4">
        <div class="col-4"></div>
        <div class="col-4">{{ $data->onEachSide(1)->links() }}</div>
        <div class="col-4"></div>
    </div>
</div>

@endsection
