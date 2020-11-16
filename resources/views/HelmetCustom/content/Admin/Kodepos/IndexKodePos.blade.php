@extends('HelmetCustom.MasterAdmin')
@section('title', 'Admin | Table Kode Pos')


@section('HelmetCustom.content.Admin')
    <div class="content-wrapper">
        <div class="container mt-3">
            <br>
        <a href="{{url('/adminhelmetcustom/dashboard')}}"><button class="btn btn-primary">Kembali Ke Index Admin</button></a>
            <div class="row">
                <div class="col-12">
                    <div class="py-4">
                        <h2 style="text-align: center">Tabel Kode Pos</h2>
                        <a href="{{ route('kodepos.create') }}" class="btn btn-danger">
                            Tambah Kode Pos
                        </a>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode Pos</th>
                                <th>Action</th>
                            </tr>


                        </thead>
                        <tbody>
                            @foreach ($kodepos as $d)
                                <tr>
                                    <td>{{ $d->id }}</td>
                                    <td>{{ $d->kode_pos }}</td>
                                    <td>
                                        {{-- <a
                                            href="{{ route('divisi.edit', $d->id) }}"><button
                                                class="btn btn-primary">EDIT</button></a> --}}
                                        <form action="{{ route('kodepos.destroy', $d->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-warning"
                                                onclick="return confirm('ANDA YAKIN UNTUK MENGHAPUS ?')">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
