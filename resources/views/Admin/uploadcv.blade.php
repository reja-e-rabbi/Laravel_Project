@extends('layouts.admin')
@section('content')
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
      <div class="col-sm-12 col-xl-6">
          <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Basic</h6>
              <form method="POST" action="{{ url('/update/uploadcv') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="formFile" class="form-label">Default file input example</label>
                  <input class="form-control" type="file" name="file">
                  @error('file')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                  <input type="submit" value="submit" class="btn btn-primary" value="Create">
                  <div class="mb-3">
                    @error('errorAll')
                    <p id="emailHelp" class="form-text">{{ $message }}</p>
                    @enderror
                  </div>
              </form>
          </div>
      </div>
      <div class="col-sm-12 col-xl-6">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">CV Upload Information</h6>
            <ol class="list-group list-group-numbered">
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">File size:</div>
                  Maximum 500 KB
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">File Type</div>
                  PDF
                </div>
                <div class="ms-2 me-auto">
                  <div class="fw-bold">File Name</div>
                  {{ $query->name }}
                </div>
              </li>
              <div class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <a href="{{ url($query->upload_link.$query->name) }}" target="_blank" class="btn btn-primary py-3 px-4 me-5">Download CV</a>
                </div>
              </div>
              
            </ol>
        </div>
    </div>
  </div>
</div>



<div style="padding-bottom: 400px"></div>
@endsection