@extends('layout/login')
@section('konten')
    <div class="container" id="container">
        @if (Session::has('status'))
            <div class="alert" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
        <div class="col-lg-5 col-md-7">
        </div>
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button>Sign Up</button>
            </form>
        </div>
        <div class="formlogin form-container sign-in-container">
            <form method="POST" action="/shortlink">
                @csrf
                <h1 class="login">Login</h1>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required />
                <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                    required />
                <button>Login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                </div>
                <div class="overlay-panel overlay-right">
                    <img src="{{ asset('assets/img/logobem23.png') }}" class="logobem" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
