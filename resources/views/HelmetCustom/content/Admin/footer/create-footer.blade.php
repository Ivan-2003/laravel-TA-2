@extends('HelmetCustom.MasterAdmin')

@section('HelmetCustom.content.Admin')
<div class="content-wrapper"> 
<div class="container mt-3">
    <br>
        <h2>Upload Footer</h2>
        <hr>
        <form action="{{ route('footer-store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="about_us">About Us</label>
                <input type="text" class="form-control" id="about_us" name="about_us">
                @error('about_us')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" id="contact" name="contact">
                @error('contact')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="support">Support</label>
                <input type="text" class="form-control" id="support" name="support">
                @error('support')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
            {{-- <a href="{{ route('tampil-kasir') }}" class="btn btn-danger">
                Back To Table
            </a> --}}
        </form>
    </div>
</div>
@endsection