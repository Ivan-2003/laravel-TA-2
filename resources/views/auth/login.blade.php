@extends('layouts.app')

@section('content')

    <body id="bg1">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" id="card"><br>
                        <span id="card-title">
                            <h4 style="text-align: center">FORM LOGIN</h4>
                            <p class="underline-title"></p>
                        </span>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Email ') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-content @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <p class="form-border"></p>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-content @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <p class="form-border"></p>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" id="forgot-pass" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    @if (Route::has('register'))
                                        <a class="btn btn-link" id="forgot-pass"
                                            href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <input id="submit-btn" type="submit" name="submit" value="LOGIN" /><a href="#"
                                            id="signup"></a>
                                    </div>
                                </div>
                            </form>
                            <a href="{{route('customer.login')}}">coba</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
