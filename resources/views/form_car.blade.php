{{-- @extends('layouts.admin_layout')
@section('title', 'Service Inspection Report')
@section('content')
<div class="col-md-2"></div>
<div class="col-md-9" style="margin-left:5%; margin-top:2%;"> --}}

    <div class="row" align="center">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <html>
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                <title>ฟอร์มตรวจสภาพรถยนต์</title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

            <body onload="window.print()">
            <div id="printpage" style="padding:0; vertical-align:top;">
            <!-- Page 1 -->
                <div>
                    <style type="text/css" media="print">
                        @page {
                            size: auto; /* auto is the initial value */
                            margin: 2mm 6mm 2mm 6mm; /* this affects the margin in the printer settings */
                        }
                    </style>
                    <style>
                        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@600&family=Sarabun:wght@200&display=swap');
                        .spanrot{
                            transform:rotate(-90deg);
                            display:block;
                            padding:0px;
                            font-size:16px;
                            margin-left:-28;
                            margin-right:-27;
                        }
                        .spanrop{
                            transform:rotate(-90deg);
                            display:block;
                            padding:0px;
                            font-size:16px;
                            margin-left:-40;
                            margin-right:-40;
                        }
                        .spanrop2{
                            transform:rotate(-90deg);
                            display:block;
                            padding:0px;
                            font-size:16px;
                            margin-left:-44;
                            margin-right:-44;
                        }
                        h1, h2, h3, h4, h5, h6 {
                            font-family: 'Sarabun', sans-serif;
                        }
                        .webfont {
                            font-family: 'Sarabun', sans-serif;
                        }
                    </style>

                    <table style="width:890px;padding:0;height:100%;" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td valign="top" style="vertical-align:top; padding:0;">
                                    <table width="100%" style="font-family: 'Sarabun', sans-serif; font-size: 20px" cellpadding="0" cellspacing="0">
                                        <tbody>

                                            <tr>
                                                <td style="vertical-align:top">
                                                    <table style="padding-bottom:12px; width:100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding-left:10px; width:25%; text-align:left; padding-top:10px"><img src="{{ asset('print_form/logo-carsome-black.png') }}" width="110"></td>
                                                                <td style="font-family: 'Kanit', sans-serif; font-size:35px; padding-top:0px; text-align:center; width:50%; line-height:35px">แบบฟอร์มตรวจสภาพรถยนต์</td>
                                                                <td style="padding-left:20px; width:25%; text-align:left">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:top;padding:0;">
                                                    <table width="100%" style="padding:0px; margin-top:15px;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="font-size:1em;padding-right:20px;padding-bottom:15px; text-align:right; width:20%;">ชื่อลูกค้า :</td>
                                                                <td style="font-size:1em;padding-right:20px;padding-bottom:15px; width:29%"><div style="border-bottom:solid 1px #000000">&nbsp;</div></td>
                                                                <td style="padding-right:20px;padding-bottom:15px; width:2%;">&nbsp;</td>
                                                                <td style="font-size:1em;padding-right:20px;padding-bottom:15px; text-align:right; width:20%">วันที่และเวลา :</td>
                                                                <td style="font-size:1em;padding-right:20px;padding-bottom:15px;width:29%"><div style="border-bottom:solid 1px #000000">&nbsp;</div></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size:1em;padding-right:20px;padding-bottom:15px; text-align:right;">เบอร์ติดต่อ :</td>
                                                                <td style="font-size:1em;padding-right:20px;padding-bottom:15px;"><div style="border-bottom:solid 1px #000000">&nbsp;</div></td>
                                                                <td style="font-size:1em;padding-right:20px;padding-bottom:15px;">&nbsp;</td>
                                                                <td style="font-size:1em;padding-right:20px;padding-bottom:15px;text-align:right">เลขที่ตรวจสภาพรถ :</td>
                                                                <td style="font-size:1em;padding-right:20px;padding-bottom:15px;"><div style="border-bottom:solid 1px #000000">&nbsp;</div></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-size:1em;padding-right:20px;padding-bottom:15px; text-align:right; ">ผู้ตรวจสภาพรถ :</td>
                                                                <td style="font-size:1em;padding-right:20px;padding-bottom:15px;"><div style="border-bottom:solid 1px #000000;">&nbsp;</div></td>
                                                                <td style="padding-right:20px;padding-bottom:15px;">&nbsp;</td>
                                                                <td style="font-size:1em;padding-right:20px;padding-bottom:15px;text-align:right">ตรวจสอบโดย :</td>
                                                                <td style="font-size:1em;padding-right:20px;padding-bottom:15px;"><div style="border-bottom:solid 1px #000000">&nbsp;</div></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:20px"></div>
                                                    <!-- ข้อมูลทั่วไป -->
                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" style="font-family: 'Sarabun', sans-serif; font-size:18px">
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-align:center; width:17%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">ข้อมูลทั่วไป</td>
                                                                <td style="width:35%">&nbsp;</td>
                                                                <td style="width:18%">&nbsp;</td>
                                                                <td style="width:30%">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family: 'Sarabun', sans-serif; font-size:17px">
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-align:center; width:17%; padding:7px 0;">ยี่ห้อ</td>
                                                                <td style="text-align:center; width:35%; padding:7px 0;"></td>
                                                                <td style="text-align:center; width:18%; padding:7px 0;">สีเดิม</td>
                                                                <td style="text-align:center; width:30%; padding:7px 0;"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center; padding:7px 0;">รุ่น</td>
                                                                <td style="text-align:center; padding:7px 0;"></td>
                                                                <td style="text-align:center; padding:7px 0;">สีปัจจุบัน</td>
                                                                <td style="text-align:center; padding:7px 0;"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center; padding:7px 0;">ปีผลิต</td>
                                                                <td style="text-align:center; padding:7px 0;"></td>
                                                                <td style="text-align:center; padding:7px 0;">จำนวนที่นั่ง</td>
                                                                <td style="text-align:center; padding:7px 0;"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center; padding:7px 0;">สถานที่ตรวจเช็ครถ</td>
                                                                <td style="text-align:center; padding:7px 0;"></td>
                                                                <td style="text-align:center; padding:7px 0;">ประเภทจดทะเบียน</td>
                                                                <td style="text-align:center; padding:7px 0;">
                                                                    <table width="100%" cellpadding="0">
                                                                        <tbody>
                                                                            <tr>

                                                                                <td style="width:28px;padding-right:1px; text-align:right">
                                                                                    <i class="fa fa-square-o" aria-hidden="true"></i></td>
                                                                                <td style="font-size:0.9em;width:150px;padding-right:0px">รถยนต์ส่วนบุคคล</td>
                                                                                <td style="width:28px;padding-right:1px; text-align:right">
                                                                                    <i class="fa fa-square-o" aria-hidden="true"></i></td>
                                                                                <td style="font-size:0.9em;width:150px;padding-right:0px">จดในนามบริษัท</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center; padding:7px 0;">ทะเบียนรถ</td>
                                                                <td style="text-align:center; padding:7px 0;"></td>
                                                                <td style="text-align:center; padding:7px 0;">เลขไมล์ปัจจุบัน</td>
                                                                <td style="text-align:center; padding:7px 0;">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center; padding:7px 0;">หมายเลขเครื่องยนต์</td>
                                                                <td style="text-align:center; padding:7px 0;"></td>
                                                                <td style="text-align:center; padding:7px 0;">รถมีประกันหรือไม่</td>
                                                                <td style="text-align:center; padding:0;">
                                                                    <table width="100%" cellpadding="0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="width:50px;padding-right:4px; text-align:right">
                                                                                    <i class="fa fa-square-o" aria-hidden="true"></i></td>
                                                                                <td style="font-size:1em;width:120px;padding-right:10px">มีประกัน</td>
                                                                                <td style="width:50px;padding-right:4px; text-align:right">
                                                                                 <i class="fa fa-square-o" aria-hidden="true"></i></td>
                                                                                <td style="font-size:1em;width:120px;padding-right:10px">ไม่มีประกัน</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center; padding:7px 0;">หมายเลขตัวถัง</td>
                                                                <td style="text-align:center; padding:7px 0;"></td>
                                                                <td style="text-align:center; padding:7px 0;">ความจุเครื่องยนต์</td>
                                                                <td style="text-align:center; padding:7px 0;">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center; padding:7px 0;">ประเภทเชื้อเพลิง</td>
                                                                <td style="text-align:center; padding-top:0;">
                                                                    <table width="100%" cellpadding="2">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="width:25px;padding-right:1px; text-align:right">
                                                                                    <i class="fa fa-square-o" aria-hidden="true"></i></td>
                                                                                <td style="font-size:0.8em;width:50px;padding-right:1px">เบนซิน</td>
                                                                                <td style="width:25px;padding-right:1px; text-align:right">
                                                                                    <i class="fa fa-square-o" aria-hidden="true"></i></td>
                                                                                <td style="font-size:0.8em;width:50px;padding-right:1px">ดีเซล</td>
                                                                                <td style="width:25px;padding-right:1px; text-align:right">
                                                                                    <i class="fa fa-square-o" aria-hidden="true"></i></td>
                                                                                <td style="font-size:0.8em;width:70px;padding-right:1px">ไฮบริด</td>
                                                                                <td style="width:25px;padding-right:1px; text-align:right">
                                                                                    <i class="fa fa-square-o" aria-hidden="true"></i></td>
                                                                                <td style="font-size:0.8em;width:55px;padding-right:1px">ไฟฟ้า</td>
                                                                                <td style="width:25px;padding-right:1px; text-align:right">
                                                                                    <i class="fa fa-square-o" aria-hidden="true"></i></td>
                                                                                <td style="font-size:0.8em;width:50px;padding-right:1px">LPG</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td style="text-align:center; padding:7px 0;">วันหมดอายุประกันภัย</td>
                                                                <td style="text-align:center; padding:7px 0;"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center; padding:7px 0;">ระบบเกียร์</td>
                                                                <td style="text-align:center; padding-top:0px">
                                                                    <table width="100%" cellpadding="0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="width:50px;padding-right:4px; text-align:right">
                                                                                    <i class="fa fa-square-o" aria-hidden="true"></i></td>
                                                                                <td style="font-size:1em;width:120px;padding-right:10px">เกียร์ธรรมดา</td>
                                                                                <td style="width:50px;padding-right:4px; text-align:right">
                                                                                    <i class="fa fa-square-o" aria-hidden="true"></i></td>
                                                                                <td style="font-size:1em;width:120px;padding-right:10px">เกียร์อัตโนมัติ</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td style="text-align:center; padding:7px 0;">บริษัทประกันภัย</td>
                                                                <td style="text-align:center; padding:7px 0;"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center; padding:7px 0;">วันที่จดทะเบียนรถ</td>
                                                                <td style="text-align:center; padding:7px 0;"></td>
                                                                <td style="text-align:center; padding:7px 0;">จำนวนเจ้าของเดิม</td>
                                                                <td style="text-align:center; padding:7px 0;">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <div style="height:20px"></div>
                                    <!-- การทดสอบบนท้องถนน -->
                                    <table width="100%" cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td style="40%"><table width="100%" height="100%" cellpadding="0" cellspacing="0" style="font-family: 'Sarabun', sans-serif; font-size:16px">
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align:center; width:50%; background-color:#000; color:#fff; border:2px solid #000; padding: 3px 0;">การทดสอบบนท้องถนน</td>
                                                        <td style="width:50%">&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                    </table>
                                    <table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family: 'Sarabun', sans-serif; font-size:1.5em">
                                        <tbody>
                                            <tr>
                                                <td style="text-align:center; padding-top:5px">
                                                    <div>
                                                        <div>
                                                            <div class="row" style="padding-bottom: 7px;">
                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">1</div></td><td><div style="position:absolute; margin-top:6px;">เครื่องยนต์สตาร์ททำงานได้ดี</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%;"></div></td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">2</div></td><td><div style="position:absolute; margin-top:6px;">เครื่องยนต์เมื่อไม่ขับเคลื่อนทำงานได้ดี</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%; "></div></td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">3</div></td><td><div style="position:absolute; margin-top:6px;">ระบบเร่งความเร็วทำงานเหมาะสม</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%; "></div></td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">4</div></td><td><div style="position:absolute; margin-top:6px;">เสียงเครื่องยนต์ปกติ</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%;"></div></td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">5</div></td><td><div style="position:absolute; margin-top:6px;">ระบบเปลี่ยนเกียร์/ทรานแอคเซิล ทำงานปกติ</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%; "></div> </td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">6</div></td><td><div style="position:absolute; margin-top:6px;">เสียงขณะเปลี่ยนเกียร์/ทรานแอคเซิล ปกติ</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%; "></div> </td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">7</div></td><td><div style="position:absolute; margin-top:6px;">ระบบล๊อคภายในทำงานได้ดี</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%; "></div> </td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">8</div></td><td><div style="position:absolute; margin-top:6px;">แกนล้อ/เสียงสับเกียร์ ปกติ</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%; "></div> </td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">9</div></td><td><div style="position:absolute; margin-top:6px;">คลัชทำงานเหมาะสม</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%; "></div> </td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">10</div></td><td><div style="position:absolute; margin-top:6px;">พวงมาลัย (การตอบสนองและการทำงาน) ทำงานปกติ</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%; "></div> </td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">11</div></td><td><div style="position:absolute; margin-top:6px;">ตัวรถ &amp; กันสะเทือน &amp; การสั่นของรถ ทำงานปกติ</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%; "></div> </td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">12</div></td><td><div style="position:absolute; margin-top:6px;">การทำงานของสตรัทบาร์/โช้ค ทำงานปกติ</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%; "></div> </td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">13</div></td><td><div style="position:absolute; margin-top:6px;">การทำงานของเบรค/เบรค ABS ทำงานปกติ</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%; "></div> </td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">14</div></td><td><div style="position:absolute; margin-top:6px;">มีระบบควบคุมการขับเคลื่อน</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%; "></div> </td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">15</div></td><td><div style="position:absolute; margin-top:6px;">หน้าปัดทำงานเหมาะสม</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%; "></div> </td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">16</div></td><td><div style="position:absolute; margin-top:6px;">มีระบบจดจำผู้ขับขี่/ข้อมูลการขับขี่</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:1px solid #000;padding-bottom:25px; width:100%; "></div> </td></tr></tbody></table></div>

                                                                <div style="padding:0">
                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                        <tbody><tr><td style="padding:0 0 0 2px ;width:20px; vertical-align:bottom;"><div style="position:static;">17</div></td><td><div style="position:absolute; margin-top:6px;">เกียร์รถทำงานปกติ</div><div class="pull-right" style="font-size:14px; padding-top:0"></div><div style="border-bottom:0px solid #000;padding-bottom:25px; width:100%; "></div> </td></tr></tbody></table></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td style="width:5%; vertical-align:top">&nbsp;</td>
                                <!-- Car Plan -->
                                <td style="width:55%; vertical-align:top">
                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:16px">
                                        <tbody>
                                            <tr>
                                                <td style="text-align:center; width:25%; background-color:#000; color:#fff; border:2px solid #000; padding: 3px 0;">Car Plan</td>
                                                <td style="width:75%">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table height="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:25px">
                                        <tbody>
                                            <tr>
                                                <td style="text-align:center; width:500px; padding-top:34px;  padding-bottom:34px">
                                                    <style>
                                                        .circle  {
                                                            border-radius: 50%;
                                                            font-size: 18px;
                                                            font-weight:bold;
                                                            background-color:#fff;
                                                            border:#000 solid 2px;
                                                            text-align:center;
                                                            vertical-align:middle;
                                                            z-index:0;
                                                            width:30px;
                                                            height:30px;
                                                            position: absolute;
                                                            color:#09C;
                                                            font-family: 'kanit',tahoma; font-weight:bold;
                                                        }
                                                        .circle_data {
                                                            background-color:#555;
                                                            color:#FFF;
                                                        }
                                                    </style>
                                                    <table style="display: inline-table;" border="0" cellpadding="0" cellspacing="0" width="420">
                                                        <tbody>
                                                            <tr>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="82" height="1" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="15" height="1" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="21" height="1" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="8" height="1" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="168" height="1" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="7" height="1" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="23" height="1" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="14" height="1" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="82" height="1" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="1" height="1" alt=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td><img name="carplan_r1_c1" src="{{ asset('print_form/carplan_r1_c1.gif') }}" width="82" height="56" id="carplan_r1_c1" alt=""></td>
                                                                <td rowspan="2" colspan="2"><img name="carplan_r1_c2" src="{{ asset('print_form/carplan_r1_c2.gif') }}" width="36" height="114" id="carplan_r1_c2" alt=""></td>
                                                                <td rowspan="7"><img name="carplan_r1_c4" src="{{ asset('print_form/carplan_r1_c4.gif') }}" width="8" height="396" id="carplan_r1_c4" alt=""></td>
                                                                <td rowspan="2"><img name="carplan_r1_c5" src="{{ asset('print_form/carplan_r1_c5.gif') }}" width="168" height="114" id="carplan_r1_c5" alt=""></td>
                                                                <td rowspan="7"><img name="carplan_r1_c6" src="{{ asset('print_form/carplan_r1_c6.gif') }}" width="7" height="396" id="carplan_r1_c6" alt=""></td>
                                                                <td rowspan="2" colspan="2"><img name="carplan_r1_c7" src="{{ asset('print_form/carplan_r1_c7.gif') }}" width="37" height="114" id="carplan_r1_c7" alt=""></td>
                                                                <td><img name="carplan_r1_c9" src="{{ asset('print_form/carplan_r1_c9.gif') }}" width="82" height="56" id="carplan_r1_c9" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="1" height="56" alt=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td><img name="carplan_r2_c1" src="{{ asset('print_form/carplan_r2_c1.gif') }}" width="82" height="58" id="carplan_r2_c1" alt=""></td>
                                                                <td><img name="carplan_r2_c9" src="{{ asset('print_form/carplan_r2_c9.gif') }}" width="82" height="58" id="carplan_r2_c9" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="1" height="58" alt=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td><img name="carplan_r3_c1" src="{{ asset('print_form/carplan_r3_c1.gif') }}" width="82" height="98" id="carplan_r3_c1" alt=""></td>
                                                                <td colspan="2"><img name="carplan_r3_c2" src="{{ asset('print_form/carplan_r3_c2.gif') }}" width="36" height="98" id="carplan_r3_c2" alt=""></td>
                                                                <td><img name="carplan_r3_c5" src="{{ asset('print_form/carplan_r3_c5.gif') }}" width="168" height="98" id="carplan_r3_c5" alt=""></td>
                                                                <td colspan="2"><img name="carplan_r3_c7" src="{{ asset('print_form/carplan_r3_c7.gif') }}" width="37" height="98" id="carplan_r3_c7" alt=""></td>
                                                                <td><img name="carplan_r3_c9" src="{{ asset('print_form/carplan_r3_c9.gif') }}" width="82" height="98" id="carplan_r3_c9" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="1" height="98" alt=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td><img name="carplan_r4_c1" src="{{ asset('print_form/carplan_r4_c1.gif') }}" width="82" height="67" id="carplan_r4_c1" alt=""></td>
                                                                <td rowspan="3" colspan="2"><img name="carplan_r4_c2" src="{{ asset('print_form/carplan_r4_c2.gif') }}" width="36" height="129" id="carplan_r4_c2" alt=""></td>
                                                                <td rowspan="2"><img name="carplan_r4_c5" src="{{ asset('print_form/carplan_r4_c5.gif') }}" width="168" height="86" id="carplan_r4_c5" alt=""></td>
                                                                <td rowspan="3" colspan="2"><img name="carplan_r4_c7" src="{{ asset('print_form/carplan_r4_c7.gif') }}" width="37" height="129" id="carplan_r4_c7" alt=""></td>
                                                                <td><img name="carplan_r4_c9" src="{{ asset('print_form/carplan_r4_c9.gif') }}" width="82" height="67" id="carplan_r4_c9" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="1" height="67" alt=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2"><img name="carplan_r5_c1" src="{{ asset('print_form/carplan_r5_c1.gif') }}" width="82" height="62" id="carplan_r5_c1" alt=""></td>
                                                                <td rowspan="2"><img name="carplan_r5_c9" src="{{ asset('print_form/carplan_r5_c9.gif') }}" width="82" height="62" id="carplan_r5_c9" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="1" height="19" alt=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2"><img name="carplan_r6_c5" src="{{ asset('print_form/carplan_r6_c5.gif') }}" width="168" height="98" id="carplan_r6_c5" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="1" height="43" alt=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><img name="carplan_r7_c1" src="{{ asset('print_form/carplan_r7_c1.gif') }}" width="97" height="55" id="carplan_r7_c1" alt=""></td>
                                                                <td><img name="carplan_r7_c3" src="{{ asset('print_form/carplan_r7_c3.gif') }}" width="21" height="55" id="carplan_r7_c3" alt=""></td>
                                                                <td><img name="carplan_r7_c7" src="{{ asset('print_form/carplan_r7_c7.gif') }}" width="23" height="55" id="carplan_r7_c7" alt=""></td>
                                                                <td colspan="2"><img name="carplan_r7_c8" src="{{ asset('print_form/carplan_r7_c8.gif') }}" width="96" height="55" id="carplan_r7_c8" alt=""></td>
                                                                <td><img src="{{ asset('print_form/spacer.gif') }}" width="1" height="55" alt=""></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            <!-- Page 2 -->
                <div class="page-break" style="page-break-after:always; padding-top:10px">
                    <table style="width:900px;padding:0;height:100%;" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td valign="top" style="vertical-align:top; padding:0;">
                                    <table width="100%" style="font-family:'Sarabun', sans-serif; font-size:20px" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align:top">
                                                    <table style="padding-bottom:5px; width:100%">
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding-left:10px; width:25%; text-align:left"><img src="{{ asset('print_form/logo-carsome-black.png') }}" width="110"></td>
                                                                <td style="font-family: 'Kanit', sans-serif; font-size:35px; padding-top:0px; text-align:center; width:50%; line-height:35px">แบบฟอร์มตรวจสภาพรถยนต์</td>
                                                                <td style="padding-left:20px; width:25%; text-align:left">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:top;padding:0">
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:40%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">การประเมินภายนอก</td>
                                                                                <td style="border-top: 2px solid #000; border-right:2px solid #000; text-align:center; width:60%">ส่วนตัวรถและกันชน</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">ไม่มีความเสียหายจากน้ำท่วม</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%;"></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">4</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">การตรวจประเมินตัวรถผ่าน</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%;"></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">7</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">ฝากระโปรงหน้าสภาพปกติ</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">10</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">บังโคลนหลัง (ซ้าย &amp; ขวา) สภาพปกติ</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">ไม่มีความเสียหายจากไฟไหม้</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">5</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">กันชนหน้า สภาพปกติ</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                    <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">8</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">ฝากระโปรงหลังสภาพปกติ</div>
                                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                    <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">11</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">ประตูหน้า (ซ้าย &amp; ขวา) สภาพปกติ</div>
                                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                        <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                    <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">ไม่มีความเสียหายหนัก</div>
                                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                </div>
                                                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                    </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                    <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">6</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">กันชนหลัง สภาพปกติ</div>
                                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                </div>
                                                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                    </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                    <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">9</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">บังโคลนหน้า (ซ้าย &amp; ขวา) สภาพปกติ</div>
                                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                </div>
                                                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                    </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                    <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">12</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">ประตูหลัง (ซ้าย &amp; ขวา) สภาพปกติ</div>
                                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                </div>
                                                                                                        <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                    </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:40%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">การประเมินภายนอก</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:60%">ประตู,กระโปรงหน้า,กระโปรงหลัง</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:36%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:98%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">สภาพประตูรถ / การเข้าแนว สภาพปกติ</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:98%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">4</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">สภาพบานพับ / สตรัทบาร์กระโปรงหลังรถ สภาพปกติ</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:98%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">7</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">บานพับฝากกระโปรง ก้านกระทุ้ง/สตรัทบาร์ ทำงานได้ดี</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">สภาพกระโปรงหน้ารถ / การเข้าแนว สภาพปกติ</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">5</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">การตรวจประเมินหลังคารถ ผ่าน</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%;"></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">8</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">การทำงานของประตูปกติ</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%;"></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">สภาพกระโปรงหลังรถ / การเข้าแนว สภาพปกติ</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">6</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">มีระบบเปิดปิดฝากระโปรง</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%;"></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:40%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">การประเมินภายนอก</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:60%">ส่วนระบายอากาศด้านหน้าและขอบรถ</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">การตรวจประเมินส่วนระบายอากาศด้านหน้า ผ่าน</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">การตรวจประเมินขอบรถ ผ่าน</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding:0"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:40%; background-color:#000; color:#fff; border:2px solid #000; padding:5px 0;">การประเมินภายนอก</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:60%">กระจกหน้าต่างและกระจกด้านนอก</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">มีกระจกด้านหน้า</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%;"></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">4</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">มีที่ปัดน้ำฝน</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">7</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">มีกระจกพับมองข้าง</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%;"></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">มีกระจกหน้าต่างด้านข้าง</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">5</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">มีกระจกมองข้างด้านซ้าย</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">มีกระจกด้านหลัง / กระจกท้าย</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%;"></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">6</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">มีกระจกมองข้างด้านขวา</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%;"></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:40%; background-color:#000; color:#fff; border:2px solid #000; padding:5px 0;">การประเมินภายนอก</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:60%">ไฟด้านนอก</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">ไฟหน้าทำงานปกติ</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">4</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">ไฟสัญญาณเตือนทำงานปกติ</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">ไฟหลังทำงานปกติ</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">5</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">ไฟเปิด / เปิดอัตโนมัติทำงานปกติ</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">ไฟข้างทำงานปกติ</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:40%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">การประเมินภายนอก</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:60%">ซันรูฟ / มูนรูฟ / ประทุน</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">มีซันรูฟ / มูนรูฟ</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">มีหลังคาเปิดประทุน</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding:0"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:40%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">การประเมินภายนอก</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:60%">ระบบล็อคหน้าต่างและประตู</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                                                <td>
                                                                                                                    <div style="position:absolute; margin-top:0px">มีที่จับประตู</div>
                                                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0"></div>
                                                                                                                    <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">4</div></td>
                                                                                                    <td><div style="position:absolute; margin-top:0px">มีระบบเซ็นทรัลล๊อค</div>
                                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                </div>
                                                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                    </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding:5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">7</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีระบบเปิดที่เก็บของด้านหลัง</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีกุญแจรีโมท</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">5</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีระบบควบคุมหน้าต่างผู้โดยสาร</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">8</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีระบบเปิดถังน้ำมัน</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีระบบสตาร์ทแบบปุ่มกด</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">6</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีระบบป้องกันเด็ก</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:40%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">การประเมินภายนอก</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:60%">ช่องเก็บของ</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีขอบช่องเก็บของและตาข่ายเก็บของ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">4</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีขนาด / ประเภทยางอะไหล่ &amp; ดอกยาง</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีไฟช่องเก็บของ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">5</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีที่เติมลมยาง / ความดันลมยาง</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีชุดเครื่องมือ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:40%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">การประเมินภายนอก</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:60%">พรมและแผ่นรอง</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:    0px">มีหน้าปัด</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">4</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีขอบประตู</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">7</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีการปรับเบาะและที่รองคอ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">10</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีเบาะปรับความเย็น</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีพรมตกแต่งภายใน</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">5</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีเพดานรถ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">8</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีการพับเบาะนั่ง</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">11</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีพรมส่วนเก็บของด้านหลัง</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีแผ่นรองพื้นรถ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">6</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีเบาะหุ้ม</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">9</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีเบาะปรับความร้อน</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">12</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีติดตั้งเบาะนั่งสำหรับเด็ก</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div style="height:8px"></div>
                                    <table width="100%" cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td style="40%">
                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px">
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-align:center; width:40%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">ภายในรถ</td>
                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:60%">ระบบเสียงและระบบการแจ้งเตือน</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                    <div>
                                                                        <div>
                                                                            <div class="row">
                                                                                <div style="padding-top: 5px;">
                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                        <tbody><tr>
                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                        <td><div style="position:absolute; margin-top:0px">มีเครื่องเล่นวิทยุ เทปคาสเซ็ต ซีดี ดีวีดี</div>
                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                    </div>
                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </div>
                                                                                <div style="padding: 5px 0;">
                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                        <tbody><tr>
                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">4</div></td>
                                                                                        <td><div style="position:absolute; margin-top:0px">มีลำโพง</div>
                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                    </div>
                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                    <div>
                                                                        <div>
                                                                            <div class="row">
                                                                                <div style="padding-top: 5px;">
                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                        <tbody><tr>
                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                        <td><div style="position:absolute; margin-top:0px">มีเสารับสัญญาณ</div>
                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                    </div>
                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </div>
                                                                                <div style="padding: 5px 0;">
                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                        <tbody><tr>
                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">5</div></td>
                                                                                        <td><div style="position:absolute; margin-top:0px">มีกล้องถอยหลัง</div>
                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                    </div>
                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                    <div>
                                                                        <div>
                                                                            <div class="row">
                                                                                <div style="padding-top: 5px;">
                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                        <tbody><tr>
                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                        <td><div style="position:absolute; margin-top:0px">มีการแจ้งเตือน / ระบบกันขโมย</div>
                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                    </div>
                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div style="height:8px"></div>
                                    <table width="100%" cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td style="90%">
                                                    <table width="90%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px">
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-align:center; width:22%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">ภายในรถ</td>
                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:78%">ระบบทำความร้อน/ระบบระบายอากาศ/ระบบทำความเย็น/ระบบตัดหมอก/ระบบละลายน้ำแข็ง</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                    <div>
                                                                        <div>
                                                                            <div class="row">
                                                                                <div style="padding-top: 5px;">
                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                        <tbody><tr>
                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                        <td><div style="position:absolute; margin-top:0px">มีระบบทำความเย็น</div>
                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                    </div>
                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </div>
                                                                                <div style="padding: 5px 0;">
                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                        <tbody><tr>
                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">4</div></td>
                                                                                        <td><div style="position:absolute; margin-top:0px">มีศูนย์กลางระบบควบคุม</div>
                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                    </div>
                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                    <div>
                                                                        <div>
                                                                            <div class="row">
                                                                                <div style="padding-top: 5px;">
                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                        <tbody><tr>
                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                        <td><div style="position:absolute; margin-top:0px">มีตัดหมอก / ละลายน้ำแข็ง</div>
                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                    </div>
                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </div>
                                                                                <div style="padding-top: 5px;">
                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                        <tbody><tr>
                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">5</div></td>
                                                                                        <td><div style="position:absolute; margin-top:0px">มีระบบควบคุมความเย็นด้านหน้า</div>
                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                    </div>
                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                    <div>
                                                                        <div>
                                                                            <div class="row">
                                                                                <div style="padding-top: 5px;">
                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                        <tbody><tr>
                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                        <td><div style="position:absolute; margin-top:0px">มีส่วนควบคุมความเย็น</div>
                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                    </div>
                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </div>
                                                                                <div style="padding: 5px 0;">
                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                        <tbody><tr>
                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">6</div></td>
                                                                                        <td><div style="position:absolute; margin-top:0px">มีระบบควบคุมความเย็นด้านหลัง</div>
                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                    </div>
                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            <!-- Page 3 -->
                <div class="page-break" style=" page-break-after:always; padding-top:10px">
                    <table style="width:900px;padding:0;height:100%;" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td valign="top" style="vertical-align:top; padding:0;">
                                    <table width="100%" style="font-family:'Sarabun', sans-serif; font-size:20px" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align:top">
                                                    <table style="padding-bottom:12px; width:100%">
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding-left:10px; width:25%; text-align:left"><img src="{{ asset('print_form/logo-carsome-black.png') }}" width="110"></td>
                                                                <td style="font-family: 'Kanit', sans-serif; font-size:35px; padding-top:0px; text-align:center; width:50%; line-height:35px">แบบฟอร์มตรวจสภาพรถยนต์</td>
                                                                <td style="padding-left:20px; width:25%; text-align:left">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:top;padding:0">
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family: 'Sarabun', sans-serif; font-size:17px">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:40%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">ภายในรถ</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:60%">ถุงลมนิรภัยและเข็มขัดนิรภัย</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                            <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                                            <td><div style="position:absolute; margin-top:0px">มีถุงลมนิรภัย</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                            <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                                            <td><div style="position:absolute; margin-top:0px">มีเข็มขัดนิรภัย</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding:0"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:40%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">ภายในรถ</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:60%">สิ่งอำนวยความสะดวกภายในรถ</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                            <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                                            <td><div style="position:absolute; margin-top:0px">มีนาฬิกา</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">4</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีการควบคุมพวงมาลัย</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">7</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีหน้าปัดความเร็ว</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">10</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีที่ปัดกระจกหลัง</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">13</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีไฟกลม &amp; ไฟส่องแสงแผนที่ภายในรถ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">16</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีเซนเซอร์หลัง</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">19</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีช่องจุดบุหรี่</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">22</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีเบรคมือ / เบรคเท้า</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีการปรับมุม / แกนพวงมาลัย</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">5</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีพวงมาลัยพาวเวอร์</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">8</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีหน้าปัดไฟสัญญาณเตือน</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">11</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีระบบฉีดล้างกระจกรถ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">14</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีกระจกมองหลังด้านนอก</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">17</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีเซนเซอร์หน้า</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">20</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีที่เขี่ยบุหรี่</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">23</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีที่พักแขน / คอนโซล</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีการล๊อคพวงมาลัย</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">6</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีแตรรถ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">9</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีที่ปัดกระจกหน้า</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">12</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีระบบเปลี่ยนเกียร์</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">15</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีกระจกมองหลังปรับแสงอัตโนมัติ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">18</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีที่ชาร์จไฟ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">21</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีหัวเกียร์</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">24</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">มีที่บังแดด กระจก &amp; ไฟแต่งหน้า</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:55%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">ตรวจสอบระบบภายในห้องเครื่อง</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:45%">น้ำยา</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">น้ำมันเครื่อง พร้อมใช้งาน</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">4</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">น้ำมันพาวเวอร์ พร้อมใช้งาน</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">น้ำยาหล่อเย็นในหม้อน้ำ พร้อมใช้งาน</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">5</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">น้ำฉีดกระจก พร้อมใช้งาน</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">น้ำมันเบรค พร้อมใช้งาน</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">6</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">น้ำยาแอร์ พร้อมใช้งาน</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:55%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">ตรวจสอบระบบภายในห้องเครื่อง</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:45%">เครื่องยนต์</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">ตรวจสอบจุดรั่วผ่าน</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">4</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">การเดินสายไฟปกติ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">ท่อเครื่องทำงานปกติ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">5</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">น้ำมันหล่อลื่นในระบบแอร์ปกติ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                    <div>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div style="padding-top: 5px;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">สายพานทำงานปกติ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                                <div style="padding: 5px 0;">
                                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                                        <tbody><tr>
                                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">6</div></td>
                                                                                                        <td><div style="position:absolute; margin-top:0px">ยางแท่นเครื่องยนต์ปกติ</div>
                                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                                    </div>
                                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                                        </tr>
                                                                                                    </tbody></table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:55%; background-color:#000; color:#fff; border:2px solid #000; padding:5px 0;">ตรวจสอบระบบภายในห้องเครื่อง</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:45%">ระบบทำความเย็น</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody><tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                            <div>
                                                                                <div>
                                                                                <div class="row">
                                                                                <div style="padding: 5px 0;">
                                                                                    <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                        <tbody><tr>
                                                                                        <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                        <td><div style="position:absolute; margin-top:0px">หม้อน้ำทำงานปกติ</div>
                                                                                            <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                    </div>
                                                                                            <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </div>
                                                                            </div></div></div>
                                                                        </td>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                            <div>
                                                                            <div>
                                                                            <div class="row">
                                                                            <div style="padding: 5px 0;">
                                                                            <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                <tbody><tr>
                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                <td><div style="position:absolute; margin-top:0px">การทดสอบความดัน ฝาหม้อน้ำ ทำงานปกติ</div>
                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                            </div>
                                                                                    <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                </tr>
                                                                            </tbody></table>
                                                                            </div></div></div></div>
                                                                        </td>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                            <div>
                                                                            <div>
                                                                            <div class="row">
                                                                            <div style="padding: 5px 0;">
                                                                            <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                <tbody><tr>
                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                <td><div style="position:absolute; margin-top:0px">พัดลมทำความเย็น คลัช เครื่องยนต์ พร้อมใช้งาน</div>
                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                            </div>
                                                                                    <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                </tr>
                                                                            </tbody></table>
                                                                            </div></div></div></div>
                                                                        </td>
                                                                        </tr></tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size: 17px;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:55%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">ตรวจสอบระบบภายในห้องเครื่อง</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:45%">ระบบเชื้อเพลิง</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody><tr>
                                                                            <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                <div>
                                                                                <div>
                                                                                <div class="row">
                                                                                <div style="padding: 5px 0;">
                                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                    <tbody><tr>
                                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                    <td><div style="position:absolute; margin-top:0px">เสียงปั๊มเชื้อเพลิงปกติ</div>
                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                </div>
                                                                                        <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                    </tr>
                                                                                </tbody></table>
                                                                                </div></div></div></div>
                                                                            </td>
                                                                            <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                <div>
                                                                                <div>
                                                                                <div class="row">
                                                                                <div style="padding: 5px 0;">
                                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                    <tbody><tr>
                                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                    <td><div style="position:absolute; margin-top:0px">แรงดันปั๊มเชื้อเพลิงปกติ</div>
                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                    </div>
                                                                                        <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                    </tr>
                                                                                    </tbody></table>
                                                                                </div></div></div></div>
                                                                            </td>
                                                                            <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                <div>
                                                                                <div>
                                                                                <div class="row">
                                                                                <div style="padding: 5px 0;">
                                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                    <tbody><tr>
                                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                    <td><div style="position:absolute; margin-top:0px">ไส้กรองเชื้อเพลิงปกติ</div>
                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                </div>
                                                                                        <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                    </tr>
                                                                                </tbody></table>
                                                                                </div></div></div></div>
                                                                            </td>
                                                                        </tr></tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="50%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:55%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">ตรวจสอบระบบภายในห้องเครื่อง</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:45%">ระบบอิเล็คทรอนิกส์</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody><tr>
                                                                            <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                <div>
                                                                                <div>
                                                                                <div class="row">
                                                                                <div style="padding: 5px 0;">
                                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                    <tbody><tr>
                                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                    <td><div style="position:absolute; margin-top:0px">ระบบสตาร์ทเครื่องทำงานปกติ</div>
                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                </div>
                                                                                        <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                    </tr>
                                                                                </tbody></table>
                                                                                </div></div></div></div>
                                                                            </td>
                                                                            <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                <div>
                                                                                <div>
                                                                                <div class="row">
                                                                                <div style="padding: 5px 0;">
                                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                    <tbody><tr>
                                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                    <td><div style="position:absolute; margin-top:0px">ระบบเผาไหม้ทำงานปกติ</div>
                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                </div>
                                                                                        <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                    </tr>
                                                                                </tbody></table>
                                                                                </div></div></div></div>
                                                                            </td>
                                                                            <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                                <div>
                                                                                <div>
                                                                                <div class="row">
                                                                                <div style="padding:5px 0;">
                                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                    <tbody><tr>
                                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                    <td><div style="position:absolute; margin-top:0px">แบตเตอรี่ทำงานปกติ</div>
                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                </div>
                                                                                        <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                    </tr>
                                                                                </tbody></table>
                                                                                </div></div></div></div>
                                                                            </td>
                                                                        </tr></tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="40%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:50%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">ระบบช่วงล่างรถยนต์</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:50%">ระบบท่อไอเสีย</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody><tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%"><div>
                                                                            <div>
                                                                            <div class="row">
                                                                            <div style="padding: 5px 0;">
                                                                            <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                <tbody><tr>
                                                                                <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">1</div></td>
                                                                                <td><div style="position:absolute; margin-top:0px">สภาพระบบไอเสียปกติ</div>
                                                                                    <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                            </div>
                                                                                    <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                </tr>
                                                                            </tbody></table>
                                                                        </div></div></div></div></td>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%"><div>
                                                                            <div>
                                                                            <div class="row">
                                                                            <div style="padding:0"></div></div></div></div></td>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%"><div>
                                                                            <div>
                                                                            <div class="row">
                                                                            <div style="padding:0"></div></div></div></div></td>
                                                                        </tr></tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div style="height:8px"></div>
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="40%">
                                                                    <table width="40%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size: 17px;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:50%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">ระบบช่วงล่างรถยนต์</td>
                                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:50%">การส่งกำลังแกนล้อ</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                                        <tbody><tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                            <div>
                                                                            <div>
                                                                            <div class="row">
                                                                            <div style="padding-top: 5px;">
                                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                    <tbody><tr>
                                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                                    <td><div style="position:absolute; margin-top:0px">การส่งกำลังแกนล้อสภาพพร้อมใช้งาน</div>
                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                </div>
                                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                    </tr>
                                                                                </tbody></table>
                                                                            </div>
                                                                            <div style="padding: 5px 0;">
                                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                    <tbody><tr>
                                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">4</div></td>
                                                                                    <td><div style="position:absolute; margin-top:0px">มีการขับเคลื่อนสี่ล้อ 4x4</div>
                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                </div>
                                                                                        <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                    </tr>
                                                                                </tbody></table>
                                                                            </div></div></div></div>
                                                                        </td>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                            <div>
                                                                            <div>
                                                                            <div class="row">
                                                                            <div style="padding-top: 5px;">
                                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                    <tbody><tr>
                                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                                    <td><div style="position:absolute; margin-top:0px">แท่นส่งกำลังสภาพพร้อมใช้งาน</div>
                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                </div>
                                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                    </tr>
                                                                                </tbody></table>
                                                                            </div></div></div></div>
                                                                        </td>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                            <div>
                                                                            <div>
                                                                            <div class="row">
                                                                            <div style="padding-top: 5px;">
                                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                                    <tbody><tr>
                                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                                    <td><div style="position:absolute; margin-top:0px">แกนล้อสภาพพร้อมใช้งาน</div>
                                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                                </div>
                                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                                    </tr>
                                                                                </tbody></table>
                                                                            </div></div></div></div>
                                                                        </td>
                                                                        </tr></tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div style="height:8px"></div>
                                    <table width="100%" cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td style="40%">
                                                    <table width="40%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-align:center; width:50%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">ระบบช่วงล่างรถยนต์</td>
                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:50%">ยาง ล้อ</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                        <tbody><tr>
                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                            <div>
                                                            <div>
                                                            <div class="row">
                                                            <div style="padding-top: 5px;">
                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                    <tbody><tr>
                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                    <td><div style="position:absolute; margin-top:0px">ขนาดยางถูกต้อง</div>
                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                </div>
                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </div>
                                                            <div style="padding-top: 5px;">
                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                    <tbody><tr>
                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">4</div></td>
                                                                    <td><div style="position:absolute; margin-top:0px">ดอกยางหลัง (ซ้าย/ขวา) สภาพพร้อมใช้งาน</div>
                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                </div>
                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </div>
                                                            <div style="padding-top: 5px;">
                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                    <tbody><tr>
                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">7</div></td>
                                                                    <td><div style="position:absolute; margin-top:0px">ระบบกันสะเทือน สภาพพร้อมใช้งาน</div>
                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                </div>
                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </div>
                                                            <div style="padding-top: 5px;">
                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                    <tbody><tr>
                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">10</div></td>
                                                                    <td><div style="position:absolute; margin-top:0px">สปริง สภาพพร้อมใช้งาน</div>
                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                </div>
                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </div>
                                                            <div style="padding: 5px 0;">
                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                    <tbody><tr>
                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">13</div></td>
                                                                    <td><div style="position:absolute; margin-top:0px">ปั๊มส่งน้ำมันพวงมาลัย สภาพพร้อมใช้งาน</div>
                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                </div>
                                                                        <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </div></div></div></div>
                                                        </td>
                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                            <div>
                                                            <div>
                                                            <div class="row">
                                                            <div style="padding-top: 5px;">
                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                    <tbody><tr>
                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                    <td><div style="position:absolute; margin-top:0px">ขนาดล้อถูกต้อง</div>
                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                </div>
                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </div>
                                                            <div style="padding-top: 5px;">
                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                    <tbody><tr>
                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">5</div></td>
                                                                    <td><div style="position:absolute; margin-top:0px">ขอบล้อ สภาพพร้อมใช้งาน</div>
                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                </div>
                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </div>
                                                            <div style="padding-top: 5px;">
                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                    <tbody><tr>
                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">8</div></td>
                                                                    <td><div style="position:absolute; margin-top:0px">ก้านผูกและอุปกรณ์ยึด สภาพพร้อมใช้งาน</div>
                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                </div>
                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </div>
                                                            <div style="padding-top: 5px;">
                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                    <tbody><tr>
                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">11</div></td>
                                                                    <td><div style="position:absolute; margin-top:0px">โช้ค สภาพพร้อมใช้งาน</div>
                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                </div>
                                                                        <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </div></div></div></div>
                                                        </td>
                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                            <div>
                                                            <div>
                                                            <div class="row">
                                                            <div style="padding-top: 5px;">
                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                    <tbody><tr>
                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                    <td><div style="position:absolute; margin-top:0px">ดอกยางหน้า (ซ้าย/ขวา) สภาพพร้อมใช้งาน</div>
                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                </div>
                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </div>
                                                            <div style="padding-top: 5px;">
                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                    <tbody><tr>
                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center">6</div></td>
                                                                    <td><div style="position:absolute; margin-top:0px">ที่ครอบล้อ สภาพพร้อมใช้งาน</div>
                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                </div>
                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </div>
                                                            <div style="padding-top: 5px;">
                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                    <tbody><tr>
                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">9</div></td>
                                                                    <td><div style="position:absolute; margin-top:0px">กันโคลง สภาพพร้อมใช้งาน</div>
                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                </div>
                                                                        <div style="border-bottom:1px solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </div>
                                                            <div style="padding-top: 5px;">
                                                                <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                    <tbody><tr>
                                                                    <td style="padding:0 ;width:20px; vertical-align:bottom;"><div style="position:static; text-align:center;">12</div></td>
                                                                    <td><div style="position:absolute; margin-top:0px">การวางแนวล้อสภาพพร้อมใช้งาน</div>
                                                                        <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                </div>
                                                                        <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </div></div></div></div>
                                                        </td>
                                                        </tr></tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div style="height:8px"></div>
                                    <table width="100%" cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td style="90%">
                                                    <table width="40%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:17px;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-align:center; width:50%; background-color:#000; color:#fff; border:2px solid #000; padding: 5px 0;">ระบบช่วงล่างรถยนต์</td>
                                                                <td style="border-top:2px solid #000;border-right:2px solid #000;text-align:center;width:50%">เบรค</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" bordercolor="#000000" style="font-family:'Sarabun', sans-serif; font-size:1.7em; border:2px solid #000">
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                    <div>
                                                                    <div>
                                                                    <div class="row">
                                                                    <div style="padding: 5px 0;">
                                                                        <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                            <tbody><tr>
                                                                            <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">1</div></td>
                                                                            <td><div style="position:absolute; margin-top:0px">กระบอกสูบ ทำงานปกติ</div>
                                                                                <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                        </div>
                                                                                <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                            </tr>
                                                                        </tbody></table>
                                                                    </div></div></div></div>
                                                                </td>
                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                    <div>
                                                                    <div>
                                                                    <div class="row">
                                                                    <div style="padding: 5px 0;">
                                                                        <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                            <tbody><tr>
                                                                            <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">2</div></td>
                                                                            <td><div style="position:absolute; margin-top:0px">ผ้าเบรคหน้า (ซ้าย/ขวา) สภาพพร้อมใช้งาน</div>
                                                                                <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                        </div>
                                                                                <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                            </tr>
                                                                        </tbody></table>
                                                                    </div></div></div></div>
                                                                </td>
                                                                <td style="text-align:center; padding-top:5px; vertical-align:top; width:33%">
                                                                    <div>
                                                                    <div>
                                                                    <div class="row">
                                                                    <div style="padding: 5px 0;">
                                                                        <table align="center" cellpadding="0" cellspacing="0" style="width:96%;font-size:0.5em;">
                                                                            <tbody><tr>
                                                                            <td style="padding:0 ;width:20px; vertical-align:bottom; text-align:center"><div style="position:static;">3</div></td>
                                                                            <td><div style="position:absolute; margin-top:0px">สายเบรค ท่อน้ำมันเบรค สภาพพร้อมใช้งาน</div>
                                                                                <div class="pull-right" style="font-size:14px; padding-top:0">
                                                                                                        </div>
                                                                                <div style="border-bottom:0 solid #000;padding-bottom:17px; width:100%; "></div></td>
                                                                            </tr>
                                                                        </tbody></table>
                                                                    </div></div></div></div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            <!-- Page 4 -->
                <div class="page-break" style=" page-break-after:always; padding-top:10px">
                    <table style="width:900px;padding:0;" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td valign="top" style="vertical-align:top; padding:0;">
                                    <table width="100%" style="font-family:'Sarabun', sans-serif; font-size:20px" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align:top">
                                                    <table style="padding-bottom:12px; width:100%">
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding-left:10px; width:25%; text-align:left"><img src="{{ asset('print_form/logo-carsome-black.png') }}" width="110"></td>
                                                                <td style="font-family: 'Kanit', sans-serif; font-size:35px; padding-top:0px; text-align:center; width:50%; line-height:35px">แบบฟอร์มตรวจสภาพรถยนต์</td>
                                                                <td style="padding-left:20px; width:25%; text-align:left">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:top;padding:0">
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" style="font-family: 'Sarabun', sans-serif; font-size: 17px;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="text-align:center; width:10%; border-top:2px solid #000; border-left:2px solid #000; border-right:2px solid #000; padding: 3px 0;">ตำแหน่ง</td>
                                                                                <td style="text-align:center;width:10%">&nbsp;</td>
                                                                                <td style="text-align:center; width:10%; border-top:2px solid #000; border-left:2px solid #000; border-right:2px solid #000; padding: 3px 0;">หมายเหตุ</td>
                                                                                <td style="text-align:center;width:70%">&nbsp;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" style="font-family:'Sarabun', sans-serif; font-size:1.4em; border:2px solid #000">
                                                                        <tbody><tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                                <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                                <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                                <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                                <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                                <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                                <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td style="text-align:center; padding-top:5px; vertical-align:top; width:20%;border-bottom:1px solid #000">&nbsp;</td>
                                                                        <td style="text-align:left; padding-top:5px; vertical-align:top; width:80%;border-left:2px solid #000;border-bottom:1px solid #000">&nbsp;</td>
                                                                        </tr></tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            </body>
            </html>
    {{-- </div>

@endsection --}}
