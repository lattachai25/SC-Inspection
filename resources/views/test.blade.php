<?php

                // check inspaction

                $inspec = $data->inspectiontype;
                // echo $inspec;
            if($inspec == '0'){

             ?>
                <div class="form-title mt-3 mt-lg-0">การบริการตรวจเช็คสภาพรถยนต์</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="CarIn01">1. ไมล์แท้</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarIn01" id="CarIn01_1" value="0">
                            <label for="CarIn01_1">ผ่าน</label>

                            <input type="radio" name="CarIn01" id="CarIn01_2" value="1">
                            <label for="CarIn01_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="CarIn02">2. รถไม่เคยประสบภัยน้ำท่วมจมน้ำ</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarIn02" id="CarIn02_1" value="0">
                            <label for="CarIn02_1">ผ่าน</label>

                            <input type="radio" name="CarIn02" id="CarIn02_2" value="1">
                            <label for="CarIn02_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="CarIn03">3. รถไม่เคยประสบภัยไฟไหม้</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarIn03" id="CarIn03_1" value="0">
                            <label for="CarIn03_1">ผ่าน</label>

                            <input type="radio" name="CarIn03" id="CarIn03_2" value="1">
                            <label for="CarIn03_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="CarIn04">4. รถไม่เคยเกิดอุบัติเหตุรุนแรงชนหนัก จนทำให้โครงสร้างรถมีปัญหาความปลอดภัย</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarIn04" id="CarIn04_1" value="0">
                            <label for="CarIn04_1">ผ่าน</label>

                            <input type="radio" name="CarIn04" id="CarIn04_2" value="1">
                            <label for="CarIn04_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="CarIn05">5. รถเลขเครื่องตรง</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarIn05" id="CarIn05_1" value="0">
                            <label for="CarIn05_1">ผ่าน</label>

                            <input type="radio" name="CarIn05" id="CarIn05_2" value="1">
                            <label for="CarIn05_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="CarIn06">6. รถเลขตัวถังตรง</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarIn06" id="CarIn06_1" value="0">
                            <label for="CarIn06_1">ผ่าน</label>

                            <input type="radio" name="CarIn06" id="CarIn06_2" value="1">
                            <label for="CarIn06_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="CarIn07">7. รถสภาพสีเดิม</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarIn07" id="CarIn07_1" value="0">
                            <label for="CarIn07_1">ผ่าน</label>

                            <input type="radio" name="CarIn07" id="CarIn07_2" value="1">
                            <label for="CarIn07_2">ไม่ผ่าน</label>
                        </div>
                    </div>
                </div>
            <?php  } ?>

                <div class="form-title mt-3 mt-lg-0 p-0">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#cardetails" id="pills-cardetails-tab" data-toggle="pill" role="tab" aria-controls="pills-cardetails" aria-selected="true">ข้อมูลรถ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#roadtest" id="pills-roadtest-tab" data-toggle="pill" role="tab" aria-controls="pills-roadtest" aria-selected="false">การทดสอบบนถนน</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#carplan" id="pills-carplan-tab" data-toggle="pill" role="tab" aria-controls="pills-carplan" aria-selected="false">Car Plan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#outside" id="pills-outside-tab" data-toggle="pill" role="tab" aria-controls="pills-outside" aria-selected="false">ภายนอก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#inside" id="pills-inside-tab" data-toggle="pill" role="tab" aria-controls="pills-inside" aria-selected="false">ภายใน</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#engineroom" id="pills-engineroom-tab" data-toggle="pill" role="tab" aria-controls="pills-engineroom" aria-selected="false">ห้องเครื่อง</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#suspension" id="pills-suspension-tab" data-toggle="pill" role="tab" aria-controls="pills-suspension" aria-selected="false">ระบบช่วงล่าง</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#picture" id="pills-picture-tab" data-toggle="pill" role="tab" aria-controls="pills-picture" aria-selected="false">อัพโหลดรูปภาพ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#inspectorcomment" id="pills-inspectorcomment-tab" data-toggle="pill" role="tab" aria-controls="pills-inspectorcomment" aria-selected="false">ความเห็นจากผู้เช็ครถ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#history" id="pills-history-tab" data-toggle="pill" role="tab" aria-controls="pills-history" aria-selected="false">ประวัติรถ</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="col-12 pt-lg-3 box-form tab-pane show active" id="cardetails" role="tabpanel" aria-labelledby="pills-cardetails-tab">
                        <div class="form-group row">
                            <label class="col-lg-1" for="carBrand">ยี่ห้อ</label>
                            <select class="col-lg-3 form-control form-control-sm form-border" name="carBrand" id="carBrand" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->name_brand }}</option>
                            </select>

                            <label class="col-lg-1" for="carModel">รุ่น</label>
                            <select class="col-lg-3 form-control form-control-sm form-border" type="text" name="carModel" id="carModel" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->name_model }}</option>
                            </select>

                            <label class="col-lg-1" for="subModel">รุ่นย่อย</label>
                            <select class="col-lg-3 form-control form-control-sm form-border" type="text" name="subModel" id="subModel" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->sub_model }}</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-1" for="oldColor">สีเดิม</label>
                            <select class="col-lg-2 form-control form-control-sm form-border" name="oldColor" id="oldColor" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->color_b }}</option>
                            </select>

                            <label class="col-lg-1" for="newColor">สีปัจจุบัน</label>
                            <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="newColor" id="newColor" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->color_n }}</option>
                            </select>

                            <label class="col-lg-1" for="year">ปี</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="year" id="year" value="{{$data->year}}" disabled>

                            <label class="col-lg-1 pr-lg-0" for="seatNum">จำนวนที่นั่ง</label>
                            <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="seatNum" id="seatNum" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option value="2" {{($data->seatnum ==='2') ? 'selected' : ''}}>2</option>
                                <option value="4" {{($data->seatnum ==='4') ? 'selected' : ''}}>4</option>
                                <option value="5" {{($data->seatnum ==='5') ? 'selected' : ''}}>5</option>
                                <option value="5" {{($data->seatnum ==='6') ? 'selected' : ''}}>6</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="place">สถานที่ตรวจเช็ครถ</label>
                            <select class="col-lg-3 form-control form-control-sm form-border" name="place" id="place" value="{{$data->place}}" disabled>
                                <option value="ดับเบิ้ลยู สมาร์ท">ดับเบิ้ลยู สมาร์ท</option>
                            </select>

                            <label class="col-lg-2 pl-lg-5" for="registerType">ประเภทจดทะเบียน</label>
                            <div class="col-lg-4 btnCustom">
                                <input type="radio" name="registerType" id="registerType1" value="0" {{ $data->geartype == '0' ? 'checked' : ''}} disabled>
                                <label for="registerType1">รถยนต์ส่วนบุคคล</label>

                                <input type="radio" name="registerType" id="registerType2" value="1" {{ $data->geartype == '1' ? 'checked' : ''}} disabled>
                                <label for="registerType2">จดในนามบริษัท</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="carRegNum">ทะเบียนรถ</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="carRegNum" id="carRegNum" value="{{$data->carregnum}}" disabled>

                            <label class="col-lg-2 pl-lg-5" for="mileage">เลขไมล์ปัจจุบัน</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="mileage" id="mileage" value="{{$data->mileage}}" disabled>

                            <label class="col-lg-2 pl-lg-5" for="dateRegister">วันที่จดทะเบียนรถ</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="dateRegister" id="dateRegister" value="{{$data->dateregister}}" disabled>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="numOwners">จำนวนเจ้าของเดิม</label>
                            <input class="col-lg-1 form-control form-control-sm form-border" type="text" name="numOwners" id="numOwners" value="{{$data->numowners}}" disabled>

                            <label class="col-lg-2" for="cc">ความจุเครื่องยนต์ (CC)</label>
                            {{-- <input class="col-lg-1 form-control form-control-sm form-border" type="text" name="cc" id="cc" value="{{$data->cc}}" disabled> --}}
                            <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="cc" id="cc" value="{{$data->cc}}" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->cc }}</option>
                            </select>

                            <label class="col-lg-1" for="gearType">ระบบเกียร์</label>
                            <div class="col-lg-4 btnCustom">
                                <input type="radio" name="gearType" id="gearType1" value="0" {{ $data->geartype == '0' ? 'checked' : ''}} disabled>
                                <label for="gearType1">เกียร์ธรรมดา</label>

                                <input type="radio" name="gearType" id="gearType2" value="1" {{ $data->geartype == '1' ? 'checked' : ''}} disabled>
                                <label for="gearType2">เกียร์อัตโนมัติ</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="engine">หมายเลขเครื่องยนต์</label>
                            <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="engine" id="engine" value="{{$data->engine}}" disabled>

                            <label class="col-lg-2 pl-lg-5" for="vin">หมายเลขตัวถัง</label>
                            <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="vin" id="vin" value="{{$data->vin}}" disabled>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="fuelType">ประเภทเชื้อเพลิง</label>
                            <div class="col-lg-10 btnCustom">
                                <input type="checkbox" name="benzine" id="benzine" value="1" {{ $data->benzine == '1' ? 'checked' : ''}} disabled>
                                <label for="benzine">เบนซิน</label>
                                <input type="checkbox" name="diesel" id="diesel" value="1" {{ $data->diesel == '1' ? 'checked' : ''}} disabled>
                                <label for="diesel">ดีเซล</label>
                                <input type="checkbox" name="hybrid" id="hybrid" value="1" {{ $data->hybrid == '1' ? 'checked' : ''}} disabled>
                                <label for="hybrid">ไฮบริด</label>
                                <input type="checkbox" name="electric" id="electric" value="1" {{ $data->electric == '1' ? 'checked' : ''}} disabled>
                                <label for="electric">ไฟฟ้า</label>
                                <input type="checkbox" name="lpg" id="lpg" value="1" {{ $data->lpg == '1' ? 'checked' : ''}} disabled>
                                <label for="lpg">LPG</label>
                                <input type="checkbox" name="ngv" id="ngv" value="1" {{ $data->ngv == '1' ? 'checked' : ''}} disabled>
                                <label for="ngv">NGV</label>
                                <input type="checkbox" name="cng" id="cng" value="1" {{ $data->cng == '1' ? 'checked' : ''}} disabled>
                                <label for="cng">CNG</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="carInsurance">รถมีประกันหรือไม่</label>
                            <div class="col-lg-2 btnCustom">
                                <input type="radio" name="carInsurance" id="carInsurance1" value="0" {{ $data->carinsurance == '0' ? 'checked' : ''}} disabled>
                                <label for="carInsurance1">มี</label>
                                <input type="radio" name="carInsurance" id="carInsurance2" value="1" {{ $data->carinsurance == '1' ? 'checked' : ''}} disabled>
                                <label for="carInsurance2">ไม่มี</label>
                            </div>

                            <label class="col-lg-2" for="expInsurance">วันหมดอายุประกันภัย</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="expInsurance" id="expInsurance" value="{{$data->expinsurance}}" disabled>

                            <label class="col-lg-2 pl-lg-5" for="insurance">บริษัทประกันภัย</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="insurance" id="insurance" value="{{$data->expinsurance}}" disabled>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-1" for="tent">รถเต็นท์</label>
                            <div class="col-lg-2 btnCustom">
                                <input type="radio" name="tent" id="tent1" value="0" {{ $data->tent == '0' ? 'checked' : ''}} disabled>
                                <label for="tent1">ใช่</label>
                                <input type="radio" name="tent" id="tent2" value="1" {{ $data->tent == '1' ? 'checked' : ''}} disabled>
                                <label for="tent2">ไม่ใช่</label>
                            </div>

                            <label class="col-lg-1 pl-lg-0" for="fromTent">รถจากเต็นท์</label>
                            <select class="col-lg-2 form-control form-control-sm form-border" name="fromTent" id="fromTent" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->dealer_name }}</option>
                            </select>

                            <label class="col-lg-1" for="price">ราคา</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="price" id="price" value="{{$data->price}}" disabled>

                            <label class="col-lg-1 pr-lg-0" for="payment">ผ่อนงวดละ</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="payment" id="payment" value="{{$data->payment}}" disabled>
                        </div>
                    </div>

            @endforeach

                    <div class="col-12 pt-lg-3 box-form tab-pane" id="roadtest" role="tabpanel" aria-labelledby="pills-roadtest-tab">
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>เครื่องยนต์สตาร์ททำงานได้ดี</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt01" id="rt01" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>เครื่องยนต์เมื่อไม่ขับเคลื่อนทำงานได้ดี</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt02" id="rt02" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>ระบบเร่งความเร็วทำงานเหมาะสม</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt03" id="rt03" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">4.</td>
                                        <td>เสียงเครื่องยนต์ปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt04" id="rt04" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">5.</td>
                                        <td>ระบบเปลี่ยนเกียร์/ทรานแอคเซิล ทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt05" id="rt05" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">6.</td>
                                        <td>เสียงขณะเปลี่ยนเกียร์/ทรานแอคเซิล ปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt06" id="rt06" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">7.</td>
                                        <td>ระบบล๊อคภายในทำงานได้ดี</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt07" id="rt07" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">8.</td>
                                        <td>แกนล้อ/เสียงสับเกียร์ ปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt08" id="rt08" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">9.</td>
                                        <td>คลัชทำงานเหมาะสม</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt09" id="rt09" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">10.</td>
                                        <td>พวงมาลัย (การตอบสนองและการทำงาน) ทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt10" id="rt10" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">11.</td>
                                        <td>ตัวรถ & กันสะเทือน & การสั่นของรถ ทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt11" id="rt11" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">12.</td>
                                        <td>การทำงานของสตรัทบาร์/โช้ค ทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt12" id="rt12" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">13.</td>
                                        <td>การทำงานของเบรค/เบรค ABS ทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt13" id="rt13" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">14.</td>
                                        <td>มีระบบควบคุมการขับเคลื่อน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt14" id="rt14" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">15.</td>
                                        <td>หน้าปัดทำงานเหมาะสม</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt15" id="rt15" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">16.</td>
                                        <td>มีระบบจดจำผู้ขับขี่/ข้อมูลการขับขี่</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt16" id="rt16" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">17.</td>
                                        <td>เกียร์รถทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="rt17" id="rt17" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 pt-lg-3 box-form tab-pane" id="carplan" role="tabpanel" aria-labelledby="pills-carplan-tab">
                        <table cellspacing="0" style="margin: 0 auto;">
                            <tr>
                                <td style="background-image: url('images/carplan/car1.gif'); background-repeat: no-repeat; height: 570px; width: 170px; vertical-align: top;">
                                    <div class="carplan-img" style="width: 115px; height: 80px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="circle-tag">A</div>
                                    </div>
                                    <div class="carplan-img" style="width: 115px; height: 80px;">
                                        <div class="circle-tag">B</div>
                                    </div>
                                    <div class="carplan-img" style="width: 115px; height: 142px; float: left;">
                                        <div class="circle-tag">C</div>
                                    </div>
                                    <div class="carplan-img" style="width: 53px; height: 142px; float: left;">
                                        <div class="circle-tag">D</div>
                                    </div>
                                    <div class="carplan-img" style="width: 115px; height: 95px; float: left;">
                                        <div class="circle-tag">E</div>
                                    </div>
                                    <div class="carplan-img" style="width: 53px; height: 182px; float: right;">
                                        <div class="circle-tag">F</div>
                                    </div>
                                    <div class="carplan-img" style="width: 115px; height: 87px; float: left;">
                                        <div class="circle-tag">G</div>
                                    </div>
                                    <div class="carplan-img" style="width: 150px; height: 80px; float: left;">
                                        <div class="circle-tag">H</div>
                                    </div>
                                </td>
                                <td width="10px"></td>
                                <td style="background-image: url('images/carplan/car2.gif'); background-repeat: no-repeat; height: 570px; width: 240px; vertical-align: top;">
                                    <div class="carplan-img" style="width: 238px; height: 160px;">
                                        <div class="circle-tag">I</div>
                                    </div>
                                    <div class="carplan-img" style="width: 238px; height: 140px;">
                                        <div class="circle-tag">J</div>
                                    </div>
                                    <div class="carplan-img" style="width: 238px; height: 114px;">
                                        <div class="circle-tag">K</div>
                                    </div>
                                    <div class="carplan-img" style="width: 238px; height: 150px;">
                                        <div class="circle-tag">L</div>
                                    </div>
                                </td>
                                <td width="10px"></td>
                                <td style="background-image: url('images/carplan/car3.gif'); background-repeat: no-repeat; height: 570px; width: 170px; vertical-align: top;">
                                    <div class="carplan-img" style="width: 115px; height: 80px; float: right;">
                                        <div class="circle-tag">M</div>
                                    </div>
                                    <div class="carplan-img" style="width: 115px; height: 80px; float: right;">
                                        <div class="circle-tag">N</div>
                                    </div>
                                    <div class="carplan-img" style="width: 53px; height: 142px; clear: both; float: left;">
                                        <div class="circle-tag">O</div>
                                    </div>
                                    <div class="carplan-img" style="width: 115px; height: 142px; float: right;">
                                        <div class="circle-tag">P</div>
                                    </div>
                                    <div class="carplan-img" style="width: 53px; height: 182px; float: left;">
                                        <div class="circle-tag">Q</div>
                                    </div>
                                    <div class="carplan-img" style="width: 115px; height: 95px; float: right;">
                                        <div class="circle-tag">R</div>
                                    </div>
                                    <div class="carplan-img" style="width: 115px; height: 87px; float: right;">
                                        <div class="circle-tag">S</div>
                                    </div>
                                    <div class="carplan-img" style="width: 150px; height: 80px; float: right;">
                                        <div class="circle-tag">T</div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-12 pt-lg-3 box-form tab-pane" id="outside" role="tabpanel" aria-labelledby="pills-outside-tab">
                        <div class="box-title">ส่วนตัวรถและกันชน</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>ไม่มีความเสียหายจากน้ำท่วม</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os01" id="os01" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>ไม่มีความเสียหายจากไฟไหม้</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os02" id="os02" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>ไม่มีความเสียหายหนัก</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os03" id="os03" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">4.</td>
                                        <td>การตรวจประเมินตัวรถผ่าน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os04" id="os04" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">5.</td>
                                        <td>กันชนหน้า สภาพปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os05" id="os05" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">6.</td>
                                        <td>กันชนหลัง สภาพปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os06" id="os06" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">7.</td>
                                        <td>ฝากระโปรงหน้าสภาพปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os07" id="os07" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">8.</td>
                                        <td>ฝากระโปรงหลังสภาพปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os08" id="os08" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">9.</td>
                                        <td>บังโคลนหน้า (ซ้าย & ขวา) สภาพปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os09" id="os09" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">10.</td>
                                        <td>บังโคลนหลัง (ซ้าย & ขวา) สภาพปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os10" id="os10" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">11.</td>
                                        <td>ประตูหน้า (ซ้าย & ขวา) สภาพปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os02" id="os11" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">12.</td>
                                        <td>ประตูหลัง (ซ้าย & ขวา) สภาพปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os03" id="os12" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">ประตู กระโปรงหน้า กระโปรงหลัง</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>สภาพประตูรถ / การเข้าแนว สภาพปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os13" id="os13" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>สภาพกระโปรงหน้ารถ / การเข้าแนว สภาพปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os14" id="os14" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>สภาพกระโปรงหลังรถ / การเข้าแนว สภาพปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os15" id="os15" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">4.</td>
                                        <td>สภาพบานพับ / สตรัทบาร์กระโปรงหลังรถ สภาพปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os16" id="os16" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">5.</td>
                                        <td>การตรวจประเมินหลังคารถ ผ่าน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os17" id="os17" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">6.</td>
                                        <td>มีระบบเปิดปิดฝากระโปรง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os18" id="os18" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">7.</td>
                                        <td>บานพับฝากกระโปรง ก้านกระทุ้ง/สตรัทบาร์ ทำงานได้ดี</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os19" id="os19" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">8.</td>
                                        <td>การทำงานของประตู ปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os20" id="os20" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">ส่วนระบายอากาศด้านหน้าและขอบรถ</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>การตรวจประเมินส่วนระบายอากาศด้านหน้า ผ่าน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os21" id="os21" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>การตรวจประเมินขอบรถ ผ่าน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os22" id="os22" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">กระจกหน้างต่างและกระจกด้านนอก</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>มีกระจกด้านหน้า</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os23" id="os23" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>มีกระจกหน้าต่างด้านข้าง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os24" id="os24" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>มีกระจกด้านหลัง / กระจกท้าย</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os25" id="os25" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">4.</td>
                                        <td>มีที่ปัดน้ำฝน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os26" id="os26" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">5.</td>
                                        <td>มีกระจกมองข้างด้านซ้าย</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os27" id="os27" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">6.</td>
                                        <td>มีกระจกมองข้างด้านขวา</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os28" id="os28" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">7.</td>
                                        <td>มีกระจกพับมองข้าง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os29" id="os29" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">ไฟด้านนอก</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>ไฟหน้าทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os30" id="os30" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>ไฟหลังทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os31" id="os31" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>ไฟข้างทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os32" id="os32" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">4.</td>
                                        <td>ไฟสัญญาณเตือนทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os33" id="os33" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">5.</td>
                                        <td>ไฟเปิด / เปิดอัตโนมัติ ทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os34" id="os34" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">ซันรูฟ มูนรูฟ ประทุน</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>มีซันรูฟ / มูนรูฟ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os35" id="os35" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>มีหลังคาเปิดประทุน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os36" id="os36" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">ระบบล็อคหน้าต่างและประตู</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>ที่จับประตู</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os37" id="os37" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>มีกุญแจรีโมท</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os38" id="os38" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>มีระบบสตาร์ทแบบปุ่มกด</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os39" id="os39" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">4.</td>
                                        <td>มีระบบเซ็นทรัลล็อค</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os40" id="os40" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">5.</td>
                                        <td>มีระบบควบคุมหน้าต่างผู้โดยสาร</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os41" id="os41" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">6.</td>
                                        <td>มีระบบป้องกันเด็ก</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os42" id="os42" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">7.</td>
                                        <td>มีระบบเปิดที่เก็บของด้านหลัง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os43" id="os43" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">8.</td>
                                        <td>มีระบบเปิดถังน้ำมัน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os44" id="os44" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">ช่องเก็บของ</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>มีขอบช่องเก็บของและตาข่ายเก็บของ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os45" id="os45" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>มีไฟช่องเก็บของ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os46" id="os46" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>มีชุดเครื่องมือ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os47" id="os47" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">4.</td>
                                        <td>มีขนาด / ประเภทยางอะไหล่ & ดอกยาง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os48" id="os48" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">5.</td>
                                        <td>มีที่เติมลมยาง / ความดันลมยาง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os49" id="os49" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">พรมและแผ่นรอง</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>มีหน้าปัด</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os50" id="os50" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>มีพรมตกแต่งภายใน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os51" id="os51" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>มีแผ่นรองพื้นรถ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os52" id="os52" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">4.</td>
                                        <td>มีขอบประตู</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os53" id="os53" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">5.</td>
                                        <td>มีเพดานรถ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os54" id="os54" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">6.</td>
                                        <td>มีเบาะหุ้ม</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os55" id="os55" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">7.</td>
                                        <td>มีการปรับเบาะและที่รองคอ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os56" id="os56" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">8.</td>
                                        <td>มีการพับเบาะนั่ง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os57" id="os57" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">9.</td>
                                        <td>มีเบาะปรับความร้อน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os58" id="os58" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">10.</td>
                                        <td>มีเบาะปรับความเย็น</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os59" id="os59" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">11.</td>
                                        <td>มีพรมส่วนเก็บของด้านหลัง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os60" id="os60" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">12.</td>
                                        <td>มีติดตั้งเบาะนั่งสำหรับเด็ก</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="os61" id="os61" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 pt-lg-3 box-form tab-pane" id="inside" role="tabpanel" aria-labelledby="pills-inside-tab">
                        <div class="box-title">ระบบเสียงและระบบการแจ้งเตือน</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>มีเครื่องเล่นวิทยุ เทปคาสเซ็ต ซีดี ดีวีดี</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is01" id="is01" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>มีเสารับสัญญาณ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is02" id="is02" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>มีการแจ้งเตือน / ระบบกันขโมย</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is03" id="is03" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">4.</td>
                                        <td>มีลำโพง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is04" id="is04" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">5.</td>
                                        <td>มีกล้องถอยหลัง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is05" id="is05" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">ระบบทำความร้อน / ระบบระบายอากาศ / ระบบทำความเย็น / ระบบตัดหมอก / ระบบละลายน้ำแข็ง</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>มีระบบทำความเย็น</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is06" id="is06" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>มีตัดหมอก / ละลายน้ำแข็ง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is07" id="is07" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>มีส่วนควบคุมความเย็น</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is08" id="is08" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">4.</td>
                                        <td>มีศูนย์กลางระบบควบคุม</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is09" id="is09" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">5.</td>
                                        <td>มีระบบควบคุมความเย็นด้านหน้า</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is10" id="is10" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">6.</td>
                                        <td>มีระบบควบคุมความเย็นด้านหลัง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is11" id="is11" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">ถุงลมนิรภัยและเข็มขัดนิรภัย</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>มีถุงลมนิรภัย</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is12" id="is12" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>มีเข็มขัดนิรภัย</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is13" id="is13" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">สิ่งอำนวยความสะดวกภายในรถ</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>มีนาฬิกา</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is14" id="is14" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>มีการปรับมุม / แกนพวงมาลัย</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is15" id="is15" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>มีการล็อคพวงมาลัย</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is16" id="is16" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">4.</td>
                                        <td>มีการควบคุมพวงมาลัย</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is17" id="is17" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">5.</td>
                                        <td>มีพวงมาลัยพาวเวอร์</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is18" id="is18" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">6.</td>
                                        <td>มีแตรรถ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is19" id="is19" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">7.</td>
                                        <td>มีหน้าปัดความเร็ว</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is20" id="is20" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">8.</td>
                                        <td>มีหน้าปัดไฟสัญญาณเตือน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is21" id="is21" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">9.</td>
                                        <td>มีที่ปัดกระจกหน้า</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is22" id="is22" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">10.</td>
                                        <td>มีที่ปัดกระจกหลัง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is23" id="is23" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">11.</td>
                                        <td>มีระบบฉีดล้างกระจกรถ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is24" id="is24" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">12.</td>
                                        <td>มีระบบเปลี่ยนเกียร์</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is25" id="is25" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">13.</td>
                                        <td>มีไฟกลม & ไฟส่องแสงแผนที่ภายในรถ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is26" id="is26" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">14.</td>
                                        <td>มีกระจกมองหลังด้านนอก</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is27" id="is27" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">15.</td>
                                        <td>มีกระจกมองหลังปรับแสงอัตโนมัติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is28" id="is28" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">16.</td>
                                        <td>มีเซนเซอร์หลัง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is29" id="is29" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">17.</td>
                                        <td>มีเซนเซอร์หน้า</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is30" id="is30" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">18.</td>
                                        <td>มีที่ชาร์จไฟ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is31" id="is31" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">19.</td>
                                        <td>มีช่องจุดบุหรี่</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is32" id="is32" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">20.</td>
                                        <td>มีที่เขี่ยบุหรี่</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is33" id="is33" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">21.</td>
                                        <td>มีหัวเกียร์</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is34" id="is34" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">22.</td>
                                        <td>มีเบรคมือ / เบรคเท้า</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is35" id="is35" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">23.</td>
                                        <td>มีที่พักแขน / คอนโซล</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is36" id="is36" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">24.</td>
                                        <td>มีที่บังแดด กระจก & ไฟแต่งหน้า</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="is37" id="is37" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 pt-lg-3 box-form tab-pane" id="engineroom" role="tabpanel" aria-labelledby="pills-engineroom-tab">
                        <div class="box-title">น้ำยา</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>น้ำมันเครื่องพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er01" id="er01" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>น้ำยาหล่อเย็นในหม้อน้ำพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er02" id="er02" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>น้ำมันเบรคพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er03" id="er03" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">4.</td>
                                        <td>น้ำมันพาวเวอร์พร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er04" id="er04" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">5.</td>
                                        <td>น้ำฉีดกระจกพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er05" id="er05" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">6.</td>
                                        <td>น้ำยาแอร์พร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er05" id="er05" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">เครื่องยนต์</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>ตรวจสอบจุดรั่ว ผ่าน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er07" id="er07" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>ท่อเครื่องทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er08" id="er08" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>สายพานทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er09" id="er09" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">4.</td>
                                        <td>การเดินสายไฟปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er10" id="er10" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">5.</td>
                                        <td>น้ำมันในระบบแอร์ปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er11" id="er11" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">6.</td>
                                        <td>แท่นเครื่องยนต์ปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er12" id="er12" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">ระบบทำความเย็น</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>หม้อน้ำทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er13" id="er13" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>การทดสอบความดัน ฝาหม้อน้ำ ทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er14" id="er14" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>พัดลมทำความเย็น คลัช เครื่องยนต์ พร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er15" id="er15" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">ระบบเชื้อเพลิง</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>เสียงปั๊มเชื้อเพลิงปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er16" id="er16" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>แรงดันปั๊มเชื้อเพลิงปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er17" id="er17" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>ไส้กรองเชื้อเพลิงปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er18" id="er18" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">ระบบอิเล็กทรอนิกส์</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>ระบบสตาร์ทเครื่องทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er19" id="er19" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>ระบบเผาไหม้ทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er20" id="er20" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>แบตเตอรี่ทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="er21" id="er21" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 pt-lg-3 box-form tab-pane" id="suspension" role="tabpanel" aria-labelledby="pills-suspension-tab">
                        <div class="box-title">ระบบท่อไอเสีย</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>สภาพระบบไอเสียปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss01" id="ss01" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">การส่งกำลังแกนล้อ</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>การส่งกำลังแกนล้อพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss02" id="ss02" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>แท่นส่งกำลังพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss03" id="ss03" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>แกนล้อพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss04" id="ss04" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">4.</td>
                                        <td>มีการขับเคลื่อนสี่ล้อ 4x4</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss05" id="ss05" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">ยาง ล้อ</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>ขนาดยางถูกต้อง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss06" id="ss06" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>ขนาดล้อถูกต้อง</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss07" id="ss07" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>ดอกยางหน้า (ซ้าย/ขวา) สภาพพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss08" id="ss08" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">4.</td>
                                        <td>ดอกยางหลัง (ซ้าย/ขวา) สภาพพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss09" id="ss09" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">5.</td>
                                        <td>ขอบล้อ สภาพพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss10" id="ss10" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">6.</td>
                                        <td>ที่ครอบล้อ สภาพพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss11" id="ss11" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">7.</td>
                                        <td>ระบบกันสะเทือน สภาพพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss12" id="ss12" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">8.</td>
                                        <td>ก้านผูกและอุปกรณ์ยึด สภาพพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss13" id="ss13" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">9.</td>
                                        <td>กันโคลง สภาพพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss14" id="ss14" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">10.</td>
                                        <td>สปริง สภาพพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss15" id="ss15" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">11.</td>
                                        <td>โช้ค สภาพพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss16" id="ss16" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">12.</td>
                                        <td>การวางแนวล้อ สภาพพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss17" id="ss17" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">13.</td>
                                        <td>ปั๊มส่งน้ำมันพวงมาลัย สภาพพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss18" id="ss18" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="box-title mt-2">เบรค</div>
                        <div class="row">
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">1.</td>
                                        <td>กระบอกสูบ ทำงานปกติ</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss19" id="ss19" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">2.</td>
                                        <td>ผ้าเบรคหน้า (ซ้าย/ขวา) สภาพพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss20" id="ss20" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table width="100%">
                                    <tr>
                                        <td width="25px">3.</td>
                                        <td>สายเบรค ท่อน้ำมันเบรค สภาพพร้อมใช้งาน</td>
                                        <td width="20px">
                                            <div class="checkCustom">
                                                <input type="checkbox" name="ss21" id="ss21" value="1" checked>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>