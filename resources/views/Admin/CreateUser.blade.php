@extends('layouts.admin')
@section('content')

<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
      <div class="col-sm-12 col-xl-6">
          <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Create User</h6>
              <form method="post" action="{{ url('/add') }}">
                {{ csrf_field() }}
                 <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name:</label>
                  <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="examplepassword" aria-describedby="emailHelp">
                  @error('name')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address:</label>
                  <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('email')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password:</label>
                  <input type="password" name="password" value="{{ old('password') }}" class="form-control" id="exampleInputPassword1">
                  @error('password')
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