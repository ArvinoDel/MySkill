@extends('layouts.main')
@section('container')
<!-- header here -->
<section class="review w-screen h-auto">
    <section class=" bg-white lg:bg-gradient-to-b from-orange-400 to-red-400 text-white lg:flex">
        <img src="{{ asset('./assets/review/reviewcv.png') }}" class="h-72 w-72 object-fill max-lg:w-1/4 lg:ml-16 py-2 max-sm:ml-12">
        <div class="p-4">
            <p class="text-3xl font-bold lg:text-white text-black lg:w-4/5 w-full max-lg:w-96">
                Dapatkan Review CV oleh HRD & Dokumen Persiapan Melamar Kerja.
            </p>
            <br class="max-sm:hidden">
            <p class="lg:w-8/12 lg:text-white text-black">
                Tingkatkan peluang diterima magang dan kerja full-time dengan bantuan HRD. Mulai dari Review CV, Template Surat Lamaran, hingga persiapan wawancara.
            </p>
            <br class="max-sm:hidden">
            <button type="button"
                class="max-sm:hidden focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">
                Daftar Sekarang
            </button>
            <div class="flex items-center mt-2 max-sm:hidden">
                <div class="flex space-x-1">
                    <img src="{{ asset('./assets/bootcamp/hero-header.png') }}"
                        class="h-6 w-6 rounded-full">
                    <img src="{{ asset('./assets/bootcamp/hero-header.png') }}"
                        class="h-6 w-6 rounded-full">
                    <img src="{{ asset('./assets/bootcamp/hero-header.png') }}"
                        class="h-6 w-6 rounded-full">
                    <img src="{{ asset('./assets/bootcamp/hero-header.png') }}"
                        class="h-6 w-6 rounded-full">
                    <img src="{{ asset('./assets/bootcamp/hero-header.png') }}"
                        class="h-6 w-6 rounded-full">
                </div>
                <p class="ml-4 text-white text-md font-semibold">> 10.000 CV Telah Direview</p>
            </div>
        </div>

    </section>

    <!-- card here -->
    <section class="bg-white lg:bg-red-400 text-white lg:flex">
        <div class="flex justify-center items-center">
            <p class="flex text-center lg:px-40 lg:ml-64 text-2xl font-bold text-white">Testimoni Peserta Review CV
                MySkill</p>
        </div>
    </section>
    <section class="bg-white lg:bg-gradient-to-b from-red-400 to-red-500 text-white lg:flex">
        <div class="flex mt-4 mb-4 max-sm:overflow-x-auto max-lg:overflow-x-auto no-scrollbar">
            <div class="bg-white p-2 rounded-lg ml-4 ">
                <img src="{{ asset('./assets/review/dummyreview.png') }}" class="w-56 rounded-md">
                <button type="button"
                    class="mt-2 ml-2 px-14 py-2 text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm">Baca
                    Sekarang</button>
            </div>
            <div class="bg-white p-2 rounded-lg ml-4">
                <img src="{{ asset('./assets/review/dummyreview.png') }}" class="w-56 rounded-md">
                <button type="button"
                    class="mt-2 ml-2 px-14 py-2 text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm">Baca
                    Sekarang</button>
            </div>
            <div class="bg-white p-2 rounded-lg ml-4">
                <img src="{{ asset('./assets/review/dummyreview.png') }}" class="w-56 rounded-md">
                <button type="button"
                    class="mt-2 ml-2 px-14 py-2 text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm">Baca
                    Sekarang</button>
            </div>
            <div class="bg-white p-2 rounded-lg ml-4">
                <img src="{{ asset('./assets/review/dummyreview.png') }}" class="w-56 rounded-md">
                <button type="button"
                    class="mt-2 ml-2 px-14 py-2 text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm">Baca
                    Sekarang</button>
            </div>
            <div class="bg-white p-2 rounded-lg ml-4">
                <img src="{{ asset('./assets/review/dummyreview.png') }}" class="w-56 rounded-md">
                <button type="button"
                    class="mt-2 ml-2 px-14 py-2 text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm">Baca
                    Sekarang</button>
            </div>
        </div>
    </section>

    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full max-lg:hidden md:w-1/4 px-4 mb-8 sticky top-11 h-screen">
                <div class="bg-white rounded-xl shadow-2xl p-6 border border-spacing-2 hover:shadow-lg transition-shadow duration-300">
                    <h4 class="font-bold text-lg mb-4">Detail</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center"><svg class="w-5 h-5 text-gray-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6l6 6-6 6"></path></svg><a href="#tentang-program" class="text-gray-600 hover:text-blue-800">Tentang Program</a></li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-gray-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6l6 6-6 6"></path></svg><a href="#benefit-tambahan" class="text-gray-600 hover:text-blue-800">Benefit Tambahan</a></li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-gray-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6l6 6-6 6"></path></svg><a href="#untuk-siapa-saja" class="text-gray-600 hover:text-blue-800">Untuk Siapa Saja</a></li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-gray-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6l6 6-6 6"></path></svg><a href="#harga-program" class="text-gray-600 hover:text-blue-800">Harga Program</a></li>
                    </ul>
                    <button
                        class="w-full bg-yellow-500 text-white font-bold py-2 px-4 rounded mt-6 hover:bg-yellow-600 ">
                        <svg class="w-5 h-5 inline-block mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M13 2L3 14h8v8l10-12h-8V2z"/></svg>
                        Daftar Sekarang
                    </button>
                </div>
            </div>

            <div class="w-screen lg:w-3/4 px-4">
                <div class="bg-white rounded-lg p-6 mb-8">
                    <p id="tentang-program"
                        class="text-orange-600 lg:ml-4 mb-2 lg:text-xl max-sm:text-lg max-sm:ml-2 font-bold">
                        <i class="fas fa-chevron-right sm:text-base text-orange-600 mr-3"></i>Tentang Bootcamp
                    </p>
                    <!-- Gambar di sebelah kiri -->
                    <p class="mb-4 lg:ml-4 lg:text-base max-sm:ml-2">MySkill paham, proses melamar magang atau kerja
                        amat membingungkan. Kita seolah menebak-nebak standar HRD dalam menilai CV kita akan seperti
                        apa? Untuk itu, HR Consultant MySkill hadir untuk membantu mereview CV kamu. Dalam waktu 7 hari
                        kerja, kamu akan mendapatkan saran terperinci untuk meningkatkan kualitas CV lamaranmu.</p>
                    <div class="flex flex-col md:flex-row items-start">

                        <img src="./assets/corporate/benefit-main.webp" alt=""
                            class="w-60 mx-auto max-sm:justify-items-center md:w-1/3 mb-4 md:mb-0 md:mr-4">
                        <!-- Tulisan di sebelah kanan -->
                        <div>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    CV kamu akan direview langsung oleh HRD profesional. Baik CV magang, kerja, beasiswa
                                    dan keperluan profesional lainnya.
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Review diberikan maksimal dalam waktu 7 hari kerja (Dilakukan pada hari dan jam
                                    kerja: Senin - Jumat, pukul 09.00 - 17.00 WIB)
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Pembahasan detail dan mendalam untuk setiap bagian CV. Kamu akan mendapat saran
                                    editing dan contoh di tiap poin CV kamu.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-6 mb-8">
                    <p id="benefit-tambahan"
                        class="text-orange-600 lg:mb-4 lg:ml-4 lg:text-xl max-sm:text-lg max-sm:mb-6 max-sm:ml-2 font-bold">
                        <i class="fas fa-chevron-right sm:text-base text-orange-600 mr-3"></i>Benefit Tambahan
                    </p>
                    <div class="overflow-x-auto no-scrollbar">
                        <div class="flex space-x-6">
                            <div class="border rounded-lg p-4 flex-shrink-0 w-80">
                                <div class="flex items-center">
                                    <!-- Gambar di sebelah kiri -->
                                    <img src="./assets/corporate/benefit-additional-1.webp" alt=""
                                        class="w-24 h-24 object-cover mr-4">
                                    <!-- Tulisan di sebelah kanan -->
                                    <div>
                                        <h5 class="font-bold text-lg mb-2">20 Template CV</h5>
                                        <p class="mb-2">Bahasa Indonesia & Bahasa Inggris yang ATS Friendly</p>
                                        <p class="text-sm text-gray-600">7.345 pengguna</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border rounded-lg p-4 flex-shrink-0 w-80">
                                <div class="flex items-center">
                                    <img src="./assets/corporate/benefit-additional-2.webp" alt=""
                                        class="w-24 h-24 object-cover mr-4">
                                    <div>
                                        <h5 class="font-bold text-lg mb-2">20 Template Surat Lamaran</h5>
                                        <p class="mb-2">Bahasa Indonesia & Bahasa Inggris</p>
                                        <p class="text-sm text-gray-600">6.845 pengguna</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border rounded-lg p-4 flex-shrink-0 w-80">
                                <div class="flex items-center">
                                    <img src="./assets/corporate/benefit-additional-3.webp" alt=""
                                        class="w-24 h-24 object-cover mr-4">
                                    <div>
                                        <h5 class="font-bold text-lg mb-2">100+ Powerful Keywords for CV</h5>
                                        <p class="mb-2">Bahasa Indonesia & Bahasa Inggris sesuai profesi</p>
                                        <p class="text-sm text-gray-600">7.264 pengguna</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border rounded-lg p-4 flex-shrink-0 w-80">
                                <div class="flex items-center">
                                    <img src="./assets/corporate/benefit-additional-4.webp" alt=""
                                        class="w-24 h-24 object-cover mr-4">
                                    <div>
                                        <h5 class="font-bold text-lg mb-2">10 Template Email Lamaran</h5>
                                        <p class="mb-2">Bahasa Indonesia & Bahasa Inggris</p>
                                        <p class="text-sm text-gray-600">5.567 pengguna</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border rounded-lg p-4 flex-shrink-0 w-80">
                                <div class="flex items-center">
                                    <img src="./assets/corporate/benefit-additional-5.webp" alt=""
                                        class="w-24 h-24 object-cover mr-4">
                                    <div>
                                        <h5 class="font-bold text-lg mb-2">Interview Question & Tips</h5>
                                        <p class="mb-2">Bikin HR susah skip</p>
                                        <p class="text-sm text-gray-600">4.425 pengguna</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border rounded-lg p-4 flex-shrink-0 w-80">
                                <div class="flex items-center">
                                    <img src="./assets/corporate/benefit-additional-6.webp" alt=""
                                        class="w-24 h-24 object-cover mr-4">
                                    <div>
                                        <h5 class="font-bold text-lg mb-2">LinkedIn Guideline</h5>
                                        <p class="mb-2">Sulap profil LinkedIn-mu jadi profesional</p>
                                        <p class="text-sm text-gray-600">4.756 pengguna</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-6">
                    <p id="untuk-siapa-saja"
                        class="text-orange-600 lg:ml-4 mb-4 lg:text-xl max-sm:text-lg max-sm:ml-2 max-sm:mb-4 font-bold">
                        <i class="fas fa-chevron-right sm:text-base text-orange-600 mr-3"></i>Untuk Siapa Saja
                    </p>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        @foreach (['Mahasiswa', 'Fresh Graduate', 'Job Seeker', 'Karyawan Profesional', 'Lulusan SMA/SMK', 'Internship Hunter', 'Pencari Beasiswa', 'Freelancer'] as $audience)
                        <div class="bg-gray-100 rounded-lg p-3 flex items-center">
                            <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                            {{ $audience }}
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="overflow-x-auto mt-10 no-scrollbar">
                    <p id="harga-program"
                        class="text-orange-600 lg:ml-10 lg:text-xl max-sm:text-lg max-sm:ml-8 font-bold">
                        <i class="fas fa-chevron-right sm:text-base text-orange-600 mr-3"></i>Harga Program
                    </p>
                    <div class="flex justify-between"> <!-- Added flex container for alignment -->
                        <!-- Card 1 -->
                        <div class="bg-white rounded-lg shadow-xl p-6 m-4 max-w-xs flex-shrink-0 flex flex-col">
                            <!-- Added flex column -->
                            <h2 class="text-teal-500 text-lg font-semibold mb-4">3x Review CV (2 Bulan)</h2>
                            <ul class="text-gray-700 mb-6 space-y-2">
                                <li>🔥 3x Review CV selama 2 Bulan</li>
                                <li>🔥 20+ Template CV (Indonesia & English)</li>
                                <li>🔥 10+ Template Surat Lamaran (Indonesia & English)</li>
                                <li>🔥 10+ Template Email Lamaran</li>
                                <li>🔥 100+ Powerful Keywords for CV</li>
                                <li>🔥 Interview Question & Tips</li>
                                <li>🔥 LinkedIn Guideline</li>
                            </ul>
                            <p class="text-lg line-through text-gray-400">Rp 150.000</p>
                            <p class="text-2xl font-bold text-teal-500 mb-4">Rp 35.000</p>
                            <button class="bg-teal-500 text-white font-semibold py-2 px-4 rounded-lg w-full">
                                <svg class="w-5 h-5 inline-block mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M13 2L3 14h8v8l10-12h-8V2z"/></svg>
                                Daftar Sekarang
                            </button>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-white rounded-lg shadow-xl p-6 m-4 max-w-xs flex-shrink-0 flex flex-col">
                            <!-- Added flex column -->
                            <h2 class="text-teal-500 text-lg font-semibold mb-4">1x Review CV (1 Bulan)</h2>
                            <ul class="text-gray-700 mb-6 space-y-2">
                                <li>🔥 1x Review CV selama 1 Bulan</li>
                                <li>🔥 20+ Template CV (Indonesia & English)</li>
                                <li>🔥 10+ Template Surat Lamaran (Indonesia & English)</li>
                                <li>🔥 10+ Template e-Mail Lamaran Kerja</li>
                                <li>🔥 100+ Powerful Keywords for CV</li>
                            </ul>
                            <p class="text-lg line-through text-gray-400">Rp 50.000</p>
                            <p class="text-2xl font-bold text-teal-500 mb-4">Rp 15.000</p>
                            <button class="bg-teal-500 text-white font-semibold py-2 px-4 rounded-lg w-full">
                                <svg class="w-5 h-5 inline-block mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M13 2L3 14h8v8l10-12h-8V2z"/></svg>
                                Daftar Sekarang
                            </button>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white rounded-lg shadow-xl p-6 m-4 max-w-xs flex-shrink-0 flex flex-col">
                            <!-- Added flex column -->
                            <h2 class="text-teal-500 text-lg font-semibold mb-4">50+ Template Dokumen Lengkap untuk
                                Apply Kerja (1 Bulan)</h2>
                            <ul class="text-gray-700 mb-6 space-y-2">
                                <li>🔥 20+ Template CV (Indonesia & English)</li>
                                <li>🔥 10+ Template Surat Lamaran (Indonesia & English)</li>
                                <li>🔥 10+ Template Email Lamaran</li>
                                <li>🔥 100+ Powerful Keyword for CV/LinkedIn</li>
                                <li>🔥 LinkedIn Guideline</li>
                                <li>🔥 Interview Question & Tips</li>
                            </ul>
                            <p class="text-lg line-through text-gray-400">Rp 20.000</p>
                            <p class="text-2xl font-bold text-teal-500 mb-4">Rp 10.000</p>
                            <button class="bg-teal-500 text-white font-semibold py-2 px-4 rounded-lg w-full">
                                <svg class="w-5 h-5 inline-block mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M13 2L3 14h8v8l10-12h-8V2z"/></svg>
                                Daftar Sekarang
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection