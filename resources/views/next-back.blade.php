@extends('layouts.admin_layout')
@section('title', 'Inspection Appointment')
@section('content')

<div class="col-md-3"></div>
<div class="col-md-8" style="margin-top:2%;">
<script language="JavaScript">
    // search ***************
    function myFunction() {
        var text_length = document.getElementById('search').value.length;
        alert(text_length);
    }

        $(document).ready(function(){
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
        
</script>  

    <div class="row">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <div class="col-lg-12">
            <h1 class="title">Inspection Appointment</h1>
        </div>
        <hr noshade>
        <div class="col-lg-12 clearfix">
            <div class="col-lg-9 mt-lg-1 float-left">
                <form>
                    <div class="form-row">
                        <label class="col-lg-1 mt-0 mt-lg-auto title-search" for="search">ค้นหา</label>
                        <input class="col-lg-7 form-control form-control-sm" type="text" name="search" id="search" placeholder="ชื่อลูกค้า, เลขประจำตัวประชาชน, เบอร์โทร, ยี่ห้อ, รุ่น, วันนัดตรวจรถ" onkeyup="myFunction();">
                        {{-- <input id="search" type="text" placeholder="Search.."> --}}
                    </div>
                </form>
            </div>
            <div class="col-lg-3 mt-3 mt-lg-auto float-right text-right">
                <a href="{{ route('add-inspection-appointment.index') }}"><button class="btn btn-warning px-4 btn-add-appoint"><i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูลนัดตรวจรถ</button></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 mt-3 table-responsive">
            <table id="dtBasicExample" class="table table-hover table-sm bg-white">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อลูกค้า</th>
                        <th>เลขประจำตัวประชาชน</th>
                        <th>เบอร์โทร</th>
                        <th>ยี่ห้อ</th>
                        <th>รุ่น</th>
                        <th>วันนัดตรวจรถ</th>
                        <th>ช่าง</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="myTable">

                    <?php  $text_length = 1;   ?>

                    @if($text_length <= 0) 
                        @foreach($data as $datas)
                        <tr>
                            <td>ชุดที่ : {{$datas->id}}</td>
                            <td>{{$datas->firstname}}</td>
                            <td>{{$datas->idcard}}</td>
                            <td>{{$datas->tel}}</td>
                            <td>{{$datas->carbrand}}</td>
                            <td>{{$datas->carmodel}}</td>
                            <td>{{date('d-m-Y', strtotime($datas->inspectiondate))}}</td>
                            <td width="100px" style="text-align: center; vertical-align: middle;">
                            <div class="row">
                                <div class="col-4"><a href="{{ route('appointment.show', $datas->id)}}" title="ดูข้อมูล"><button class="btn btn-primary py-0 px-1"><i class="fa fa-search"></i></button></a></div>
                                <div class="col-4"><a href="{{ route('appointment.edit', $datas->id)}}" title="แก้ไขข้อมูล"><button class="btn btn-success py-0 px-1"><i class="fa fa-pencil"></i></button></a></div>
                                <div class="col-4">                            
                                    <form id="del" action="{{route('appointment.destroy',$datas->id)}}" method="post">
                                        @csrf  @method('DELETE')
                                        <a title="ลบข้อมูล">
                                            <button data-name="{{$datas->firstname}}" data-id="{{$datas->id}}" class="deleteForm btn btn-danger py-0 px-1"
                                            onclick="return confirm('ต้องการลบข้อมูล {{$datas->firstname}} ลำดับ : {{$datas->id}}')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </a>
                                    </form>
                                </div>
                            </div>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        @foreach($data_search as $datas)
                        <tr>
                            <td>ชุดที่ : {{$datas->id}}</td>
                            <td>{{$datas->firstname}}</td>
                            <td>{{$datas->idcard}}</td>
                            <td>{{$datas->tel}}</td>
                            <td>{{$datas->carbrand}}</td>
                            <td>{{$datas->carmodel}}</td>
                            <td>{{date('d-m-Y', strtotime($datas->inspectiondate))}}</td>
                            <td width="100px" style="text-align: center; vertical-align: middle;">
                            <div class="row">
                                <div class="col-4"><a href="{{ route('appointment.show', $datas->id)}}" title="ดูข้อมูล"><button class="btn btn-primary py-0 px-1"><i class="fa fa-search"></i></button></a></div>
                                <div class="col-4"><a href="{{ route('appointment.edit', $datas->id)}}" title="แก้ไขข้อมูล"><button class="btn btn-success py-0 px-1"><i class="fa fa-pencil"></i></button></a></div>
                                <div class="col-4">                            
                                    <form id="del" action="{{route('appointment.destroy',$datas->id)}}" method="post">
                                        @csrf  @method('DELETE')
                                        <a title="ลบข้อมูล">
                                            <button data-name="{{$datas->firstname}}" data-id="{{$datas->id}}" class="deleteForm btn btn-danger py-0 px-1"
                                            onclick="return confirm('ต้องการลบข้อมูล {{$datas->firstname}} ลำดับ : {{$datas->id}}')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </a>
                                    </form>
                                </div>
                            </div>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody> 
            </table>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">{{ $data->links() }}</div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    $(document).ready(function() {
    $('.deleteForm').click(function(evt) {
        evt.preventDefault();
        var name=$(this).data("name");
        var id=$(this).data("id");
        swal({
                title:`ต้องการลบข้อมูล ${name} ?`,
                text: `ลำดับ : ${id} ถ้าลบแล้วไม่สามารถกู้คืนได้`,
                icon: "warning",
                buttons: true,
                dangerMode: true
            })
            .then((willDelete) => {
                if (willDelete) {
                    //  swal("ลบข้อมูลเรียบร้อยแล้ว!", { icon: "success", function() {$form.submit();}});
                    $('#del').submit(${id});
                    // $form $('#del').submit();
                } 
                else {
                    swal("ยกเลิกการลบข้อมูล!", { icon: "error" });
                }
              }
            );
    });
});
</script> --}}



@endsection