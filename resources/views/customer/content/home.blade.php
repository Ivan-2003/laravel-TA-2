@extends('layouts.cslogin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Customer Header
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Selamat Datang Customer {{ auth()->user()->username }}
                        <br>
                        <br>
                        <a class="btn btn-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
