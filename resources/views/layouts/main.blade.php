<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MySkill</title>
  @vite('resources/css/app.css')
  @vite('resources/js/navbar.js')
  {{-- <style>
        body {
            background-color: #e09129 !important;
        }
    </style> --}}

</head>

<body>
  @include('partials.navbar')
  <div class="container" id="container">
    @yield('container')
  </div>

  @include('partials.footer')

</body>

</html>