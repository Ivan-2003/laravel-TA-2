@extends('master')

@section('content')
<div class="container mt-3">
        <h2>Upload City</h2>
        <hr>
        <form action="{{ route('city.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="city_id">City</label>
                <input type="text" class="form-control-file" id="city_id" name="city_id">
                @error('city_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
            {{-- <a href="{{ route('tampil-kasir') }}" class="btn btn-danger">
                Back To Table
            </a> --}}
        </form>
    </div>
@endsection