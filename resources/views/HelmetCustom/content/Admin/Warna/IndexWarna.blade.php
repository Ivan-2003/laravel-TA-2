@extends('HelmetCustom.MasterAdmin')
@section('title','Admin | Table Warna')

{{-- @section('admin','active') --}}

@section('HelmetCustom.content.Admin')
<body>
    <style>
        h2,table{
            text-align: center;
        }
        td{
            align-content: 
        }
    </style>
<div class="content-wrapper">    
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2>Tabel Data Pilihan Warna Produk Helmet</h2>
                </div>
                <a href="{{route('warna.create')}}"><button class="btn btn-success">Tambah Warna</button></a>
                @if (session()->has('validasi'))
                        <div class="alert alert-success">
                            {{ session()->get('validasi') }}
                        </div>
                @endif
                @if (Session::has('sukses'))
                        <div class="alert alert-success">
                            <p>{{ Session::get('sukses') }}</p>
                        </div>
                @endif
                <table class="table table-striped" id="table_id">
                    <thead class="thead-dark">
                        <tr>
                          <th>No.</th>
                          <th>ID</th>
                          <th>Pilihan Warna</th>
                          <th>Action</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        
                        @forelse ($warna_produk as $wp)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $wp->id }}</td>
                                <td>{{ $wp->warna }}</td>
                                <td>
                                    <a href="{{route('warna.edit', $wp->id)}}" class="btn btn-success">EDIT</a>
                                    <form action="{{route('warna.destroy', $wp->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="return confirm('ADA YAKIN UNTUK MENGHAPUS?')">HAPUS</button>
                                    </form> 
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                        </tbody>
                  </table>
                  <a href="{{url('/adminhelmetcustom/dashboard')}}"><button class="btn btn-primary">Kembali Ke Index Admin</button></a>
            </div>
        </div>
    </div>
</div>
@endsection