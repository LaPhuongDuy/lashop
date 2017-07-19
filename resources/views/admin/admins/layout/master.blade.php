@extends('admin.layout.master')
@section('content')
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>List Category</h5>
                </div>
                <div class="ibox-content">
                @yield('main')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection