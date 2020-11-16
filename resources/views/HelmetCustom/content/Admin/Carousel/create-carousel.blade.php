<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
</head>
<style>
    h2{
        text-align: center;
    }
</style>
<body>
    
    <div class="container mt-3">
        <h2>Isi Data Carousel</h2>
        <hr>
        <form action="{{ route('carousel.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="foto_carousel">Pilihan Gambar</label><br>
                <input type="file" id="foto_carousel" name="foto_carousel" >
                @error('foto_carousel')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="caption_satu">Caption Satu</label>
                <input type="text" class="form-control-file" id="caption_satu" name="caption_satu">
                @error('caption_satu')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="caption_dua">Caption Dua</label>
                <input type="text" class="form-control-file" id="caption_dua" name="caption_dua">
                @error('caption_dua')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('ANDA YAKIN UNTUK DATA SUDAH DIISI BENAR ?')">Upload</button>
        </form>
        <a href="{{route('produk.index')}}"><button class="btn btn-warning">Kembali Ke Halaman Awal</button></a>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        $(".js-example-placeholder-multiple").select2({
        placeholder: "Select a state"});
    </script>
</body>
</html>