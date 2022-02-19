@extends('layouts.app')
@section('content')
	<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#module_add">
        Add Course module
    </button>

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
		                        <h5 class="m-0">{{ 'Dificulty' }}</h5>
		                    </div>
		                    <div class="col-auto">
		                        {{-- <label class="label theme-bg2 text-white f-14 f-w-400 float-right">34%</label> --}}
		                    </div>
		                </div>
		                <p>
		                   {{ 'Loading' }}
		                </p>
		        </div>
		    </div>
		</div>
	</div>

	<div class="row">
        @foreach ($modules as $module)
            @include('modules.module')
        @endforeach
    </div>



	<div class="modal fade" id="module_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
	    <div class="modal-header">
	      <h5 class="modal-title" id="exampleModalLabel">Course Module</h5>
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
	      </button>
	    </div>
	    <div class="modal-body">
	        <form method="post" action="{{ url('course_module') }}">
	            @csrf
	            <div class="form-group">
	              <label for="recipient-name" class="col-form-label">Module Name:</label>
	              <input type="text" placeholder="course module name" name="module_name" class="form-control" id="recipient-name">
                  <input type="hidden" name="course_id" value="{{ $course->id }}">
	            </div>

	            <div class="form-group">
	              <label for="message-text" class="col-form-label">demo link:</label>
	              <input name="video_src" placeholder="ex: https://video-source-from-youtube.com" class="form-control"></input>
	            </div>
				
				<div class="form-group">
	              <label for="message-text" class="col-form-label">Short Descrption</label>
	              <textarea name="module_description" placeholder="short description of the module and what it could help the surgeon archieve" class="form-control" id="message-text"></textarea>
	            </div>


	        </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      <button type="submit" class="btn btn-primary">Save changes</button>
	    </form>
	    </div>
	  </div>
	</div>
	</div>


{{-- modal pop up --}}
	<Script>
	    $('#module_add').on('shown.bs.modal', function () {
	        $('#myInput').trigger('focus')
	    })
	</Script>
@endsection
