@extends('layout.master')
@section('title','ECLearning Login')
@section('content')
<div class="form">
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
        {{-- Sign Up Form --}}
        <form class="form-content d-flex flex-column justify-content-start h-100" action="{{route('loginAccount')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="text-center">
                <p class="fs-3 fw-bold">Login</p>
                <p class="fs-6 fw-regular">Welcome back! Enter your credentials to log back in!</p>
            </div>
            {{-- Input email --}}
            <div class="form-floating mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="Email" placeholder="name@example.com" value="{{old('email')}}">
                <label for="Email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            {{-- Input password --}}
            <div class="form-floating mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="Password" placeholder="Password" value="{{old('password')}}">
                <label for="Password">Password</label>
                @error('password')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            {{-- Sign Up Btn --}}
            <button type="submit" class="btn btn-primary pt-2 pb-2 mb-3 fw-medium">Login</button>
        </form>

        <p class="fs-6 fw-light text-center mb-3">OR</p>
        <button class="btn bg-body-tertiary rounded fw-medium p-3 ps-5 pe-5 mb-3"><i class="bi bi-google me-3"></i>Sign in with Google</button>
        <a href="/guest" class="text-primary">Guest Mode<i class="bi bi-arrow-right ms-1 fs-6"></i></a>
        <p class="text-center align-items-center">Don't have an account? <a href="/sign-up" class="text-primary">Sign up<i class="bi bi-arrow-right ms-1 fs-6"></i></a></p>
    </div>
</div>
@endsection