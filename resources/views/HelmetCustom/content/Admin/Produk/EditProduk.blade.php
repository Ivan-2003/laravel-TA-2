@extends('HelmetCustom.MasterAdmin')
@section('title','Admin | Edit Table Produk')

{{-- @section('admin','active') --}}

@section('HelmetCustom.content.Admin')
<body>   
    <style>
        h2{
            text-align: center;
        }
    </style>
<div class="content-wrapper">
    <div class="container mt-3">
        <h2>Edit Data Produk Helmet Custom</h2>
        <hr>
        <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ $produk->nama_produk }}">
                @error('nama_produk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="harga_produk">Harga Produk</label>
                <input type="text" class="form-control" id="harga_produk" name="harga_produk" value="{{ $produk->harga_produk }}">
                @error('harga_produk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="stok_produk">Stok Produk</label>
                <input type="text" class="form-control" id="stok_produk" name="stok_produk" value="{{ $produk->stok_produk }}">
                @error('stok_produk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="deskripsi_produk">Deskripsi Produk</label>
                <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" value="{{ $produk->deskripsi_produk }}" cols="30" rows="10"></textarea>
                @error('deskripsi_produk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="warna_produk_id">Status Produk</label>
                <select name="warna_produk_id" id="warna_produk_id" class="custom-select">
                    @foreach ($data_warna as $dw)
                        <option value="{{$dw->id}}" 
                            {{ old('warna_produk_id') ?? $produk->warna_produk_id == $dw->id ? 'selected' : ''}}>
                            {{$dw->warna}}
                        </option>
                    @endforeach
                </select>
                @error('warna_produk_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="status_produk_id">Status Produk</label>
                <select name="status_produk_id" id="status_produk_id" class="custom-select">
                    @foreach ($data_status as $ds)
                        <option value="{{$ds->id}}" 
                            {{ old('status_produk_id') ?? $produk->status_produk_id == $ds->id ? 'selected' : ''}}>
                            {{$ds->status_produk}}
                        </option>
                    @endforeach
                </select>
                @error('status_produk_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Gambar yang Akan Diubah</label><br>
                <img src="{{Storage::url('public/gallerys/').$produk->foto_produk}}" alt="foto_produk" style="width: 150px"><br>
                <label for="foto_produk">Pilihan Gambar</label><br>
                <input type="file" id="foto_produk" name="foto_produk" value="{{ $produk->foto_produk }}">
                @error('foto_produk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK DATA MENGUBAH ?')">Upload</button>
        </form>
        <a href="{{route('produk.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>
</div>
@endsection