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
                            {{ count($attempts) }} Attempted </h3>
                    </div>

                    <div class="col-3 text-right">
                        <p class="m-b-0">passing rate 0%</p>
                    </div>
                </div>
                <div class="progress m-t-30" style="height: 7px;">
                    <div class="progress-bar progress-c-theme" role="progressbar" style="width: {{count($attempts)}}%; aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!--[ daily sales section ] start-->
    @foreach ($attempts as $attempt)
    @php
        $data = __this_attempt($attempt->id)
    @endphp
        <div class="col-md-6 col-xl-4">
            <div class="card daily-sales">
                <div class="card-block">
                    <div class="text-right">
                        <a href="{{ url('/user_sessions/'.$attempt->id) }}" class="label theme-bg2 text-white f-12">view</a>
                    </div>
                    <h6 class="mb-4">{{ $attempt->session_name }}</h6>
                    <div class="row d-flex align-items-center">
                        <div class="col-9">
                            <h3 class="f-w-300 d-flex align-items-center m-b-0"> <p> Course: {{ $data['course']->course_name }} </p> </h3>
                            <h3 class="f-w-300 d-flex align-items-center m-b-0"> <p> Course Module: {{ $data['attempt']->course_module }} </p></h3>
                            {{-- <h3 class="f-w-300 d-flex align-items-center m-b-0"> <p> Average Score: </p> </h3> --}}
                        </div>
                        {{-- this is attempt the person made  --}}
                        <video src="#" controls></video>
                    </div>
                    
                </div>
            </div>
        </div>
    @endforeach
    


</div>




@endsection()