<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Cer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Sarabun:wght@200;500;700&display=swap');
        #printcer{
            font-family: 'Sarabun', sans-serif;
            font-weight: 200;
            background-color: #ffffff;
            display: block;
            margin: 0 auto;
        }
        .title, .data{
            font-size: 20px;
        }
        .title{
            font-weight: 500;
        }
        .data{
            padding: 0 0 6px 0;
            border-bottom: 1px solid #000000;
        }
        @media print{
            body, #printcer{
                margin-top: 40px !important;
                margin: 0;
            }
        }
    </style>
</head>
<body style="background-color: #c9c9c9;" onload="window.print()">
    <table id="printcer" style="width: 900px; margin: 0 auto;">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td width="50%" style="padding: 30px 10px 25px;">
                            <div class="col-12 ml-4">
                                <img src="{{ asset('images/LOGOWsmart.png') }}" width="55%"/>
                            </div>
                        </td>
                        <td width="50%" class="p-3" style="font-size: 19px;">
                            <div class="row mb-2">
                                <div class="col-6 text-right">Certification No.</div>
                                <div class="col-4 data">CS2000726</div>
                            </div>
                            <div class="row">
                                <div class="col-6 text-right">วันที่</div>
                                <div class="col-4 data">12/01/2020</div>
                            </div>
                        </td>
                    </tr>
                </table>

                <table width="100%" style="margin-bottom: 8px;">
                    <tr>
                        <td style="font-size: 35px; font-weight: 700; text-align: center; letter-spacing: 0.04em;">CERTIFICATE OF INSPECTION</td>
                    </tr>
                </table>

                <table width="68%" align="center">
                    <tr>
                        <td style="font-size: 21px;">
                            <div style="letter-spacing: 0.02em;">เราขอรับรองว่ารถยนต์ที่ได้กล่าวถึงต่อไปนี้ได้รับการตรวจสอบสมรรถนะ</div>
                            เครื่องยนต์และความเหมาะสมสำหรับการขับขี่บนท้องถนนภายใต้มาตรฐาน
                            <br>
                            การตรวจสอบของ W smart
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="85%" align="center" style="margin-top: 30px;">
                    <tr>
                        <td class="py-3">
                            <div class="title mr-3 float-left">ยี่ห้อรถยนต์</div>
                            <div class="data px-2 float-left" style="width: 376px;">Honda</div>
                            <div class="title mx-3 float-left">รุ่น</div>
                            <div class="data px-2 float-left" style="width: 220px;">CIVIC</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3">
                            <div class="title mr-3 float-left">ความจุเครื่องยนต์</div>
                            <div class="data px-2 float-left" style="width: 226px;">1.8</div>
                            <div class="title mx-3 float-left">ปีที่จดทะเบียน</div>
                            <div class="data px-2 float-left" style="width: 227px;">2015</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3">
                            <div class="title mr-3 float-left">หมายเลขตัวถัง</div>
                            <div class="data px-2 float-left" style="width: 624px;">MRHFB2620FP102423</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3">
                            <div class="title mr-3 float-left">หมายเลขเครื่องยนต์</div>
                            <div class="data px-2 float-left" style="width: 582px;">R18215004522</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3">
                            <div class="title mr-3 float-left">เลขไมล์</div>
                            <div class="data px-2 float-left" style="width: 682px;">139,614</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3">
                            <div class="title mr-3 float-left">วันที่ตรวจสภาพ</div>
                            <div class="data px-2 float-left" style="width: 616px;">01/01/2443</div>
                        </td>
                    </tr>
                </table>

                <table width="86%" align="center" style="margin-top: 30px;">
                    <tr>
                        <td style="font-size: 22px;">
                            ใบรับรองนี้ได้บ่งบอกว่ารถยนต์ที่ได้กล่าวถึงข้างต้นได้รับการตรวจสอบสมรรถนะเครื่องยนต์และความเหมาะสมสำหรับการขับขี่บนท้องถนนทั้งหมด 162 จุด โดย W smart การตรวจสอบจะแบ่งเป็น 5 ส่วนคือ การทดสอบบนท้องถนน, การประเมินภายนอก, ภายในรถ, ระบบภายในห้องเครื่อง, ระบบช่วงล่างรถยนต์ ภายใต้มาตรฐานการตรวจสอบของ W smart
                        </td>
                    </tr>
                </table>

                <table width="85%" align="center" style="margin-top: 40px; margin-bottom: 60px;">
                    <tr>
                        <td width="50%"><img src="{{ asset('images/car1.jpg') }}" width="100%"></td>
                        <td style="padding: 0 20px 0 100px; text-align: center; vertical-align: bottom;">
                            <div class="data" style="height: 45px;"></div>
                            <div class="data" style="height: 45px;"></div>
                            <div style="padding-top: 15px; font-weight: 500;">Director of Inspection Dept</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>