<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>CARPOOLING | Home</title>
    
   <!-- Font awesome -->
    <link href="{{ asset('face_page\css\font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('face_page\css\bootstrap.css') }}" rel="stylesheet">
    <!-- Lightbox slider -->
    <link type="text/css" media="all" rel="stylesheet" href="{{ asset('face_page\css\jquery.littlelightbox.css') }} " />
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('face_page\css\theme-color\orange-theme.css') }}" rel="stylesheet">
    <!-- Slick slider -->
    <link href="{{ asset('face_page\css\slick.css') }}" rel="stylesheet">   
     
    <!-- Main style sheet -->
    <link href="{{ asset('face_page\css\main.css') }}" rel="stylesheet">    
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>

  </head>
  <body>

  <div class="wrapper">
    <!-- Background Photographer image -->
    <div class="hero">
      <div class="hero__back hero__back--static"></div>
      <div class="hero__back hero__back--mover"></div>
      <div class="hero__front"></div>
    </div>   
    <!-- / Background Photographer image -->
    <!-- Start Header -->
    <header id="header">
      <a class="logo" href="index.html">CARPOOLING</a>
      <a id="nav-icon" href="#"><span class="fa fa-bars"></span></a>
    </header>
    <!-- / Header -->
    <!-- Start Menu Popup -->
    <div id="menu-popup">
      <a id="close-nav" href="#"><img src="{{ asset('face_page\img\close-icon.png') }}" alt=""></a>
      <nav class="nav-menu">
        <ul>
          <li><a href="/">Início</a></li>
          <li><a href="{{ url('/login') }}">Login</a></li>
          <li><a href="{{ url('/register') }}">Registrar</a></li>
          <li><a href="{{url('/about')}}">Sobre</a></li>
          <li><a href="{{url('/contact')}}">Contato</a></li>                   
        </ul>        
      </nav>
    </div>
    <!-- / Menu Popup -->
     @yield('getout')

    </div>
    <!-- / Explore btn -->


    <script src="{{ asset('js\jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js\bootstrap.min.js') }}"></script>
    <script src="{{ asset('face_page\js\slick.js') }}"></script>
	 <script type="text/javascript" language="javascript" src="{{ asset('face_page\js\jquery.littlelightbox.js') }}"></script>

    <script src="{{ asset('face_page\js\custom.js') }} "></script>
    
  </body>
</html>