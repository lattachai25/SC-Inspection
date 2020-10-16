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
                        $idmax = $id_maxs->id_cars;
                        $id_maxins = 'inspec-'.str_pad(($idmax),6,'0',STR_PAD_LEFT);
                        echo 'เลขที่ตรวจสภาพรถ : '.$id_maxins;

                    ?>
            @endforeach
        </a>
        <br><br>
        <div class="col-12">
    @foreach($images as $key => $id_cars)
        {{-- images full start --}}
        <form action='{{ route('upimg_fire_flood.store') }}' method='POST' enctype='multipart/form-data' id="images_full">
            @csrf

            <input type="hidden" name="id_car" value="{{$id_cars->id_cars}}">
            <input type="hidden" name="fromtent" value="{{$id_cars->fromtent}}">
            <input type="hidden" name="id_car_im" value="{{$id_cars->id_car_im}}">
            <input type="hidden" name="id_imf" value="{{$id_cars->id_imf}}">

    @endforeach
            <input type="hidden" name="userID" value="{{ $userID = Auth::user()->id }}">
@foreach($images as $image)
            <div class="form-title">images</div>
                <div class="col-12 pt-lg-3 box-form tab-pane" id="picture" role="tabpanel" aria-labelledby="pills-picture-tab">

                    <div class="list-group-item">

                        <label class="col-lg-5" for="package">รูปน้ำถ้วม (ถ้ามี)</label>
                        <label class="col-lg-1" for="package"></label>
                        <label class="col-lg-5" for="package"></label>

                        <div class="row">
                            <div class="col-md-6 list-group-item">
                                @if($image->im_flood1 == 'null' || $image->im_flood1 == '')
                                <?php if($image->id_imf == ''){ ?>
                                    <div class="row">
                                        <div class="col-md-11">
                                            <input type="file" name="image_flood1" class="form-control" height="2%" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="alert col-md-11" id="message_flood1" style="display: none;"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <span id="uploaded_image_flood1"></span>
                                        </div>
                                    </div>
                                <?php }else{ ?>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                        </div>
                                    </div>
                                <?php } ?>
                                @else
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <img src="/images/{{$image->im_flood1}}" class="img-thumbnail" width="80%" align="center" />
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6 list-group-item">
                            @if($image->im_flood2 == 'null' || $image->im_flood2 == '')
                            <?php if($image->id_imf == ''){ ?>
                                <div class="row">
                                    <div class="col-md-11">
                                        <input type="file" name="image_flood2" class="form-control" height="2%" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="alert col-md-11" id="message_flood2" style="display: none;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" align="center">
                                        <span id="uploaded_image_flood2"></span>
                                    </div>
                                </div>
                            <?php }else{ ?>
                                <div class="row">
                                    <div class="col-md-12" align="center">
                                    </div>
                                </div>
                            <?php } ?>
                            @else
                                <div class="row">
                                    <div class="col-md-12" align="center">
                                        <img src="/images/{{$image->im_flood2}}" class="img-thumbnail" width="80%" align="center" />
                                    </div>
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">

                        <label class="col-lg-5" for="package">รูปไฟไหม้ (ถ้ามี)</label>
                        <label class="col-lg-1" for="package"></label>
                        <label class="col-lg-5" for="package"></label>

                        <div class="row">
                            <div class="col-md-6 list-group-item">
                                @if($image->im_fire1 == 'null' || $image->im_fire1 == '')
                                <?php if($image->id_imf == ''){ ?>
                                    <div class="row">
                                        <div class="col-md-11">
                                            <input type="file" name="image_fire1" class="form-control" height="2%" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="alert col-md-11" id="message_fire1" style="display: none;"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <span id="uploaded_image_fire1"></span>
                                        </div>
                                    </div>
                                <?php }else{ ?>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                        </div>
                                    </div>
                                <?php } ?>
                                @else
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <img src="/images/{{$image->im_fire1}}" class="img-thumbnail" width="80%" align="center" />
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6 list-group-item">
                            @if($image->im_fire2 == 'null' || $image->im_fire2 == '')
                            <?php if($image->id_imf == ''){ ?>
                                <div class="row">
                                    <div class="col-md-11">
                                        <input type="file" name="image_fire2" class="form-control" height="2%" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="alert col-md-11" id="message_fire2" style="display: none;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" align="center">
                                        <span id="uploaded_image_fire2"></span>
                                    </div>
                                </div>
                            <?php }else{ ?>
                                <div class="row">
                                    <div class="col-md-12" align="center">
                                    </div>
                                </div>
                            <?php } ?>
                            @else
                                <div class="row">
                                    <div class="col-md-12" align="center">
                                        <img src="/images/{{$image->im_fire2}}" class="img-thumbnail" width="80%" align="center" />
                                    </div>
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 py-2 pt-lg-3 pb-lg-4">
                    <div class="col-12 text-center">
                        <a href="{{ route('upimages.show',$image->id_cars) }}"><button class="btn btn-danger" type="button"><i class="fa fa-arrow-left" aria-hidden="true"></i> ย้อนกลับ</button></a>

                        @if($image->id_imf == '')
                            <button class="btn btn-success" type="submit" onclick="return alert('บันทึกข้อมูล เลขที่ : {{$id_maxins}} เรียบร้อยแล้ว')">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i> บันทึก</button>
                        @else
                            <button class="btn btn-success" type="submit">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i> กลับหน้าหลัก</button>
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
                url:"{{ route('ajaxupload.action1') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_flood1').css('display', 'block');
                        $('#message_flood1').html(data.message_flood1);
                        $('#message_flood1').addClass(data.class_name);
                        $('#uploaded_image_flood1').html(data.uploaded_image_flood1);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.action2') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_flood2').css('display', 'block');
                        $('#message_flood2').html(data.message_flood2);
                        $('#message_flood2').addClass(data.class_name);
                        $('#uploaded_image_flood2').html(data.uploaded_image_flood2);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.action3') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_fire1').css('display', 'block');
                        $('#message_fire1').html(data.message_fire1);
                        $('#message_fire1').addClass(data.class_name);
                        $('#uploaded_image_fire1').html(data.uploaded_image_fire1);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.action4') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_fire2').css('display', 'block');
                        $('#message_fire2').html(data.message_fire2);
                        $('#message_fire2').addClass(data.class_name);
                        $('#uploaded_image_fire2').html(data.uploaded_image_fire2);
                    }
                })
        });

    });

</script>


@endsection
