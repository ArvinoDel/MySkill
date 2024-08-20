@extends('layouts.main')
@section('container')
    <div class="corporate">
        <section
            class="flex flex-col lg:flex-row h-auto rounded-b-3xl bg-white lg:bg-gradient-to-b from-orange-400 to-red-400 text-white w-screen">
            <!-- Adjust margin and padding for the image container -->
            <div class="flex justify-center lg:justify-start mb-4 lg:mb-0 lg:ml-16 mt-4 lg:mt-0">
                <img src="{{ asset('./assets/corporate/corporate.webp') }}" alt="Corporate"
                    class="h-48 lg:mt-5 w-auto lg:h-64 lg:w-auto object-cover">
            </div>

            <div class="text-left sm:ml-5 max-sm:ml-3 lg:text-left max-md:m-4 lg:ml-4 text-black lg:text-white">
                <button type="button"
                    class="focus:outline-none text-white bg-gray-900 font-medium rounded-full text-sm px-5 py-2.5 me-2 dark:focus:ring-yellow-900">GMT
                    for Business</button>
                <p class="text-xl lg:text-4xl font-bold mb-2 lg:mb-4">
                    Layanan Pengembangan Skill dan
                </p>
                <p class="text-xl lg:text-4xl font-bold mb-2 lg:mb-4">
                    Peningkatan Performa Karyawan
                </p>
                <p class="mt-2 text-base lg:text-md mb-2 lg:mb-4">
                    Jalankan corporate training yang disesuaikan dengan kebutuhan perusahaan,
                </p>
                <p class="text-base lg:text-md mb-2 lg:mb-4">
                    maupun akses Performance Management Software dan E-learning MySkill for
                </p>
                <p class="text-base lg:text-md mb-4">
                    Business.
                </p>
                <br>
                <!-- Container for buttons -->
                <div class="flex flex-col lg:flex-row lg:justify-start lg:space-x-2 lg:items-center items-center mb-4">

                    <!-- Corporate Training Button -->
                    <a href="/corporate-training"
                        class="text-black lg:text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mb-2 lg:mb-0 dark:focus:ring-yellow-900">
                        Corporate Training
                    </a>

                    <!-- Performance Management Software Button -->
                    <a href="/experience"
                        class="text-black lg:text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mb-2 lg:mb-0 dark:focus:ring-yellow-900">
                        Performance Management Software
                    </a>
                </div>

                <div class="flex flex-wrap justify-center lg:justify-start items-center space-x-4 mb-4">
                    <img src="./assets/corporate/microsoft.webp" alt="Microsoft" class="h-6">
                    <img src="./assets/corporate/kemenkeu.webp" alt="kemenkeu" class="h-6">
                    <img src="./assets/corporate/bank-mandiri.webp" alt="mandiri" class="h-6">
                    <img src="./assets/corporate/bank-indonesia.webp" alt="bi" class="h-6">
                    <img src="./assets/corporate/mizan.webp" alt="mizan" class="h-6">
                </div>
            </div>
        </section>

        <div class="flex flex-col items-center">
            <h3 class="text-center mt-4 text-3xl font-bold mb-4 text-black">Mengapa Ratusan Perusahaan Memilih GMTrainer?
            </h3>
            <div class="flex flex-col sm:flex-row justify-center mb-4 space-y-4 sm:space-y-0 sm:space-x-4 px-2">
                <div class="bg-white text-black p-4 rounded-lg w-full sm:w-56 border border-spacing-2 max-lg:text-sm">
                    <img src="./assets/corporate/linkedin-top-startup.webp" alt="LinkedIn Top Startup Award"
                        class="mx-auto mb-2 max-lg:w-3/4">
                    <p class="text-sm font-medium">2X LinkedIn Top Startup Award</p>
                    <p class="text-xs">Satu-satunya startup Education Technology di Indonesia.</p>
                </div>
                <div class="bg-white text-black p-4 rounded-lg w-full sm:w-56 border border-spacing-2 max-lg:text-sm">
                    <img src="./assets/corporate/course-report.webp" alt="Course Report" class="mx-auto mb-2 max-lg:w-3/4">
                    <p class="text-sm font-medium">Rating 4.99 di Course Report</p>
                    <p class="text-xs">Mendapatkan rating sangat memuaskan dari para peserta.</p>
                </div>
                <div class="bg-white text-black p-4 rounded-lg w-full sm:w-56 border border-spacing-2 max-lg:text-sm">
                    <img src="./assets/corporate/userbase.webp" alt="Users" class="mx-auto mb-2 max-lg:w-3/4">
                    <p class="text-sm font-medium">Lebih dari 1.5 Juta Pengguna</p>
                    <p class="text-xs">Komunitas pengembangan skill terbesar di Indonesia.</p>
                </div>
            </div>

        </div>

        <section class="w-full h-auto">
            <h3 class="text-center mt-4 mr-12 text-3xl font-bold mb-4 text-black w-full">Berbagai Program GMTrainer</h3>
            <!-- Corporate Training -->
            <div class="flex flex-col lg:flex-row gap-8 px-4 py-6 items-center">
                <img src="./assets/corporate/corporate-training.webp" alt="Corporate Training"
                    class="h-56 w-full lg:h-72 lg:w-1/2 object-cover rounded-md mb-4 lg:mb-0">
                <div class="lg:w-1/2">
                    <h2 class="text-pink-600 text-xl lg:text-2xl font-bold mb-2">Corporate Training</h2>
                    <p class="text-gray-700 text-base lg:text-lg mb-4">
                        Assessment, Pelatihan, dan Konsultasi Pasca Training.
                    </p>
                    <ul class="list-disc pl-5 text-base lg:text-lg mb-4">
                        <li>
                            Customizeable: offline / online, berbagai topik dan durasi bisa disesuaikan.
                        </li>
                        <li>
                            Dibawakan praktisi senior dari notable companies dan industri yang relevan.
                        </li>
                        <li>
                            Fokus praktik & case study. Assessment before dan after training yang lengkap.
                        </li>
                    </ul>
                    <a href="/corporate-training"
                        class="focus:outline-none text-white bg-pink-600 font-medium rounded-md text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Pelajari
                        Corporate Training</a>
                </div>
            </div>

            <!-- Performance Management Software -->
            <div class="flex flex-col-reverse md:flex-row md:mr-12 justify-center md:justify-end gap-12 px-4 md:px-0">
                <div class="flex-1 md:ml-12 mb-4 md:mb-0">
                    <h2 class="text-pink-600 text-2xl font-bold">Performance Management Software</h2>
                    <p class="text-gray-700 mb-4">
                        Tools HRIS untuk Melacak Performa & Employee Learning
                    </p>
                    <p class="text-gray-700 text-md mb-4 w-full md:w-10/12">
                    <ul class="list-disc pl-5 mb-3">
                        <li>
                            Pencatatan dan Monitoring KPI setiap divisi dan karyawan.
                        </li>
                        <li>
                            1.000+ konten materi upskilling untuk semua divisi di perusahaan.
                        </li>
                        <li>
                            Dashboard analytics yang lengkap untuk data-driven decision.
                        </li>
                    </ul>
                    </p>
                    <a href="/experience"
                        class="focus:outline-none text-white bg-pink-600 font-medium rounded-md text-sm px-5 py-2.5 mb-4 dark:focus:ring-yellow-900">Pelajari
                        Performance Management Software</a>
                </div>
                <img src="./assets/corporate/experience.webp" alt="Performance Management Software"
                    class="h-64 object-cover shadow-lg rounded-lg md:mr-10 md:h-auto max-w-xs md:max-w-none mx-4 md:mx-0">
            </div>


            <!-- Corporate Campaign, Partnership & CSR -->
            <div class="flex flex-col lg:flex-row gap-12 py-6 justify-items-center px-4">
                <img src="./assets/corporate/corporate-campaign.webp" alt="Corporate Training"
                    class="h-48 w-auto lg:h-80 lg:w-auto object-cover rounded-md">
                <div>
                    <h2 class="text-pink-600 text-2xl font-bold">Corporate Campaign, Partnership & CSR</h2>
                    <p class="text-gray-700 mb-4">
                        Perbesar Brand Awareness & Dampak Besama 1.5 Juta+ Member
                    </p>
                    <ul class="list-disc pl-5 mb-3">
                        <li>
                            Kerjasama pelaksanaan Public Training, Event & Workshop.

                        </li>
                        <li>
                            Perkenalkan brand & expertise perusahaan, perkuat corporate branding

                        </li>
                        <li>
                            Terbukti membangun virality dan word of mouth dengan ribuan peserta.

                        </li>
                    </ul>
                    <button type="button"
                        class="focus:outline-none mb-4 text-white bg-pink-600 font-medium rounded-md text-sm px-5 py-2.5 me-2 dark:focus:ring-yellow-900">Hubungi
                        Tim MySkill</button>
                </div>
            </div>

            @include('partials.hubungi-kami')

        </section>
    </div>
@endsection
