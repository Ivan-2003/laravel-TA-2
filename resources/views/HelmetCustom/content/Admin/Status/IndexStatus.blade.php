@extends('HelmetCustom.MasterAdmin')
@section('title','Admin | Table Status Produk')

{{-- @section('admin','active') --}}

@section('HelmetCustom.content.Admin')
<div class="content-wrapper">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    @if (Session::has('sukses'))
                    <div class="alert alert-success">
                        <p>{{ Session::get('sukses') }}</p>
                    </div>
                    @endif
                </div>
                <table class="table table-hover" style="text-align: center">
                    <thead class="thead-dark">
                        <h2 style="text-align: center">Tabel Status</h2>
                        <a href="{{ route('status.create') }}" class="btn btn-primary">Tambah Status</a>
                        <br>
                        <br>
                        <tr>
                            <th>ID</th>
                            <th>STATUS PRODUK</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->status_produk }}</td>
                                <td>
                                <a href="{{route('status.edit',$d->id)}}" class="btn btn-warning">EDIT</a>
                                    <form action="{{ route('status.destroy', $d->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger"
                                            onclick="return confirm('ANDA YAKIN INGIN DELETE ? ')">
                                            DELETE
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">DATA KOSONG</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table><br><br>
                <a href="{{url('/adminhelmetcustom/dashboard')}}"><button class="btn btn-primary">Kembali Ke Index Admin</button></a>
            </div>
        </div>
    </div>
</div>
@endsection
