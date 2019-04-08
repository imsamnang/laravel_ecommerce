<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/backend/matrix/assets/images/favicon.png')}}">
  <title>@yield('pagetitle', 'Master Dashboard')</title>
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800"> --}}
  <link href="https://fonts.googleapis.com/css?family=Hanuman" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/backend/matrix/dist/css/icons/font-awesome/css/fontawesome-all.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/matrix/dist/css/icons/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/matrix/dist/css/icons/material-design-iconic-font/css/materialdesignicons.min.css')}}">
  <!-- Custom CSS -->
  <link href="{{asset('assets/backend/matrix/dist/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/backend/matrix/dist/css/custom.css')}}">
  @stack('css')
</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
      <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5" >
      @include('layouts.backend.includes.matrix.topheader')
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        @include('layouts.backend.includes.matrix.left_sidebar')
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
       <div class="page-breadcrumb">
          <div class="row">
            @include('layouts.backend.includes.matrix.breadcrumb')
          </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        {{-- <div class="row"> --}}
          
          @yield('main-content')

        {{-- </div> --}}
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="footer text-center">
          All Rights Reserved by SourngEdu. Designed and Developed by <a href="https://easytinh.com" target="_blank">EasyTinh</a>.
      </footer>
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
      <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="{{asset('assets/backend/matrix/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="{{asset('assets/backend/matrix/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('assets/backend/matrix/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/backend/matrix/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{asset('assets/backend/matrix/assets/extra-libs/sparkline/sparkline.js')}}"></script>
  <!--Wave Effects -->
  <script src="{{asset('assets/backend/matrix/dist/js/waves.js')}}"></script>
  <!--Menu sidebar -->
  <script src="{{asset('assets/backend/matrix/dist/js/sidebarmenu.js')}}"></script>
  <!--Custom JavaScript -->
  <script src="{{asset('assets/backend/matrix/dist/js/custom.min.js')}}"></script>
  @stack('js')
</body>

</html>