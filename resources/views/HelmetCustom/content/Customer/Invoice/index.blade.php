@extends('master')

@section('content')
        <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h2>Tabel Invoice</h2>
                    <a href="{{ route('invoice.create') }}" class="btn btn-danger">
                        Tambah Invoice
                    </a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Email Customer</th>
                          <th>Province</th>
                          <th>City</th>
                          <th>Kode Pos</th>
                          <th>Order</th>
                          <th>Total Harga</th>
                          <th>action</th>
                        </tr>
                        
                        
                    </thead>
                    <tbody>
                        @foreach ($invoice as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->email_customer }}</td>
                                <td>{{ $d->province_id->province_id }}</td>
                                <td>{{ $d->city_id->city_id }}</td>
                                <td>{{ $d->kode_pos->kode_pos }}</td>
                                <td>{{ $d->order_id }}</td>
                                <td>{{ $d->total_harga }}</td>
                                <td>
                                  <a href="{{ route('invoice.edit', $d->id) }}"><button class="btn btn-primary">EDIT</button></a>
                                  <form action="{{ route('invoice.destroy', $d->id) }}" method="post">
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