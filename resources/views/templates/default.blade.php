<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <title>CanvasPath</title>


        <!--
        CSS
        ============================================= -->
      <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{ asset('css/materialize.css')}}">
      <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
      <link rel="stylesheet" href="{{ asset('css/et-line.css')}}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ asset('css/slicknav.css')}}">
      <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
      <link rel="stylesheet" href="{{ asset('css/main.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
      

      <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <!-- <link rel="stylesheet" href="css/minified.css"> -->

    </head>
    <body>
      @include('templates.partials.header')
      <div class = "container">
        <h1>
          <p></p>
        </p></p>
      </h1>

        @include('templates.partials.alerts')
        @yield('content')
      </div>
    </body>
        <!--
        JavaScripts
        ========================== -->
        <script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
        <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/vendor/materialize.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.sticky.js')}}"></script>
        <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
        <script type="ext/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqCaX4fFEQRiTJoeclXKZRaFh2fYfps_Y&callback=initMap"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->
        <script src="{{asset('jquery.nice-select.js')}}"></script>
        <script src="{{asset('js/jquery.jCounter-0.1.4.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/minified/minified.js')}}"></script>
        <script src="{{asset('js/map-init.js')}}"></script>
        <script src="{{asset('js/index.js')}}"></script>

</html>
