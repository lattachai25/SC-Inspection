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
            <h3 class="title">อัพโหลดรูปภาพ</h3>
        </div>
        <hr noshade><br>
        <a style="margin-right:3%">
            @foreach($images as $key => $id_maxs)

                    <?php
                        $idmax = $id_maxs->id_car;
                        $id_maxins = 'inspec-'.str_pad(($idmax),6,'0',STR_PAD_LEFT);
                        echo 'เลขที่ตรวจสภาพรถ : '.$id_maxins;

                    ?>
            @endforeach
        </a>
        <br><br>
        <div class="col-12">
    @foreach($images as $key => $id_cars)
        {{-- images full start --}}

        <form action='{{ route('upimages.store') }}' method='POST' enctype='multipart/form-data' id="images_full">
            @csrf

            <input type="hidden" name="id_car" value="{{$id_cars->id_car}}">
            <input type="hidden" name="inspectiontype" value="{{$id_cars->inspectiontype}}">
            <input type="hidden" name="id_im" value="{{$id_cars->id}}">
            <input type="hidden" name="id_imfull" value="{{$id_cars->id_imfull}}">
            <input type="hidden" name="status_tech" value="{{$id_cars->status_tech}}">
            <input type="hidden" name="im_2" value="{{$id_cars->im_2}}">
            <input type="hidden" name="im_3" value="{{$id_cars->im_3}}">
            <input type="hidden" name="im_4" value="{{$id_cars->im_4}}">
            <input type="hidden" name="im_5" value="{{$id_cars->im_5}}">
            <input type="hidden" name="im_6" value="{{$id_cars->im_6}}">
            <input type="hidden" name="im_7" value="{{$id_cars->im_7}}">
            <input type="hidden" name="im_A" value="{{$id_cars->im_A}}">
            <input type="hidden" name="im_B" value="{{$id_cars->im_B}}">
            <input type="hidden" name="im_C" value="{{$id_cars->im_C}}">
            <input type="hidden" name="im_D" value="{{$id_cars->im_D}}">
            <input type="hidden" name="im_V" value="{{$id_cars->im_V}}">
            <input type="hidden" name="fromtent" value="{{$id_cars->fromtent}}">
    @endforeach
            <input type="hidden" name="userID" value="{{ $userID = Auth::user()->id }}">
@foreach($images as $image)
            <div class="form-title">images</div>
                <div class="col-12 pt-lg-3 box-form tab-pane" id="picture" role="tabpanel" aria-labelledby="pills-picture-tab">
                            {{-- 0-1 --}}
                            <div class="list-group-item">

                                <label class="col-lg-5" for="package">รูปเลขไมล์</label>
                                <label class="col-lg-1" for="package"></label>
                                <label class="col-lg-5" for="package">รูปเล่มทะเบียน</label>

                                <div class="row">
                                    <div class="col-md-6 list-group-item">
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <img src="/images/{{$image->im_0}}" class="img-thumbnail" width="80%" align="center" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 list-group-item">
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <img src="/images/{{$image->im_1}}" class="img-thumbnail" width="80%" align="center" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                             </div>

                        {{-- 2-3 --}}
                        {{-- <form action='{{ route('upimages.store') }}' method='POST' enctype='multipart/form-data' id="images_full">
                            @csrf --}}
                        <div class="list-group-item">

                            <label class="col-lg-5" for="package">รูปด้านหน้ารถยนต์</label>
                            <label class="col-lg-1" for="package"></label>
                            <label class="col-lg-5" for="package">รูปด้านหลังรถยนต์</label>

                            <div class="row">
                                <div class="col-md-6 list-group-item">
                                    @if($image->im_2 == 'null')
                                        <div class="row">
                                            <div class="col-md-11">
                                                <input type="file" name="image_2" class="form-control" height="2%" value="0" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="alert col-md-11" id="message_2" style="display: none;"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <span id="uploaded_image_2"></span>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <img src="/images/{{$image->im_2}}" class="img-thumbnail" width="80%" align="center" />
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6 list-group-item">
                                @if($image->im_3 == 'null')
                                    <div class="row">
                                        <div class="col-md-11">
                                            <input type="file" name="image_3" class="form-control" height="2%" value="0" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="alert col-md-11" id="message_3" style="display: none;"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <span id="uploaded_image_3"></span>
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <img src="/images/{{$image->im_3}}" class="img-thumbnail" width="80%" align="center" />
                                        </div>
                                    </div>
                                @endif
                                </div>
                            </div>
                        </div>
                        {{-- </form> --}}
                        {{-- 4-5 --}}
                        <div class="list-group-item">

                            <label class="col-lg-5" for="package">รูปเลขตัวถัง</label>
                            <label class="col-lg-1" for="package"></label>
                            <label class="col-lg-5" for="package">รูปเลขเครื่องยนต์</label>

                            <div class="row">
                                <div class="col-md-6 list-group-item">
                                    @if($image->im_4 == 'null')
                                        <div class="row">
                                            <div class="col-md-11">
                                                <input type="file" name="image_4" class="form-control" height="2%" value="0" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="alert col-md-11" id="message_4" style="display: none;"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <span id="uploaded_image_4"></span>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <img src="/images/{{$image->im_4}}" class="img-thumbnail" width="80%" align="center" />
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6 list-group-item">
                                    @if($image->im_5 == 'null')
                                        <div class="row">
                                            <div class="col-md-11">
                                                <input type="file" name="image_5" class="form-control" height="2%" value="1" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="alert col-md-11" id="message_5" style="display: none"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <span id="uploaded_image_5"></span>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <img src="/images/{{$image->im_5}}" class="img-thumbnail" width="80%" align="center" />
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                         </div>

                    {{-- 6-7 --}}

                    <div class="list-group-item">

                        <label class="col-lg-5" for="package">รูปเครื่องยนต์</label>
                        <label class="col-lg-1" for="package"></label>
                        <label class="col-lg-5" for="package">ผลตรวจสอบ ODB</label>

                        <div class="row">
                            <div class="col-md-6 list-group-item">
                                @if($image->im_6 == 'null')
                                    <div class="row">
                                        <div class="col-md-11">
                                            <input type="file" name="image_6" class="form-control" height="2%" value="0" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="alert col-md-11" id="message_6" style="display: none;"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <span id="uploaded_image_6"></span>
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <img src="/images/{{$image->im_6}}" class="img-thumbnail" width="80%" align="center" />
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6 list-group-item">
                                @if($image->im_7 == 'null')
                                    <div class="row">
                                        <div class="col-md-11">
                                            <input type="file" name="image_7" class="form-control" height="2%" value="1" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="alert col-md-11" id="message_7" style="display: none"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <span id="uploaded_image_7"></span>
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <img src="/images/{{$image->im_7}}" class="img-thumbnail" width="80%" align="center" />
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    <br><br>
                        {{-- A-B --}}
                        <div class="list-group-item">

                            <label class="col-lg-5" for="package">รูปล้อซ้ายด้านหน้ารถยนต์</label>
                            <label class="col-lg-1" for="package"></label>
                            <label class="col-lg-5" for="package">รูปล้อขวาด้านหน้ารถยนต์</label>

                            <div class="row">
                                <div class="col-md-6 list-group-item">
                                    @if($image->im_A == 'null')
                                        <div class="row">
                                            <div class="col-md-11">
                                                <input type="file" name="image_A" class="form-control" height="2%" value="0" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="alert col-md-11" id="message_A" style="display: none;"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <span id="uploaded_image_A"></span>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <img src="/images/{{$image->im_A}}" class="img-thumbnail" width="80%" align="center" />
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6 list-group-item">
                                    @if($image->im_B == 'null')
                                        <div class="row">
                                            <div class="col-md-11">
                                                <input type="file" name="image_B" class="form-control" height="2%" value="1" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="alert col-md-11" id="message_B" style="display: none"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <span id="uploaded_image_B"></span>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <img src="/images/{{$image->im_B}}" class="img-thumbnail" width="80%" align="center" />
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                         </div>

                    {{-- C-D --}}

                    <div class="list-group-item">

                        <label class="col-lg-5" for="package">รูปล้อซ้ายด้านหลังรถยนต์</label>
                        <label class="col-lg-1" for="package"></label>
                        <label class="col-lg-5" for="package">รูปล้อขวาด้านหลังรถยนต์</label>

                        <div class="row">
                            <div class="col-md-6 list-group-item">
                                @if($image->im_C == 'null')
                                    <div class="row">
                                        <div class="col-md-11">
                                            <input type="file" name="image_C" class="form-control" height="2%" value="0" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="alert col-md-11" id="message_C" style="display: none;"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <span id="uploaded_image_C"></span>
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <img src="/images/{{$image->im_C}}" class="img-thumbnail" width="80%" align="center" />
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6 list-group-item">
                                @if($image->im_D == 'null')
                                    <div class="row">
                                        <div class="col-md-11">
                                            <input type="file" name="image_D" class="form-control" height="2%" value="1" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="alert col-md-11" id="message_D" style="display: none"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <span id="uploaded_image_D"></span>
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <img src="/images/{{$image->im_D}}" class="img-thumbnail" width="80%" align="center" />
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <br>
                        <div class="row">
                            {{-- <label class="col-lg-1" for="package"></label> --}}
                            <label class="col-lg-5" for="package">ชื่อไฟล์ VDO</label>

                            <div class="col-md-12 list-group-item">
                                <div class="row">
                                    <div class="col-md-2" align="right">URL-VDO</div>
                                    <div class="col-md-10">
                                    @if($image->im_V == 'null' || $image->im_V == '')
                                        <input class="form-control form-control-sm form-border" type="text" name="file_vdo" id="file_vdo">
                                    @else
                                        <input class="form-control form-control-sm form-border" type="text" name="file_vdo" id="file_vdo" value="{{$image->im_V}}" disabled>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="col-12 py-2 pt-lg-3 pb-lg-4">
                    <div class="col-12 text-center">
                        <a href="{{ route('report.show',$image->id_car) }}"><button class="btn btn-danger" type="button"><i class="fa fa-arrow-left" aria-hidden="true"></i> ย้อนกลับ</button></a>
                        @if($image->inspectiontype=='1')
                        {{-- check standart --}}
                            <?php  if($image->im_2=='null' || $image->im_2==''){ ?>
                                <button class="btn btn-success" type="submit" onclick="return alert('บันทึกข้อมูลอัพโหลดรูปภาพ เลขที่ : {{$id_maxins}} เรียบร้อยแล้ว')">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i> บันทึก</button>
                            <?php }else{ ?>
                                <button class="btn btn-success" type="submit">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i> กลับหน้าหลัก</button>
                            <?php } ?>
                        @else
                        {{-- check full inspection --}}
                            <?php  if($image->im_2=='null' || $image->im_2==''){ ?>
                                <button class="btn btn-success" type="submit" onclick="return alert('บันทึกข้อมูลอัพโหลดรูปภาพ เลขที่ : {{$id_maxins}} เรียบร้อยแล้ว')">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i> บันทึก</button>
                            <?php }else{ ?>
                                <button class="btn btn-success" type="submit">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i> NEXT</button>
                            <?php } ?>
                        @endif
                    </div>
                </div>
                @endforeach
        </form>

        {{-- form images full end --}}
        </div>
    </div>
</div>


<script>

    // upload images full

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.action22') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_2').css('display', 'block');
                        $('#message_2').html(data.message_2);
                        $('#message_2').addClass(data.class_name);
                        $('#uploaded_image_2').html(data.uploaded_image_2);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.action33') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_3').css('display', 'block');
                        $('#message_3').html(data.message_3);
                        $('#message_3').addClass(data.class_name);
                        $('#uploaded_image_3').html(data.uploaded_image_3);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.action44') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_4').css('display', 'block');
                        $('#message_4').html(data.message_4);
                        $('#message_4').addClass(data.class_name);
                        $('#uploaded_image_4').html(data.uploaded_image_4);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.action5') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_5').css('display', 'block');
                        $('#message_5').html(data.message_5);
                        $('#message_5').addClass(data.class_name);
                        $('#uploaded_image_5').html(data.uploaded_image_5);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.action6') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_6').css('display', 'block');
                        $('#message_6').html(data.message_6);
                        $('#message_6').addClass(data.class_name);
                        $('#uploaded_image_6').html(data.uploaded_image_6);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.action7') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_7').css('display', 'block');
                        $('#message_7').html(data.message_7);
                        $('#message_7').addClass(data.class_name);
                        $('#uploaded_image_7').html(data.uploaded_image_7);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.actionA') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_A').css('display', 'block');
                        $('#message_A').html(data.message_A);
                        $('#message_A').addClass(data.class_name);
                        $('#uploaded_image_A').html(data.uploaded_image_A);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.actionB') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_B').css('display', 'block');
                        $('#message_B').html(data.message_B);
                        $('#message_B').addClass(data.class_name);
                        $('#uploaded_image_B').html(data.uploaded_image_B);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.actionC') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_C').css('display', 'block');
                        $('#message_C').html(data.message_C);
                        $('#message_C').addClass(data.class_name);
                        $('#uploaded_image_C').html(data.uploaded_image_C);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.actionD') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_D').css('display', 'block');
                        $('#message_D').html(data.message_D);
                        $('#message_D').addClass(data.class_name);
                        $('#uploaded_image_D').html(data.uploaded_image_D);
                    }
                })
        });

    });



</script>




@endsection
