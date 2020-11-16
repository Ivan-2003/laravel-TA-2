@extends('HelmetCustom.MasterAdmin')
@section('title','Admin | Table Carousel')

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
        <br>
    <a href="{{url('/AdminHelmetCustom/DashboardAdmin')}}"><button class="btn btn-primary">Kembali Ke Index Admin</button></a>
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2>Tabel Carousel </h2>
                </div>
                <a href="{{route('carousel.create')}}"><button class="btn btn-success">Tambah Carousel</button></a><br>
                @if (session()->has('validasi'))
                        <div class="alert alert-primary">
                            {{ session()->get('validasi') }}
                        </div>
                @endif
                @if (Session::has('sukses'))
                        <div class="alert alert-primary">
                            <p>{{ Session::get('sukses') }}</p>
                        </div>
                @endif
                <br>
                <table class="table table-striped" id="table_id">
                    <thead class="thead-dark">
                        <tr>
                          <th>No.</th>
                          <th>ID</th>
                          <th>foto Carousel</th>
                          <th>Caption satu</th>
                          <th>Caption dua</th>
                          <th>Action</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @forelse ($data as $dp)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $dp->id }}</td>
                                <td><img src="{{Storage::url('public/gallerys/').$dp->foto_carousel}}" alt="foto_carousel" style="width: 150px"></td>
                                <td>{{ $dp->caption_satu }}</td>
                                <td>{{ $dp->caption_dua }}</td>
                                <td>
                                    {{-- <a href="{{route('produk.edit', $dp->id)}}" class="btn btn-success">EDIT</a> --}}
                                    <form action="{{route('carousel.destroy', $dp->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="return confirm('ADA YAKIN UNTUK MENGHAPUS?')">HAPUS</button>
                                    </form> 
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                        </tbody>
                  </table><br><br>
                  
            </div>
        </div>
    </div>
</div>
@endsection