<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="{{asset('/assets/css/Admin/adminstyle.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <script src="{{asset('https://kit.fontawesome.com/yourcode.js')}}"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('./assets/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('./assets/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('./assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('./assets/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('./assets/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}" 
  integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{asset('https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css')}}">
  <link href="{{asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css')}}" rel="stylesheet" />
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper">
  
    @include('HelmetCustom.layouts.Admin.header')
    
    @include('HelmetCustom.layouts.Admin.sidebar')
    
    @yield('HelmetCustom.content.Admin')
    
    @include('HelmetCustom.layouts.Admin.footer')

    @include('sweetalert::alert')
    

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
      

</div>
    
 <!-- jQuery -->
<script src="{{asset('./assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('./assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('./assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('./assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('./assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('./assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('./assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('./assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('./assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('./assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('./assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('./assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('./assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('./assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('./assets/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('./assets/dist/js/demo.js')}}"></script>


<script src="{{asset('https://code.jquery.com/jquery-3.5.1.slim.min.js')}}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js')}}" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js')}}"></script>
<script type="text/javascript" charset="utf8" src="{{asset('https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js')}}"></script>
<script>
  $(document).ready( function () {
  $('#table_id').DataTable();
} );
</script>
<script>
  $(".js-example-placeholder-multiple").select2({
  placeholder: "Select a state"});
</script>
</body>
</html>

