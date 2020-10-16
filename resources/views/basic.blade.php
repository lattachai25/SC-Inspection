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

<body>
{{-- {{var_dum($datas)}} --}}

            <?php

                $idins = $datas->id;
                $idinspec = 'INS'.str_pad(($datas->ins),5,'0',STR_PAD_LEFT);
                // echo 'เลขที่ตรวจสภาพรถ : '.$idinspec;
                $date = substr(date("Y"),2);
                $idCS = 'CS'.$date.str_pad(($idins),5,'0',STR_PAD_LEFT);

            ?>
{{$datas->id}}

        <!--PAGE 1-->
    <div class="printpage" align="center">
            <div class = "page-container">
                <div class="page">
                    <div class="page-contain">
                        <div class="head-logo">
                            <img src= "{{ asset('images/main-logo.png') }}">
                        </div>
                        <div class="head-title">
                            Preowned Vehicle Inspection Report
                        </div>
                        <div class="head-description">
                            Basic Inspection Analysis
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
                                    <td width="25%" style="text-align: left; padding-bottom: 10px;"><img class="img-responsive img-rounded" src="{{ asset('img_system/LOGOWsmart.png') }}" width="80px"></td>
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

        </div>
    </div>

</body>
</html>
