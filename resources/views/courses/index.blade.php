@extends('layouts.app')
{{-- section --}}
@section('content')
    <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#module_add">
        Create Course
    </button>
    <div class="row">
    @if (count($courses) == 0)
        <small>Create Course to continue</small>
    @else
        @foreach ($courses as $course)
        <div class="col-xl-4 col-md-6">
            <div class="card card-event">
                <div class="card-block">
                    <div class="row align-items-center justify-content-center">
                        <div class="col">
                            <h3 class="m-0">{{ $course->course_name }}</h3>
                        </div>
                        <div class="col-auto">
                            {{-- <label class="label theme-bg2 text-white f-14 f-w-400 float-right">34%</label> --}}
                        </div>
                    </div>
                    <h4 class="mt-3 f-w-100">Description</h4>
                    <p>
                       {{ $course->description; }}
                    </p>
                    <div class="pull-right">
                        @switch($course->status)
                            @case('draft')
                                <form method="POST" action="update_module_status" >
                                    @csrf
                                    <button  class="btn btn-primary">activate</button>
                                    <input value="active" type="hidden" name="status">
                                    <input value="{{ $course->id }}" type="hidden" name="course">
                                    {{-- explore button --}}
                                    <a href="{{ url('/courses/'.$course->id) }}" class="btn-btn-primary">Explore</a>
                                    
                                </form>
                                @break
                            @case('active')
                                <form method="POST" action="update_course_status" >
                                    @csrf
                                    <button class="btn btn-danger">Deactivate</button>
                                    <input value="active" type="hidden" name="status">
                                    <input value="{{ $course->id }}" type="hidden" name="course">
                                </form>
                            @break

                            @case('deactive')
                                <form method="POST" action="update_course_status">
                                    @csrf
                                    <button  class="btn btn-primary">activate</button>
                                    <input value="activate" type="hidden" name="status">
                                    <input value="{{ $course->id }}" type="hidden" name="course">
                                </form>
                            @break  
                        
                            @default 
                            {{-- we put nothing on default --}}
                        @endswitch
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif
    </div>   
      <div class="modal fade" id="module_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create New Course</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('courses')}}">
                    @csrf
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Course Name:</label>
                      <input type="text" name="course_name" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Description:</label>
                      <textarea name="description" row="20" class="form-control" id="message-text"></textarea>
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

