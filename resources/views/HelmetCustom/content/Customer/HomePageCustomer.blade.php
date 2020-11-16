@extends('HelmetCustom.MasterCustomer')
@section('title', 'HELM CUSTOM')

@section('HelmetCustom.content.Customer')
    <!-- Carosel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($carousel as $item)
            <div class="carousel-item active">
                <img src="{{ Storage::url('public/gallerys/') . $item->foto_carousel }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>{{ $item->caption_satu }}</h1>
                    <h5>{{ $item->caption_dua}}</h5>
                </div>
            </div>
            @endforeach
            @foreach ($carousel2 as $item2)
            <div class="carousel-item">
                <img src="{{ Storage::url('public/gallerys/') . $item2->foto_carousel }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>{{ $item2->caption_satu }}</h1>
                    <h5>{{ $item2->caption_dua}}</h5>
                </div>
            </div>
            @endforeach
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- tutup carosel -->

    <!-- content  -->
    <div class="container" id="content">
        <h3>HELM CUSTOM KEREN</h3>
        <hr id="hr">
        <br>
        <div class="row">
            @foreach ($data as $item)
                <div class="col-lg-3">
                    <div data-aos="fade-up">
                        <a href="{{ route('order.show', $item->id) }}"><img
                                src="{{ Storage::url('public/gallerys/') . $item->foto_produk }}" class="d-block w-100"
                                alt="..."></a>
                        <br>
                        <br>
                        <p><strong>{{ $item->nama_produk }}</strong></p>
                        <p id="p"><strong>Rp. {{ number_format($item->harga_produk) }}</strong></p>
                        {{-- <p id="p1"><strong><s>IDR 1.000,000</s></strong></p> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br>
    <br>
    <!-- tutup content -->
@endsection
