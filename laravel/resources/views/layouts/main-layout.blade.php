<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>header main footer</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
  </head>
  <body>

    <div class="header">
        @include('components.header')
    </div>

    <div class="main">
      @yield('content')

    </div>


    <div class="footer">
      @include('components.footer')

    </div>




  </body>
</html>
