@extends('layouts.app')
{{-- section --}}
@section('content')
    <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#module_add">
        Add Module
    </button>

    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card card-event">
                <div class="card-block">
                    <div class="row align-items-center justify-content-center">
                        <div class="col">
                            <h2 class="m-0">Module Name.</h2>
                        </div>
                        <div class="col-auto">
                            {{-- <label class="label theme-bg2 text-white f-14 f-w-400 float-right">34%</label> --}}
                        </div>
                    </div>
                    <h4 class="mt-3 f-w-100">Description</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa ex enim perspiciatis facilis amet quis id repellendus? Corporis beatae non deleniti accusantium voluptatem ea laboriosam consequatur tenetur et! Facilis, dolores?
                    </p>

                </div>
            </div>
        </div>
    </div>    

      <div class="modal fade" id="module_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Module</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Module Name:</label>
                      <input type="text" name="module_name" class="form-control" id="recipient-name">
                    </div>

                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Description:</label>
                      <textarea name="module_description" class="form-control" id="message-text"></textarea>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
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