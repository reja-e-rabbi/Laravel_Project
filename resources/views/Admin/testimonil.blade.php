@extends('layouts.admin')
@section('content')
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
      <div class="col-sm-12 col-xl-6">
          <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Testimonil</h6>
              <form method="#" action="#">
                {{ csrf_field() }}
                 <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"> Name:</label>
                  <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="examplepassword" aria-describedby="emailHelp">
                  @error('name')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Client Images:</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Profession:</label>
                  <input type="text" name="profession" value="{{ old('profession') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('profession')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Country:</label>
                  <input type="text" name="country" value="{{ old('country') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('country')
                  <p id="emailHelp" class="form-text">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Dilog:</label>
                  <textarea name="dilog" class="form-control" aria-label="With textarea"></textarea>
                  @error('dilog')
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
                      <th scope="col">Date</th>
                      <th scope="col">Subject</th>
                      <th scope="col">Institute</th>
                      <th scope="col">Session start</th>
                      <th scope="col">Session Complete</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>01 Jan 2045</td>
                      <td>Bsc in ETE</td>
                      <td>Daffodil University</td>
                      <td>01 jan 2012</td>
                      <td>16 jan 2012</td>
                      <td>complete</td>
                      <td>
                        <a class="btn btn-sm btn-primary" href="">Edith</a>
                        <a class="btn btn-sm btn-primary" href="">Delete</a>
                      </td>
                  </tr>
                  <tr>
                      <td>01 Jan 2045</td>
                      <td>Bsc in ETE</td>
                      <td>Daffodil University</td>
                      <td>01 jan 2012</td>
                      <td>16 jan 2012</td>
                      <td>complete</td>
                      <td>
                        <a class="btn btn-sm btn-primary" href="">Edith</a>
                        <a class="btn btn-sm btn-primary" href="">Delete</a>
                      </td>
                  </tr>
                  <tr>
                    <td>01 Jan 2045</td>
                    <td>Bsc in ETE</td>
                    <td>Daffodil University</td>
                    <td>01 jan 2012</td>
                    <td>16 jan 2012</td>
                    <td>complete</td>
                    <td>
                      <a class="btn btn-sm btn-primary" href="">Edith</a>
                      <a class="btn btn-sm btn-primary" href="">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <td>01 Jan 2045</td>
                    <td>Bsc in ETE</td>
                    <td>Daffodil University</td>
                    <td>01 jan 2012</td>
                    <td>16 jan 2012</td>
                    <td>complete</td>
                    <td>
                      <a class="btn btn-sm btn-primary" href="">Edith</a>
                      <a class="btn btn-sm btn-primary" href="">Delete</a>
                    </td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>

<div style="padding-bottom: 400px"></div>
@endsection