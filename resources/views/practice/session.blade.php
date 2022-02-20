@extends('layouts.app')
@section('content')
	<div class="row" style="margin-top: +15px;">
	    <div class="col-xl-8 col-md-8"> 
	        <div class="card card-event">
	            <div class="card-block">
	                <div class="row align-items-center justify-content-center">
	                    <div class="col">
	                        <h5 class="m-0">{{ $course->course_name }}</h5>
	                    </div>
	                    <div class="col-auto">
	                        {{-- <label class="label theme-bg2 text-white f-14 f-w-400 float-right">34%</label> --}}
	                    </div>
	                </div>
		                <p>
		                   {{ $course->description; }}
		                </p>
		        </div>
		    </div>
		</div>

		<div class="col-xl-4 col-md-4">
		        <div class="card card-event">
		            <div class="card-block">
		                <div class="row align-items-center justify-content-center">
		                    <div class="col">
		                        <h5 class="m-0">{{ 'Session Details' }}</h5>
		                    </div>
		                    <div class="col-auto">
		                        {{-- <label class="label theme-bg2 text-white f-14 f-w-400 float-right">34%</label> --}}
		                    </div>
		                </div>
		                <p>
		                   <ul>
                               <li><b>Name:</b> {{ $session->session_name }} </li>
                               <li><b>Course: {{ $course->course_name }} </b> </li>

                               {{-- <li><b>Module:</b> 
									@php
										$module = get_module($session->course_module);
									@endphp
									{{ $module->module_name }}
								</li> --}}
                              
                           </ul>
		                </p>
		        </div>
		    </div>
		</div>
	</div>

	<div class="row">
        @foreach ($modules as $module)
            @include('modules.module_work')
        @endforeach
    </div>

@endsection
