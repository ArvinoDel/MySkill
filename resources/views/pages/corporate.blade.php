@extends('layouts.main')
@section('container')
<div class="corporate">
    <section class="flex h-auto rounded-b-3xl lg:bg-gradient-to-b from-orange-400 to-red-400 text-white w-screen">
        <!-- Adjust margin and padding for the image container -->
        <div>
            <img src="{{ asset('./assets/corporate/corporate.webp') }}" class="h-64 w-100 ml-16 py-2 mt-4"> <!-- Reduced mt-8 to mt-4 -->
        </div>

        <div class="ml-4 mt-8">
            <button type="button" class="focus:outline-none text-white bg-gray-900 font-medium rounded-full text-sm px-5 py-2.5 me-2 dark:focus:ring-yellow-900">GMT for Business</button>
            <p class="text-5xl font-bold">
                Layanan Pengembangan Skill dan
            </p>
            <p class="text-5xl font-bold mb-0">
                Peningkatan Performa Karyawan
            </p>
            <p class="mt-2 text-lg">Jalankan corporate training yang disesuaikan dengan kebutuhan perusahaan,</p>
            <p class="text-lg">maupun akses Performance Management Software dan E-learning MySkill for</p>
            <p class="text-lg">Business.</p>
            <br>
            <a href="/corporate-training" class="focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Corporate Training</a>
            <button type="button" class="focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Performance Manajement Software</button>
            <div class="flex justify-start items-center space-x-4 mb-4">
                <img src="./assets/corporate/microsoft.webp" alt="Microsoft" class="h-6">
                <img src="./assets/corporate/kemenkeu.webp" alt="kemenkeu" class="h-6">
                <img src="./assets/corporate/bank-mandiri.webp" alt="mandiri" class="h-6">
                <img src="./assets/corporate/bank-indonesia.webp" alt="bi" class="h-6">
                <img src="./assets/corporate/mizan.webp" alt="mizan" class="h-6">
            </div>
    </section>
    <div class="flex flex-col items-center">
        <h3 class="text-center mt-4 text-3xl font-bold mb-4 text-black">Mengapa Ratusan Perusahaan Memilih GMTrainer?</h3>
        <div class="flex justify-center mb-4 space-x-4">
            <div class="bg-white text-black p-6 rounded-lg w-64 border border-spacing-2">
                <img src="./assets/corporate/linkedin-top-startup.webp" alt="LinkedIn Top Startup Award" class="mx-auto mb-4">
                <p class="text-md">2X LinkedIn Top Startup Award</p>
                <p>Satu-satunya startup Education Technology di Indonesia.</p>
            </div>
            <div class="bg-white text-black p-6 rounded-lg w-64 border border-spacing-2">
                <img src="./assets/corporate/course-report.webp" alt="Course Report" class="mx-auto mb-4">
                <p class="text-md">Rating 4.99 di Course Report</p>
                <p>Mendapatkan rating sangat memuaskan dari para peserta.</p>
            </div>
            <div class="bg-white text-black p-6 rounded-lg w-64 border border-spacing-2">
                <img src="./assets/corporate/userbase.webp" alt="Users" class="mx-auto mb-4">
                <p class="text-md">Lebih dari 1.5 Juta Pengguna</p>
                <p>Komunitas pengembangan skill terbesar di Indonesia.</p>
            </div>
        </div>
    </div>

    <section class="w-scren h-auto">
        <h3 class="text-center mt-4 mr-12 text-3xl font-bold mb-4 text-black w-full">Berbagai Program GMTrainer</h3>
        <!-- Corporate Training -->
        <div class=" flex items-start">
            <img src="./assets/corporate/corporate-training.webp" alt="Corporate Training" class="h-48 object-cover rounded-lg mb-6 mr-6">
            <div>
                <h2 class="text-pink-600 text-2xl font-bold">Corporate Training</h2>
                <p class="text-gray-700 mb-4">
                    Assessment, Pelatihan, dan Konsultasi Pasca Training.
                </p>
                <p class="text-gray-700 mb-4">
                    Customizeable: offline / online, berbagai topik dan durasi bisa disesuaikan.
                    <br>
                    Dibawakan praktisi senior dari notable companies dan industri yang relevan.
                    <br>
                    Fokus praktik & case study. Assessment before dan after training yang lengkap.
                </p>
                <button type="button" class="focus:outline-none text-white bg-pink-600 font-medium rounded-full text-sm px-5 py-2.5 me-2 dark:focus:ring-yellow-900">Pelajari Corporate Training</button>
            </div>
        </div>

        <!-- Performance Management Software -->
        <div class=" flex items-center justify-around">
            <div class="ml-80">
                <h2 class="text-pink-600 text-2xl font-bold mb-4">Performance Management Software</h2>
                <p class="text-gray-700 mb-4">
                    Tools HR untuk Melaek Perform & Employee Learning.
                </p>
                <p class="text-gray-700 mb-4">
                    ✅ Pencatatan dan Monitoring KPI setiap divisi dan karyawan.
                    <br>
                    ✅ 1.000+ konten materi upskilling untuk semua divisi di perusahaan.
                    <br>
                    ✅ Dashboard analytics yang lengkap untuk data-driven decision.
                </p>
                <button type="button" class="focus:outline-none text-white bg-pink-600 font-medium rounded-full text-sm px-5 py-2.5 mb-4 me-2 dark:focus:ring-yellow-900">Pelajari Performance Management Software</button>
            </div>
            <img src="./assets/corporate/experience.webp" alt="Performance Management Software" class="mr-12 h-48 object-cover rounded-lg">
        </div>

        <!-- Corporate Campaign, Partnership & CSR -->
        <div class="flex items-center">
            <img src="./assets/corporate/corporate-campaign.webp" alt="Corporate Training" class="h-48 object-cover rounded-lg mb-6 mr-6">
            <div>
                <h2 class="text-pink-600 text-2xl font-bold">Corporate Campaign, Partnership & CSR</h2>
                <p class="text-gray-700 mb-4">
                    Perbesar Brand Awareness & Dampak Besama 1.5 Juta+ Member
                </p>
                <p class="text-gray-700 mb-4">
                    ✅ Kerjasama pelaksanaan Public Training, Event & Workshop.
                    <br>
                    ✅ Perkenalkan brand & expertise perusahaan, perkuat corporate branding
                    <br>
                    ✅ Terbukti membangun virality dan word of mouth dengan ribuan peserta.
                </p>
                <button type="button" class="focus:outline-none mb-4 text-white bg-pink-600 font-medium rounded-full text-sm px-5 py-2.5 me-2 dark:focus:ring-yellow-900">Hubungi Tim MySkill</button>
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
                        <button type="submit" class="w-auto px-4 py-2 bg-gray-300 text-white font-bold rounded-lg mb-4">Kirim</button>
                        <p class="mb-4">silahkan lengkapi form diatas untuk mengirim pesan</p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection