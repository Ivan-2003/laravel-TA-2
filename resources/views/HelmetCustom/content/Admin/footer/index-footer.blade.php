@extends('HelmetCustom.MasterAdmin')
@section('title','Admin | Table Footer')

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
    <a href="{{route('footer-create')}}"><button class="btn btn-primary">Kembali Ke Index Admin</button></a>
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2>Tabel Footer </h2>
                </div>
                <a href="{{route('footer-create')}}"><button class="btn btn-success">Tambah </button></a><br>
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
                          <th>About Us</th>
                          <th>Contact</th>
                          <th>Support</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $dp)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $dp->id }}</td>
                                <td>{{ $dp->about_us }}</td>
                                <td>{{ $dp->contact }}</td>
                                <td>{{ $dp->support }}</td>
                                <td>
                                <a href="#" class="btn btn-success">EDIT</a>
                                    <form action="{{route('footer-delete', $dp->id)}}" method="post" class="d-inline">
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