@extends('master')

@section('content')
<div class="container mt-3">
        <h2>Upload Province</h2>
        <hr>
        <form action="{{ route('province.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="province_id">Province</label>
                <input type="text" class="form-control-file" id="province_id" name="province_id">
                @error('province_id')
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