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
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
          const menu = document.getElementById('mobile-menu');
          const isMenuOpen = menu.classList.contains('block');
          
          menu.classList.toggle('hidden', isMenuOpen);
          menu.classList.toggle('block', !isMenuOpen);
    
          const openIcon = this.querySelector('svg:first-of-type');
          const closeIcon = this.querySelector('svg:last-of-type');
          openIcon.classList.toggle('hidden', !isMenuOpen);
          closeIcon.classList.toggle('hidden', isMenuOpen);
        });
      </script>
</body>

</html>
