<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />

  <style>
    @media only screen and (max-width:800px) {
      #no-more-tables tbody,
      #no-more-tables tr,
      #no-more-tables td {
          display: block;
      }
      #no-more-tables thead tr {
          position: absolute;
          top: -9999px;
          left: -9999px;
      }
      #no-more-tables td {
          position: relative;
          padding-left: 50%;
          border: none;
          border-bottom: 1px solid #eee;
      }
      #no-more-tables td:before {
          content: attr(data-title);
          position: absolute;
          left: 6px;
          font-weight: bold;
      }
      #no-more-tables tr {
          border-bottom: 1px solid #ccc;
      }
    }
  </style>

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
    {{-- Sidebar.blade.php --}}
    @include('Partials.sidebar')

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
         {{-- Navbar.blade.php --}}
          @include('Partials.navbar')
      </header>
      <!--  Header End -->
      
      {{-- Content --}}
      @yield('content')


    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>