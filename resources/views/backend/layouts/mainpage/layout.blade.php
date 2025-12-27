<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('backendassets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('backendassets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('backendassets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('backendassets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('backendassets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('backendassets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('backendassets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('backendassets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('backendassets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('backendassets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
 @include('backend.components.header.header')
 @include('backend.components.sidebar.side')
  <main id="main" class="main">

@yield('dashboard')
  </main><!-- End #main -->

   @include('backend.components.footer.footer')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('backendassets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('backendassets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('backendassets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('backendassets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('backendassets/vendor/quill/quill.js') }}"></script>
  <script src="{{ asset('backendassets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('backendassets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('backendassets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('backendassets/js/main.js') }}"></script>

</body>

</html>