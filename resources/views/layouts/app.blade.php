<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  @stack('prepend-style')
  @include('includes.app.style')
  @stack('append-style')


  <title>
    @yield('title')
  </title>
</head>

<body>
  @include('includes.app.navbar')

  @yield('content')

  @include('includes.app.footer')

  @stack('prepend-script')
  @include('includes.app.script')
  @stack('append-script')

</body>

</html>