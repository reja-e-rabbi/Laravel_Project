@extends('layouts.admin')
@section('content')
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
      <div class="col-sm-12 col-xl-6">
          <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Education</h6>
              <form method="POST" action="{{ url('insert/education') }}">
                {{ csrf_field() }}
                 <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"> Subject:</label>
                  <input type="text" name="subject" value="{{ old('subject') }}" class="form-control" id="examplepassword" aria-describedby="emailHelp" required>
                  @error('subject')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Session Start:</label>
                  <input type="date" name="session_start" value="{{ old('session_start') }}" class="form-control" aria-describedby="emailHelp" required>
                  @error('session_start')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Session Complete:</label>
                  <input type="date" name="session_complete" value="{{ old('session_complete') }}" class="form-control" aria-describedby="emailHelp" required>
                  @error('session_complete')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Institute:</label>
                  <input type="text" name="institute" value="{{ old('institute') }}" class="form-control" aria-describedby="emailHelp" required>
                  @error('institute')
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
<div class="container-fluid pt-4 px-4">
  <div class="bg-light text-center rounded p-4">
      <div class="d-flex align-items-center justify-content-between mb-4">
          <h6 class="mb-0">All Subject You Complete</h6>
          <a>Show All</a>
      </div>
      <div class="table-responsive">
          <table class="table text-start align-middle table-bordered table-hover mb-0">
              <thead>
                  <tr class="text-dark">
                      <th scope="col">session_start</th>
                      <th scope="col">session_complete</th>
                      <th scope="col">Subject</th>
                      <th scope="col">Institute</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($query as $item)
                  <tr>
                    <td>{{ $item->session_start }}</td>
                    <td>{{ $item->session_complete }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->institute }}</td>
                    <td>
                      <button class="btn btn-sm btn-primary" id="click" data-id="{{ $item->sl }}" data-type="edu">Delete</button>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
</div>

<div style="padding-bottom: 400px"></div>
@endsection