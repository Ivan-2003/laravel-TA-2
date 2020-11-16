@extends('HelmetCustom.MasterCustomer')
@section('title','Profile Customer')

@section('HelmetCustom.content.Customer')
<div class="content">
    <div class="container" id="lg">
        <h2><strong>ACCOUNT DETAILS</strong></h2>
        <hr>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-4">
                <h4><strong>aji</strong></h4>
                <p>aji@email.com</p>
                <br>
                <br>
                <h4><strong>Alamat customer</strong></h4>
                <p>Jln Anggur nomer 1 kecamatan air mengalir, kelurahan kebon teh</p>
                <br>
                <span>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-dark">Logout
                    </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </span>
            </div>
            <div class="col-lg-8">
                <h3><strong>ORDER HISTORY</strong></h3>
                <table class="table table-bordered">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
