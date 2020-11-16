@extends('master-customer')
@section('title', 'REGISTER-HELM')

@section('content')
      <!-- content  -->
      <div class="content">
        <div class="container" id="lg">
            <h2>Customer Register</h2>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <p>Username*</p>
                    <input type="text" class="form-control" placeholder="Username">
                    <br>
                    <p>Email Address*</p>
                    <input type="text" class="form-control" placeholder="Email Address">
                    <br>
                    <p>Password*</p>
                    <input type="text" class="form-control" placeholder="Password">
                    <br>
                    <p>Confirm Password*</p>
                    <input type="text" class="form-control" placeholder="Confirm Password">
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <button class="btn btn-dark">Sign Up</button>
                        </div>
                        <div class="col-lg-6">
                            <p>* Indicates a required field</p>
                        </div>
                    </div>
                    <br>
                <span>Returning Customer?</span> <a href="{{route('login')}}" style="color: black;">translation missing: en.customer.register.sign_in</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- tutup content -->

@endsection


