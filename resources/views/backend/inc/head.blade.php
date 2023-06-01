  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Narika | DashBoard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/templateLTE/plugins/fontawesome-free/css/all.min.css')}}">
  {{-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> --}}
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/templateLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/templateLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->


  {{-- <link rel="stylesheet" href="{{asset('assets/templateLTE/plugins/jqvmap/jqvmap.min.css')}}"> --}}
  <!-- Theme style -->


   <!-- DataTables -->
   {{-- <link rel='stylesheet' href='{{asset('assets/templateLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}'> --}}
   {{-- <link rel="stylesheet" href="{{asset('assets/templateLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}"> --}}
   {{-- <link rel="stylesheet" href="{{asset('assets/templateLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}"> --}}
  
   @php
       $css = isset($css) ? $css : '';
        echo $css;
   @endphp








  <link rel="stylesheet" href="{{asset('assets/templateLTE/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/templateLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  {{-- <link rel="stylesheet" href="{{asset('assets/templateLTE/plugins/daterangepicker/daterangepicker.css')}}"> --}}
  <!-- summernote -->
  {{-- <link rel="stylesheet" href="{{asset('assets/templateLTE/plugins/summernote/summernote-bs4.min.css')}}"> --}}

  <link rel="stylesheet" href="{{asset('assets/templateLTE/css/main.css')}}">