@extends('layouts.admin')
@section('content')
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
      <div class="col-sm-12 col-xl-6">
          <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Profile Images</h6>
              <form method="POST" action="/update/cvimages" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="formFile" class="form-label">Images:</label>
                  <input class="form-control" type="file" name="file" accept="image/*" id="formFile">
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
  </div>
</div>

<div style="padding-bottom: 400px"></div>
@endsection