<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySkill</title>
    @vite('resources/css/app.css')
    @vite('resources/js/navbar.js')
    @vite('resources/js/e-learning.js')

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite('resources/js/buttons.js')
</head>

<body>
    @include('partials.navbar')

    <div class="container" id="container">
        @yield('container')
    </div>

    @include('partials.footer')

    <!-- wa button -->
    <a target="_blank" href="https://wa.me/6285224216499?text=Saya%20tertarik%20untuk%20berlangganan%20bimbel%20online%20MySkill.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20paket%20langganan%2C%20harga%2C%20dan%20fitur%20yang%20tersedia.%20Terima%20kasih.">
        <button class="fixed end-12 justify-cen bottom-8 bg-orange-500 text-white p-3 rounded-full shadow-lg">
            <i class="fab fa-whatsapp" style="font-size: 20px; padding: 4px; margin-left: 4px;"></i>
            Whatsapp
        </button>
    </a>


</body>

</html>
