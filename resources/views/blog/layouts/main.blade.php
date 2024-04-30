<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="{{ asset('assets/blog/img/favicon.png') }}">
  <title>
    SI-FATEK-UNKHAIR
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/blog/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/blog/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('assets/blog/css/material-kit.css') }}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="http://127.0.0.1:8000/" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body>

    <!-- ======= Main Section ======= -->
     <main id="main">

        @yield('body')
    </main>

    <!-- ======= Footer ======= -->
    @include('blog.partials.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- ======= Scripts ======= -->
    @include('blog.partials.scripts')
    @stack('scripts')
</body>

</html>