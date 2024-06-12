@extends('layouts.layout')

@section('content')
    <main id="main">
        <div class="container" data-aos="fade-up">
                <div class="form">
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                      </div>
                    @endif
                    <form action="/auth/login" method="POST">
                        @csrf
                        <h2>Login</h2>
                        <div class="inputcontainer">
                            <input type="text" name="email" id="email" required="required" class="@error('email') is-invalid @enderror text-white" value="{{old('email')}}" placeholder="email" autocomplete="off" autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="inputcontainer">
                            <input type="password" name="password" id="password" required="required" class="@error('password') is-invalid @enderror text-white" placeholder="Password">
                            @error('password')
                                div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="links">
                            <a href="/register">Register</a>
                        </div>
                        <br>
                        <button type="submit" name="buttonLogin" class="btn btn-outline-light btn-sm">Login</button>
                    </form>
                </div>
        </div>
    </main>
@endsection