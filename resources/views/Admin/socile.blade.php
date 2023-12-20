@extends('layouts.admin')
@section('content')

<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
      <div class="col-sm-12 col-xl-6">
          <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Socile Link</h6>
              <form method="POST" action="{{ url('/update/socile') }}">
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">FaceBook:</label>
                  <input type="url" name="fb" value="{{ old('fb') }}" class="form-control" id="examplepassword" aria-describedby="emailHelp" required>
                  @error('fb')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Twitter:</label>
                  <input type="url" name="twitter" value="{{ old('twitter') }}" class="form-control" id="examplepassword" aria-describedby="emailHelp" required>
                  @error('twitter')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Youtube:</label>
                  <input type="url" name="youtube" value="{{ old('youtube') }}" class="form-control" id="examplepassword" aria-describedby="emailHelp" required>
                  @error('youtube')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Linkedin:</label>
                  <input type="url" name="linkedin" value="{{ old('linkedin') }}" class="form-control" id="examplepassword" aria-describedby="emailHelp" required>
                  @error('linkedin')
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
            <h6 class="mb-4">Office</h6>
            <ol class="list-group list-group-numbered">
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">FaceBook</div>
                  {{ $query->facebook }}
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Twitter</div>
                  {{ $query->twitter }}
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Linkedin</div>
                  {{ $query->linkedin }}
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Youtube</div>
                  {{ $query->youtube }}
                </div>
              </li>
            </ol>
        </div>
    </div>
  </div>
</div>

<div style="padding-bottom: 300px"></div>
@endsection