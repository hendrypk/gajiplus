<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title','hendry')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('e-presensi/assets/img/logo/favicon.jpg')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
  <!-- Include SweetAlert2 CSS and JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <!-- flatpickr date -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  
  <!-- Show Maps -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>
<header id="header" class="">    
    <div class="d-flex align-items-center justify-content-beetween">
      <div class="release-tag" id="releaseList"></div>
    </div>
</header>
<body>
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">          
                    <div class="d-flex justify-content-center py-4">
                        <h5 class="card-title text-center pb-0 fs-4">Pilih Tempat Kerja</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body d-flex justify-content-center py-4">
                                    <div class="">
                                        <a href="https://maketees.gajiplus.my.id/login">
                                            <img src="{{asset('assets/img/logo/maketees/72.png')}}" alt="maketees">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body d-flex justify-content-center py-4">
                                    <div class="">
                                        <a href="https://needle.gajiplus.my.id/login">
                                            <img src="{{asset('assets/img/logo/needle/72.png')}}" alt="needle">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
  <!-- <script src="assets/vendor/simple-datatables/simple-datatables.js"></script> -->

  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>

  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script src="{{ asset('assets/js/release.js') }}"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    /* Pastikan gambar responsif dengan proporsi terjaga */
    img {
        max-width: 100%; /* Sesuaikan dengan lebar kontainer */
        max-height: 150px; /* Batas maksimal tinggi gambar */
    }

    /* Pusatkan gambar di dalam card-body */
    .card-body {
        display: flex; /* Aktifkan Flexbox */
        justify-content: center; /* Pusatkan secara horizontal */
        align-items: center; /* Pusatkan secara vertikal */
        height: 100%; /* Atur tinggi kartu sesuai kebutuhan */
        background-color: #f8f9fa; /* Opsional: tambahkan latar belakang */
    }

    /* Tambahkan margin untuk kartu agar tata letak rapi */
    .card {
        text-align: center; /* Rata tengah teks (opsional) */
    }
</style>



</body>

</html>