@extends('layouts.app')
{{-- @extends('layouts.admin_layout') --}}
@section('title', 'Inspection Report')
@section('content')
<div class="col-md-3"></div>
<div class="col-md-8" style="margin-top:2%;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ยินดีต้อนรับเข้าสู่ระบบ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to login !
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
