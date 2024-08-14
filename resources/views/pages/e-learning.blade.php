@extends('layouts.main')
@section('container')
    <section class="e-learning">
        <!-- Section 1: Hero -->
        <section class="bg-white lg:bg-gradient-to-b from-orange-400 to-red-500 p-4 md:p-8">
            <div class="container mx-auto">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-4 md:mb-0 ml-4 relative">
                        <img src="{{ asset('assets/e-learning/header.webp') }}" alt="Woman with laptop"
                            class="w-full h-auto md:w-3/4 rounded-lg">

                    </div>
                    <div class="">
                        <h1 class="text-3xl md:text-4xl font-bold mb-4 lg:text-white text-gray-950">Kuasai Ratusan Skill,
                            Bangun Portfolio &
                            Bersertifikat.</h1>
                        <p class="text-sm md:text-base lg:text-white mb-4 text-gray-950">Akses semua materi sekali bayar.
                            Lebih dari sekadar
                            nonton rekaman.
                            Belajar fleksibel via • Video Materi • Case Study & Praktik • Bahan Bacaan • Komunitas.</p>
                        <div class="flex space-x-4 mb-4 ">
                            <button class="bg-teal-500 lg:text-white px-6 py-2 rounded-md font-semibold text-gray-950">Mulai
                                Berlangganan</button>
                            <button
                                class="bg-yellow-500 lg:text-white px-6 py-2 rounded-md font-semibold text-gray-950">Lihat
                                900+
                                Materi</button>
                        </div>
                        <p class="text-sm lg:text-white text-gray-950">2.000+ Orang Berlangganan Setiap Minggu</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Testimonials -->
        <section class="bg-gray-100 p-4 md:p-8">
            <div class="container mx-auto">
                <h2 class="text-2xl font-bold mb-6">Testimoni Member E-learning MySkill</h2>
                <div class="flex overflow-x-auto space-x-4 pb-4 no-scrollbar">
                    <div class="bg-white p-4 rounded-lg shadow-md min-w-[280px]">

                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/e-learning/cards.webp') }}" alt="" class="rounded-lg">

                        </div>
                        <button class="w-full bg-teal-500 text-white py-2 rounded-md font-semibold">Baca Cerita</button>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md min-w-[280px]">

                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/e-learning/cards.webp') }}" alt="" class="rounded-lg">

                        </div>
                        <button class="w-full bg-teal-500 text-white py-2 rounded-md font-semibold">Baca Cerita</button>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md min-w-[280px]">

                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/e-learning/cards.webp') }}" alt="" class="rounded-lg">

                        </div>
                        <button class="w-full bg-teal-500 text-white py-2 rounded-md font-semibold">Baca Cerita</button>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md min-w-[280px]">

                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/e-learning/cards.webp') }}" alt="" class="rounded-lg">

                        </div>
                        <button class="w-full bg-teal-500 text-white py-2 rounded-md font-semibold">Baca Cerita</button>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md min-w-[280px]">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/e-learning/cards.webp') }}" alt="" class="rounded-lg">

                        </div>
                        <button class="w-full bg-teal-500 text-white py-2 rounded-md font-semibold">Baca Cerita</button>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md min-w-[280px]">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/e-learning/cards.webp') }}" alt="" class="rounded-lg">

                        </div>
                        <button class="w-full bg-teal-500 text-white py-2 rounded-md font-semibold">Baca Cerita</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Solutions -->
        <section class="bg-white p-4 md:p-8">
            <div class="container mx-auto flex flex-col items-center text-center">
                <h4 class="text-md">E-Learning</h4>
                <h2 class="text-2xl font-bold mb-6">Solusi #1 Kuasai Ratusan Skill Profesional</h2>
            </div>
            <div class="container mx-auto flex flex-col md:flex-row">
                <!-- Left Column with Cards -->
                <div class="w-full md:w-1/2 flex flex-col space-y-4">
                    <div id="card1" data-target="img1"
                        class="card bg-white border border-gray-300 rounded-lg p-4 transition-transform duration-300 ease-in-out transform hover:scale-105 hover:border-indigo-500 focus:ring-2 focus:ring-l-indigo-500 cursor-pointer shadow-md">
                        <h3 class="font-bold mb-2">Belajar Fleksibel dan Bersertifikat</h3>
                        <p class="text-sm text-gray-600">Disusun bertahap dari level dasar hingga lanjutan oleh praktisi
                            industri dari berbagai top companies. Dapatkan e-certificate di tiap materi.</p>
                    </div>
                    <div id="card2" data-target="img2"
                        class="card bg-white border border-gray-300 rounded-lg p-4 transition-transform duration-300 ease-in-out transform hover:scale-105 hover:border-indigo-500 focus:ring-2 focus:ring-light-blue-500 cursor-pointer shadow-md">
                        <h3 class="font-bold mb-2">Kombinasi Strategi, Praktek & Portfolio</h3>
                        <p class="text-sm text-gray-600">Belajar sambil Praktek dengan ragam case study, worksheet dan
                            framework. Didasarkan pada kebutuhan industri dan profesi.</p>
                    </div>
                    <div id="card3" data-target="img3"
                        class="card bg-white border border-gray-300 rounded-lg p-4 transition-transform duration-300 ease-in-out transform hover:scale-105 hover:border-indigo-500 focus:ring-2 focus:ring-light-blue-500 cursor-pointer shadow-md">
                        <h3 class="font-bold mb-2">Gabung Komunitas Diskusi secara Lifetime</h3>
                        <p class="text-sm text-gray-600">Bangun network profesional, saling sharing ilmu dan praktik, sampai
                            berbagi info loker maupun freelance. Hobi kumpul juga.</p>
                    </div>
                    <div id="card4" data-target="img4"
                        class="card bg-white border border-gray-300 rounded-lg p-4 transition-transform duration-300 ease-in-out transform hover:scale-105 hover:border-indigo-500 focus:ring-2 focus:ring-light-blue-500 cursor-pointer shadow-md">
                        <h3 class="font-bold mb-2">Ratusan Ribu Member. Terbukti Berdampak</h3>
                        <p class="text-sm text-gray-600">Member MySkill telah terbukti diterima di National & Multinational
                            companies, membangun bisnis hingga freelance.</p>
                    </div>
                </div>
                <!-- Right Column with Images -->
                <div class="w-full md:w-1/2 flex items-center justify-center">
                    <!-- Images for the Cards -->

                    <div class="w-11/12 h-auto max-w-[90%] object-cover hidden transform fade-in-right" id="img1">
                        <img src="{{ asset('assets/e-learning/1.webp') }}" alt="Image 1">
                    </div>
                    <div class="w-11/12 h-auto max-w-[90%] object-cover hidden transform fade-in-right" id="img2">
                        <img src="{{ asset('assets/e-learning/2.webp') }}" alt="Image 2">
                    </div>
                    <div class="w-11/12 h-auto max-w-[90%] object-cover hidden transform fade-in-right" id="img3">
                        <img src="{{ asset('assets/e-learning/4.webp') }}" alt="Image 3">
                    </div>
                    <div class="w-11/12 h-auto max-w-[90%] object-cover hidden transform fade-in-right" id="img4">
                        <img src="{{ asset('assets/e-learning/3.webp') }}" alt="Image 4">
                    </div>

                </div>
            </div>

        </section>

        <!-- Section 4: Popular Courses -->
        <section class="bg-gray-100 p-4 md:p-8">
            <div class="container mx-auto">
                <h2 class="text-2xl font-bold mb-4">Ratusan Skill Impian Kini Dalam Genggamanmu</h2>
                <p class="mb-4 text-gray-600">Lihat contoh beberapa materi terpopuler rancangan experts berikut. Materi
                    baru
                    setiap bulan tanpa tambahan biaya.</p>
                <div class="flex overflow-x-auto space-x-2 pb-2 no-scrollbar mb-5">
                    <button
                        class="bg-teal-500 text-white px-4 py-2 rounded-full font-semibold flex-shrink-0 whitespace-nowrap">Digital
                        Marketing</button>
                    <button
                        class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full font-semibold flex-shrink-0 whitespace-nowrap">Data
                        Science & Data Analysis</button>
                    <button
                        class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full font-semibold flex-shrink-0 whitespace-nowrap">Microsoft
                        Excel, Word and PowerPoint</button>
                    <button
                        class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full font-semibold flex-shrink-0 whitespace-nowrap">UI-UX
                        Research and Design</button>
                    <button
                        class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full font-semibold flex-shrink-0 whitespace-nowrap">Product
                        and Project Management</button>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <div
                        class="bg-white p-4 rounded-lg shadow-sm transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                        <img src="{{ asset('assets/e-learning/test.webp') }}" alt="Copywriting"
                            class="w-4/5 justify-items-center mx-auto h-auto object-fit rounded-lg mb-2">
                        <h3 class="font-bold text-sm mb-4">Copywriting Introduction</h3>
                        <p class="text-xs text-gray-600 mb-6">VERONICA G.</p>
                        <div class="flex items-center text-xs text-gray-500">
                            <span>5 Video</span>
                            <span class="mx-1">•</span>
                            <span>21.403</span>
                        </div>
                        <div class="flex items-center mt-6">
                            <span class="text-yellow-400 text-sm">★★★★★</span>
                            <span class="ml-1 text-xs text-gray-600">4.7/5</span>
                            <span class="ml-1 text-xs bg-blue-100 text-blue-800 px-1 rounded">1</span>
                        </div>
                    </div>
                    <div
                        class="bg-white p-4 rounded-lg shadow-sm transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                        <img src="{{ asset('assets/e-learning/test.webp') }}" alt="Copywriting"
                            class="w-4/5 justify-items-center mx-auto h-auto object-fit rounded-lg mb-2">
                        <h3 class="font-bold text-sm mb-4">Copywriting Introduction</h3>
                        <p class="text-xs text-gray-600 mb-6">VERONICA G.</p>
                        <div class="flex items-center text-xs text-gray-500">
                            <span>5 Video</span>
                            <span class="mx-1">•</span>
                            <span>21.403</span>
                        </div>
                        <div class="flex items-center mt-6">
                            <span class="text-yellow-400 text-sm">★★★★★</span>
                            <span class="ml-1 text-xs text-gray-600">4.7/5</span>
                            <span class="ml-1 text-xs bg-blue-100 text-blue-800 px-1 rounded">1</span>
                        </div>
                    </div>
                    <div
                        class="bg-white p-4 rounded-lg shadow-sm transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                        <img src="{{ asset('assets/e-learning/test.webp') }}" alt="Copywriting"
                            class="w-4/5 justify-items-center mx-auto h-auto object-fit rounded-lg mb-2">
                        <h3 class="font-bold text-sm mb-4">Copywriting Introduction</h3>
                        <p class="text-xs text-gray-600 mb-6">VERONICA G.</p>
                        <div class="flex items-center text-xs text-gray-500">
                            <span>5 Video</span>
                            <span class="mx-1">•</span>
                            <span>21.403</span>
                        </div>
                        <div class="flex items-center mt-6">
                            <span class="text-yellow-400 text-sm">★★★★★</span>
                            <span class="ml-1 text-xs text-gray-600">4.7/5</span>
                            <span class="ml-1 text-xs bg-blue-100 text-blue-800 px-1 rounded">1</span>
                        </div>
                    </div>
                    <div
                        class="bg-white p-4 rounded-lg shadow-sm transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                        <img src="{{ asset('assets/e-learning/test.webp') }}" alt="Copywriting"
                            class="w-4/5 justify-items-center mx-auto h-auto object-fit rounded-lg mb-2">
                        <h3 class="font-bold text-sm mb-4">Copywriting Introduction</h3>
                        <p class="text-xs text-gray-600 mb-6">VERONICA G.</p>
                        <div class="flex items-center text-xs text-gray-500">
                            <span>5 Video</span>
                            <span class="mx-1">•</span>
                            <span>21.403</span>
                        </div>
                        <div class="flex items-center mt-6">
                            <span class="text-yellow-400 text-sm">★★★★★</span>
                            <span class="ml-1 text-xs text-gray-600">4.7/5</span>
                            <span class="ml-1 text-xs bg-blue-100 text-blue-800 px-1 rounded">1</span>
                        </div>
                    </div>
                    <div
                        class="bg-white p-4 rounded-lg shadow-sm transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                        <img src="{{ asset('assets/e-learning/test.webp') }}" alt="Copywriting"
                            class="w-4/5 justify-items-center mx-auto h-auto object-fit rounded-lg mb-2">
                        <h3 class="font-bold text-sm mb-4">Copywriting Introduction</h3>
                        <p class="text-xs text-gray-600 mb-6">VERONICA G.</p>
                        <div class="flex items-center text-xs text-gray-500">
                            <span>5 Video</span>
                            <span class="mx-1">•</span>
                            <span>21.403</span>
                        </div>
                        <div class="flex items-center mt-6">
                            <span class="text-yellow-400 text-sm">★★★★★</span>
                            <span class="ml-1 text-xs text-gray-600">4.7/5</span>
                            <span class="ml-1 text-xs bg-blue-100 text-blue-800 px-1 rounded">1</span>
                        </div>
                    </div>
                    <div
                        class="bg-white p-4 rounded-lg shadow-sm transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                        <img src="{{ asset('assets/e-learning/test.webp') }}" alt="Copywriting"
                            class="w-4/5 justify-items-center mx-auto h-auto object-fit rounded-lg mb-2">
                        <h3 class="font-bold text-sm mb-4">Copywriting Introduction</h3>
                        <p class="text-xs text-gray-600 mb-6">VERONICA G.</p>
                        <div class="flex items-center text-xs text-gray-500">
                            <span>5 Video</span>
                            <span class="mx-1">•</span>
                            <span>21.403</span>
                        </div>
                        <div class="flex items-center mt-6">
                            <span class="text-yellow-400 text-sm">★★★★★</span>
                            <span class="ml-1 text-xs text-gray-600">4.7/5</span>
                            <span class="ml-1 text-xs bg-blue-100 text-blue-800 px-1 rounded">1</span>
                        </div>
                    </div>
                    <div
                        class="bg-white p-4 rounded-lg shadow-sm transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                        <img src="{{ asset('assets/e-learning/test.webp') }}" alt="Copywriting"
                            class="w-4/5 justify-items-center mx-auto h-auto object-fit rounded-lg mb-2">
                        <h3 class="font-bold text-sm mb-4">Copywriting Introduction</h3>
                        <p class="text-xs text-gray-600 mb-6">VERONICA G.</p>
                        <div class="flex items-center text-xs text-gray-500">
                            <span>5 Video</span>
                            <span class="mx-1">•</span>
                            <span>21.403</span>
                        </div>
                        <div class="flex items-center mt-6">
                            <span class="text-yellow-400 text-sm">★★★★★</span>
                            <span class="ml-1 text-xs text-gray-600">4.7/5</span>
                            <span class="ml-1 text-xs bg-blue-100 text-blue-800 px-1 rounded">1</span>
                        </div>
                    </div>
                    <div
                        class="bg-white p-4 rounded-lg shadow-sm transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                        <img src="{{ asset('assets/e-learning/test.webp') }}" alt="Copywriting"
                            class="w-4/5 justify-items-center mx-auto h-auto object-fit rounded-lg mb-2">
                        <h3 class="font-bold text-sm mb-4">Copywriting Introduction</h3>
                        <p class="text-xs text-gray-600 mb-6">VERONICA G.</p>
                        <div class="flex items-center text-xs text-gray-500">
                            <span>5 Video</span>
                            <span class="mx-1">•</span>
                            <span>21.403</span>
                        </div>
                        <div class="flex items-center mt-6">
                            <span class="text-yellow-400 text-sm">★★★★★</span>
                            <span class="ml-1 text-xs text-gray-600">4.7/5</span>
                            <span class="ml-1 text-xs bg-blue-100 text-blue-800 px-1 rounded">1</span>
                        </div>
                    </div>

                </div>
        </section>

        <!-- Section 5: Pricing -->
        <section class="bg-gradient-to-b from-blue-100 to-white py-12 px-4">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-2">Langganan Sekarang dan Jadi Lebih Hebat</h2>
                <p class="text-center mb-8 text-gray-600">Langganan bulanan untuk akses semua materi, tanpa batas. Makin
                    lama, makin hemat dan untung banyak.</p>

                <div class="flex flex-col mt-9 md:flex-row gap-6">
                    <!-- 12 Bulan Plan -->
                    <div class="">
                        <!-- Header -->
                        <div class="bg-blue-500 p-6 rounded-t-lg">
                            <h3 class="text-white text-lg font-semibold mb-1">12 Bulan</h3>
                            <p class="text-blue-100 text-sm mb-2">PAKET VIDEO E-LEARNING</p>
                            <p class="text-white text-sm line-through mb-1">Rp 4.200.000</p>
                            <p class="text-white text-2xl font-bold mb-2">Rp 179.000</p>
                            <p class="text-white text-sm mb-2">Untuk akses semua, setara Rp 7.250 / minggu.</p>
                        </div>

                        <!-- Body -->
                        <div class="p-6 bg-white rounded-b-lg">

                            <ul class="text-gray-800 text-sm mb-6 space-y-2">
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-gray-800" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>1400+ Materi Video</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-gray-800" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>1400+ Modul Praktik Portfolio</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-gray-800" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>Sertifikat di Tiap Materi</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-gray-800" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>Grup Komunitas</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-gray-800" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>FREE 6-12x Webinar Series</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-gray-800" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>Diskon untuk Bootcamp</li>
                            </ul>
                            <button
                                class="w-full bg-blue-500 text-white font-semibold py-2 rounded text-sm hover:bg-blue-600 transition-colors">Mulai
                                Berlangganan</button>
                            <p class="text-blue-100 text-xs mt-2">Segera Habis 🔥</p>
                            <div class="w-full h-1 bg-blue-400 rounded mt-1"></div>
                        </div>
                    </div>

                    <!-- 6 Bulan Plan (Most Popular) -->
                    <div class=" bottom-5 border-4 border-yellow-400 rounded-lg relative">
                        <!-- Header -->
                        <div class="bg-teal-600 p-6 rounded-t-lg">
                            <div
                                class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-yellow-400 text-white px-4 py-1 rounded-full text-sm font-semibold">
                                TERPOPULER!
                            </div>
                            <h3 class="text-white text-md font-semibold mb-1">6 Bulan</h3>
                            <p class="text-white text-sm mb-2">PAKET VIDEO E-LEARNING</p>
                            <p class="text-white text-sm line-through mb-1">Rp 2.100.000</p>
                            <p class="text-white text-2xl font-bold mb-2">Rp 99.000</p>
                            <p class="text-white text-sm mb-2">Untuk akses semua, setara Rp 16.500 / bulan.</p>
                        </div>

                        <!-- Body -->
                        <div class="p-6 bg-white rounded-b-lg">
                            <ul class="text-gray-800 text-sm mb-6 space-y-2">
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-teal-500" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>1400+ Materi Video</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-teal-500" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>1400+ Modul Praktik Portfolio</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-teal-500" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>Sertifikat di Tiap Materi</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-teal-500" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>Grup Komunitas</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-teal-500" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>FREE 6-12x Webinar Series</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-teal-500" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>Diskon untuk Bootcamp</li>
                            </ul>
                            <button
                                class="w-full bg-teal-600 text-white font-semibold py-2 rounded text-sm hover:bg-teal-700 transition-colors">Mulai
                                Berlangganan</button>
                            <p class="text-gray-700 text-xs mt-2">Segera Habis 🔥</p>
                            <div class="w-3/4 h-1 bg-teal-200 rounded mt-1"></div>
                        </div>
                    </div>



                    <!-- 1 Bulan Plan -->
                    <div class="">
                        <!-- Header -->
                        <div class="bg-blue-500 p-6 rounded-t-lg">
                            <h3 class="text-white text-lg font-semibold mb-1">1 Bulan</h3>
                            <p class="text-blue-100 text-sm mb-2">PAKET VIDEO E-LEARNING</p>
                            <p class="text-white text-sm line-through mb-1">Rp 350.000</p>
                            <p class="text-white text-2xl font-bold mb-2">Rp 29.000</p>
                            <p class="text-white text-sm mb-2">Untuk akses semua, setara Rp 7.250 / minggu.</p>
                        </div>

                        <!-- Body -->
                        <div class="p-6 bg-white rounded-b-lg">
                            <ul class="text-gray-800 text-sm mb-6 space-y-2">
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-gray-800" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>1400+ Materi Video</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-gray-800" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>1400+ Modul Praktik Portfolio</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-gray-800" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>Sertifikat di Tiap Materi</li>
                                <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-gray-800" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>Grup Komunitas</li>
                            </ul>
                            <button
                                class="w-full bg-blue-500 text-white font-semibold py-2 rounded text-sm hover:bg-blue-600 transition-colors">Mulai
                                Berlangganan</button>
                            <p class="text-blue-100 text-xs mt-2">Segera Habis 🔥</p>
                            <div class="w-full h-1 bg-blue-400 rounded mt-1"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </section>
@endsection
