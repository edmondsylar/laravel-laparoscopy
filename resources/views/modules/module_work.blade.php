<div class="col-xl-4 col-md-4">
  <div class="card card-event">
    
    <div class="card-body">
      <h5>{{ $module->module_name }}</h5>

      {{-- now its at this point that we call the external API to start the recording --}}
      <a href="#!" class="label theme-bg2 text-white f-12">Attempt</a>
      
      <div class="mb-3">
        <br>
        <label for="upload_session">Upload Recorded Session</label>
        <input type="file" class="form-control">
      </div>
      {{-- <a href="#!" class="label theme-bg text-white f-12">Deactivate</a> --}}
    </div>
    <video src="{{ $module->video_src }}" controls></video>
    {{-- we  --}}
    </div>
</div>