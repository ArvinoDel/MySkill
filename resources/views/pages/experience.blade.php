@extends('layouts.main')
@section('container')

@php
$buttons = [
['id' => 1, 'label' => '📕 Learning'],
['id' => 2, 'label' => '💼 Onboarding'],
['id' => 3, 'label' => '✅ Project'],
['id' => 4, 'label' => '🎯 Performance'],
['id' => 5, 'label' => '📊 Analytics'],
];
$activeButton = request()->query('activeButton');
@endphp

<div class="corporate">
    <section
        class="flex flex-col lg:flex-row-reverse h-auto rounded-b-3xl bg-white lg:bg-gradient-to-b from-orange-400 to-red-400 text-white w-screen">
        <!-- Adjust margin and padding for the image container -->
        <div class="flex justify-center lg:justify-end mb-4 lg:mb-0 lg:mr-16 mt-4 lg:mt-0">
            <img src="{{ asset('./assets/corporate/hero-illustration.webp') }}" alt="Corporate"
                class="h-48 w-auto lg:h-64 lg:w-auto object-cover">
        </div>

        <div class="text-left lg:text-left lg:mr-4 text-black lg:text-white">
            <button type="button"
                class="focus:outline-none text-white bg-gray-900 font-medium rounded-full text-sm px-5 py-2.5 me-2 dark:focus:ring-yellow-900">GMT
                for Business</button>
            <p class="text-xl lg:text-5xl font-bold mb-2 lg:mb-4">
                Solusi Meningkatkan Performa Tim &
            </p>
            <p class="text-xl lg:text-5xl font-bold mb-2 lg:mb-4">
                Perusahaan
            </p>
            <p class="mt-2 text-base lg:text-lg mb-2">
                MySkill Experience adalah software bagi karyawan untuk UpSkilling serta mengelola
            </p>
            <p class="text-base lg:text-lg mb-2 lg:mb-4">
                Onboarding, Project & Target KPI.
            </p>
            <br>
            <!-- Container for buttons -->
            <div class="flex flex-col lg:flex-row lg:justify-start lg:space-x-2 lg:items-center items-center mb-4">

                <!-- Corporate Training Button -->
                <a href="/corporate-training"
                    class="text-black lg:text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mb-2 lg:mb-0 dark:focus:ring-yellow-900">
                    Pelajari Selengkapnya
                </a>

                <!-- Performance Management Software Button -->
                <button type="button"
                    class="text-black lg:text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mb-2 lg:mb-0 dark:focus:ring-yellow-900">
                    Login
                </button>
            </div>
        </div>
    </section>

    <!-- button here -->
    <div id="buttonContainer" class="flex space-x-4 mt-14 mr-14 ml-14 mb-8">
        @foreach ($buttons as $button)
        <a
            id="button-{{ $button['id'] }}"
            href="#{{ $button['id'] }}"
            data-target="content-{{ $button['id'] }}"
            class="py-1 px-2 rounded-md font-semibold
           bg-white border border-black text-gray-800
        hover:bg-gray-300 hover:border-gray-400 hover:text-gray-900" style=".bg-gray-900.no-hover:hover {
    background-color: inherit;
    border-color: inherit;
    color: inherit;
}">
            {{ $button['label'] }}
        </a>
        @endforeach
    </div>

    <!-- INI KAALO MAU BIKIN DIV, PASTIKAN ADA ID CONTENT-#ID SESUAI DENGAN ID BUTTON NYA  DAN CLASS NYA PASTI HIDDEN -->
    <div id="content-1" class="flex">
        <div class="w-1/2 ml-14">
            <p class="text-xl lg:text-4xl font-bold mb-2">
                Ratusan Materi
            </p>
            <p class="text-xl lg:text-4xl font-bold mb-2">
                Upskilling Untuk Semua
            </p>
            <p class="text-xl lg:text-4xl font-bold mb-2">
                Tim.
            </p>
            <p class="text-xl">
                Akses 900+ video dan modul latihan hasil rancangan
            </p>
            <p class="text-xl">
                para experts. Upgrade skill karyawan di semua divisi
            </p>
            <p class="text-xl">
                dengan efisien.
            </p>
            <button type="button"
                class="text-black lg:text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 mt-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mb-2 lg:mb-0 dark:focus:ring-yellow-900">
                saya tertarik
            </button>
        </div>

        <video src="{{ asset('assets/corporate/learning.mp4') }}" autoplay loop muted class="w-1/2 h-auto mr-12 ml-4" playsinline>
        </video>
    </div>

    <div id="content-2" class="hidden">
        <div class="flex"> <!-- Added flex class for layout -->
            <div class="w-1/2 ml-14"> <!-- Text content on the left -->
                <p class="text-xl lg:text-4xl font-bold mb-2 lg:mb-4">
                    Buat dan Bagikan Materi
                </p>
                <p class="text-xl lg:text-4xl font-bold mb-2 lg:mb-4">
                    Onboarding.
                </p>

                <p class="text-xl">
                    Kurangi repetisi dan hemat waktu hingga 90% untuk membagikan informasi bagi Karyawan maupun Mitra bisnis baru di perusahaan.
                </p>
                <button type="button"
                    class="text-black lg:text-black bg-yellow-400 hover:bg-yellow-500 mt-4 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mb-2 lg:mb-0 dark:focus:ring-yellow-900">
                    saya tertarik
                </button>
            </div>

            <video src="{{ asset('assets/corporate/onboarding.mp4') }}" autoplay loop muted class="w-1/2 h-auto mr-12 ml-4" playsinline> <!-- Video on the right -->
            </video>
        </div>
    </div>

    <div id="content-3" class="hidden">
        <div class="flex"> <!-- Added flex class for layout -->
            <div class="w-1/2 ml-14"> <!-- Text content on the left -->
                <p class="text-xl lg:text-4xl font-bold mb-2 lg:mb-4">
                    Tools Manajemen
                </p>
                <p class="text-xl lg:text-4xl font-bold mb-2 lg:mb-4">
                    Proyek secara
                </p>
                <p class="text-xl lg:text-4xl font-bold mb-2 lg:mb-4">
                    Kolaboratif.
                </p>
                <p class="text-xl">
                    Buat dan kerjakan tugas di dalam tim maupun dengan pihak eksternal. Simpel, rapi dan mudah dipantau.
                </p>
                <button type="button"
                    class="text-black lg:text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 mt-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mb-2 lg:mb-0 dark:focus:ring-yellow-900">
                    saya tertarik
                </button>
            </div>

            <video src="{{ asset('assets/corporate/project.mp4') }}" autoplay loop muted class="w-1/2 h-auto mr-12 ml-4" playsinline> <!-- Video on the right -->
            </video>
        </div>
    </div>

    <div id="content-4" class="hidden">
        <div class="flex"> <!-- Added flex class for layout -->
            <div class="w-1/2 ml-14"> <!-- Text content on the left -->
                <p class="text-xl lg:text-4xl font-bold mb-2 lg:mb-4">
                    Buat dan Pantau Target
                </p>
                <p class="text-xl lg:text-4xl font-bold mb-2 lg:mb-4">
                    KPI Semua Karyawan.
                </p>
                <p class="text-xl">
                    Pastikan performa tiap tim mencapai target. Ketahui perkembangan dari setiap tujuan.
                </p>
                <button type="button"
                    class="text-black lg:text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 mt-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mb-2 lg:mb-0 dark:focus:ring-yellow-900">
                    saya tertarik
                </button>
            </div>

            <video src="{{ asset('assets/corporate/performance.mp4') }}" autoplay loop muted class="w-1/2 h-auto mr-12 ml-4" playsinline> <!-- Video on the right -->
            </video>
        </div>
    </div>

    <div id="content-5" class="hidden">
        <div class="flex"> <!-- Added flex class for layout -->
            <div class="w-1/2 ml-14"> <!-- Text content on the left -->
                <p class="text-xl lg:text-4xl font-bold mb-2 lg:mb-4">
                    Dapatkan Insight dari
                </p>
                <p class="text-xl lg:text-4xl font-bold mb-2 lg:mb-4">
                    Perkembangan &
                </p>
                <p class="text-xl lg:text-4xl font-bold mb-2 lg:mb-4">
                    Performa Tim.
                </p>
                <p class="text-xl">
                    Satu dashboard untuk memantau semua. Dari aktivitas upskilling, proyek hingga performa.
                </p>
                <button type="button"
                    class="text-black lg:text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 mt-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mb-2 lg:mb-0 dark:focus:ring-yellow-900">
                    saya tertarik
                </button>
            </div>

            <video src="{{ asset('assets/corporate/analytics.mp4') }}" autoplay loop muted class="w-1/2 h-auto mr-12 ml-4" playsinline> <!-- Video on the right -->
            </video>
        </div>
    </div>

    <section class="mt-12 lg:flex-row-reverse h-auto bg-white lg:bg-gradient-to-b from-orange-400 to-red-400 text-white w-screen">
        <div class="flex flex-col items-center">
            <p class="text-center mt-4 text-4xl font-bold text-black">Dirancang oleh MySkill. Platform Upskilling #1
            </p>
            <p class="text-center text-4xl font-bold mb-4 text-black">dengan 1 Juta lebih Pengguna.
            </p>
            <p class="text-xl">
                Kembangkan bisnis perusahaan Kamu dengan mendorong tiap karyawan bekerja dan berkembang
            </p>
            <p class="text-xl">
                dengan lebih efektif.
            </p>
            <div class="flex flex-col sm:flex-row justify-center mb-4 space-y-4 sm:space-y-0 sm:space-x-4 px-4">
                <div class="bg-white text-black p-6 rounded-lg w-full sm:w-64 border border-spacing-2">
                    <p class="text-md font-medium text-center mb-4">Didukung oleh</p>
                    <img src="./assets/corporate/east-ventures.webp" alt=""
                        class="mx-auto">
                </div>
                <div class="bg-white text-black p-6 rounded-lg w-full sm:w-64 border border-spacing-2">
                    <p class="text-md font-medium text-center mb-4 ">Didukung oleh</p>
                    <div class="flex justify-center"> <!-- Added flex container for alignment -->
                        <img src="./assets/corporate/aws-edstart.webp" alt="" class="mx-2 h-16"> <!-- Adjusted height for smaller size -->
                        <img src="./assets/corporate/linkedin-top-startupp.webp" alt="" class="mx-2 h-16"> <!-- Adjusted height for smaller size -->
                    </div>
                </div>
                <div class="bg-white text-black p-6 rounded-lg w-full sm:w-64 border border-spacing-2">
                    <p class="text-md font-medium text-center mb-4">Bekerjasama dengan</p>
                    <div class="flex justify-center space-x-2 mt-8"> <!-- Adjusted for alignment -->
                        <img src="./assets/corporate/paragon.webp" alt="Users" class="mx-auto h-6"> <!-- Adjusted height for smaller size -->
                        <img src="./assets/corporate/microsoftt.webp" alt="Users" class="mx-auto  h-6"> <!-- Adjusted height for smaller size -->
                        <img src="./assets/corporate/mandiri.webp" alt="Users" class="mx-auto  h-6"> <!-- Adjusted height for smaller size -->
                    </div>
                </div>
                <div class="bg-white text-black p-6 rounded-lg w-full sm:w-64 border border-spacing-2">
                    <p class="text-md font-medium text-center mb-4">Bekerjasama dengan</p>
                    <div class="flex justify-center space-x-1 mt-8"> <!-- Reduced space-x-2 to space-x-1 -->
                        <img src="./assets/corporate/techinasia.webp" alt="Users" class="mx-auto h-4"> <!-- Adjusted height to h-4 -->
                        <img src="./assets/corporate/cnbc.webp" alt="Users" class="mx-auto h-4"> <!-- Adjusted height to h-4 -->
                        <img src="./assets/corporate/technode.webp" alt="Users" class="mx-auto h-4"> <!-- Adjusted height to h-4 -->
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="w-screen h-auto">
        <p class="bg-clip-text bg-gradient-to-r from-orange-400 to-pink-500 ml-4 mt-4 text-transparent text-xl">
            MySkill Experience akan Rilis Segera!
        </p>
        <h3 class=" mt-4 ml-4 text-4xl font-bold mb-4 text-black w-full">Daftar sekarang untuk mendapat info detail produk dan promo.</h3>
        <p class="text-black ml-4 mt-4 text-transparent text-xl">
            Kembangkan bisnis perusahaan Kamu dengan mengembangkan SDM di
        </p>
        <p class="text-black ml-4 mb-4 text-transparent text-xl">
            dalamnya melalui LMS MySkill segera.
        </p>  

        <div class=" flex items-center justify-center">
            <div class="mx-auto w-full ml-4">
                <form class="bg-white space-y-6">
                    <div class="grid grid-cols-2 gap-3"> <!-- Adjusted column size -->
                        <label for="nama" class="font-bold">Email Resmi / Perusahaan
                            <input type="text" id="nama" class="w-full p-4 bg-gray-300 rounded-lg">
                        </label>
                        <label for="jabatan" class="font-bold">Telepon /WhatsApp
                            <input type="text" id="jabatan" class="w-full p-4 bg-gray-300 rounded-lg">
                        </label>
                        <label for="perusahaan" class="font-bold">Departemen
                            <input type="text" id="perusahaan" class="w-full p-4 bg-gray-300 rounded-lg">
                        </label>
                        <label for="email" class="font-bold">Total Karayawan
                            <input type="email" id="email" class="w-full p-4 bg-gray-300 rounded-lg">
                        </label>
                        <label for="no-hp" class="font-bold">Nama Lengkap
                            <input type="text" id="no-hp" class="w-full p-4 bg-gray-300 rounded-lg">
                        </label>
                        <label for="no-hp" class="font-bold">Posisi di Perusahaan
                            <input type="text" id="no-hp" class="w-full p-4 bg-gray-300 rounded-lg">
                        </label>
                        <label for="no-hp" class="font-bold">Nama Perusahaan
                            <input type="text" id="no-hp" class="w-full p-4 bg-gray-300 rounded-lg">
                        </label>
                        <label for="no-hp" class="font-bold">Website Perusahaan
                            <input type="text" id="no-hp" class="w-full p-4 bg-gray-300 rounded-lg">
                        </label>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit"
                            class="w-auto px-4 py-2 bg-gray-300 text-white font-bold rounded-lg mb-4">Kirim</button>
                        <p class="mb-4">silahkan lengkapi form diatas untuk mengirim pesan</p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection