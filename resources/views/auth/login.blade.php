@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3 mb-4 bg-transparent animated fadeInDown" style="animation-duration: 2s;">
            <div class="bg-light p-5"  style="border: none;border-radius: 20px;">
                
                <h1 class="text-center myText" style="font-weight: bold;font-size: 40px;">Login</h1>
                <hr color="#3949AB">

                <div class="mt-3">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-8 offset-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email-address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-8 offset-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-2">
                                <button type="submit" class="btn btn-primary btn-block button6" style="border: none;">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link myText" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

                    <div class="form-group row mb-0 mt-4">
                            <hr class="col-md-2" color="#3949AB">
                            <div class="col-md-2">
                                <h2 class="text-center myText">OR</h2>
                            </div>
                            <hr class="col-md-2" color="#3949AB">
                        </div>                        

                        <div class="form-group row mb-0 mt-3">
                            <div class="col-md-4 offset-2">
                                <button class="btn btn-danger btn-block button6" style="border: none;">
                                    {{ __('Google+') }}
                                </button>
                            </div>

                            <div class="col-md-4">
                                <button  class="btn btn-secondary btn-block button6" style="border: none;">
                                    {{ __('Facebook') }}
                                </button>
                            </div>  
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
