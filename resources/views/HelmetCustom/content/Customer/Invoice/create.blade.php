@extends('master')

@section('content')
<div class="container mt-3">
    <h2>Invoice Upload</h2>
    <hr>
    <form action="{{ route('invoice.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">    
            <label for="emial_customer">Email Customer</label>
            <input type="text" class="form-control-file" id="emial_customer" name="emial_customer">
            @error('emial_customer')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="province_id">Province</label>
            <select name="province_id" id="province_id">
                @foreach ($province as $div)
                <option value="{{$div->id}}" {{ old('div->id')=="div->province_id" ? 'selected': ''}}>
                    {{$div->province_id}}
                </option>                    
                @endforeach
            </select>
            @error('province_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="city_id">City</label>
            <select name="city_id" id="city_id">
                @foreach ($city as $div)
                <option value="{{$div->id}}" {{ old('div->id')=="div->city_id" ? 'selected': ''}}>
                    {{$div->city_id}}
                </option>                    
                @endforeach
            </select>
            @error('city_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="kode_pos">Kode Pos</label>
            <select name="kode_pos" id="kode_pos">
                @foreach ($kodepos as $div)
                <option value="{{$div->id}}" {{ old('div->id')=="div->kode_pos" ? 'selected': ''}}>
                    {{$div->kode_pos}}
                </option>                    
                @endforeach
            </select>
            @error('kode_pos')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="order_id">Order</label>
            <input type="text" class="form-control-file" id="order_id" name="order_id">
            @error('order_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="total_harga">Total Harga</label>
            <input type="text" class="form-control-file" id="total_harga" name="total_harga">
            @error('total_harga')
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