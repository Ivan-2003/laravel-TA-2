@extends('master-customer')
@section('title', 'HELM-ORDER')

@section('content')
    <!-- content  -->
 
    <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <div data-aos="fade-up">
                    <a href=""><img src="{{ asset('assets/img/kuning.jpg') }}" alt="" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="order">
                    <h2>HELM CUSTOM [M30 KUNING HITAM HELM CUSTOM]</h2>
                    <p id="po"><strong>IDR 500,000</strong></p>
                    <p id="po1"><strong><s>IDR 1.000,000</s></strong></p>
                    <br>
                    <h4>Size</h4>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="S" class="btn btn-outline-dark"
                        id="uk">S</a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="M" class="btn btn-outline-dark"
                        id="uk">M</a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="L" class="btn btn-outline-dark"
                        id="uk">L</a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="XL" class="btn btn-outline-dark"
                        id="uk">XL</a>
                    <!-- <button onclick="min()" class="btn btn-dark" id="uk">-</button>
                        <input type="number" id="myNumber" min="1" placeholder="1" disabled style="text-align: center;" class="quantity-input quantity-element input">
                        <button onclick="myFunction()" class="btn btn-dark" id="uk">+</button> -->
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span onclick="min()" class="btn btn-dark" id="uk">-</span>
                                </div>
                                <input type="number" id="myNumber" min="1" placeholder="1" disabled
                                    style="text-align: center;" class="quantity-input quantity-element input">
                                <div class="input-group-append">
                                    <span onclick="myFunction()" class="btn btn-dark" id="uk">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-light" style="width: 270px; height: 45px;"><strong><svg
                                        width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg> Add to cart</strong></button>
                        </div>
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-success" style="width: 270px; height: 45px;"><strong>Buy it
                                    now</strong></button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <br>
    <br>
    <!-- tutup content -->
@endsection
