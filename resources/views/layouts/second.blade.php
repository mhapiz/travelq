<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  @stack('prepend-style')
  @include('includes.second.style')
  @stack('append-style')


  <title>
    @yield('title')
  </title>
</head>

<body>
  @include('includes.second.navbar')

  @yield('content')


  @stack('prepend-script')
  @include('includes.second.script')
  @stack('append-script')
  
 
</body>

</html>