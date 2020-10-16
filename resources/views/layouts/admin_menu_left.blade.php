<?php

use App\Http\Controllers\HomeController;
$data = HomeController::userShow();


?>


<style>
  .chiller-theme .sidebar-wrapper {
      background: #00385B !important;
  }
  .user{
    display: flex;
    width: 170px;
    height: 170px;
    background-color: #ffffff;
    border-radius: 10%;
    margin-left: 8%
  }
  .user img{
    align-self: center;
    margin: 0 auto;
    width: 80%;
  }
  .sub-menu{
    padding-left: 50px !important;
  }
  </style>



  <div class="page-wrapper chiller-theme toggled">


     <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-header">

          <div class="user">
            <img class="img-responsive img-rounded" src="{{ asset('images/logo-1.png') }}">
          </div>
        </div>
        @foreach($data as $datas)
        <?php
                $menu_1 = $datas->menu_1;
                $menu_2 = $datas->menu_2;
                $menu_3 = $datas->menu_3;
                $menu_4 = $datas->menu_4;
                $menu_5 = $datas->menu_5;
                $menu_6 = $datas->menu_6;
                $menu_7 = $datas->menu_7;
                $menu_8 = $datas->menu_8;
                $menu_9 = $datas->menu_9;
        ?>

        <!-- sidebar-search  -->
        <div class="sidebar-menu">
          <ul>
            <li class="header-menu" style="color:#fff; background:#294993 !important; padding-top:10px; padding-buttom:20px;">
             <center><h3>SCHICHER</h3></center>
             <center>
             <span class="user-name" style="color:#fff;">
            {{ Auth::user()->name}}

            </span>
            </center>
            </li>

            @if($menu_1=='1')
            <li>
              <a class="dropdown-item {{ (request()->is('report') || request()->is('/')) ? 'active': '' }}" href="{{ route('report.index') }}">
                <i class="fa fa-file"></i>
                <span>Inspection Report</span>
              </a>
            </li>
            @else @endif
            @if($menu_2=='1')
            <li>
              <a class="dropdown-item {{ (request()->is('service')) ? 'active': '' }}" href="{{ route('service.index') }}">
                <!-- <i class="fas fa-tools"></i> -->
                <i class="fas fa-wrench"></i>
                <span>Service Report</span>
              </a>
            </li>
            @else @endif
            @if($menu_3=='1')
            <li>
              <a class="dropdown-item {{ (request()->is('edit')) ? 'active': '' }}" href="{{ route('edit.index') }}">
                <i class="fa fa-edit"></i>
                <span>Edit Inspection Report</span>
              </a>
            </li>
            @else @endif
            @if($menu_4=='1')
            <li>
              <a class="dropdown-item {{ (request()->is('appointment')) ? 'active': '' }}" href="{{ route('appointment.index') }}">
                <i class="fa fa-calendar-check"></i>
                <span>Inspection Appointment</span>
              </a>
            </li>
            @else @endif
            <?php if($menu_5=='1' || $menu_6=='1' || $menu_7=='1'){ ?>
            <li>
              <a class="dropdown-item" id="approve" data-toggle="collapse" data-target="#subApprove" aria-expanded="true" aria-controls="subApprove">
                <i class="fa fa-plus"></i>
                <span>Approve Appointment</span>
              </a>
            </li>
              <div id="subApprove" class="collapse" aria-labelledby="approve" data-parent="#accordion">
                @if($menu_5=='1')
                <li>
                  <a class="dropdown-item sub-menu {{ (request()->is('pending')) ? 'active': '' }}" href="{{ route('pending.index') }}">
                    <i class="fa fa-spinner"></i>
                    <span>Pending</span>
                  </a>
                </li>
                @else @endif
                @if($menu_6=='1')
                <li>
                  <a class="dropdown-item sub-menu {{ (request()->is('approved-appoint')) ? 'active': '' }}" href="{{ route('approved-appoint.index') }}">
                    <i class="fa fa-check"></i>
                    <span>Approved</span>
                  </a>
                </li>
                @else @endif
                @if($menu_7=='1')
                <li>
                  <a class="dropdown-item sub-menu {{ (request()->is('not-approved-appoint')) ? 'active': '' }}" href="{{ route('not-approved-appoint.index')}}">
                    <i class="fa fa-times"></i>
                    <span>Not Approved</span>
                  </a>
                </li>
                @else @endif
              </div>
            <?php }else{} ?>
            @if($menu_9=='1')
              <li>
                <a class="dropdown-item" href="/export">
                  <i class="fa fa-file-excel-o"></i>
                  <span>Export to Excel</span>
                </a>
              </li>
            @else @endif
        @endforeach

  <br>
            <li class="header-menu">
            <center>
            <a href="{{ route('form_car.index')}}" style="margin-top: -10px">
                <button type="button" class="btn btn-warning">ฟอร์มตรวจสถาพรถ</button>
            </a>
            </center>
            </li>


  <br>
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                   <i class="fas fa-sign-out-alt">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
                </i>
                <span>Logout</span>
              </a>
            </li>

          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>

    </nav>
  </div>
