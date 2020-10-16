@extends('layouts.admin_layout')
@section('title', 'Edit Inspection Report')
@section('content')

@if (session('status'))
{{ session('status') }}
@endif

<div class="col-md-3"></div>
<div class="col-md-7" style="margin-top:2%;">


    <div class="col-lg-12">
        <h1 class="title">Technician</h1>
    </div>
    <hr noshade>

    <div class="col-12" align="center">
        <form action='{{ route('technician.store') }}' method='POST' enctype='multipart/form-data'>
         @csrf
        <div class="form-title" align="right">ข้อมูลช่าง</div>
        <div class="col-12 pt-lg-10 box-form"><br>
            <div class="form-group row">
                <label class="col-lg-3" for="name_tech">ชื่อ - นามสกุล</label>
                <input class="col-lg-8 form-control form-control-sm form-border" type="text" name="name_tech" id="name_tech" required>

            </div><br>
        </div>
        <button class="btn btn-success" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> บันทึกการเพิ่มรายชื่อ</button>

        </form>

    </div>
    <div class="row">
        <div class="col-lg-12 mt-3 table-responsive">
            <table id="dtBasicExample" class="table table-hover table-sm bg-white">
                <thead align="center">
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อ - นามสกุล (ช่าง)</th>
                        <th></th>
                    </tr>
                </thead>
                <?php $i=0; ?>
                <tbody id="myTable">
                        @foreach($technician as $datas)
                        <tr align="center">
                            <td>ลำดับที่ : <?php $i+=1; echo $i;?></td>
                            <td>{{$datas->name_tech}}</td>
                            <td width="100px" style="text-align: center; vertical-align: middle;">
                            <div class="row">
                                {{-- <div class="col-4"><a href="{{ route('technician.show', $datas->id)}}" title="ดูข้อมูล"><button class="btn btn-primary py-0 px-1"><i class="fa fa-search"></i></button></a></div> --}}
                                <div class="col-4"><a href="{{ route('technician.edit', $datas->id)}}" title="แก้ไขข้อมูล"><button class="btn btn-success py-0 px-1"><i class="fa fa-pencil"></i></button></a></div>
                                <div class="col-4">
                                    <form id="del" action="{{route('technician.destroy',$datas->id)}}" method="post">
                                        @csrf  @method('DELETE')
                                        <a title="ลบข้อมูล">
                                            <button data-name="{{$datas->firstname}}" data-id="{{$datas->id}}" class="deleteForm btn btn-danger py-0 px-1"
                                            onclick="return confirm('ต้องการลบข้อมูล - ชุดที่ : {{$datas->id}} - ชื่อลูกค้า : {{$datas->firstname}} ?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </a>
                                    </form>
                                </div>
                            </div>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            {{-- <div class="row">
                <div class="col-4"></div>
                <div class="col-4">{{ $name_tech->onEachSide(1)->links() }}</div>
                <div class="col-4"></div>
            </div> --}}
        </div>
    </div>


@endsection
