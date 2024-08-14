@extends('layouts.main')
@section('container')

<div class="digital-marketing">
    <section class="w-full h-auto bg-white lg:bg-gradient-to-b from-orange-400 to-red-400 text-white lg:flex max-sm:text-black max-sm:bg-white lg:mb-4">
        <img src="{{ asset('./assets/bootcamp/full.png') }}" class="lg:h-96 rounded-3xl w-auto lg:mt-4 lg:ml-16 py-2 max-sm:h-52 max-sm:w-12 max-sm:mx-auto max-sm:my-4">
        <div class="lg:ml-4 max-sm:text-black max-sm:w-full max-sm:text-center max-sm:mx-auto max-sm:py-4" style="width: 100%;">
            <p class="lg:ml-4 text-4xl font-bold w-4/5 max-sm:text-xl max-sm:w-full max-sm:mx-auto lg:mt-4">DIGITAL MARKETING: FULLSTACK INTENSIVE BOOTCAMP</p>
            <br>
            <div class="lg:w-48 lg:h-36 lg:ml-4 bg-white border border-gray-400 rounded-2xl shadow relative">
                <p class="font-bold text-orange-600 text-2xl lg:ml-4 lg:mt-2">Batch 27</p>
                <p class="text-black font-regular text-xl lg:ml-4">Rp 590.000</p>
                <p class="text-black font-regular text-xs lg:ml-4 line-through">Early sale: Rp 450.000</p>
                <p class="text-black font-regular text-sm lg:ml-4">Late sale: Rp 1.000.000</p>
                <p class="text-black font-semibold text-sm lg:ml-4 lg:mb-1">9 Okt 2024 - 22 Nov 2024</p>
                <span class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-1 rounded-full">Limited</span>
            </div>
            <button type="button" class="lg:ml-4 lg:mt-2 focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 dark:focus:ring-yellow-900 max-sm:bg-yellow-500 max-sm:text-white max-sm:px-3 max-sm:py-1.5 max-sm:w-4/5 max-sm:mx-auto">
                <i class="fas fa-bolt"></i> Daftar Sekarang
            </button>
            <div class="flex items-center mt-1 max-sm:flex-col max-sm:items-center">
                <p class="lg:ml-4 lg:text-white text-md font-semibold max-sm:text-black max-sm:ml-0 max-sm:text-sm max-sm:mt-2">5.000+ Alumni Bootcamp Tiap Bulan</p>
            </div>
        </div>
    </section>
</div>

<div class="flex">
    <!-- Sidebar -->

    <div class="w-64 sticky">
        <div class="h-10/12 top-0 pb-10 bg-white rounded-lg shadow-md p-4 lg:ml-4 lg:mb-4 lg:mt-4">
            <ul class="space-y-2">
                <p class="text-md font-semibold">Detail</p>
                <!-- Daftar item di sini -->
                <li class="flex items-center">
                    <i class="fas fa-chevron-right text-gray-600"></i>
                    <a href="#" class="text-gray-600 font-medium ml-2">Tentang Bootcamp</a>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-chevron-right text-gray-600"></i>
                    <a href="#" class="text-gray-600 font-medium ml-2">Prospek Karier</a>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-chevron-right text-gray-600"></i>
                    <a href="#" class="text-gray-600 font-medium ml-2">Yang Bisa Kamu Dapatkan</a>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-chevron-right text-gray-600"></i>
                    <a href="#" class="text-gray-600 font-medium ml-2">Benefit Bootcamp</a>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-chevron-right text-gray-600"></i>
                    <a href="#" class="text-gray-600 font-medium ml-2">Peserta Bootcamp</a>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-chevron-right text-gray-600"></i>
                    <a href="#" class="text-gray-600 font-medium ml-2">Kurikulum & Silabus</a>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-chevron-right text-gray-600"></i>
                    <a href="#" class="text-gray-600 font-medium ml-2">Sistem Belajar</a>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-chevron-right text-gray-600"></i>
                    <a href="#" class="text-gray-600 font-medium ml-2">FAQ</a>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-chevron-right text-gray-600"></i>
                    <a href="#" class="text-gray-600 font-medium ml-2">Komunitas</a>
                </li>
                <!-- Tambahkan item lainnya di sini -->
            </ul>
        </div>
        <!-- Tombol Daftar Sekarang dengan Ikon Petir -->
        <div class="">
            <button class="absolute top-80 left-0 w-10/12 bg-yellow-500 text-white rounded-lg flex items-center justify-center lg:p-1 lg:ml-7 lg:mb-4 lg:mt-12">
                <i class="fas fa-bolt mr-2"></i>
                Daftar Sekarang
            </button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-8">
        <p class="text-orange-600 text-xl font-bold"><i class="fas fa-chevron-right text-orange-600 mr-3"></i>Tentang Bootcamp</p>
        <p class="mt-4">Bootcamp Digital Marketing merupakan pelatihan online secara intensif dan live bersama mentor expert dari Top Companies di Indonesia. Materi Bootcamp ini dirancang secara terstruktur dari dasar hingga lanjut dengan standar industri terkini. Bayangkan dirimu belajar langsung dengan yang menggagas campaign "Traveloka Dulu, Jalan-jalan Kemudian." atau Lemonilo x NCT Dream! Asik, kan? Bootcamp ini dirakit oleh para Head dan Manager Marketing dari:</p>
        <br>
        <img src="{{ asset('./assets/bootcamp/adv.png') }}" class="lg:h-64 rounded-3xl w-auto lg:mt-4 lg:ml-6 py-2 max-sm:h-52 max-sm:w-12 max-sm:mx-auto max-sm:my-4">
        <br>
        <div name="scrollbar">
            <div class="flex overflow-x-auto space-x-4">
                <img src="{{ asset('./assets/bootcamp/motivasi.png') }}" class="h-64 w-auto">
                <img src="{{ asset('./assets/bootcamp/motivasi2.png') }}" class="h-64 w-auto">
                <img src="{{ asset('./assets/bootcamp/motivasi.png') }}" class="h-64 w-auto">
                <img src="{{ asset('./assets/bootcamp/motivasi2.png') }}" class="h-64 w-auto">
                <img src="{{ asset('./assets/bootcamp/motivasi.png') }}" class="h-64 w-auto">
            </div>
        </div>
        <br>
        <div>
            <!-- prospek karir start -->
            <p class="text-orange-600 text-xl font-bold"><i class="fas fa-chevron-right text-orange-600 mr-3"></i>Prospek Karir</p>
            <p class="text-md font-regular mb-8">Ikuti Intensive Bootcamp dan dapatkan balik modal secara berlipat dari gaji pertamamu. Berbagai pilihan profesi yang bisa dijalani saat memiliki skill digital marketing:
                <br>
                💎 Social Media Specialist : Rp 5-15 Juta/bulan.
                <br>
                💎 Copywriter : Rp 4-12 Juta/bulan.
                <br>
                💎 Content Writer : Rp 4-13 Juta/bulan.
                <br>
                💎 SEO/SEM Specialist : Rp 6-15 Juta/bulan.
                <br>
                💎 Performance Marketing : Rp 8- 15 Juta/bulan.
                <br>
                💎 Brand Strategist : Rp 6-17 Juta/bulan.
                <br>
                💎 KOL Management : Rp 3,5 - 12 Juta/bulan.
                <br>
                💎 Customer Relationship Management : Rp 3,5-16 Juta/bulan.
                <br>
                *Source: Glasdoor
            </p>
            <p>
                MySkill percaya, kamu pun bisa belajar dari nol dan rintis karir impianmu meski awalnya terasa sulit. Maka, tak perlu diperumit dengan harus memikirkan biaya selangit. <b>Saat ini, para peserta Bootcamp MySkill telah diterima bekerja di berbagai multinational dan top local companies seperti:</b>
            </p>
        </div>
        <div>
            <img src="{{ asset('./assets/bootcamp/trusted.png') }}" class="lg:h-80 rounded-3xl w-auto lg:mt-4 lg:ml-2 py-2 max-sm:h-52 max-sm:w-12 max-sm:mx-auto max-sm:my-4">
        </div>
        <!-- prospek karir end -->

        <!-- yang bisa kamu dapatkan start -->
        <p class="text-orange-600 text-xl font-bold"><i class="fas fa-chevron-right text-orange-600 mr-3"></i>Apa Yang Bisa Kamu Dapatkan</p>
        <p class="lg:w-10/12">Upgrade skill mulai dari memahami konsep, analisa studi kasus, hingga praktik untuk mengoptimalkannya. Kuasai berbagai skill dan tools di bidang Digital Marketing untuk karier maupun bisnis kamu.
            <b>Contoh Skill & Portfolio yang bisa kamu miliki:</b>
        </p>
        <img src="{{ asset('./assets/bootcamp/get.png') }}" class="lg:h-80 rounded-3xl w-auto lg:mt-4 lg:ml-2 py-2 max-sm:h-52 max-sm:w-12 max-sm:mx-auto max-sm:my-4">
        <!-- scrollbar-2 -->
        <div name="scrollbar-2 mb-4">
            <div class="flex overflow-x-auto space-x-4">
                <img src="{{ asset('./assets/bootcamp/get3.png') }}" class="h-64 w-auto">
                <img src="{{ asset('./assets/bootcamp/get2.png') }}" class="h-64 w-auto">
                <img src="{{ asset('./assets/bootcamp/get3.png') }}" class="h-64 w-auto">
                <img src="{{ asset('./assets/bootcamp/get2.png') }}" class="h-64 w-auto">
                <img src="{{ asset('./assets/bootcamp/get3.png') }}" class="h-64 w-auto">
            </div>
        </div>
        <!-- yang bisa kamu dapatkan end -->

    </div>
</div>

@endsection