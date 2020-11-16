@extends('HelmetCustom.MasterCustomer')
@section('title', 'REGISTER-HELM')

@section('auth')
      <!-- content  -->
      <div class="content">
        <div class="container" id="lg">
            <h2>Customer Register</h2>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                <form action="{{ route('customer.register') }}" method="POST">
                @csrf 
                    <label for="username">USERNAME</label>
                    <input type="text" id="username"
                    class="form-control form-content{{ $errors->has('username') ? 'is-invalid' : '' }}"
                    name="username" value="{{ old('username') }}" placeholder="username" required autofocus>
                    @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                    @endif
                    <br>
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="Email Address"
                    class="form-control form-content{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                    value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <br>
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Password"
                    class="form-control form-content{{ $errors->has('password') ? 'is-invalid' : '' }}"
                    name="password" value="{{ old('password') }}" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <br>
                    <label for="password_confirm">Confirm Password</label>
                    <input type="password" id="password-confirm" class="form-control form-content"
                    name="password_confirmation" placeholder="Confirm Password" required>
                    @if ($errors->has('password_confirm'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password_confirm') }}</strong>
                        </span>
                    @endif
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <input id="submit-btn" class="btn btn-dark" type="submit" name="submit" value="REGISTER" /><a href="#"
                            id="signup"></a>
                        </div>
                        <div class="col-lg-6">
                            <p>* Indicates a required field</p>
                        </div>
                    </div>
                </form>
                    <br>
                <a href="{{route('customer.login')}}" id="cslogin">Masuk ke Login</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- tutup content -->

@endsection


