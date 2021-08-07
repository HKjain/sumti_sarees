@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="clearfix" style="height: 150px;" id="space">
        
</div>
<div class="container clearfix" style="z-index: 5;">
    
    <div class="row justify-content-center">
        <div class="col-md-8 bg-transparent animated fadeInDown" style="animation-duration: 2s;">
            <div class="bg-light p-5" style="border: none;border-radius: 20px;">

                <h1 class="text-center myText" style="font-weight: bold;font-size: 40px;">Signup</h1>
                <hr color="#3949AB">
                <div class="mt-3">
                    
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf

                        <div class="form-group row">
                            
                            <div class="col-md-8 offset-2">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-8 offset-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-8 offset-2">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Contact Number" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-8 offset-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-8 offset-2">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Re-enter Password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-2">
                                <button type="submit" class="btn btn-primary btn-block button6" style="border: none;">
                                    {{ __('Signup') }}
                                </button>
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
