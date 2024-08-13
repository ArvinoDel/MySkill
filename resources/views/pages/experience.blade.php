@extends('layouts.main')
@section('container')
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
    <div class="MuiBox-root mui-style-1wmuiqq">
        <div class="MuiContainer-root MuiContainer-maxWidthLg mui-style-1qsxih2">
            <div class="MuiBox-root mui-style-1yjvs5a">
                <div>
                    <div class="MuiBox-root mui-style-ohwg9z">
                        <div class="MuiGrid-root MuiGrid-container mui-style-1502sed">
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-auto mui-style-1hbjsgn" data-key=".$feature-button-learning}">
                                <div class="MuiBox-root mui-style-0"><button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedMonochrome MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorMonochrome MuiButton-root MuiButton-outlined MuiButton-outlinedMonochrome MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorMonochrome mui-style-1g7xpjj" tabindex="0" type="button" fdprocessedid="qh7hps">📕 Learning<span class="MuiTouchRipple-root mui-style-w0pj6f"></span></button></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-auto mui-style-1hbjsgn" data-key=".$feature-button-onboarding}">
                                <div class="MuiBox-root mui-style-0"><button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedMonochrome MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorMonochrome MuiButton-root MuiButton-outlined MuiButton-outlinedMonochrome MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorMonochrome mui-style-1g7xpjj" tabindex="0" type="button" fdprocessedid="7bz0d">💼 Onboarding<span class="MuiTouchRipple-root mui-style-w0pj6f"></span></button></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-auto mui-style-1hbjsgn" data-key=".$feature-button-project}">
                                <div class="MuiBox-root mui-style-0"><button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedMonochrome MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorMonochrome MuiButton-root MuiButton-outlined MuiButton-outlinedMonochrome MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorMonochrome mui-style-1g7xpjj" tabindex="0" type="button" fdprocessedid="l85cki">✅ Project<span class="MuiTouchRipple-root mui-style-w0pj6f"></span></button></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-auto mui-style-1hbjsgn" data-key=".$feature-button-performance}">
                                <div class="MuiBox-root mui-style-0"><button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedMonochrome MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorMonochrome MuiButton-root MuiButton-contained MuiButton-containedMonochrome MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorMonochrome mui-style-156429p" tabindex="0" type="button" fdprocessedid="eqy0h">🎯 Performance<span class="MuiTouchRipple-root mui-style-w0pj6f"></span></button></div>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-auto mui-style-1hbjsgn" data-key=".$feature-button-analytics}">
                                <div class="MuiBox-root mui-style-0"><button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedMonochrome MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorMonochrome MuiButton-root MuiButton-outlined MuiButton-outlinedMonochrome MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorMonochrome mui-style-1g7xpjj" tabindex="0" type="button" fdprocessedid="z56eo8">📊 Analytics<span class="MuiTouchRipple-root mui-style-w0pj6f"></span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="MuiBox-root mui-style-0">
                <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-2 mui-style-isbt42">
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-5 mui-style-1r482s6">
                        <div class="MuiStack-root mui-style-1ov46kg">
                            <div style="opacity: 1; transform: none;">
                                <h2 class="MuiTypography-root MuiTypography-h2 mui-style-1stiisk">Buat dan Pantau Target KPI Semua Karyawan. </h2>
                            </div>
                            <div style="opacity: 1; transform: none;">
                                <p class="MuiTypography-root MuiTypography-body1 mui-style-147j9uz">Pastikan performa tiap tim mencapai target. Ketahui perkembangan dari setiap tujuan.</p>
                            </div>
                            <div style="opacity: 1; transform: none;"><button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedWarning MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorWarning MuiButton-root MuiButton-contained MuiButton-containedWarning MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorWarning mui-style-1r4dikm" tabindex="0" type="button" fdprocessedid="5dadvh">Saya Tertarik<span class="MuiTouchRipple-root mui-style-w0pj6f"></span></button></div>
                        </div>
                    </div>
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-7 mui-style-1ak9ift">
                        <div style="opacity: 1; transform: none;">
                            <div class="MuiBox-root mui-style-nyzudu"><video class="MuiBox-root mui-style-1ukiuui" autoplay="" loop="" preload="auto">
                                    <source src="/assets/experience/performance.mp4" type="video/mp4">
                                </video></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="p-8 bg-white">
        <div class="text-center">
            <h2 class="text-xl font-bold">Ratusan Materi Upskilling Untuk Semua Tim</h2>
            <p class="mt-4">Akses 900+ video dan modul latihan hasil rancangan para experts. Upgrade skill karyawan di semua divisi dengan efisien.</p>
            <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 mt-6 rounded">Saya Tertarik</button>
        </div>
    </section>

    <div class="flex flex-col items-center">
        <h3 class="text-center mt-4 text-3xl font-bold mb-4 text-black">Mengapa Ratusan Perusahaan Memilih GMTrainer?
        </h3>
        <div class="flex flex-col sm:flex-row justify-center mb-4 space-y-4 sm:space-y-0 sm:space-x-4 px-4">
            <div class="bg-white text-black p-6 rounded-lg w-full sm:w-64 border border-spacing-2">
                <img src="./assets/corporate/linkedin-top-startup.webp" alt="LinkedIn Top Startup Award"
                    class="mx-auto mb-4">
                <p class="text-md font-medium">2X LinkedIn Top Startup Award</p>
                <p>Satu-satunya startup Education Technology di Indonesia.</p>
            </div>
            <div class="bg-white text-black p-6 rounded-lg w-full sm:w-64 border border-spacing-2">
                <img src="./assets/corporate/course-report.webp" alt="Course Report" class="mx-auto mb-4">
                <p class="text-md font-medium">Rating 4.99 di Course Report</p>
                <p>Mendapatkan rating sangat memuaskan dari para peserta.</p>
            </div>
            <div class="bg-white text-black p-6 rounded-lg w-full sm:w-64 border border-spacing-2">
                <img src="./assets/corporate/userbase.webp" alt="Users" class="mx-auto mb-4">
                <p class="text-md font-medium">Lebih dari 1.5 Juta Pengguna</p>
                <p>Komunitas pengembangan skill terbesar di Indonesia.</p>
            </div>
        </div>

    </div>

    <section class="w-screen h-auto">
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
                <button type="button"
                    class="focus:outline-none text-white bg-pink-600 font-medium rounded-md text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Pelajari
                    Corporate Training</button>
            </div>
        </div>

        <!-- Performance Management Software -->
        <div class="flex mr-12 justify-end gap-12">
            <div class="">
                <h2 class="text-pink-600 text-2xl font-bold">Performance Management Software</h2>
                <p class="text-gray-700 mb-4">
                    Tools HRIS untuk Melacak Performa & Employee Learning
                </p>
                <p class="text-gray-700 text-md mb-4 w-10/12">
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
                <button type="button"
                    class="focus:outline-none text-white bg-pink-600 font-medium rounded-md text-sm px-5 py-2.5 mb-4 me-2 dark:focus:ring-yellow-900">Pelajari
                    Performance Management Software</button>
            </div>
            <img src="./assets/corporate/experience.webp" alt="Performance Management Software"
                class="mr-10 h-64 object-cover shadow-lg rounded-lg">
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

        <div class="min-h-screen flex items-center justify-center">
            <div class="mx-auto w-full max-w-lg">
                <h2 class="text-3xl font-bold mb-6 text-center">Hubungi GMTrainer untuk Diskusi Lebih Lanjut</h2>
                <form class="bg-white space-y-6">
                    <div class="grid grid-cols-1 gap-6">
                        <label for="nama" class="font-bold">Nama
                            <input type="text" id="nama" class="w-full p-4 bg-gray-300 rounded-lg">
                        </label>
                        <label for="jabatan" class="font-bold">Jabatan
                            <input type="text" id="jabatan" class="w-full p-4 bg-gray-300 rounded-lg">
                        </label>
                        <label for="perusahaan" class="font-bold">Perusahaan
                            <input type="text" id="perusahaan" class="w-full p-4 bg-gray-300 rounded-lg">
                        </label>
                        <label for="email" class="font-bold">Email Resmi
                            <input type="email" id="email" class="w-full p-4 bg-gray-300 rounded-lg">
                        </label>
                        <label for="no-hp" class="font-bold">No. HP / WhatsApp
                            <input type="text" id="no-hp" class="w-full p-4 bg-gray-300 rounded-lg">
                        </label>
                        <label for="layanan" class="font-bold">Pilih Layanan</label>
                        <select id="layanan" class="w-full p-4 bg-gray-300 rounded-lg">
                            <option value="" disabled selected hidden></option>
                            <option value="corporate-training">Corporate Training</option>
                            <option value="performance-management-software">Performance Management Software</option>
                            <option value="employee-learning-development">Employee Learning and Development</option>
                            <option value="consulting-services">Consulting Services</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label for="pesan" class="font-bold">Pesan</label>
                        <textarea id="pesan" class="w-full p-4 bg-gray-300 rounded-lg mt-2 h-40"></textarea>
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