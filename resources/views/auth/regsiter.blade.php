@extends('layouts.auth')
@section('auth-content')
    <div class="container my-5">
        <div class="col-12 col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Register a new account
                </div>
                <div class="card-body">
                    <form action="{{route('register.store')}}" method="POST" class="register-form">
                        @csrf
                        <div>
                            <label for="name">Name :</label>
                            <input type="text" name="name" class="border @error('name') border-danger @enderror">
                        </div>
                        <div>
                            <label for="name">E-mail :</label>
                            <input type="email" name="email" class="border @error('email') border-danger @enderror">
                        </div>
                        <div>
                            <label for="name">Password :</label>
                            <input type="password" name="password" class="border @error('password') border-danger @enderror">
                        </div>
                        <div>
                            <label for="name">Confirm Password :</label>
                            <input type="password" name="password_confirmation" class="border @error('password_confirm') border-danger @enderror">
                        </div>
                            <div class="d-block text-center my-3">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                            <span class="d-block">already have an account? <a href="{{ route('login') }}">Login here</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
