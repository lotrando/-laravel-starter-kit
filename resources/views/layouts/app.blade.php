<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/tabler.css') }}">
</head>

<body>
  @yield('content')
  @yield('modals')
  <script src="{{ asset('js/tabler.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  @stack('scripts')
  {{-- Sweetalert 2 Laravel Package --}}
  @include('sweetalert::alert')
</body>

</html>
