{{-- @extends('layouts.admin_layout')
@section('content') --}}
{{-- <div class="col-md-3"></div> --}}
@section('title', 'Inspection Report')
<html>

<div class="col-md-8" style="margin-top:2%;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link href="{{ asset('css/carshow.css')}}" rel="stylesheet">

  <script>
    function printdiv(){
        var newstr=document.getElementById("printpage").innerHTML;
        var footer ="";

        //You can set height width over here
        var popupWin = window.open('', '_blank', 'width=1100,height=600');
        popupWin.document.open();
        popupWin.document.write('<html> <body>'+ newstr + '</html>');
        window.resizeTo(960, 600);
        popupWin.document.close();
        return false;
    }
</script>

</head>
<script>
        // search ***************
        // $(document).ready(function(){
        // $("#search_car").on("keyup", function() {
        //     var value = $(this).val().toLowerCase();
        //     $("#search a").filter(function() {
        //     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        //      });
        // });
        // });

</script>

{{-- <body onload="window.print()"> --}}
<body>
    <div class="printpage" align="center">
        <div class = "page-container">

            <?php

                $idins = $datas->id;
                $idinspec = 'INS'.str_pad(($datas->ins),5,'0',STR_PAD_LEFT);
                // echo 'เลขที่ตรวจสภาพรถ : '.$idinspec;
                $date = substr(date("Y"),2);
                $idCS = 'CS'.$date.str_pad(($idins),5,'0',STR_PAD_LEFT);

            ?>

            <!--PAGE 1-->
            <div class="page">
                <div class="page-contain">
                    <div class="head-logo">
                        <img src= "{{ asset('images/main-logo.png') }}">
                    </div>
                    <div class="head-title">
                        Preowned Vehicle Inspection Report
                    </div>
                    <div class="head-description">
                        Premium Inspection Analysis
                    </div>
                    @for($i=0;$i<=13;$i++)<br>@endfor
                    <div class="d-flex justify-content-center">
                        <img src= "{{ asset('images/tuv.png') }}" height="auto" width="280px">
                    </div>
                </div>
            </div>
            <!--PAGE 2-->
            <div class="page">
                <div class="page-contain page-2">
                    <div style="background-color: #ffffff; margin: 70px 30px; padding: 10px 25px;">
                        <table cellpadding="0" width="100%" style="text-align: center;">
                            <tr>
                                <td colspan="3" style="padding: 5px 0;"><img src="{{ asset('img_system/mitare.png') }}" width="130px"></td>
                            </tr>
                            <tr>
                                <td width="25%" style="text-align: left; padding-bottom: 10px;"><img src="{{ asset('img_system/LOGOWsmart.png') }}" width="80px"></td>
                                <td width="50%" style="font-size: 12px; vertical-align: top; line-height: 11px;">
                                    <div style="font-size: 13px;"><b>บริษัท ดับเบิ้ลยู สมาร์ท (ประเทศไทย) จำกัด</b></div>
                                    <div style="font-size: 11px;"><b>W SMART (THAILAND) CO., LTD</b></div>
                                    <div style="font-size: 11px;">1122 ถนนพระราม 9 แขวงสวนหลวง เขตสวนหลวง กรุงเทพมหานคร 10250 โทร.02-057-1234</div>
                                    <div style="font-size: 11px;">1122 Rama 9 Rd. Suanluang,Suanluang Bangkok 10250,Thailand. Tel.02-057-1234</div>
                                </td>
                                <td width="25%" style="font-size: 12px; vertical-align: bottom;">Registered ID 0105560073678</td>
                            </tr>
                        </table>

                        <table width="100%" class="certificate">
                            <tr>
                                <td colspan="6" align="center" style="border-bottom: 1px solid #000000;"><b>เอกสารยืนยันผลการตรวจระบบขับเคลื่อน Inspection Certificate</b></td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="width: 100px; font-weight: bold;">เลขที่ตรวจสภาพรถยนต์<br><span>Inspection Identification</span></td>
                                <td style="width: 100px; font-size: 14px; vertical-align: top;">{{ $idinspec }}</td>

                                <td style="width: 100px; font-weight: bold;">รหัสตรวจสภาพรถยนต์<br><span>Inspection Number</span></td>
                                <td style="width: 100px; font-size: 14px; vertical-align: top;">{{ $idCS }}</td>

                                <td style="width: 75px; font-weight: bold;">อาณาเขตคุ้มครอง<br><span>Protected territory</span></td>
                                <td style="width: 75px; font-size: 14px; vertical-align: top;">ประเทศไทย<br><span>THAILAND</span></td>
                            </tr>
                        </table>

                        <table width="100%" class="certificate dealer">
                            <tr>
                                <td colspan="4" style="padding-top: 5px; font-weight: bold;">รายละเอียดผู้ประกอบการ<br><span>Dealer details</span></td>
                            </tr>
                            <tr>
                                <td width="120px" style="font-weight: bold;">ชื่อผู้ประกอบการ<br><span>Name</span></td>
                                <td colspan="3">{{ $datas->nametitle.' '.$datas->firstname.' '.$datas->lastname }}</td>
                            </tr>
                            <tr>
                                <td width="120px" style="font-weight: bold;">ที่อยู่<br><span>Address</span></td>
                                <td width="120px">{{ $datas->address}}</td>
                                <td width="100px" style="font-weight: bold;">รหัสไปรษณีย์<br><span>Personal No.</span></td>
                                <td width="190px">{{ $datas->postalcode}}</td>
                            </tr>
                            <tr>
                                <td width="120px" style="font-weight: bold;">เขต/อำเภอ<br><span>District</span></td>
                                <td width="120px">{{ $datas->name_am}}</td>
                                <td width="100px" style="font-weight: bold;">จังหวัด<br><span>City</span></td>
                                <td width="190px">{{ $datas->name_th}}</td>
                            </tr>
                            <tr>
                                <td width="120px" style="font-weight: bold;">เลขที่ประจำตัวผู้เสียภาษี<br><span>Tax Identification</span></td>
                                <td width="120px">{{ $datas->idcard}}</td>
                                <td width="100px" style="font-weight: bold;">เบอร์ติดต่อ<br><span>Contact Number</span></td>
                                <td width="190px">{{ $datas->tel}}</td>
                            </tr>
                        </table>

                        <table width="100%" class="certificate car">
                            <tr style="font-weight: bold;">
                                <td width="100px">ชื่อรถยนต์ / รุ่น<br><span>Car Brand / Model</span></td>
                                <td width="54px">เลขทะเบียน<br><span>Plate Number</span></td>
                                <td width="113px">เลขตัวถัง<br><span>Chassis No.</span></td>
                                <td width="65px">เลขเครื่องยนต์<br><span>Engine No.</span></td>
                                <td width="40px">ปีรุ่น<br><span>Year</span></td>
                                <td width="40px">สี<br><span>Color</span></td>
                                <td width="73px">ขนาดเครื่องยนต์<br><span>Cubic Capacity (c.c.)</span></td>
                                <td width="73px">เลขไมล์ปัจจุบัน<br><span>Mileage</span></td>
                            </tr>
                            <tr>
                                <td>{{ $datas->name_brand.' / '.$datas->name_model}}</td>
                                <td>{{ $datas->carregnum}}</td>
                                <td>{{ $datas->vin}}</td>
                                <td>{{ $datas->engine}}</td>
                                <td>{{ $datas->year}}</td>
                                <td>{{ $datas->car_color}}</td>
                                <td>{{ $datas->cc}}</td>
                                <td>{{ $datas->mileage}}</td>
                            </tr>
                        </table>

                        <table width="100%" class="certificate detail">
                            <tr style="font-weight: bold; border-bottom: 1px solid #000000;">
                                <td colspan="2" style="padding-top: 0; font-size: 15px;">การบริการตรวจเช็ค Standard Inspection Details</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>1. สถานะเครื่องยนต์ ( Engine System )</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>2. สถานะเกียร์ ( Gear System )</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>3. สถานะ ECU, ECM ( ECU, ECM System )</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>4. สถานะระบบเบรค ( Brake System )</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>5. สถานะชุดส่งกำลังเพลาหน้าและท้าย ( Drive Axle System )</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>6. รถเลขเครื่องตรง (รถเลขเครื่องยนต์ตรงตามเล่มทะเบียนรถยนต์) ( Genuine Engine Number )</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>7. รถเลขตัวถังตรง (รถเลขตัวถังตรงตามเล่มทะเบียนรถยนต์) ( Genuine Chassis Number )</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>8. รถสภาพสีเดิม (รถสีสภาพเดิมจากโรงงานและตรงตามเล่มทะเบียนรถยนต์) ( Original OEM Colours )</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>9. เลขไมล์แท้ (เลขไมล์แท้เป็นไมล์ที่เปรียบเทียบจากไมล์ล่าสุดที่อยู่ในประวัติของศูนย์บริการของรถยนต์แต่ละยี่ห้อ) ( Genuine Mileage )</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>10. ระบบระบายความร้อนเครื่องยนต์ ( Engine System )</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>11. ระบบกันสะเทือนหน้าและหลัง ( Gear System )</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>12. ระบบปรับอากาศและทำความร้อน ( Air Conditioning and Heating System )</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>13. ระบบความปลอดภัย Airbag ( Safety System )</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>14. ระบบบังคับเลี้ยว ( Steering System )</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>15. ระบบ Security System (Security System )</td>
                            </tr>
                            <tr>
                                <td width="20px"><div class="box-check">&#10003;</div></td>
                                <td>16. ระบบ Turbo ( Turbo System )</td>
                            </tr>
                        </table>

                        <table width="100%">
                            <tr>
                                <td colspan="3" style="padding-top: 4px; font-size: 11px; line-height: 11px;">
                                    เอกสารฉบับนี้ ทางบริษัทออกให้เพื่อนำไปแสดงแก่ลูกค้าเท่านั้น แต่ไม่สามารถนำมาแสดงเพื่อรับความคุ้มครองตามสิทธิ์ได้
                                    <br>
                                    <span style="font-size: 9.5px;">
                                        This document is simply an overview of the relevant coverages and should be used for marketing purposes only. Nothing contained, expressed or implied in this document can be use to make claims against the company.
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="3" style="padding-top: 4px; font-size: 11px; line-height: 11px;">
                                    เพื่อเป็นหลักฐาน บริษัทโดยบุคคลผู้มีอำนาจได้ลงลายมือและประทับตราของบริษัทไว้เป็นสำคัญ ณ สำนักงานบริษัท
                                    <br>
                                    <span style="font-size: 9.5px;">
                                        As proof,  the company,  represented  by  the Authorized person,  has signed  and  stamped  the  Company’s  emblem  at  the  company’s  Headquarters.
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td width="40%"></td>
                                <td>
                                    <div class="sign"><img src="/images/signature/sig.png" height="100px" width="170px" style="margin-top: -20px; margin-left: -30px;"></div>
                                    <div style="font-size: 13px; text-align: center;">ผู้มีอำนาจลงนาม<br><span>Authorized Director</span></div>
                                </td>
                                <td>
                                    <div class="sign"><img src="/images/signature/sig.png" height="100px" width="170px" style="margin-top: -20px; margin-left: -30px;"></div>
                                    <div style="font-size: 13px; text-align: center;">หัวหน้าแผนกตรวจเช็คสภาพรถยนต์<br><span>Head Inspector</span></div>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="3" style="padding: 10px; text-align: center; color: #de0f00; font-size: 15px; line-height: 15px;">
                                    *บริการตรวจเช็คระบบขับเคลื่อนนี้ได้ผ่านเกณฑ์การตรวจของ บมจ. มิตรแท้ประกันภัย*
                                    <br>
                                    This standard inspection analysis  has passed Mittare Insurance Co., Ltd. inspection criterion.
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!--PAGE 3-->

            <div class="page">
                <div class="page-contain">
                    <div class = "car-show">
                        <div class="topic-title">
                            {{-- รูปด้านหน้ารถยนต์ --}}
                            Vehicle Front Image
                        </div>

                        <br>
                        <div class="d-flex justify-content-center">
                            <img src="/images/{{$datas->im_2}}" height="320px" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>

                    <div class = "car-show">
                        <div class="topic-title">
                            {{-- รูปด้านหลังรถยนต์ --}}
                            Vehicle Back Image
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <img src="/images/{{$datas->im_3}}" height="320px" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE 4 -->
            <div class = "page">
                <div class = "page-contain">
                    <div class = "car-show">
                        <div class="topic-title">
                            {{-- รูปเครื่องยนต์ --}}
                            Vehicle Engine Image
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <img src="/images/{{$datas->im_6}}" height="320px" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>
                    <div class = "car-show">
                        <div class="topic-title" >
                            {{-- รูปเลขไมลล์ --}}
                            Vehicle Odometer Image
                        </div>
                        <br>
                        <div class="">
                            {{-- @if($images->im_0 == '') --}}
                            <img src="/images/{{$datas->im_0}}" height="320px" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                            {{-- @else
                            <img src="/images/{{$images->im_0}}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE 5 -->
            <div class="page">
                <div class="page-contain">
                    <div class = "car-show">
                        <div class="topic-title">
                            {{-- รูปเลขตัวถัง --}}
                            Vehicle Chassis Number
                        </div>
                        <br>
                        <div class="">
                            <img src="/images/{{$datas->im_4}}" height="320px" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>

                    <div class = "car-show">
                        <div class="topic-title" >
                            {{-- รูปเลขเครื่องยนต์ --}}
                           Vehicle Engine Number
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <img src="/images/{{$datas->im_5}}" height="320px" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE 6 -->
            <div class="page">
                <div class="page-contain">
                    <div class = "car-show">
                        <div class="topic-title">
                            {{-- รายการจดทะเบียน --}}
                            Vehicle Registration Book
                        </div>
                        <br>
                        <div class="">
                            {{-- @if($datas->im_1 == '') --}}
                            <img src="/images/{{$datas->im_1}}" height="320px" width="500px" object-fit="cover" class="img-thumbnail" style="border: 20px inset #a38175;">
                            {{-- @else
                            <img src="/images/{{$images->im_1}}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                            @endif --}}
                        </div>
                    </div>

                    <div class = "car-show">
                        <div class="topic-title" >
                            ODB Analysis
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <img src="/images/{{$datas->im_7}}" height="320px" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE 7 -->
            <div class="page">
                <div class="page-contain">
                    <div class = "check-table">
                        <div class="topic-title" >
                            Exterior Report
                        </div>
                        <div class = "grid-container">
                            <div class = "grid-item">
                                <table class="overall-table conclude-table" border="1">
                                    <tr>
                                        <td class = "table-title">1.Front Left Fender</td>
                                        <td class = "table-check">{{ $datas->exterior_01 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">2.Bonnet</td>
                                        <td class = "table-check">{{ $datas->exterior_02 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">3.Front bumper/td>
                                        <td class = "table-check">{{ $datas->exterior_03 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">4.Front right fender</td>
                                        <td class = "table-check">{{ $datas->exterior_04 }}</td>
                                    </tr>
                                    <tr >
                                        <td class = "table-title">5.Front right door</td>
                                        <td class = "table-check">{{ $datas->exterior_05 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">
                                            6.Front right alloy wheel
                                        </td>
                                        <td class = "table-check">{{ $datas->exterior_06 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">
                                            7.Right side step/side spoiler
                                        </td>
                                        <td class = "table-check">{{ $datas->exterior_07 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">
                                            8.Back Right alloy wheel
                                        </td>
                                        <td class = "table-check">{{ $datas->exterior_08 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">
                                            9.Rear right door
                                        </td>
                                        <td class = "table-check">{{ $datas->exterior_09 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">10.Right wheel well(outer)</td>
                                        <td class = "table-check">{{ $datas->exterior_10 }}</td>
                                    </tr>

                                </table>
                            </div>
                            <div class = "grid-item">
                                <table class="overall-table conclude-table" textalign=center>
                                    <tr>
                                        <td class = "table-title">11.Back panel</td>
                                        <td class = "table-check">{{ $datas->exterior_11 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">12.Back rear spoiler & under spoiler</td>
                                        <td class = "table-check">{{ $datas->exterior_12 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">13.Truck bed</td>
                                        <td class = "table-check">{{ $datas->exterior_13 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">14.Roof</td>
                                        <td class = "table-check">{{ $datas->exterior_14 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">15.Left wheel well(outer)</td>
                                        <td class = "table-check">{{ $datas->exterior_15 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">16.Rear left door</td>
                                        <td class = "table-check">{{ $datas->exterior_16 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">17.Back Left alloy wheel</td>
                                        <td class = "table-check">{{ $datas->exterior_17 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">18.Left side step/side spoiler</td>
                                        <td class = "table-check">{{ $datas->exterior_18 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">19.Front Left alloy wheel</td>
                                        <td class = "table-check">{{ $datas->exterior_19 }}</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">20.Front left door.</td>
                                        <td class = "table-check">{{ $datas->exterior_20 }}</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        <div class="detail-description">
                            <table class="table-report">
                                <thead>
                                    <th colspan="3">Exterior Report</th>
                                </thead>
                                <tr>
                                    <td class="char-col">O</td>
                                    <td>Original</td>
                                    <td style="background-color: #ffffff;"></td>
                                </tr>
                                <tr>
                                    <td class="char-col">N</td>
                                    <td>New Parts</td>
                                    <td style="background-color: #fff18f;"></td>
                                </tr>
                                <tr>
                                    <td class="char-col">BP</td>
                                    <td>New Body Paint Job</td>
                                    <td style="background-color: #ffc200;"></td>
                                </tr>
                                <tr>
                                    <td class="char-col">S</td>
                                    <td>Scated Mark</td>
                                    <td style="background-color: #ff8500;"></td>
                                </tr>
                                <tr>
                                    <td class="char-col">D</td>
                                    <td>Dent Mark</td>
                                    <td style="background-color: #ff5b00;"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE 8 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">ผลการตรวจภายนอก</div>
                    <div class="car-layout">

                        <!--บังโคลน-->
                        @if($datas->exterior_01 == 'D')
                            <img id="A1" class="car-component" src="{{ asset('car_structure/D/D-01.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_01 == 'S')
                            <img id="A1" class="car-component" src="{{ asset('car_structure/S/S-01.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_01 == 'BP')
                            <img id="A1" class="car-component" src="{{ asset('car_structure/BP/BP-01.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_01 == "N")
                            <img id="A1" class="car-component" src="{{ asset('car_structure/N/N-01.png')}}" style="visibility: visible">
                        @else

                        @endif

                        @if($datas->exterior_04 == 'D')
                            <img id="A2" class="car-component" src="{{ asset('car_structure/D/D-02.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_04 == 'S')
                            <img id="A2" class="car-component" src="{{ asset('car_structure/S/S-02.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_04 == 'BP')
                            <img id="A2" class="car-component" src="{{ asset('car_structure/BP/BP-02.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_04 == "N")
                            <img id="A2" class="car-component" src="{{ asset('car_structure/N/N-02.png')}}" style="visibility: visible">
                        @else
                        @endif

                        @if($datas->exterior_15 == 'D')
                            <img id="B1" class="car-component" src="{{ asset('car_structure/D/D-14.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_15 == 'S')
                            <img id="B1" class="car-component" src="{{ asset('car_structure/S/S-14.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_15 == 'BP')
                            <img id="B1" class="car-component" src="{{ asset('car_structure/BP/BP-14.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_15 == "N")
                            <img id="B1" class="car-component" src="{{ asset('car_structure/N/N-14.png')}}" style="visibility: visible">
                        @else
                        @endif

                        @if($datas->exterior_10 == 'D')
                            <img id="B2" class="car-component" src="{{ asset('car_structure/D/D-13.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_10 == 'S')
                            <img id="B2" class="car-component" src="{{ asset('car_structure/S/S-13.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_10 == 'BP')
                            <img id="B2" class="car-component" src="{{ asset('car_structure/BP/BP-13.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_10 == "N")
                            <img id="B2" class="car-component" src="{{ asset('car_structure/N/N-13.png')}}" style="visibility: visible">
                        @else
                        @endif

                        <!-- กันชนหน้า -->
                        @if($datas->exterior_03 == 'D')
                            <img id="FS" class="car-component" src="{{ asset('car_structure/D/D-03.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_03 == 'S')
                            <img id="FS" class="car-component" src="{{ asset('car_structure/S/S-03.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_03 == 'BP')
                            <img id="FS" class="car-component" src="{{ asset('car_structure/BP/BP-03.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_03 == "N")
                            <img id="FS" class="car-component" src="{{ asset('car_structure/N/N-03.png')}}" style="visibility: visible">
                        @else
                        @endif

                        <!--ส่วนหน้า-->
                        @if($datas->exterior_02 == 'D')
                            <img id="CH" class="car-component" src="{{ asset('car_structure/D/D-04.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_02 == 'S')
                            <img id="CH" class="car-component" src="{{ asset('car_structure/S/S-04.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_02 == 'BP')
                            <img id="CH" class="car-component" src="{{ asset('car_structure/BP/BP-04.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_02 == "N")
                            <img id="CH" class="car-component" src="{{ asset('car_structure/N/N-04.png')}}" style="visibility: visible">
                        @else
                        @endif

                        {{-- กระจกหน้า
                        @if($datas->exterior_02 != 'O')
                            <img id="WS" class="car-component" src="{{ asset('car_structure/WS.png')}}" style="visibility: hidden">
                        @else
                        @endif --}}

                        <!--หลังคา-->
                        @if($datas->exterior_14 == 'D')
                            <img id="Roof" class="car-component" src="{{ asset('car_structure/D/D-06.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_14 == 'S')
                            <img id="Roof" class="car-component" src="{{ asset('car_structure/S/S-06.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_14 == 'BP')
                            <img id="Roof" class="car-component" src="{{ asset('car_structure/BP/BP-06.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_14 == "N")
                            <img id="Roof" class="car-component" src="{{ asset('car_structure/N/N-06.png')}}" style="visibility: visible">
                        @else
                        {{-- <img id="Roof" class="car-component"  style="visibility: visible"> --}}
                        @endif

                        <!--กระจกท้าย-->
                        @if($datas->exterior_11 == 'D')
                            <img id="WSR" class="car-component" src="{{ asset('car_structure/D/D-07.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_11 == 'S')
                            <img id="WSR" class="car-component" src="{{ asset('car_structure/S/S-07.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_11 == 'BP')
                            <img id="WSR" class="car-component" src="{{ asset('car_structure/BP/BP-07.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_11 == "N")
                            <img id="WSR" class="car-component" src="{{ asset('car_structure/N/N-07.png')}}" style="visibility: visible">
                        @else
                            {{-- <img id="WSR" class="car-component"  style="visibility: visible"> --}}
                        @endif

                        <!--ประตู-->
                        @if($datas->exterior_20 == 'D')
                            <img id="C1" class="car-component" src="{{ asset('car_structure/D/D-15.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_20 == 'S')
                            <img id="C1" class="car-component" src="{{ asset('car_structure/S/S-15.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_20 == 'BP')
                            <img id="C1" class="car-component" src="{{ asset('car_structure/BP/BP-15.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_20 == "N")
                            <img id="C1" class="car-component" src="{{ asset('car_structure/N/N-15.png')}}" style="visibility: visible">
                        @else

                        @endif

                        @if($datas->exterior_05 == 'D')
                            <img id="C2" class="car-component" src="{{ asset('car_structure/D/D-17.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_05 == 'S')
                            <img id="C2" class="car-component" src="{{ asset('car_structure/S/S-17.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_05 == 'BP')
                            <img id="C2" class="car-component" src="{{ asset('car_structure/BP/BP-17.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_05 == "N")
                            <img id="C2" class="car-component" src="{{ asset('car_structure/N/N-17.png')}}" style="visibility: visible">
                        @else

                        @endif

                        @if($datas->exterior_16 == 'D')
                            <img id="D1" class="car-component" src="{{ asset('car_structure/D/D-16.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_16 == 'S')
                            <img id="D1" class="car-component" src="{{ asset('car_structure/S/S-16.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_16 == 'BP')
                            <img id="D1" class="car-component" src="{{ asset('car_structure/BP/BP-16.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_16 == "N")
                            <img id="D1" class="car-component" src="{{ asset('car_structure/N/N-16.png')}}" style="visibility: visible">
                        @else

                        @endif

                        @if($datas->exterior_09 == 'D')
                            <img id="D2" class="car-component" src="{{ asset('car_structure/D/D-18.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_09 == 'S')
                            <img id="D2" class="car-component" src="{{ asset('car_structure/S/S-18.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_09 == 'BP')
                            <img id="D2" class="car-component" src="{{ asset('car_structure/BP/BP-18.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_09 == "N")
                            <img id="D2" class="car-component" src="{{ asset('car_structure/N/N-18.png')}}" style="visibility: visible">
                        @else
                        @endif

                        <!--ล้อ-->
                        @if($datas->exterior_19 == 'D')
                            <img id="W1" class="car-component" src="{{ asset('car_structure/D/D-09.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_19 == 'S')
                            <img id="W1" class="car-component" src="{{ asset('car_structure/S/S-09.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_19 == 'BP')
                            <img id="W1" class="car-component" src="{{ asset('car_structure/BP/BP-09.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_19 == "N")
                            <img id="W1" class="car-component" src="{{ asset('car_structure/N/N-09.png')}}" style="visibility: visible">
                        @else
                        @endif

                        @if($datas->exterior_06 == 'D')
                            <img id="W2" class="car-component" src="{{ asset('car_structure/D/D-10.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_06 == 'S')
                            <img id="W2" class="car-component" src="{{ asset('car_structure/S/S-10.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_06 == 'BP')
                            <img id="W2" class="car-component" src="{{ asset('car_structure/BP/BP-10.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_06 == "N")
                            <img id="W2" class="car-component" src="{{ asset('car_structure/N/N-10.png')}}" style="visibility: visible">
                        @else

                        @endif

                        @if($datas->exterior_17 == 'D')
                            <img id="W3" class="car-component" src="{{ asset('car_structure/D/D-11.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_17 == 'S')
                            <img id="W3" class="car-component" src="{{ asset('car_structure/S/S-11.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_17 == 'BP')
                            <img id="W3" class="car-component" src="{{ asset('car_structure/BP/BP-11.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_17 == "N")
                            <img id="W3" class="car-component" src="{{ asset('car_structure/N/N-11.png')}}" style="visibility: visible">
                        @else

                        @endif

                        @if($datas->exterior_08 == 'D')
                            <img id="W4" class="car-component" src="{{ asset('car_structure/D/D-12.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_08 == 'S')
                            <img id="W4" class="car-component" src="{{ asset('car_structure/S/S-12.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_08 == 'BP')
                            <img id="W4" class="car-component" src="{{ asset('car_structure/BP/BP-12.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_08 == "N")
                            <img id="W4" class="car-component" src="{{ asset('car_structure/N/N-12.png')}}" style="visibility: visible">
                        @else
                        @endif

                        <!--บันได-->
                        @if($datas->exterior_18 == 'D')
                            <img id="LS" class="car-component" src="{{ asset('car_structure/D/D-19.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_18 == 'S')
                            <img id="LS" class="car-component" src="{{ asset('car_structure/S/S-19.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_18 == 'BP')
                            <img id="LS" class="car-component" src="{{ asset('car_structure/BP/BP-19.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_18 == "N")
                            <img id="LS" class="car-component" src="{{ asset('car_structure/N/N-19.png')}}" style="visibility: visible">
                        @else
                        @endif

                        @if($datas->exterior_07 == 'D')
                            <img id="RS" class="car-component" src="{{ asset('car_structure/D/D-20.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_07 == 'S')
                            <img id="RS" class="car-component" src="{{ asset('car_structure/S/S-20.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_07 == 'BP')
                            <img id="RS" class="car-component" src="{{ asset('car_structure/BP/BP-20.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_07 == "N")
                            <img id="RS" class="car-component" src="{{ asset('car_structure/N/N-20.png')}}" style="visibility: visible">
                        @else
                        @endif

                        <!--หลัง-->
                        @if($datas->exterior_13 == 'D')
                            <img id="RH" class="car-component" src="{{ asset('car_structure/D/D-08.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_13 == 'S')
                        <img id="RH" class="car-component" src="{{ asset('car_structure/S/S-08.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_13 == 'BP')
                        <img id="RH" class="car-component" src="{{ asset('car_structure/BP/BP-08.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_13 == "N")
                        <img id="RH" class="car-component" src="{{ asset('car_structure/N/N-08.png')}}" style="visibility: visible">
                        @else
                        @endif

                        <!-- กันชนหลัง -->
                        @if($datas->exterior_12 == 'D')
                            <img id="RSH" class="car-component" src="{{ asset('car_structure/D/D-05.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_12 == 'S')
                            <img id="RSH" class="car-component" src="{{ asset('car_structure/S/S-05.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_12 == 'BP')
                            <img id="RSH" class="car-component" src="{{ asset('car_structure/BP/BP-05.png')}}" style="visibility: visible">
                        @elseif($datas->exterior_12 == "N")
                            <img id="RSH" class="car-component" src="{{ asset('car_structure/N/N-05.png')}}" style="visibility: visible">
                        @else
                        @endif

                        <!--Mark-->
                        <span id="W1-mark" class="mark-component">{{ $datas->exterior_19 }}</span>
                        <span id="W2-mark" class="mark-component">{{ $datas->exterior_17 }}</span>
                        <span id="W3-mark" class="mark-component">{{ $datas->exterior_06 }}</span>
                        <span id="W4-mark" class="mark-component">{{ $datas->exterior_08 }}</span>
                        <span id="CH-mark" class="mark-component">{{ $datas->exterior_02 }}</span>
                        <span id="Roof-mark" class="mark-component">{{ $datas->exterior_14 }}</span>
                        <span id="A1-mark" class="mark-component">{{ $datas->exterior_01 }}</span>
                        <span id="A2-mark" class="mark-component">{{ $datas->exterior_04 }}</span>
                        <span id="B1-mark" class="mark-component">{{ $datas->exterior_15 }}</span>
                        <span id="B2-mark" class="mark-component">{{ $datas->exterior_10 }}</span>
                        <span id="C1-mark" class="mark-component">{{ $datas->exterior_20 }}</span>
                        <span id="D1-mark" class="mark-component">{{ $datas->exterior_16 }}</span>
                        <span id="C2-mark" class="mark-component">{{ $datas->exterior_05 }}</span>
                        <span id="D2-mark" class="mark-component">{{ $datas->exterior_09 }}</span>
                        <span id="LS-mark" class="mark-component">{{ $datas->exterior_18 }}</span>
                        <span id="RS-mark" class="mark-component">{{ $datas->exterior_07 }}</span>
                        <span id="WSR-mark" class="mark-component">{{ $datas->exterior_11 }}</span>
                        <span id="RH-mark" class="mark-component">{{ $datas->exterior_13 }}</span>
                        <span id="RSH-mark" class="mark-component">{{ $datas->exterior_03 }}</span>
                        <span id="FS-mark" class="mark-component">{{ $datas->exterior_12 }}</span>

                    </div>
                    <div class="detail-description">
                        <table class="table-report">
                            <thead>
                                <th colspan="3">Exterior Report</th>
                            </thead>
                            <tr>
                                <td class="char-col">O</td>
                                <td>Original</td>
                                <td style="background-color: #ffffff;"></td>
                            </tr>
                            <tr>
                                <td class="char-col">N</td>
                                <td>New Parts</td>
                                <td style="background-color: #fff18f;"></td>
                            </tr>
                            <tr>
                                <td class="char-col">BP</td>
                                <td>New Body Paint Job</td>
                                <td style="background-color: #ffc200;"></td>
                            </tr>
                            <tr>
                                <td class="char-col">S</td>
                                <td>Scated Mark</td>
                                <td style="background-color: #ff8500;"></td>
                            </tr>
                            <tr>
                                <td class="char-col">D</td>
                                <td>Dent Mark</td>
                                <td style="background-color: #ff5b00;"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- PAGE 9 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">Tire Condition Report</div>
                    <table id="tire-table" class="overall-table" style="margin-top: 20px;">
                        <tr>
                            <td class="table-title">Front Left Tire Condition</td>
                            <td class = "table-detail">Normal</td>
                        </tr>
                        <tr>
                            <td class="table-title">Front Right Tire Condition</td>
                            <td class = "table-detail">Normal</td>
                        </tr>
                        <tr>
                            <td class="table-title">Back Right Tire Condition</td>
                            <td class = "table-detail">Normal</td>
                        </tr>
                        <tr>
                            <td class="table-title">Back Left Tire Condition</td>
                            <td class = "table-detail">Normal</td>
                        </tr>
                    </table>
                    <div class="image-grid-container">
                        <img src="/images/{{$datas->im_A}}" class="img-grid-item" >
                        <img src="/images/{{$datas->im_B}}" class="img-grid-item" >
                        <img src="/images/{{$datas->im_D}}" class="img-grid-item" >
                        <img src="/images/{{$datas->im_C}}" class="img-grid-item" >
                    </div>
                    <div id="battery-condition" style="margin-top: 23px;">
                        <div class="topic-title">Battery Condition Report</div>
                        <table class="table-battery" border="1">
                            <tr>
                                <td rowspan="0">Battery Test</td>
                                <td colspan="2">Battery Condition Report</td>
                                <td colspan="2">Charge System test at 2000 rpm</td>
                            </tr>
                            <tr>
                                <td>Voltage</td>
                                <td></td>
                                <td>Voltage</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Rating</td>
                                <td></td>
                                <td>Status</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Current</td>
                                <td></td>
                                <td colspan="2">Start System Test</td>
                            </tr>
                            <tr>
                                <td>Current</td>
                                <td></td>
                                <td>Start of Voltage</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>State of Charge</td>
                                <td></td>
                                <td>Status</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>State of Health</td>
                                <td></td>
                                <td colspan="2">Max. Load Test at 200 rpm</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td></td>
                                <td>Max. Load Voltage</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Test Date</td>
                                <td></td>
                                <td>Status</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- PAGE 10 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">Chassis Report</div>
                    <div class="grid-container">
                        <table id="chassis-table" class="overall-table">
                            <tr>
                                <td class="table-title">Engine Compartment</td>
                                <td class="table-detail">{{$datas->chasis_01}}</td>
                                <?php if($datas->chasis_01=='H'){$ch_h1 = 1;$ch_n1 = 0;}else{$ch_h1 = 0;$ch_n1 = 1;} ?>
                            </tr>
                            <tr>
                                <td class="table-title">Passenger Compartment</td>
                                <td class="table-detail">{{$datas->chasis_02}}</td>
                                <?php if($datas->chasis_02=='H'){$ch_h2 = 1;$ch_n2 = 0;}else{$ch_h2 = 0;$ch_n2 = 1;} ?>
                            </tr>
                            <tr>
                                <td class="table-title">Trunk Compartment</td>
                                <td class="table-detail">{{$datas->chasis_03}}</td>
                                <?php if($datas->chasis_03=='H'){$ch_h3 = 1;$ch_n3 = 0;}else{$ch_h3 = 0;$ch_n3 = 1;} ?>
                            </tr>
                        </table>
                        <div>
                            <table class="table-report">
                                <thead>
                                    <th colspan="2">Chassis Report</th>
                                </thead>
                                <tr>
                                    <td class="char-col">NH</td>
                                    <td>Non heavy accident</td>
                                </tr>
                                <tr>
                                    <td class="char-col">H</td>
                                    <td>Heavy accident</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="chassis-report">
                        @if($datas->chasis_01 == 'H')
                            <img id="engine" class="chassis-component" src="{{ asset('chassis_structure/ห้องเครื่อง.png')}}">
                        @else
                        @endif

                        @if($datas->chasis_02 == 'H')
                            <img id="carbin" class="chassis-component" src="{{ asset('chassis_structure/ห้องโดยสาร.png')}}">
                        @else
                        @endif

                        @if($datas->chasis_03 == 'H')
                            <img id="cargo" class="chassis-component" src="{{ asset('chassis_structure/ห้องเก็บของ.png')}}">
                        @else
                        @endif
                    </div>
                </div>
            </div>
            <!-- PAGE 11 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">Interior Report</div>
                    <table class="overall-table" textalign=center style="margin-top: 30px; width: 85%;">
                        <tr>
                            <td class = "table-title">Steering wheel</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 - $datas->interior_01}}%; background-color: @if($datas->interior_01 == 25) #50cc00 @elseif($datas->interior_01 == 50) #00931f @elseif($datas->interior_01 == 75) #00661f @elseif($datas->interior_01 == 0) #afff00 @endif;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Dashboard</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 -$datas->interior_02}}%; background-color: @if($datas->interior_02 == 25) #50cc00 @elseif($datas->interior_02 == 50) #00931f @elseif($datas->interior_02 == 75) #00661f @elseif($datas->interior_02 == 0) #afff00 @endif;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Front Left Seat</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 -$datas->interior_03}}%; background-color: @if($datas->interior_03 == 25) #50cc00 @elseif($datas->interior_03 == 50) #00931f @elseif($datas->interior_03 == 75) #00661f @elseif($datas->interior_03 == 0) #afff00 @endif;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Front Right Seat</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 -$datas->interior_04}}%; background-color: @if($datas->interior_04 == 25) #50cc00 @elseif($datas->interior_04 == 50) #00931f @elseif($datas->interior_04 == 75) #00661f @elseif($datas->interior_04 == 0) #afff00 @endif;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Rear Seat</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 -$datas->interior_05}}%; background-color: @if($datas->interior_05 == 25) #50cc00 @elseif($datas->interior_05 == 50) #00931f @elseif($datas->interior_05 == 75) #00661f @elseif($datas->interior_05 == 0) #afff00 @endif;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Console</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 -$datas->interior_06}}%; background-color: @if($datas->interior_06 == 25) #50cc00 @elseif($datas->interior_06 == 50) #00931f @elseif($datas->interior_06 == 75) #00661f @elseif($datas->interior_06 == 0) #afff00 @endif;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Left Door Trim</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 -$datas->interior_07}}%; background-color: @if($datas->interior_07 == 25) #50cc00 @elseif($datas->interior_07 == 50) #00931f @elseif($datas->interior_07 == 75) #00661f @elseif($datas->interior_07 == 0) #afff00 @endif;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Right Door Trim</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 -$datas->interior_08}}%; background-color: @if($datas->interior_08 == 25) #50cc00 @elseif($datas->interior_08 == 50) #00931f @elseif($datas->interior_08 == 75) #00661f @elseif($datas->interior_08 == 0) #afff00 @endif;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Roof Fabric</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 -$datas->interior_15}}%; background-color: @if($datas->interior_15 == 25) #50cc00 @elseif($datas->interior_15 == 50) #00931f @elseif($datas->interior_15 == 75) #00661f @elseif($datas->interior_15 == 0) #afff00 @endif;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Airconditioning</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 -$datas->interior_10}}%; background-color: @if($datas->interior_10 == 25) #50cc00 @elseif($datas->interior_10 == 50) #00931f @elseif($datas->interior_10 == 75) #00661f @elseif($datas->interior_10 == 0) #afff00 @endif;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Internal Lighting System</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 -$datas->interior_11}}%; background-color: @if($datas->interior_11 == 25) #50cc00 @elseif($datas->interior_11 == 50) #00931f @elseif($datas->interior_11 == 75) #00661f @elseif($datas->interior_11 == 0) #afff00 @endif;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">External Lighting</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 -$datas->interior_12}}%; background-color: @if($datas->interior_12 == 25) #50cc00 @elseif($datas->interior_12 == 50) #00931f @elseif($datas->interior_12 == 75) #00661f @elseif($datas->interior_12 == 0) #afff00 @endif;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Radio System</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 -$datas->interior_13}}%; background-color: @if($datas->interior_13 == 25) #50cc00 @elseif($datas->interior_13 == 50) #00931f @elseif($datas->interior_13 == 75) #00661f @elseif($datas->interior_13 == 0) #afff00 @endif;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Window System</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 -$datas->interior_14}}%; background-color: @if($datas->interior_14 == 25) #50cc00 @elseif($datas->interior_14 == 50) #00931f @elseif($datas->interior_14 == 75) #00661f @elseif($datas->interior_14 == 0) #afff00 @endif;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Abnormal Smell</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 -$datas->interior_10}}%; background-color: @if($datas->interior_10 == 25) #50cc00 @elseif($datas->interior_10 == 50) #00931f @elseif($datas->interior_10 == 75) #00661f @elseif($datas->interior_10 == 0) #afff00 @endif;"></div>
                                    <div class="progress-bar-bar" style="width: 0%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Luggage Area</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: {{100 -$datas->interior_09}}%; background-color: @if($datas->interior_09 == 25) #50cc00 @elseif($datas->interior_09 == 50) #00931f @elseif($datas->interior_09 == 75) #00661f @elseif($datas->interior_09 == 0) #afff00 @endif;"></div>
                                </div>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
            <!-- PAGE 12 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">Interior Report</div>
                        <table id="interior-report">
                            <tr>
                                <!-- left -->
                                <td style="height: 500px; width: 100px; padding-left: 20px; vertical-align: top;">
                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="แผงประตูซ้าย" style="width: auto; height: 120px; margin-top: 20px;">
                                        <select name="interior_07" id="interior_07" style="margin: -5px auto 20px -40px;" @if($datas->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($datas->interior_07 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($datas->interior_07 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($datas->interior_07 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($datas->interior_07 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($datas->interior_07 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ระบบหน้าต่าง" style="width: auto; height: 238px;">
                                        <select name="interior_14" id="interior_14" style="margin: 60px auto 0 -40px;" @if($datas->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($datas->interior_14 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($datas->interior_14 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($datas->interior_14 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($datas->interior_14 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($datas->interior_14 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>
                                </td>

                                <!-- middle -->
                                <td style="height: 500px; width: 305px; vertical-align: top;">
                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ระบบแสงสว่างภายนอก" style="width: 305px; height: 30px; float: left;">
                                        <select name="interior_12" id="interior_12" style="display: flex; margin: -10px auto auto;" @if($datas->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($datas->interior_12 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($datas->interior_12 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($datas->interior_12 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($datas->interior_12 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($datas->interior_12 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="เครื่องปรับอากาศ" style="width: 65px; height: 45px; float: left;">
                                        <select name="interior_10" id="interior_10" @if($datas->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($datas->interior_10 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($datas->interior_10 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($datas->interior_10 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($datas->interior_10 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($datas->interior_10 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ระบบวิทยุ" style="width: 90px; height: 45px; float: left; margin-left: 40px;">
                                        <select name="interior_13" id="interior_13" @if($datas->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($datas->interior_13 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($datas->interior_13 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($datas->interior_13 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($datas->interior_13 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($datas->interior_13 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="แผงหน้าปัดรถยนต์" style="width: 72px; height: 45px; float: left; margin-left: 8px;">
                                        <select name="interior_02" id="interior_02" @if($datas->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($datas->interior_02 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($datas->interior_02 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($datas->interior_02 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($datas->interior_02 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($datas->interior_02 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="เบาะหน้าซ้าย" style="width: 115px; height: 145px; float: left; margin-top: 54px;">
                                        <select name="interior_03" id="interior_03" @if($datas->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($datas->interior_03 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($datas->interior_03 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($datas->interior_03 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($datas->interior_03 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($datas->interior_03 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="คอนโซล" style="width: 70px; height: 145px; float: left;">
                                        <select name="interior_06" id="interior_06" style="margin-top: 53px;" @if($datas->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($datas->interior_06 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($datas->interior_06 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($datas->interior_06 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($datas->interior_06 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($datas->interior_06 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="right" title="พวงมาลัย" style="width: 106px; height: 40px; float: left;">
                                        <select name="interior_01" id="interior_01" style="display: flex; margin: 0 auto;" @if($datas->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($datas->interior_01 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($datas->interior_01 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($datas->interior_01 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($datas->interior_01 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($datas->interior_01 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="เบาะหน้าขวา" style="width: 115px; height: 145px; float: left; margin-top: 14px;">
                                        <select name="interior_04" id="interior_04" style="float: right;" @if($datas->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($datas->interior_04 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($datas->interior_04 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($datas->interior_04 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($datas->interior_04 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($datas->interior_04 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ระบบแสงสว่างภายใน" style="width: 70px; height: 45px; float: left; margin-top: -45px; margin-left: 115px;">
                                        <select name="interior_11" id="interior_11" @if($datas->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($datas->interior_11 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($datas->interior_11 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($datas->interior_11 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($datas->interior_11 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($datas->interior_11 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="เบาะหลัง" style="width: 300px; height: 145px; float: left; margin-top: 11px;">
                                        <select name="interior_05" id="interior_05" style="display: flex; margin: 40px auto;" @if($datas->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($datas->interior_05 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($datas->interior_05 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($datas->interior_05 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($datas->interior_05 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($datas->interior_05 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="พื้นที่เก็บสัมภาระ" style="width: 300px; height: 63px; float: left;">
                                        <select name="interior_09" id="interior_09" style="display: flex; margin: 15px auto;" @if($datas->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($datas->interior_09 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($datas->interior_09 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($datas->interior_09 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($datas->interior_09 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($datas->interior_09 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>
                                </td>

                                <!-- right -->
                                <td style="height: 500px; width: 100px; padding-right: 20px; vertical-align: top;">
                                    <div class="carplan-img" data-toggle="tooltip" data-placement="right" title="แผงประตูขวา" style="width: auto; height: 120px; margin-top: 20px;">
                                        <select name="interior_08" id="interior_08" style="float: right; margin: -5px -35px auto auto;" @if($datas->id_detail == '') @else disabled @endif>
                                            <option value="0" {{($datas->interior_08 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                            <option value="25" {{($datas->interior_08 ==='25') ? 'selected' : ''}}>น้อย</option>
                                            <option value="50" {{($datas->interior_08 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                            <option value="75" {{($datas->interior_08 ==='75') ? 'selected' : ''}}>มาก</option>
                                            <option value="100" {{($datas->interior_08 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            {{-- <tr>
                                <td >

                                    <div style="margin-top: 40px;">

                                            <select name="interior_15" id="interior_15" @if($datas->id_detail == '') @else disabled @endif>
                                                <option value="0" {{($datas->interior_15 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                                <option value="25" {{($datas->interior_15 ==='25') ? 'selected' : ''}}>น้อย</option>
                                                <option value="50" {{($datas->interior_15 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                                <option value="75" {{($datas->interior_15 ==='75') ? 'selected' : ''}}>มาก</option>
                                                <option value="100" {{($datas->interior_15 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                            </select>

                                    </div>
                                </td>
                            </tr> --}}

                        </table>
                        <div>
                            <div style="margin-top: -150px; margin-right: 300px;">
                                <div>เพดานหลังคา</div>
                                <div>
                                    <select name="interior_15" id="interior_15" @if($datas->id_detail == '') @else disabled @endif>
                                        <option value="0" {{($datas->interior_15 ==='0') ? 'selected' : ''}}>ไม่มี</option>
                                        <option value="25" {{($datas->interior_15 ==='25') ? 'selected' : ''}}>น้อย</option>
                                        <option value="50" {{($datas->interior_15 ==='50') ? 'selected' : ''}}>ปานกลาง</option>
                                        <option value="75" {{($datas->interior_15 ==='75') ? 'selected' : ''}}>มาก</option>
                                        <option value="100" {{($datas->interior_15 ==='100') ? 'selected' : ''}}>มากที่สุด</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4"></div>
                        </div>
                        <div class="position-absolute">
                            <table class="table table-sm" style="margin-top: -50px; margin-right: -300px;">
                                <tr>
                                    <th>ระดับปัญหา</th>
                                </tr>
                                <tr>
                                    <td>ไม่มี</td>
                                </tr>
                                <tr>
                                    <td>น้อย</td>
                                </tr>
                                <tr>
                                    <td>ปานกลาง</td>
                                </tr>
                                <tr>
                                    <td>มาก</td>
                                </tr>
                                <tr>
                                    <td>มากที่สุด</td>
                                </tr>
                            </table>
                        </div>
                </div>
            </div>
            <!-- PAGE 13-->
            @if($datas->inspectiontype=='0')
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">Flood Report</div>
                    <table id="flood-table" class="overall-table" style="width: 70%; margin-top: 20px;">
                        <tr>
                            <td class="table-title">Evidence of Flood</td>
                            <td class="table-detail">No</td>
                        </tr>
                    </table>
                    <div class="image-grid-container">
                        @if($datas->im_flood1=='' || $datas->im_flood1=='null')
                            <img src="{{ asset('images/logo-1.png') }}" class="img-grid-item-xl" >
                        @else
                            <img src="/images/{{$datas->im_flood1}}" class="img-grid-item-xl" >
                        @endif

                        @if($datas->im_flood2=='' || $datas->im_flood2=='null')
                            <img src="{{ asset('images/logo-1.png') }}" class="img-grid-item-xl" >
                        @else
                            <img src="/images/{{$datas->im_flood2}}" class="img-grid-item-xl" >
                        @endif
                    </div>
                    <div class="topic-title" style="margin-top: 50px;">Fire Report</div>
                    <table id="fire-table" class="overall-table" style="width: 70%; margin-top: 20px;">
                        <tr>
                            <td class="table-title">Evidence of Fire</td>
                            <td class="table-detail">No</td>
                        </tr>
                    </table>
                    <div class="image-grid-container">
                        @if($datas->im_fire1=='' || $datas->im_fire1=='null')
                            <img src="{{ asset('images/logo-1.png') }}" class="img-grid-item-xl" >
                        @else
                            <img src="/images/{{$datas->im_fire1}}" class="img-grid-item-xl" >
                        @endif

                        @if($datas->im_fire2=='' || $datas->im_fire2=='null')
                            <img src="{{ asset('images/logo-1.png') }}" class="img-grid-item-xl" >
                        @else
                            <img src="/images/{{$datas->im_fire2}}" class="img-grid-item-xl" >
                        @endif
                    </div>
                </div>
            </div>
            @else
            @endif
            <!-- PAGE 14-->
            <div class="page">

                <div class="page-contain">
                    <div class="topic-title">Vehicle Overview</div>
                    <div class = "grid-container">
                        <div class = "grid-item">
                            <table class="vehicle-overview-table" textalign=center>
                                <tr>
                                    <td class = "table-title">1.Engine System</td>
                                    @if($datas->carrs01=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">2.Gear System</td>
                                    @if($datas->carrs02=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">3.ECU, ECM System</td>
                                    @if($datas->carrs03=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">4.Brake System</td>
                                    @if($datas->carrs04=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">5.Drive Axie System</td>
                                    @if($datas->carrs06=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">6.Genuine Engine number</td>
                                    @if($datas->carin05=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">7.Genuine Chassis number</td>
                                    @if($datas->carin06=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">8.Original OEM Colours</td>
                                    @if($datas->carin07=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">9.Genuine Mileage</td>
                                    @if($datas->carin01=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">10.Engine Cooling System</td>
                                    @if($datas->carrs07=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">11.Suspension System</td>
                                    @if($datas->carrs08=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>

                            </table>
                        </div>
                        <div class = "grid-item">
                            <table class="vehicle-overview-table" textalign=center>
                                <tr>
                                    <td class = "table-title">12.Air Conditioning and Heating System</td>
                                    @if($datas->carrs05=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">13.Safety system</td>
                                    @if($datas->carrs09=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">14.Stearing System</td>
                                    @if($datas->carrs10=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">15.Security system</td>
                                    @if($datas->carrs11=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">16.Turbo system</td>
                                    @if($datas->carrs12=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">17.Flood Incident Report</td>
                                    @if($datas->carin02=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">18.Fire incident Report</td>
                                    @if($datas->carin03=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">19.Battery Condition Report</td>
                                    @if($datas->carin08=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td class = "table-title">20.Tire Condition Report</td>
                                    <td class = "table-check">Pass</td>
                                    {{-- @if($datas->carin04=='0')<td class = "table-check">Pass</td>
                                    @else <td class = "table-check">Not passed</td>
                                    @endif --}}
                                </tr>

                                <?php
                                    // Chassis Report
                                    $ch = 100/3;
                                    // $ch_sumH = $ch_h1+$ch_h2+$ch_h3;
                                    $ch_sumN = ($ch_n1+$ch_n2+$ch_n3)*($ch);


                                    // Exterior Report
                                    $j = 0; $ex = 0; $sumex = 100/20;
                                    for($i=0;$i<20;$i++)
                                    {
                                        $j += 1;
                                        $ext = 'exterior_'.str_pad(($j),2,'0',STR_PAD_LEFT);
                                        if($datas->$ext == 'O')
                                        {
                                            $ex += 1;
                                        }
                                        $exter = $ex;
                                    }
                                    // echo $exter;
                                    $exterior = $exter * $sumex;


                                    //  Interior
                                    $k = 0; $in = 0; $sumin = 100/15;
                                    for($f=0;$f<15;$f++)
                                    {
                                        $k += 1;
                                        $inte = 'interior_'.str_pad(($k),2,'0',STR_PAD_LEFT);
                                        if($datas->$inte == '0')
                                        {
                                            $in += 1;
                                        }
                                        $inter = $in;
                                    }
                                    // echo $exter;
                                    $interior = $inter * $sumin;

                                ?>

                                <tr>
                                    <td class = "table-title">21.Chassis Report</td>
                                    <td class = "table-progress">
                                        <div class="progress-bar">
                                        <div class="progress-bar-bar" style="width: {{$ch_sumN}}%" title="{{$ch_sumN}}%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class = "table-title">22.Exterior Report</td>
                                    <td class = "table-progress">
                                        <div class="progress-bar">
                                            <div class="progress-bar-bar" style="width: {{$exterior}}%" title="{{$exterior}}%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class = "table-title">23.Interior</td>
                                    <td class = "table-progress">
                                        <div class="progress-bar">
                                            <div class="progress-bar-bar" style="width: {{$interior}}%" title="{{$interior}}%"></div>
                                        </div>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="topic-title" style="margin-top: 20px;">Inspector Note</div>
                    <div id="inspector-note">
                        {{-- This Vehicle, 2020 TOYOTA YARIS with Chassis number Fxtig123654 was Inspected on the 17 July 2020 by Mr. Wasawad Wasuthasawat. The Inspector did not find irregularities with the 16 Inspection Details stated in this report. It can be concluded that at the time of Inspection, the said Inspection Analysis has passed the Inspection standard of Mittare Insurance Public Co., LTD. --}}
                        {{ $datas->comment }}
                    </div>
                </div>
            </div>
            <!-- PAGE 15 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">Term and Condition</div>
                    <div class="condition-bg">
                        <table border="1">
                            <tr align="center">
                                <th colspan="2" style="padding: 15px;">ข้อตกลงและเงื่อนไขการให้บริการ</th>
                            </tr>
                            <tr>
                                <td>
                                    1.หน้าที่การให้บริการต่อผู้ใช้บริการในฐานะผู้ขาย ในการให้บริการให้ข้อมูลหรือตอบคำถามต่อผู้ใช้งานในเรื่องที่เกี่ยวกับการตรวจสภาพรถโดย Goo Inspection ที่ได้ขายให้แก่ผู้ใช้งานซึ่งเป็นผู้ซื้อ
                                </td>
                                <td>
                                    1. service  condition to the customer,as seller who provides services, information or provide answer to the user which related to car inspection by Goo Inspection , which sell to user as buyer.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2.เงื่อนไขการเรียกร้องค่าเสียหาย และอื่นๆที่เกี่ยวข้อง  ผู้ใช้บริการยอมรับข้อตกลงที่ว่า  car  credo (thailand) และ JAAA ไม่มีส่วนรับผิดชอบใดๆ ต่อความเสียหายที่เกิดขึ้นแก่บริษัทสมาชิกและไม่มีหน้าที่หรือความรับผิดชอบใดๆ กรณีถูกเรียกร้องค่าเสียหาย และค่าชดเชยต่างๆ กรณีเกิดความเสียหายต่อบุคคลที่สาม อันเนื่องมาจากการให้ข้อมูลการตรวจสอบสภาพรถ บริษัทสมาชิกต้องรับผิดชอบดำเนินการแก้ไขความเสียหายนั้น และรับผิดชอบค่าใช้จ่ายที่เกิดขึ้นเองทั้งหมด
                                </td>
                                <td>
                                    2. Claiming condition, customer agree and accept that car  credo (thailand) and JAAA do not have responsibility for any lost  or  damage to member  company that happen after the inspection. In the event of third party claim or prosecute for lost or damage in any kinds that related to our  inspection, the member company shall lake full responsibility and lake action to solve problems for third party.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3.การตรวจสอบโดย Goo Inspection จะไม่รับผิดชอบต่อเงื่อนไขของการกระทำธุรกรรมใดๆ ระหว่างบุคคลใดๆที่เกี่ยวข้องกับยานพหนะใดๆการแก้ไขข้อพิพาทระหว่างบุคคลใดๆ เกี่ยวกับการทำธุรกรรมใดๆทั้งสิ้น
                                </td>
                                <td>
                                    3.Goo Inspection will not be responsible for the tems of any transaction between any persons in relation to any vehicle inspection by Goo Inspection for resolving any dispute between  any person redarding any transition
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4. ระเบียบและการใช้ใบรับรองของการตรวจสภาพรถ และแผ่นตรวจสอบ(check sheet) บริษัทสมาชิกยอมรับในการถูกระงับสิทธิ์การใช้ใบรับรอง ในกรณีที่เข้าข้อหนึ่งดังต่อไปนี้<br>
                                    (1)ระยะทางวิ่งของรถเพิ่มขึ้นมากกว่า 50 ก.ม. นับจากวันตรวจสภาพรถครั้งสุดท้าย<br>
                                    (2)รถมีสภาพต่างจากเนื้อหาที่ระบุในใบรับรองหรือแผ่นตรวจสอบ<br>
                                    (3)ขายรถที่ผ่านการรับรองโดย  Goo Inspection  และทำการเปลี่ยนแปลงชื่อบริษัทหรือสาขา<br>

                                </td>
                                <td>
                                    4.Procedure and usage of inspection certificate and check sheet member  company accept to suspension the right of certificate and check sheet in the  following  condition;<br>
                                    (1)car  mileage has increase more than 50 km. since the last date of inspection<br>
                                    (2)car condition has changed from the imformation in certificate and check sheet<br>
                                    (3)change company name or branch name after selling car that has goo inspection certified
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    5. รถที่ไม่เข้าข่ายได้รับการตรวจสภาพโดยทาง Goo Inspection ไม่มีหน้าที่ต้องตรวจสภาพรถที่มีลักษณะข้อใดข้อหนึ่ง ดังต่อไปนี้ ซึ่งต่อไปนี้ จะเรียกว่า"รถที่ไม่เข้าข่ายได้รับการตรวจสภาพ" JAAA หรือเจ้าหน้าที่ตรวจสภาพรถเป็นผู้พิจารณาว่ารถคันดังกล่าว เป็นรถที่ไม่เข้าข่ายได้รับการสภาพหรือไม่ และบริษัทสมาชิกยอมรับในผลพิจารณาดังกล่าว<br>
                                    (1)รถที่มีการดัดแปลงมาตรวัดระยะทางวิ่ง<br>
                                    (2)รถที่มีการปลอมแปลงหมายเลขตัวถัง รถที่หมายเลขตัวถังไม่ตรงกับความจริง หมายเลขถังซ้ำกับรถคันอื่นหรือมีการเปลี่ยนแปลงแก้ไขหมายเลข<br>
                                    (3)รถที่ถูกโจรกรรมมา รถติดจำนอง รถที่ถูกยึด หรือรถใดๆ ก็ตามซึ่งมีข้อพิพาททางกฎหมาย<br>
                                    (4)รถที่ตรวจสอบแล้วว่าเครื่องยนต์หรือระบบขับเคลื่อนส่วนสำคัญเสื่อมสภาพ<br>
                                    (5)รถที่มีสภาพเสียหายจากอุบัติเหตุ<br>
                                    (6)รถที่  car  credo (thailand) และ JAAA พิจารณาแล้วว่าเป็นรถที่เข้าข่ายได้รับการตรวจสภาพ

                                </td>
                                <td>
                                    5.car that not in the scope of inspection policy. Goo Inspection shall not inspect car that have condition that meet the following  criteria which in this document will called"car that not in the scope of inspection" JAAA or inspector will judge whether car condition is in the scope of inspection or not  and member accept the judgement result; <br>
                                    (1)car that has been altered car's mileage meter<br>
                                    (2)car that has alteration chassis number,car that chassis number not mach with  the original  number  or duplicate with other car's  number<br>
                                    (3)car that has been stolen , detained , or any kinds of legal dispute<br>
                                    (4)car that main engine or main part has deteriorate or unable to function property<br>
                                    (5)car that has been damage from accident<br>
                                    (6)car that car credo  thailand)  or  JAAA have concluded that not in the scope of inspection policy
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6.ผลการตรวจสภาพรถ และการไม่รับประกันถึงผลในอนาคต ทั้งนี้บริษัทสมาชิกยอมรับในข้อเท็จจริงที่ว่า ผลการตรวจสภาพรถหมายถึงสภาพรถในช่วงเวลาที่ เจ้าหน้าที่ปฎิบัติการตรวจสภาพเท่านั้นและไม่ได้รับประกัน ถึงผลการตรวจสภาพรถในช่วงเวลาอื่นๆ ในอนาคต รวมถึงไม่สามารถใช้เป็นหลักฐานเพื่อการรับประกันใดๆทั้งสิ้น
                                </td>
                                <td>
                                    6.Inspection result and non-warranty for the future effect, member company accept the term and condition that;inspection  result is represent the condition of the car during the inspection period only,  inspection result  shall not carry warranty in the future event, also cannot use as evident for any mean of warranty
                                </td>
                            </tr>
                            <tr>
                                <td>
                                7. ข้อตกลงและยอมรับการใช้รายงานตรวจสภาพ  ผู้ใช้บริการตกลงและยอมรับว่าการใช้รายงานการตรวจสภาพฉบับนี้ต้องเป็นไปตามข้อกำหนดของ Goo Inspection  เท่านั้น
                                </td>
                                <td>
                                7.Term and condition of usage for Goo Inspection report. Customer agree and accept in term and condition   of usage of Goo Inspection's report and shall follow accordingly
                                </td>
                            </tr>
                        </table>

                    </div>
                    <div class ="sign-grid-container">
                        <div class="">
                            <div class="sign-block"></div>
                            Name Of Junior Inspector
                            <img src="/images/signature/sig.png" height="100px" width="170px" style="margin-top: -100px; margin-left: -10px;">

                        </div>
                        <div class="">
                            <div class="sign-block"></div>
                            Name Of Senior Inspector
                            <img src="/images/signature/sig.png" height="100px" width="170px" style="margin-top: -100px; margin-left: -10px;">
                        </div>
                        <div class="">
                            <div class="sign-block"></div>
                            Authorized Director
                            <img src="/images/signature/sig.png" height="100px" width="170px" style="margin-top: -100px; margin-left: -10px;">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

</body>
</html>
{{-- @endsection --}}
