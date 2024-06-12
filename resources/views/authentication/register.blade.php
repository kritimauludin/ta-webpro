@extends('layouts.layout')

@section('content')
    <main id="main">
        <div class="container" data-aos="fade-up">
            <div class="form">
                <form action="/auth/register" method="POST">
                    @csrf
                    <h2>Register</h2>
                    <div class="inputcontainer">
                        <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror text-white" placeholder="name" value="{{old('name')}}" required="required">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="inputcontainer">
                        <input type="text" name="email" id="email" class="@error('email') is-invalid @enderror text-white" placeholder="email" value="{{old('email')}}" required="required">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="inputcontainer">
                        <input type="password" name="password" id="password" class="@error('email') is-invalid @enderror text-white" placeholder="password" required="required">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" name="saveAccount" class="btn btn-outline-light btn-sm">Submit</button>
                </form>
            </div>
        </div>
    </main>
@endsection