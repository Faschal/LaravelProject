@extends('layouts.master')

@section('title', 'Upload File')    
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header">
            File Upload
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('upload.uploadfile') }}" enctype="multipart/form-data">
              @csrf
              @if ($message = Session::get('status'))
                  <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                  </div>
              @endif
              <div class="form-group">
                <label for="file">Choose File</label>
                <input type="file" class="form-control" name="file" id="file"/>
                @error('file')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Upload</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
