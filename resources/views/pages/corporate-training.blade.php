@extends('layouts.main')
@section('container')
<div class="corporate">
    <section class="w-full h-auto rounded-b-3xl bg-white lg:bg-gradient-to-b from-orange-400 to-red-400 text-white flex">
        <!-- Adjust margin and padding for the image container -->
        <div>
            <img src="{{ asset('./assets/corporate/header.webp') }}" class="h-64 w-100 ml-16 py-2 mt-4"> <!-- Reduced mt-8 to mt-4 -->
        </div>

        <div class="ml-4 mt-8">
            <button type="button" class="focus:outline-none text-white bg-gray-900 font-medium rounded-full text-sm px-5 py-2.5 me-2 dark:focus:ring-yellow-900">MySkill for Business</button>
            <p class="text-4xl font-bold">
                Tingkatkan Skill & Performa Karyawan
            </p>
            <p class="text-4xl font-bold mb-0">
                dengan Corporate Training
            </p>
            <p class="mt-2 text-lg">MySkill membantu ratusan enterprise, startup, badan pemerintahan dan</p>
            <p class="text-lg"> institusi lainnya untuk mengembangkan potensi karyawan melalui </p>
            <p class="text-lg">customizable training.</p>
            <br>

            <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Konsultasi Gratis Sekarang</button>
            <div class="flex justify-start items-center space-x-4 mb-4">
                <img src="./assets/corporate/microsoft.webp" alt="Microsoft" class="h-6">
                <img src="./assets/corporate/kemenkeu.webp" alt="kemenkeu" class="h-6">
                <img src="./assets/corporate/bank-mandiri.webp" alt="mandiri" class="h-6">
                <img src="./assets/corporate/bank-indonesia.webp" alt="bi" class="h-6">
                <img src="./assets/corporate/mizan.webp" alt="mizan" class="h-6">
            </div>
    </section>
    <h3 class="text-center mt-4 mr-100 text-3xl font-bold mb-4 text-black">MySkill Dipercaya Ratusan Institusi Sebagai Learning Partner Karena</h3>
    <div class="flex justify-center mb-4 space-x-4">
        <div class="bg-white text-black p-6 rounded-lg w-64 border border-spacing-1">
            <img src="./assets/corporate/Customizable.webp" alt="" class="mx-auto mb-4 w-11/12">
            <p class="text-md font-bold">Customizable Program</p>
            <p class="text-sm">Dari segi topik materi, online/offline,<br>durasi serta lokasi pelatihan.</p>
        </div>
        <div class="bg-white text-black p-6 rounded-lg w-64 border border-spacing-1">
            <img src="./assets/corporate/senior-practicioner.webp" alt="" class="mx-auto mb-4">
            <p class="text-md font-bold">Dibawakan Praktisi Senior</p>
            <p class="text-sm">MySkill menggandeng professional terkurasi dari notable companies.</p>
        </div>
        <div class="bg-white text-black p-6 rounded-lg w-64 border border-spacing-1">
            <img src="./assets/corporate/workshop.webp" alt="" class="mx-auto mb-4">
            <p class="text-md font-bold">Workshop & Practice Driven</p>
            <p class="text-sm">Pelatihan MySkill mengkombinasikan pemahaman, praktik dan case study.</p>
        </div>
        <div class="bg-white text-black p-6 rounded-lg w-64 border border-spacing-1">
            <img src="./assets/corporate/measured-impact.webp" alt="" class="mx-auto mb-4 w-2/3">
            <p class="text-md font-bold">Before & After yang Terukur</p>
            <p class="text-sm">Dari need assessment, test, reporting & konsultasi pasca training.</p>
        </div>
    </div>
</div>

<section class="w-screen h-auto">
    <div class="text-center">
        <button type="button" class="focus:outline-none text-xl text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Konsultasi Gratis Sekarang</button>
    </div>
    <h2 class="text-3xl font-bold mb-6 text-center">Fokus Mendorong Performa, Bukan Sekadar Organizer</h2>
    <section class="mt-8 overflow-x-auto whitespace-nowrap px-8 py-4 mb-12 no-scrollbar">
        <div class="inline-block px-4">
            <div class="bg-white rounded-lg shadow-md p-4 w-64">
                <img src="{{ asset('./assets/corporate/bi.webp') }}" class="h-34 w-64 rounded-sm mb-4">
                <p class="text-sm">Bank Indonesia - Microsoft Excel</p>
            </div>
        </div>
        <div class="inline-block px-4">
            <div class="bg-white rounded-lg shadow-md p-4 w-64">
                <img src="{{ asset('./assets/corporate/fb.webp') }}" class="h-34 w-64 rounded-sm">
                <p class="text-sm break-words">Kuningan Dev. International - Facebook</p>
                <p class="text-sm text-center"> Ads</p>
            </div>
        </div>
        <div class="inline-block px-2">
            <div class="bg-white rounded-lg shadow-md p-4 w-64">
                <img src="{{ asset('./assets/corporate/ojk.webp') }}" class="h-34 w-64 rounded-sm">
                <p class="text-sm">Otoritas Jasa Keuangan - Business</p>
                <p class="text-sm text-center"> English</p>
            </div>
        </div>
        <div class="inline-block px-4">
            <div class="bg-white rounded-lg shadow-md p-4 w-64">
                <img src="{{ asset('./assets/corporate/qoala.webp') }}" class="h-34 w-64 rounded-sm">
                <p class="text-sm">Qoala - Professional Communication</p>
            </div>
        </div>
        <div class="inline-block px-4">
            <div class="bg-white rounded-lg shadow-md p-4 w-64">
                <img src="{{ asset('./assets/corporate/pln.webp') }}" class="h-34 w-64 rounded-sm">
                <p class="text-sm text-center">PLN - Data Analysis</p>
            </div>
        </div>
        <div class="inline-block px-4">
            <div class="bg-white rounded-lg shadow-md p-4 w-64">
                <img src="{{ asset('./assets/corporate/djp.webp') }}" class="h-34 w-64 rounded-sm">
                <p class="text-sm">Direktorat Jendral Pajak - Marketing</p>
                <p class="text-sm text-center">Communication</p>
            </div>
        </div>
    </section>

    <h3 class="text-center mt-4 mr-20 text-3xl font-bold mb-4 text-black">Mengapa Ratusan Perusahaan Memilih GMTrainer?</h3>
    <div class="flex justify-center mb-4 space-x-4">
        <div class="bg-white text-black p-6 rounded-xl w-64 border border-spacing-2">
            <img src="./assets/corporate/linkedin-top-startup.webp" alt="LinkedIn Top Startup Award" class="mx-auto mb-4">
            <p class="text-md">2X LinkedIn Top Startup Award</p>
            <p>Satu-satunya startup Education Technology di Indonesia.</p>
        </div>
        <div class="bg-white text-black p-6 rounded-xl w-64 border border-spacing-2">
            <img src="./assets/corporate/course-report.webp" alt="Course Report" class="mx-auto mb-4">
            <p class="text-md">Rating 4.99 di Course Report</p>
            <p>Mendapatkan rating sangat memuaskan dari para peserta.</p>
        </div>
        <div class="bg-white text-black p-6 rounded-xl w-64  border border-spacing-2">
            <img src="./assets/corporate/userbase.webp" alt="Users" class="mx-auto mb-4">
            <p class="text-md">Lebih dari 1.5 Juta Pengguna</p>
            <p>Komunitas pengembangan skill terbesar di Indonesia.</p>
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
                    <button type="submit" class="w-auto px-4 py-2 bg-gray-300 text-white font-bold rounded-lg">Kirim</button>
                    <p>silahkan lengkapi form diatas untuk mengirim pesan</p>
                </div>
            </form>
        </div>
    </div>
</section>
</div>
@endsection