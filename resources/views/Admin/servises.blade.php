@extends('layouts.admin')
@section('content')
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
      <div class="col-sm-12 col-xl-6">
          <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Add Servises</h6>
              <form method="POST" action=" {{ url('/insert/servises') }} ">
                {{ csrf_field() }}
                 <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"> Servises Name:</label>
                  <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="examplepassword" aria-describedby="emailHelp">
                  @error('name')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Start Form:</label>
                  <input type="number" name="price" value="{{ old('price') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('price')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">What are you provide this servises:</label>
                  <textarea name="institute" class="form-control" aria-label="With textarea"></textarea>
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
          <a href="">Show All</a>
      </div>
      <div class="table-responsive">
          <table class="table text-start align-middle table-bordered table-hover mb-0">
              <thead>
                  <tr class="text-dark">
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">About</th>
                    <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  
                @foreach ($query as $item)
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->price }}</td>
                  <td>{{ $item->comments }}</td>
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