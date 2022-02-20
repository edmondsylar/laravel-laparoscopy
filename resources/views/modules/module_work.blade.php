<div class="col-xl-4 col-md-4">
  <div class="card card-event">
    
    <div class="card-body">
      <h5>{{ $module->module_name }}</h5>

      {{-- now its at this point that we call the external API to start the recording --}}
      <form action="{{ url('/api/analytics/')}}" method="POST">
        @csrf
        {{-- we defining the variables to the send the attempt's table to update --}}
        <input type="hidden" name="session_name" value="{{ $session->session_name }}">
        <input type="hidden" name="session" value="{{ $session->id }}">
        <input type="hidden" name="module" value="{{ $module->id }}">
        <button type="submit" style="border: none" class="label theme-bg2 text-white f-12">Attempt</button>
      </form>
      {{-- <a href="{{ url('/api/analytics/'.$session->session_name) }}" class="label theme-bg2 text-white f-12">Attempt</a> --}}
      
      <div class="mb-3">
        <br>
        <label for="upload_session">Upload Recorded Session</label>
        <input type="file" class="form-control">
      </div>
      {{-- <a href="#!" class="label theme-bg text-white f-12">Deactivate</a> --}}
    </div>
    @php
    // get the Storage facade to be used here.
    use Illuminate\Support\Facades\Storage; 

        if(!empty($session->attempt_location)){
          $source = Storage::url('attemps/'.trim($session->attempt_location, '"'));
        }else{
          $source = $module->video_src;
        }

        echo $source;
    @endphp
    <video src="{{ $source }}" controls></video>
    {{-- we  --}}
    </div>
</div>