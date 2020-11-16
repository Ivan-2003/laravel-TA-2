@extends('HelmetCustom.MasterAdmin')

@section('HelmetCustom.content.Admin')
<div class="container mt-3">
        <h2>Upload Kode Pos</h2>
        <hr>
        <form action="{{ route('kodepos.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="kode_pos">Kode Pos</label>
                <input type="text" class="form-control-file" id="kode_pos" name="kode_pos">
                @error('kode_pos')
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