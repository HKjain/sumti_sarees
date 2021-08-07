<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.carouFredSel-6.0.4.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/aos.js') }}" type="text/javascript"></script>
    
</head>
<body>
    <div id="app"  style="background-image: url('{{ asset('images/lback2.jpg') }}');background-size: cover;background-repeat: no-repeat;background-attachment: fixed; " >
        
        @include("inc.navbar")

       <main class="py-4">
            @yield('content')
        </main>

        @include("inc.footer")
    </div>

    <!-- Scripts -->
    <script>
       AOS.init({
        easing: 'ease-in-out',
        duration: 1000

      });
    </script>
    <script>
  var myNav = document.getElementById("navbar")
  var navBrand = document.getElementById("nav-brand")
  var upper = document.getElementById('upper')
  var sticky = myNav.offsetTop;
  document.onscroll = function() {myFunction()}
  function myFunction()
  {
      if (window.pageYOffset > sticky) {
          myNav.style.position = 'fixed';
          navBrand.style.display = 'block';
          upper.style.display = 'none';
          document.getElementById("space").style.display = 'block';
          // header.style.display='none'
        } else {
          myNav.style.position = 'static';
          navBrand.style.display = 'none';
          upper.style.display = 'block'
          document.getElementById("space").style.display = 'none';
          // header.style.display='block'
        }
  }
</script>
</body>
</html>
