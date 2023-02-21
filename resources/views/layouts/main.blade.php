<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title ?? env("APP_NAME") }}</title>
  <link rel="stylesheet" href="{{ url(asset("/css/app.css")) }}">
  
</head>
<body>
  <div class="container relative">
    @include("components/nav")
    @include("components/sidenav")
    @yield("content")
  </div>
  
  <script src="{{ url(asset("/js/app.js")) }}"></script>
  @yield("script")
</body>
</html>