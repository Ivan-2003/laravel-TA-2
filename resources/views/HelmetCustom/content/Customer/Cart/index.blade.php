@extends('HelmetCustom.MasterCustomer')

@section('title','Table Keranjang')


@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/cart.css')}}">
@endsection

@section('HelmetCustom.content.Customer')
    <div class="container-fluid">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
        @endif
        @php
            $total = 0;
        @endphp
        @if ($carts->count() == 0)
            <p style="text-align: center">Cart Masih Kosong</p>
        @endif

        <h3>{{ $carts->count() }} Barang di Cart Anda</h3>

        @foreach ($carts as $cart)
            <div class="cart">
                <div class="row">
                    <div class="col-lg-3">
                        <img src= "{{Storage::url('public/gallerys/').$cart->produk->foto_produk}}" alt="foto_produk" width="180px">
                    </div>
                    <div class="col-lg-9">
                        <div class="top">
                            <div class="item-name">
                                <div class="top-right">
                                    <p>{{$cart->produk->nama_produk}}</p>
                                    <p>Rp. {{ number_format($cart->produk->harga_produk)}} </p>
                                    <select name="qty" id="qty" class="quantity" data-item="{{ $cart->id }}">
                                        @for ($i = 1; $i < 10; $i++)
                                            <option value="{{ $i }}" {{ $cart->qty == $i ? 'selected' : ''}}>{{$i}}</option>
                                        @endfor
                                    </select>
                                    <p class="total-item">Rp. {{ number_format($cart->produk->harga_produk * $cart->qty) }}</p>
                                </div> 
                            </div>
                        </div>
                        <hr class="mt-2 mb2">
                        <div class="bottom">
                            <div class="row">
                                <p class="col-lg-6 item-desc"> {{$cart->produk->deskripsi_produk}} </p>
                                <div class="offset-lg-4">
                                </div>
                                <div class="col-lg-2">
                                    <form action="" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $total += ($cart->produk->harga_produk * $cart->qty)
            @endphp
             </div>
        @endforeach

        <div class="total" style="margin-right: 30px">
            <h4 class="total-price">Total Harga : Rp. <b>{{number_format($total)}}</b></h4>
        </div>

        <form action="/checkout" method="post" style="margin-left: 400px">
            @csrf
            <button type="submit" class="btn btn-primary" style="margin-bottom: 20px ; margin-left: 200px">Checkout</button>
        </form>
@endsection

@section('js')
    <script>
        (function(){
            const classname = document.querySelectorAll('.quantity');

            Array.from(classname).forEach(function(element){
                element.addEventListener('change',function(){
                    const id = element.getAttribute('data-item');
                    axios.patch(`/helmetcustom/cart/${id}`, {
                        quantity: this.value,
                        id: id
                    })
                    .then(function(response){
                        window.location.href = '/helmetcustom/cart'
                    })
                    .catch(function(error){
                        console.log(error)
                    })
                })
            })
        })();
    </script>
@endsection