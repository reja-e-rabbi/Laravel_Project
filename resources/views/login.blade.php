@extends('layouts.log')

    @section('content')
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <form action=" {{ url('/admin_log') }} " method="POST" class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        {{ csrf_field() }}
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="{{ url('/') }}" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>PROMAN</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" value="{{ old('email') }}" placeholder="name@example.com" minlength="4" maxlength="64" required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        @error('email')
                            <p class="text-center mb-0 form-text">{{ $message }}</p>
                        @enderror
                        <div class="form-floating mb-4">
                            <input type="password" name="password" class="form-control" id="floatingPassword" value="{{ old('password') }}" placeholder="Password" maxlength="64" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        @error('password')
                            <p class="text-center mb-0 form-text">{{ $message }}</p>
                        @enderror
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href=" {{ url('/forgot') }} ">Forgot Password</a>
                        </div>
                        <input type="submit" value="Sign In" class="btn btn-primary py-3 w-100 mb-4"></input>
                        @error('errorAll')
                            <p class="text-center mb-0 form-text">{{ $message }}</p>
                        @enderror
                    </form>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
    @endsection