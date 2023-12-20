@extends('layouts.admin')
@section('content')

<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
      <div class="col-sm-12 col-xl-6">
          <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Basic</h6>
              <form method="POST" action="{{ url('/update/sitename') }}">
                {{ csrf_field() }}
                 <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Site Name:</label>
                  <input type="text" name="site_name" value="{{ old('site_name') }}" class="form-control" id="examplepassword" aria-describedby="emailHelp" required>
                  @error('site_name')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                  <input type="submit" value="update" class="btn btn-primary" value="Create">
                  <div class="mb-3">
                    @error('errorAll')
                    <p id="emailHelp" class="form-text">{{ $message }}</p>
                    @enderror
                  </div>
              </form>
              <form method="POST" action="{{ url('/update/videocv') }}">
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">VideoCV link:</label>
                  <input type="url" name="videoCV" value="{{ old('videoCV') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  @error('videoCV')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                  <input type="submit" value="update" class="btn btn-primary" value="Create">
                  <div class="mb-3">
                    @error('errorAll2')
                    <p id="emailHelp" class="form-text">{{ $message }}</p>
                    @enderror
                  </div>
              </form>
              <form method="POST" action="{{ url('/update/project') }}">
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Total Project Complete:</label>
                  <input type="number" name="complete_project" value="{{ old('complete_project') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  @error('complete_project')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Talk About Project Complete Jurney:</label>
                  <textarea class="form-control" name="complete_project_jurney" value="{{ old('complete_project_jurney') }}" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;"></textarea>
                  @error('complete_project_jurney')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                  <input type="submit" value="submit" class="btn btn-primary" value="Create">
                  <div class="mb-3">
                    @error('errorAll3')
                    <p id="emailHelp" class="form-text">{{ $message }}</p>
                    @enderror
                  </div>
              </form>
              <form method="POST" action="{{ url('/update/clint') }}">
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Happy Clint:</label>
                  <input type="number" name="happy_clint" value="{{ old('happy_clint') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  @error('happy_clint')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Talk About Your Customer Expereance:</label>
                  <textarea class="form-control" name="happy_clint_jurney" value="{{ old('happy_clint_jurney') }}" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;"></textarea>
                  @error('happy_clint_jurney')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                  <input type="submit" value="submit" class="btn btn-primary" value="Create">
                  <div class="mb-3">
                    @error('errorAll4')
                    <p id="emailHelp" class="form-text">{{ $message }}</p>
                    @enderror
                  </div>
              </form>
              <form method="POST" action="{{ url('/update/comments') }}">
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleVideoLink" class="form-label">About You:</label>
                  <textarea class="form-control" name="about" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;"></textarea>
                  @error('about')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                  <input type="submit" value="submit" class="btn btn-primary" value="Create">
                  <div class="mb-3">
                    @error('errorAll6')
                    <p id="emailHelp" class="form-text">{{ $message }}</p>
                    @enderror
                  </div>
              </form>
          </div>
      </div>
      <div class="col-sm-12 col-xl-6">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Website</h6>
            <ol class="list-group list-group-numbered">
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Website Name</div>
                  {{ $query->name }}
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Video CV</div>
                  {{ $query->link }}
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Totla Project Complete</div>
                  {{ $query->total_project }}
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Talk About Project Complete Jurney:</div>
                  {{ $query->total_project_sammary }}
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Happy Clint</div>
                  {{ $query->happy_clint }}
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Talk About Your Customer Expereance:</div>
                  {{ $query->happy_clint_sammary }}
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">About Your Profesion</div>
                  {{ $query->comments }}
                </div>
              </li>
            </ol>
        </div>
    </div>
  </div>
</div>

<div style="padding-bottom: 400px"></div>
@endsection