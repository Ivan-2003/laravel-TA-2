<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>EDIT STATUS</title>
</head>

<body>
    <div class="container mt-3">
        <h5>Edit Data Status Produk</h5>
        <hr>
        <br>
        <form action="{{ route('status.update', $status->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="status_produk"><strong>MASUKAN STATUS PRODUK</strong></label>
                <input type="text" name="status_produk" class="form-control" id="status_produk"
                    value="{{ $status->status_produk }}">
            </div>
            <button class="btn btn-primary">SIMPAN</button>
            <a href="{{ route('status.index') }}" class="btn btn-primary">BACK</a>
        </form>
    </div>
</body>

</html>
