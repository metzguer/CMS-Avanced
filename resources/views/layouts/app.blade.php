<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("title")</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div class="text-center" id="frame" >
      <div class="spinner-border" style="width: 4rem; height: 4rem;" role="status" id="spinner">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <div id="app">
        <section>
           @yield("nav-login")
        </section>
     
       <section>
           @yield("nav-backend")
       </section>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>

    <script>
        $("#app").css("display","none");

        $(document).ready(function(){

           $("#spinner").css("display","none");
           $("#frame").css("display","none");
           $("#app").show();

        });
    </script>

    <style>
        #frame{
            height: 100vh;
        }
        #spinner{
         
            height: 10vh;
            margin-top: 40vh;
            
        }
    </style>
    
</body>
</html>

