@extends('master-customer')
@section('title', 'HELM-LOGIN')

@section('content')
    <!-- content  -->
    <div class="content">
        <div class="container" id="lg">
            <h2>Customer Login</h2>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <form action="{{ route('customer.login') }}" method="POST">
                        <p>Username*</p>

                        <input id="username" type="username" class="form-control @error('email') is-invalid @enderror"
                            name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <br>
                        <p>Password*</p>
                        <input type="password" id="password"
                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password"
                            value="{{ old('password') }}" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <input class="btn btn-dark" type="submit" name="submit" value="LOGIN" /><a href="#"
                                    id="signup"></a>
                            </div>
                            <div class="col-lg-6">
                                <a href="" style="color: black;">Forgot your password?</a>
                            </div>
                        </div>
                        <br>
                        <span>New Customer?</span> <a href="{{ route('registerrr') }}" style="color: black;">Sign up</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- tutup content -->
@endsection
