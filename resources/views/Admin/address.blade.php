@extends('layouts.admin')
@section('content')

<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
      <div class="col-sm-12 col-xl-6">
          <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Office Address</h6>
              <form method="POST" action="{{ url('/update/address') }}">
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Address:</label>
                  <input type="text" name="address" value="{{ old('address') }}" class="form-control" id="examplepassword" aria-describedby="emailHelp" required>
                  @error('address')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address:</label>
                  <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  @error('email')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Contact:</label>
                  <input type="tel" name="tel" value="{{ old('tel') }}" class="form-control" id="examplepassword" aria-describedby="emailHelp" required>
                  @error('tel')
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
                  <div class="fw-bold">Address</div>
                  {{ $query->address }}
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Customer Care email</div>
                  {{ $query->email }}
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Contact</div>
                  {{ $query->contact }}
                </div>
              </li>
            </ol>
        </div>
    </div>
  </div>
</div>

<div style="padding-bottom: 400px"></div>
@endsection