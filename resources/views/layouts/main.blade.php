<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MySkill</title>
  @vite('resources/css/app.css')
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

  <script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
      // open
      const burger = document.querySelectorAll('.navbar-burger');
      const menu = document.querySelectorAll('.navbar-menu');

      if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
          burger[i].addEventListener('click', function() {
            for (var j = 0; j < menu.length; j++) {
              menu[j].classList.toggle('hidden');
            }
          });
        }
      }

      // close
      const close = document.querySelectorAll('.navbar-close');
      const backdrop = document.querySelectorAll('.navbar-backdrop');

      if (close.length) {
        for (var i = 0; i < close.length; i++) {
          close[i].addEventListener('click', function() {
            for (var j = 0; j < menu.length; j++) {
              menu[j].classList.toggle('hidden');
            }
          });
        }
      }

      if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
          backdrop[i].addEventListener('click', function() {
            for (var j = 0; j < menu.length; j++) {
              menu[j].classList.toggle('hidden');
            }
          });
        }
      }
    });
  </script>
  @include('partials.footer')
</body>

</html>