@extends('backend.layouts.main') 
<title>@yield('title', 'Admin Login')</title>
@section('content')
    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <div class="wrap-login-page">
                <div class="flex-grow flex flex-column justify-center gap30">
                    <a href="{{route('user.login')}}" id="site-logo-inner">                     
                    </a>
                    <div class="login-box">
                        <div>
                            <h3>Login to account</h3>
                            <div class="body-text">Enter your email & password to login</div>
                        </div>
                        <form class="form-login flex flex-column gap24">
                            <fieldset class="email">
                                <div class="body-title mb-10">Email address <span class="tf-color-1">*</span></div>
                                <input class="flex-grow" type="email" placeholder="Enter your email address" name="email" tabindex="0" value="" aria-required="true" required="">
                            </fieldset>
                            <fieldset class="password">
                                <div class="body-title mb-10">Password <span class="tf-color-1">*</span></div>
                                <input class="password-input" type="password" placeholder="Enter your password" name="password" tabindex="0" value="" aria-required="true" required="">
                                <span class="show-pass">
                                    <i class="icon-eye view"></i>
                                    <i class="icon-eye-off hide"></i>
                                </span>
                            </fieldset>
                            <div class="flex justify-between items-center">
                                <div class="flex gap10">
                                    <input class="" type="checkbox" id="signed">
                                    <label class="body-text" for="signed">Keep me signed in</label>
                                </div>
                                <a href="#" class="body-text tf-color">Forgot password?</a>
                            </div>
                            <a href="{{route('user.login')}}" class="tf-button w-full">Login</a>
                        </form>
                        <div>
                            <div class="text-tiny mb-16 text-center">Or continue with social account</div>
                            <div class="flex gap16 mobile-wrap">
                                <a href="{{route('user.login')}}" class="tf-button style-2 w-full">
                                    <!-- Google Sign-in SVG -->
                                    <span class="tf-color-3">Sign in with Google</span>
                                </a>
                                <a href="{{route('user.login')}}" class="tf-button style-2 w-full">
                                    <!-- Facebook Sign-in SVG -->
                                    <span class="tf-color-3">Sign in with Facebook</span>
                                </a>
                            </div>
                        </div>
                        <div class="body-text text-center">
                            You don't have an account yet?
                            <a href="{{route('user.signup')}}" class="body-text tf-color">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="text-tiny">Copyright © 2024 Remos, All rights reserved.</div>
            </div>
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->
@endsection
