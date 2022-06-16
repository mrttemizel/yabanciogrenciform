<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="icon" href="{{ asset('back/images/favicon-32x32.png') }}" type="image/png" />
  
  <!--plugins-->
  
  <link href="{{ asset('back/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
  <link href="{{ asset('back/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
  <link href="{{ asset('back/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
  <link href="{{ asset('back/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

  <!-- Bootstrap CSS -->



  <link href="{{ asset('back/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('back/css/bootstrap-extended.css') }}" rel="stylesheet" />
  <link href="{{ asset('back/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('back/css/icons.css') }}" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  

  

  <!-- loader-->
	<link href="{{ asset('back/css/pace.min.css') }}" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="{{ asset('back/css/dark-theme.css') }}" rel="stylesheet" />
  <link href="{{ asset('back/css/light-theme.css') }}" rel="stylesheet" />
  <link href="{{ asset('back/css/semi-dark.css') }}" rel="stylesheet" />
  <link href="{{ asset('back/css/header-colors.css') }}" rel="stylesheet" />

  @yield('addcss')
  <title>Antalya Bilim Üniversitesi</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper d-flex flex-column align-items-center ">
    <div class="container  flex-column align-items-center">

    
    @yield('content')
</div>
  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="{{ asset('back/js/bootstrap.bundle.min.js') }}"></script>
  <!--plugins-->

  <script src="{{ asset('back/js/jquery.min.js') }}"></script>

  <script src="{{ asset('back/plugins/simplebar/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('back/plugins/metismenu/js/metisMenu.min.js') }}"></script>

  <script src="{{ asset('back/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
  <script src="{{ asset('back/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ asset('back/js/pace.min.js') }}"></script>

  @yield('addjs')
  <!--app-->
  <script src="{{ asset('back/js/app.js') }}"></script>
  <script src="{{ asset('back/js/index.js') }}"></script>


 

</body>

</html>