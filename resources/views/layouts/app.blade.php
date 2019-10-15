<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio | Lofinn</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
  </head>
<body>

  <header>
    @include('layouts.nav')
  </header>

  @yield('content')

  @include('layouts.footer')

  <script src="{{ asset('js/app.js') }}"></script>

  </body>
</html>