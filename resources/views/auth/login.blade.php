@extends('layouts.auth')
@section('auth-content')
    <div class="container my-5">
        <div class="col-12 col-md-6 offset-md-3">
            @if (session('status'))
                <div class="alert alert-danger">
                    {{session('status')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                   Login to your account
                </div>
                <div class="card-body">
                    <form action="{{ route('login.attempt') }}" method="POST" class="register-form">
                        @csrf
                        <div>
                            <label for="name">E-mail :</label>
                            <input type="email" name="email" class="border @error('email') border-danger @enderror">
                        </div>
                        <div>
                            <label for="name">Password :</label>
                            <input type="password" name="password" class="border @error('password') border-danger @enderror">
                        </div>
                        <div class="d-block text-center my-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection