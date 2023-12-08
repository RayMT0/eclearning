@extends('layout.master')
@section('title','ECLearning Signup')
@section('content')
<div class="form">
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center m-2">
        {{-- Sign Up Form --}}
        <form class="form-content d-flex flex-column justify-content-start h-100" action="{{route('addAccount')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="text-center">
                <p class="fs-3 fw-bold">Sign Up</p>
                <p class="fs-6 fw-regular">Create an account to access our full courses</p>
            </div>
            {{-- Input name --}}
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="Name" placeholder="Name" value="{{old('name')}}">
                <label for="Name">Full Name</label>
                @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
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
            {{-- Checkbox Terms --}}
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="terms" value="1" {{ old('terms') == '1' ? 'checked' : '' }}>
                <label class="form-check-label @error('terms') is-invalid @enderror" for="flexCheckDefault">
                  I agree with Terms of Use and Privacy Policy
                </label>
                @error('terms')
                    <div class="invalid-feedback">You must agree before signing up</div>
                @enderror
            </div>
            {{-- Sign Up Btn --}}
            <button type="submit" class="btn btn-primary pt-2 pb-2 mb-3 fw-medium">Sign Up</button>
        </form>

        <p class="fs-6 fw-light text-center mb-3">OR</p>
        <button class="btn bg-body-tertiary rounded fw-medium p-3 ps-5 pe-5 mb-3"><i class="bi bi-google me-3"></i>Sign up with Google</button>
        <p class="text-center align-items-center">Already have an account? <a href="/login" class="text-primary">Login<i class="bi bi-arrow-right ms-1 fs-6"></i></a></p>
    </div>
</div>
@endsection