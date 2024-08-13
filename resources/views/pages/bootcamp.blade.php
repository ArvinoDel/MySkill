@extends('layouts.main')
@section('container')
    <div class="bootcamp">
        <section class="w-full h-auto bg-white lg:bg-gradient-to-b from-orange-400 to-red-400 text-white lg:flex max-sm:text-black max-sm:bg-white">
            <img src="{{ asset('./assets/bootcamp/hero-header.png') }}" class="lg:h-72 w-auto lg:ml-16 py-2 max-sm:h-48 max-sm:w-12 max-sm:mx-auto max-sm:my-4">
            <div class="lg:ml-4 max-sm:text-black max-sm:w-full max-sm:text-center max-sm:mx-auto max-sm:py-4">
                <p class="text-4xl font-bold w-4/5 max-sm:text-xl max-sm:w-full max-sm:mx-auto">Bootcamp yang Memberi Hasil. Fokus Praktik & Portfolio.</p>
                <br>
                <p class="w-8/12 max-sm:w-full max-sm:text-sm max-sm:mx-auto">Full Online dan Dipandu oleh Praktisi Senior. Praktikal, lebih dari sekadar Webinar. Fokus Bantu Kembangkan Skill dan Portfolio Ribuan Alumni.</p>
                <br>
                <button type="button" class="focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900 max-sm:bg-yellow-500 max-sm:text-white max-sm:px-3 max-sm:py-1.5 max-sm:w-4/5 max-sm:mx-auto">Lihat Program Pilihan</button>
                <div class="flex items-center mt-2 max-sm:flex-col max-sm:items-center">
                    <div class="flex space-x-1 max-sm:space-x-2 max-sm:justify-center">
                        <img src="{{ asset('./assets/bootcamp/hero-header.png') }}" class="h-6 w-6 rounded-full max-sm:h-3 max-sm:w-3">
                        <img src="{{ asset('./assets/bootcamp/hero-header.png') }}" class="h-6 w-6 rounded-full max-sm:h-3 max-sm:w-3">
                        <img src="{{ asset('./assets/bootcamp/hero-header.png') }}" class="h-6 w-6 rounded-full max-sm:h-3 max-sm:w-3">
                        <img src="{{ asset('./assets/bootcamp/hero-header.png') }}" class="h-6 w-6 rounded-full max-sm:h-3 max-sm:w-3">
                        <img src="{{ asset('./assets/bootcamp/hero-header.png') }}" class="h-6 w-6 rounded-full max-sm:h-3 max-sm:w-3">
                    </div>
                    <p class="lg:ml-4 lg:text-white text-md font-semibold max-sm:text-black max-sm:ml-0 max-sm:text-sm max-sm:mt-2">> 10.000 Orang Telah Lulus</p>
                </div>
            </div>
            
        </section>
        


        <!-- Horizontal Scrollable Section -->
        <p class="mt-4 font-bold text-2xl flex justify-center px-14">Testimoni Alumni Bootcamp MySkill</p>
        <section class="mt-8 overflow-x-auto whitespace-nowrap px-8 py-4 mb-12 no-scrollbar">
            <div class="inline-block px-4">
                <div class="bg-white rounded-lg shadow-md p-4 w-64">
                    <img src="{{ asset('./assets/bootcamp/dummy.png') }}" class="h-34 w-64 rounded-sm">
                    <button class="mt-4 ml-4 w-48 bg-teal-500 text-white py-2 px-4 rounded">Baca Cerita</button>
                </div>
            </div>
            <div class="inline-block px-4">
                <div class="bg-white rounded-lg shadow-md p-4 w-64">
                    <img src="{{ asset('./assets/bootcamp/dummy.png') }}" class="h-34 w-64 rounded-sm">
                    <button class="mt-4 ml-4 w-48 bg-teal-500 text-white py-2 px-4 rounded">Baca Cerita</button>
                </div>
            </div>
            <div class="inline-block px-2">
                <div class="bg-white rounded-lg shadow-md p-4 w-64">
                    <img src="{{ asset('./assets/bootcamp/dummy.png') }}" class="h-34 w-64 rounded-sm">
                    <button class="mt-4 ml-4 w-48 bg-teal-500 text-white py-2 px-4 rounded">Baca Cerita</button>
                </div>
            </div>
            <div class="inline-block px-4">
                <div class="bg-white rounded-lg shadow-md p-4 w-64">
                    <img src="{{ asset('./assets/bootcamp/dummy.png') }}" class="h-34 w-64 rounded-sm">
                    <button class="mt-4 ml-4 w-48 bg-teal-500 text-white py-2 px-4 rounded">Baca Cerita</button>
                </div>
            </div>
            <div class="inline-block px-4">
                <div class="bg-white rounded-lg shadow-md p-4 w-64">
                    <img src="{{ asset('./assets/bootcamp/dummy.png') }}" class="h-34 w-64 rounded-sm">
                    <button class="mt-4 ml-4 w-48 bg-teal-500 text-white py-2 px-4 rounded">Baca Cerita</button>
                </div>
            </div>
            <div class="inline-block px-4">
                <div class="bg-white rounded-lg shadow-md p-4 w-64">
                    <img src="{{ asset('./assets/bootcamp/dummy.png') }}" class="h-34 w-64 rounded-sm">
                    <button class="mt-4 ml-4 w-48 bg-teal-500 text-white py-2 px-4 rounded">Baca Cerita</button>
                </div>
            </div>
        </section>

        <!-- search bar -->
        <div class="relative w-11/12 mx-auto mb-6">
            <input type="text" class="w-full p-2 pl-10 border border-gray-300 rounded"
                placeholder="Apa yang ingin kamu pelajari ?">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <i class="fas fa-search text-gray-500"></i>
            </span>
        </div>
        <!-- end search bar -->

        <!-- start grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 px-14">
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ asset('./assets/bootcamp/contentdummy.png') }}" class="h-34 w-full rounded-sm">
                <p class="mt-4 text-gray-700 font-semibold font-sans text-lg">Digital Marketing : Fullstack Intensive</p>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <p class="text-sm">9 Oktober 2024</p>
                </div>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-tag mr-2"></i>
                    <p class="text-sm">Rp 590.000 <span class="line-through text-red-500">Rp 1.000.000</span></p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ asset('./assets/bootcamp/contentdummy.png') }}" class="h-34 w-full rounded-sm">
                <p class="mt-4 text-gray-700 font-semibold font-sans text-lg">Digital Marketing : Fullstack Intensive</p>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <p class="text-sm">9 Oktober 2024</p>
                </div>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-tag mr-2"></i>
                    <p class="text-sm">Rp 590.000 <span class="line-through text-red-500">Rp 1.000.000</span></p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ asset('./assets/bootcamp/contentdummy.png') }}" class="h-34 w-full rounded-sm">
                <p class="mt-4 text-gray-700 font-semibold font-sans text-lg">Digital Marketing : Fullstack Intensive</p>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <p class="text-sm">9 Oktober 2024</p>
                </div>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-tag mr-2"></i>
                    <p class="text-sm">Rp 590.000 <span class="line-through text-red-500">Rp 1.000.000</span></p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ asset('./assets/bootcamp/contentdummy.png') }}" class="h-34 w-full rounded-sm">
                <p class="mt-4 text-gray-700 font-semibold font-sans text-lg">Digital Marketing : Fullstack Intensive</p>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <p class="text-sm">9 Oktober 2024</p>
                </div>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-tag mr-2"></i>
                    <p class="text-sm">Rp 590.000 <span class="line-through text-red-500">Rp 1.000.000</span></p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ asset('./assets/bootcamp/contentdummy.png') }}" class="h-34 w-full rounded-sm">
                <p class="mt-4 text-gray-700 font-semibold font-sans text-lg">Digital Marketing : Fullstack Intensive</p>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <p class="text-sm">9 Oktober 2024</p>
                </div>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-tag mr-2"></i>
                    <p class="text-sm">Rp 590.000 <span class="line-through text-red-500">Rp 1.000.000</span></p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ asset('./assets/bootcamp/contentdummy.png') }}" class="h-34 w-full rounded-sm">
                <p class="mt-4 text-gray-700 font-semibold font-sans text-lg">Digital Marketing : Fullstack Intensive</p>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <p class="text-sm">9 Oktober 2024</p>
                </div>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-tag mr-2"></i>
                    <p class="text-sm">Rp 590.000 <span class="line-through text-red-500">Rp 1.000.000</span></p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ asset('./assets/bootcamp/contentdummy.png') }}" class="h-34 w-full rounded-sm">
                <p class="mt-4 text-gray-700 font-semibold font-sans text-lg">Digital Marketing : Fullstack Intensive</p>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <p class="text-sm">9 Oktober 2024</p>
                </div>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-tag mr-2"></i>
                    <p class="text-sm">Rp 590.000 <span class="line-through text-red-500">Rp 1.000.000</span></p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ asset('./assets/bootcamp/contentdummy.png') }}" class="h-34 w-full rounded-sm">
                <p class="mt-4 text-gray-700 font-semibold font-sans text-lg">Digital Marketing : Fullstack Intensive</p>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <p class="text-sm">9 Oktober 2024</p>
                </div>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-tag mr-2"></i>
                    <p class="text-sm">Rp 590.000 <span class="line-through text-red-500">Rp 1.000.000</span></p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ asset('./assets/bootcamp/contentdummy.png') }}" class="h-34 w-full rounded-sm">
                <p class="mt-4 text-gray-700 font-semibold font-sans text-lg">Digital Marketing : Fullstack Intensive</p>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <p class="text-sm">9 Oktober 2024</p>
                </div>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-tag mr-2"></i>
                    <p class="text-sm">Rp 590.000 <span class="line-through text-red-500">Rp 1.000.000</span></p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ asset('./assets/bootcamp/contentdummy.png') }}" class="h-34 w-full rounded-sm">
                <p class="mt-4 text-gray-700 font-semibold font-sans text-lg">Digital Marketing : Fullstack Intensive</p>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <p class="text-sm">9 Oktober 2024</p>
                </div>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-tag mr-2"></i>
                    <p class="text-sm">Rp 590.000 <span class="line-through text-red-500">Rp 1.000.000</span></p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ asset('./assets/bootcamp/contentdummy.png') }}" class="h-34 w-full rounded-sm">
                <p class="mt-4 text-gray-700 font-semibold font-sans text-lg">Digital Marketing : Fullstack Intensive</p>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <p class="text-sm">9 Oktober 2024</p>
                </div>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-tag mr-2"></i>
                    <p class="text-sm">Rp 590.000 <span class="line-through text-red-500">Rp 1.000.000</span></p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ asset('./assets/bootcamp/contentdummy.png') }}" class="h-34 w-full rounded-sm">
                <p class="mt-4 text-gray-700 font-semibold font-sans text-lg">Digital Marketing : Fullstack Intensive</p>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <p class="text-sm">9 Oktober 2024</p>
                </div>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-tag mr-2"></i>
                    <p class="text-sm">Rp 590.000 <span class="line-through text-red-500">Rp 1.000.000</span></p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ asset('./assets/bootcamp/contentdummy.png') }}" class="h-34 w-full rounded-sm">
                <p class="mt-4 text-gray-700 font-semibold font-sans text-lg">Digital Marketing : Fullstack Intensive</p>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <p class="text-sm">9 Oktober 2024</p>
                </div>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-tag mr-2"></i>
                    <p class="text-sm">Rp 590.000 <span class="line-through text-red-500">Rp 1.000.000</span></p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="{{ asset('./assets/bootcamp/contentdummy.png') }}" class="h-34 w-full rounded-sm">
                <p class="mt-4 text-gray-700 font-semibold font-sans text-lg">Digital Marketing : Fullstack Intensive</p>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <p class="text-sm">9 Oktober 2024</p>
                </div>
                <div class="flex items-center mt-4 text-gray-500">
                    <i class="fas fa-tag mr-2"></i>
                    <p class="text-sm">Rp 590.000 <span class="line-through text-red-500">Rp 1.000.000</span></p>
                </div>
            </div>
        </div>
        <!-- end grid -->

        <!-- akses konten premium -->
        <section class="w-full h-auto rounded-b-3xl bg-white lg:flex items-center mt-12 mb-14 p-4">
            <img src="{{ asset('./assets/bootcamp/pembelajaran.png') }}" class="h-72 w-100 lg:ml-20 py-4">
            <div class="ml-4">
                <p class="text-4xl font-bold w-4/5 ml-4">E-learning & Training Untuk Perusahaan</p>
                <br>
                <p class="w-4/5 ml-4">Miliki akses ratusan konten elearning MySkill serta dukungan corporate training untuk
                    perusahaan.
                    Miliki juga berbagai fitur khusus untuk mendorong employee performance and development.</p>
                <br>
                <button type="button"
                    class="ml-4 focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-3 me-2 mb-2 dark:focus:ring-yellow-900">Hubungi
                    Tim MySkill</button>
            </div>
        </section>
    </div>
@endsection
