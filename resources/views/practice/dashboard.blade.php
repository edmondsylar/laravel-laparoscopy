@extends('layouts.app')

@section('content')
<div class="row">
    <!--[ daily sales section ] start-->
    <div class="col-md-6 col-xl-4">
        <div class="card daily-sales">
            <div class="card-block">
                <h6 class="mb-4">All Sessions</h6>
                <div class="row d-flex align-items-center">
                    <div class="col-9">
                        <h3 class="f-w-300 d-flex align-items-center m-b-0">
                            {{-- <i class="feather icon-spinner text-c-green f-30 m-r-10"></i> --}}
                            <i class="fas fa-spinner fa-pulse"></i> &nbsp;
                            0</h3>
                    </div>

                    <div class="col-3 text-right">
                        <p class="m-b-0">passing rate 0%</p>
                    </div>
                </div>
                <div class="progress m-t-30" style="height: 7px;">
                    <div class="progress-bar progress-c-theme" role="progressbar" style="width: 0%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()