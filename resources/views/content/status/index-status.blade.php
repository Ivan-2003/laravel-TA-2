<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>STATUS</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <a href="{{ route('status.create') }}" class="btn btn-primary">
                        Tambah Status
                    </a>
                    <br>
                    <br>
                    @if (Session::has('sukses'))
                        <div class="alert alert-success">
                            <p>{{ Session::get('sukses') }}</p>
                        </div>
                    @endif
                </div>
                <table class="table table-hover" style="text-align: center">
                    <thead>
                        <h2 style="text-align: center">Tabel Status</h2>
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
                </table>
            </div>
        </div>
    </div>
</body>

</html>
