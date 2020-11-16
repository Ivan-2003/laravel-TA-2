@extends('master')

@section('content')
        <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2>Tabel CIty</h2>
                    <a href="{{ route('city.create') }}" class="btn btn-danger">
                        Tambah City
                    </a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>City</th>
                          <th>Action</th>
                        </tr>
                        
                        
                    </thead>
                    <tbody>
                        @foreach ($city as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->city_id }}</td>
                                <td>
                                  {{-- <a href="{{ route('divisi.edit', $d->id) }}"><button class="btn btn-primary">EDIT</button></a> --}}
                                  <form action="{{ route('city.destroy', $d->id) }}" method="post">
                                      @csrf
                                      @method('delete')
                                      <button class="btn btn-warning" onclick="return confirm('ANDA YAKIN UNTUK MENGHAPUS ?')">HAPUS</button>
                                  </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="#"><button class="btn btn-primary">Kembali Ke Index Admin</button></a>
            </div>
        </div>
    </div>
@endsection