@extends('HelmetCustom.MasterAdmin')
@section('title','Admin | Dashboard Admin')

{{-- @section('admin','active') --}}

@section('HelmetCustom.content.Admin')  
  
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row rwadmin1">
          <div class="card bg-dark text-white">
            <img src="{{asset('assets/img/bgadmin1.jpeg')}}" alt="background foto" id="bgadmin1">
            <div class="card-img-overlay">
              <h1 class="card-title text-center" id="h1bgadmin1">Selamat Datang <br>
                {{-- {{ Auth::user()->name }} --}}
              </h1>
            </div>
          </div>
        </div>
        {{-- <div class="row rwadmin2">
          <div class="card-deck">
            <div class="card">
              <img src="{{asset('assets/img/helm1 (1).jpg')}}" class="card-img-top" alt="...">
              <div class="card-img-overlay">
                <h1 class="card-title " id="h1cardadmin">Selamat</h1>
              </div>
            </div>
            <div class="card">
              <img src="{{asset('assets/img/helm1 (2).jpg')}}" class="card-img-top" alt="...">
              <div class="card-img-overlay">
                <h1 class="card-title " id="h1cardadmin">Bekerja</h1>
              </div>
            </div>
            <div class="card">
              <img src="{{asset('assets/img/helm1 (3).jpg')}}" class="card-img-top" alt="...">
              <div class="card-img-overlay">
                <h1 class="card-title" id="h1cardadmin">Dengan Baik</h1>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

@endsection