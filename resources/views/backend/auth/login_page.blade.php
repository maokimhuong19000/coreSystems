<title>@yield('title', 'Login')</title>
@extends('backend.layouts.layout')

@section('content')
<div class="form-body">
    <div class="website-logo">
        <a href="{{ route('user.login') }}">
            <div class="logo">
                <img class="logo-size" src="{{ asset('images/logo-light.svg') }}" alt="Logo">
            </div>
        </a>
    </div>
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Get more things done with Login platform.</h3>
                    <p>Access to the most powerful tool in the entire design and web industry.</p>
                    <div class="page-links">
                        <a href="{{ route('user.login') }}" class="active">Login</a>
                        <a href="{{ route('user.register') }}">Register</a>
                    </div>
                    <form method="POST" action="">
                        {{-- {{ route('user.login.submit') }} --}}
                        @csrf
                        <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn">Login</button>
                            <a href="">Forget password?</a>
                            {{-- {{ route('password.request') }} --}}
                        </div>
                    </form>
                    <div class="other-links">
                        <span>Or login with</span>
                        <a href="{{ url('auth/facebook') }}">Facebook</a>
                        <a href="{{ url('auth/google') }}">Google</a>
                        <a href="{{ url('auth/linkedin') }}">LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
