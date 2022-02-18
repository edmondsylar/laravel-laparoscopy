@extends('layouts.app')
{{-- section --}}
@section('content')
    <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#module_add">
        Create Course.
    </button>
    <div class="row">
    @if (count($modules) == 0)
        <small>Sorry No modules available</small>
    @else
        @foreach ($modules as $module)
        <div class="col-xl-4 col-md-6">
            <div class="card card-event">
                <div class="card-block">
                    <div class="row align-items-center justify-content-center">
                        <div class="col">
                            <h5 class="m-0">{{ $module->name }}</h5>
                        </div>
                        <div class="col-auto">
                            {{-- <label class="label theme-bg2 text-white f-14 f-w-400 float-right">34%</label> --}}
                        </div>
                    </div>
                    <h4 class="mt-3 f-w-100">Description</h4>
                    <p>
                       {{ $module->description; }}
                    </p>
                    <div class="pull-right">
                        @switch($module->status)
                            @case('Draft')
                                <form method="POST" action="update_module_status" >
                                    @csrf
                                    <button  class="btn btn-primary">activate</button>
                                    <input value="active" type="hidden" name="status">
                                    <input value="{{ $module->id }}" type="hidden" name="module">
                                </form>
                                @break
                            @case('active')
                                <form method="POST" action="update_module_status" >
                                    @csrf
                                    <button class="btn btn-danger">Deactivate</button>
                                    <input value="active" type="hidden" name="status">
                                    <input value="{{ $module->id }}" type="hidden" name="module">
                                </form>
                            @break

                            @case('deactive')
                                <form method="POST" action="update_module_status">
                                    @csrf
                                    <button  class="btn btn-primary">activate</button>
                                    <input value="activate" type="hidden" name="status">
                                    <input value="{{ $module->id }}" type="hidden" name="module">
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
              <h5 class="modal-title" id="exampleModalLabel">Create a New Course</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="modules">
                    @csrf
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Module Name:</label>
                      <input type="text" name="module_name" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Description:</label>
                      <textarea name="module_description" class="form-control" id="message-text"></textarea>
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

