@extends('layouts.main')
@section('container')
<div class="w-screen h-auto  rounded-b-3xl bg-gradient-to-b from-orange-400 to-red-500">
    <div class="snap-x snap-mandatory flex overflow-x-auto no-scrollbar gap-6 mx-4 lg:mx-4"
        style="scrollbar-width: none; -ms-overflow-style: none;" ontouchstart="this.classList.add('touching')"
        ontouchend="this.classList.remove('touching')" onmousedown="this.classList.add('touching')"
        onmouseup="this.classList.remove('touching')">
        <div class="snap-always snap-center flex-shrink-0">
            <img src="{{ asset('assets/home/Rectangle.svg') }}" alt="" class="h-32 lg:h-80 md:h-60 w-auto mx-auto">
        </div>
        <div class="snap-always snap-center flex-shrink-0">
            <img src="{{ asset('assets/home/Rectangle.svg') }}" alt="" class="h-32 lg:h-80 md:h-60 w-auto mx-auto">
        </div>
        <div class="snap-always snap-center flex-shrink-0">
            <img src="{{ asset('assets/home/Rectangle.svg') }}" alt="" class="h-32 lg:h-80 md:h-60 w-auto mx-auto">
        </div>
        <div class="snap-always snap-center flex-shrink-0">
            <img src="{{ asset('assets/home/Rectangle.svg') }}" alt="" class="h-32 lg:h-80 md:h-60 w-auto mx-auto">
        </div>
        <div class="snap-always snap-center flex-shrink-0">
            <img src="{{ asset('assets/home/Rectangle.svg') }}" alt="" class="h-32 lg:h-80 md:h-60 w-auto mx-auto">
        </div>
    </div>
    <div>
        <h2 class="text-xl md:text-2xl text-center py-14 font-bold text-black">Mari Merintis Karir Bersama GMT</h2>
    </div>


    <div class="grid grid-flow-col lg:grid-cols-5 ps-6 gap-8 overflow-x-auto no-scrollbar no-scrollbar">
        <div class="w-44 h-60 md:w-52 md:h-64 bg-white border border-black rounded-2xl shadow flex-shrink-0">
            <img class="mx-auto rounded-t-lg w-28 h-28 lg:w-36 lg:h-36" src="{{ asset('assets/home/image118.svg') }}"
                alt="" />
            <div class="p-5">
                <h5 class="text-sm text-center font-bold text-gray-900">Noteworthy Lebih dari 1.5 Juta+ Member Belajar
                    Bersama</h5>
            </div>
        </div>
        <div class="w-44 h-60 md:w-52 md:h-64 bg-white border border-black rounded-2xl shadow flex-shrink-0">
            <img class="mx-auto rounded-t-lg w-28 h-28 lg:w-36 lg:h-36" src="{{ asset('assets/home/image118.svg') }}"
                alt="" />
            <div class="p-5">
                <h5 class="text-sm text-center font-bold text-gray-900">Noteworthy Lebih dari 1.5 Juta+ Member Belajar
                    Bersama</h5>
            </div>
        </div>
        <div class="w-44 h-60 md:w-52 md:h-64 bg-white border border-black rounded-2xl shadow flex-shrink-0">
            <img class="mx-auto rounded-t-lg w-28 h-28 lg:w-36 lg:h-36" src="{{ asset('assets/home/image118.svg') }}"
                alt="" />
            <div class="p-5">
                <h5 class="text-sm text-center font-bold text-gray-900">Noteworthy Lebih dari 1.5 Juta+ Member Belajar
                    Bersama</h5>
            </div>
        </div>
        <div class="w-44 h-60 md:w-52 md:h-64 bg-white border border-black rounded-2xl shadow flex-shrink-0">
            <img class="mx-auto rounded-t-lg w-28 h-28 lg:w-36 lg:h-36" src="{{ asset('assets/home/image118.svg') }}"
                alt="" />
            <div class="p-5">
                <h5 class="text-sm text-center font-bold text-gray-900">Noteworthy Lebih dari 1.5 Juta+ Member Belajar
                    Bersama</h5>
            </div>
        </div>
        <div class="w-44 h-60 md:w-52 md:h-64 bg-white border border-black rounded-2xl shadow flex-shrink-0">
            <img class="mx-auto rounded-t-lg w-28 h-28 lg:w-36 lg:h-36" src="{{ asset('assets/home/image118.svg') }}"
                alt="" />
            <div class="p-5">
                <h5 class="text-sm text-center font-bold text-gray-900">Noteworthy Lebih dari 1.5 Juta+ Member Belajar
                    Bersama</h5>
            </div>
        </div>
    </div>
</div>
<div class="py-12">
    <h2 class="text-2xl text-center font-bold">Terbukti Memberi Hasil dan Membuka Batasan Diri</h2>
</div>
<div class="grid grid-flow-col ps-6 gap-8 overflow-x-auto no-scrollbar ">
    <div class="w-44 h-64 md:w-52 md:h-64 bg-white border border-black rounded-2xl shadow flex-shrink-0">
        <div class="flex justify-center">
            <img class="flex justify-center mt-4 rounded-t-lg w-36 h-36"
                src="{{ asset('assets/home/Rectangle51.svg') }}" alt="" />
        </div>
        <div class="p-5 flex justify-center">
            <button class="bg-yellow-400 text-white px-7 py-2 rounded-md">Baca Cerita</button>
        </div>
    </div>
    <div class="w-44 h-64 md:w-52 md:h-64 bg-white border border-black rounded-2xl shadow flex-shrink-0">
        <div class="flex justify-center">
            <img class="flex justify-center mt-4 rounded-t-lg w-36 h-36"
                src="{{ asset('assets/home/Rectangle51.svg') }}" alt="" />
        </div>
        <div class="p-5 flex justify-center">
            <button class="bg-yellow-400 text-white px-7 py-2 rounded-md">Baca Cerita</button>
        </div>
    </div>
    <div class="w-44 h-64 md:w-52 md:h-64 bg-white border border-black rounded-2xl shadow flex-shrink-0">
        <div class="flex justify-center">
            <img class="flex justify-center mt-4 rounded-t-lg w-36 h-36"
                src="{{ asset('assets/home/Rectangle51.svg') }}" alt="" />
        </div>
        <div class="p-5 flex justify-center">
            <button class="bg-yellow-400 text-white px-7 py-2 rounded-md">Baca Cerita</button>
        </div>
    </div>
    <div class="w-44 h-64 md:w-52 md:h-64 bg-white border border-black rounded-2xl shadow flex-shrink-0">
        <div class="flex justify-center">
            <img class="flex justify-center mt-4 rounded-t-lg w-36 h-36"
                src="{{ asset('assets/home/Rectangle51.svg') }}" alt="" />
        </div>
        <div class="p-5 flex justify-center">
            <button class="bg-yellow-400 text-white px-7 py-2 rounded-md">Baca Cerita</button>
        </div>
    </div>
    <div class="w-44 h-64 md:w-52 md:h-64 bg-white border border-black rounded-2xl shadow flex-shrink-0">
        <div class="flex justify-center">
            <img class="flex justify-center mt-4 rounded-t-lg w-36 h-36"
                src="{{ asset('assets/home/Rectangle51.svg') }}" alt="" />
        </div>
        <div class="p-5 flex justify-center">
            <button class="bg-yellow-400 text-white px-7 py-2 rounded-md">Baca Cerita</button>
        </div>
    </div>
</div>
<div>
    <h3 class="py-12 text-center font-bold text-2xl text-black">Berbagai Macam Program di GMT</h3>
</div>

<div class="grid md:grid-cols-2 lg:py-10">
    <img class="lg:w-96 w-80 h-80 ms-10 lg:ms-48 max-sm:ms-auto" src="{{ asset('assets/home/image1.svg') }}" alt="" />
    <div class="text-start px-10 lg:px-20 lg:py-4">
        <h2 class="font-bold text-black text-2xl">E-learning</h2>
        <h1 class="text-black text-lg pt-7 font-semibold">Pelajari Ratusan Skill Sekali Bayar. Praktik dan
            Bersertifikat</h1>
        <div class="ms-3">
            <li class="font-semibold">
                Belajar fleksibel via Video Materi, Bahan Bacaan, Project dan Studi Kasus
            </li>
            <li class="font-semibold">
                Praktikal & Actionable. Bertahap dari level Dasar hingga Lanjut
            </li>
            <li class="font-semibold">
                Grup Komunitas Diskusi Lifetime. Kelas Gratis Tiap Bulannya
            </li>
        </div>
        <div class="mt-8"></div>
        <a href="/e-learning" class="font-semibold px-5 py-2.5 rounded-xl  mt-4 bg-orange-400 ">Lihat Materi</a>
    </div>
</div>

<div class="md:grid flex flex-col-reverse md:grid-cols-2 md:py-10">
    <div class="text-start px-10 lg:px-20 py-2 lg:py-4">
        <h2 class="font-bold text-black text-2xl">Bootcamp</h2>
        <h1 class="text-black text-lg pt-7 font-semibold">Intensive Live Class bersama Experts. Praktikal & Mendalam
        </h1>
        <div class="ms-3">
            <li class="font-semibold">
                Kombinasi Case Study, Diskusi dan Praktik di Tiap Sesi. Basic to Advanced.
            </li>
            <li class="font-semibold">
                Group Mentoring Semi-Privat untuk Bangun Portfolio
            </li>
            <li class="font-semibold">
                Tutor Terkurasi. Memiliki Lebih dari 30.000 Alumni
            </li>
        </div>
        <div class="mt-8"></div>
        <a href="/bootcamp" class="font-semibold px-5 py-2.5 rounded-xl mt-4 bg-orange-400 max-sm:text-xs">Lihat Ragam Bootcamp</a>
    </div>
    <img class="w-80 lg:w-96 h-80 ms-10 max-sm:ms-auto" src="{{ asset('assets/home/image2.svg') }}" alt="" />
</div>

<div class="grid md:grid-cols-2 md:py-10">
    <img class="ms-10 w-80 lg:w-96 h-80 lg:ps-20 max-sm:ms-auto" src="{{ asset('assets/home/image3.svg') }}" alt="" />
    <div class="text-start px-10 lg:px-20  lg:py-4">
        <h2 class="font-bold text-black text-2xl">Review CV</h2>
        <h1 class="text-black text-lg pt-7 font-semibold">Dapatkan review dan dokumen persiapan karir dari HRD</h1>
        <div class="ms-3">
            <li class="font-semibold">
                Dapatkan 20+ Template CV (Indonesia & English), surat lamaran dan masih banyak lainnya
            </li>
            <li class="font-semibold">
                Dokumen Ratusan QnA Wawancara dan optimalisasi Linkedin
            </li>
            <li class="font-semibold">
                Peluang diterima magang dan kerja full time meningkat dengan bantuan review CV oleh HRD
            </li>
        </div>
        <div class="mt-8"></div>
        <a href="/review" class="font-semibold px-5 py-2.5 rounded-xl mt-4 bg-orange-400 ">Review CV</a>
    </div>
</div>

<div class="md:grid md:grid-cols-2 flex flex-col-reverse md:py-10">
    <div class="text-start px-12 lg:px-20 lg:py-4">
        <h2 class="font-bold text-black text-2xl">Bootcamp</h2>
        <h1 class="text-black text-lg pt-7 font-semibold">Intensive Live Class bersama Experts. Praktikal & Mendalam
        </h1>
        <div class="ms-3">
            <li class="font-semibold">
                Belajar fleksibel via Video Materi, Bahan Bacaan, Project dan Studi Kasus
            </li>
            <li class="font-semibold">
                Praktikal & Actionable. Bertahap dari level Dasar hingga Lanjut
            </li>
            <li class="font-semibold">
                Grup Komunitas Diskusi Lifetime. Kelas Gratis Tiap Bulannya
            </li>
        </div>
        <div class="grid grid-cols-2 gap-4 text-center">
        <a href="/corporate-service" class="font-semibold rounded-xl  mt-4 max-sm:text-left px-5 py-2.5 bg-orange-400 ">Corporate Service</a>
        <a href="/experience" class="font-semibold px-5 py-2.5 rounded-xl  mt-4 bg-orange-400 ">Sofware HRIS</a>
        </div>
    </div>
    <img class="lg:w-96 w-80 h-80 ms-10 max-sm:ms-auto" src="{{ asset('assets/home/image88.svg') }}" alt="" />
</div>
<h2 class="text-center font-bold text-2xl mx-3 lg:px-80 py-24">Rasanya Gabung Dengan Komunitas GM Official #Sipaling
    Ngoding
</h2>
<div class="snap-x snap-mandatory flex overflow-x-auto no-scrollbar ps-6 gap-11"
    style="scrollbar-width: none; -ms-overflow-style: none;" ontouchstart="this.classList.add('touching')"
    ontouchend="this.classList.remove('touching')" onmousedown="this.classList.add('touching')"
    onmouseup="this.classList.remove('touching')">
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-44 bg-gradient-to-b from-orange-400 to-red-500 border rounded-lg">
        <img class="rounded-t-lg pt-2 px-2" src="{{ asset('assets/home/Rectangle25.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-white text-center py-2">Main di Perusahaan</h5>
        </div>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-44 bg-gradient-to-b from-orange-400 to-red-500 border rounded-lg">
        <img class="rounded-t-lg pt-2 px-2" src="{{ asset('assets/home/Rectangle25.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-white text-center py-2">Main di Perusahaan</h5>
        </div>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-44 bg-gradient-to-b from-orange-400 to-red-500 border rounded-lg">
        <img class="rounded-t-lg pt-2 px-2" src="{{ asset('assets/home/Rectangle25.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-white text-center py-2">Main di Perusahaan</h5>
        </div>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-44 bg-gradient-to-b from-orange-400 to-red-500 border rounded-lg">
        <img class="rounded-t-lg pt-2 px-2" src="{{ asset('assets/home/Rectangle25.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-white text-center py-2">Main di Perusahaan</h5>
        </div>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-44 bg-gradient-to-b from-orange-400 to-red-500 border rounded-lg">
        <img class="rounded-t-lg pt-2 px-2" src="{{ asset('assets/home/Rectangle25.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-white text-center py-2">Main di Perusahaan</h5>
        </div>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-44 bg-gradient-to-b from-orange-400 to-red-500 border rounded-lg">
        <img class="rounded-t-lg pt-2 px-2" src="{{ asset('assets/home/Rectangle25.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-white text-center py-2">Main di Perusahaan</h5>
        </div>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-44 bg-gradient-to-b from-orange-400 to-red-500 border rounded-lg">
        <img class="rounded-t-lg pt-2 px-2" src="{{ asset('assets/home/Rectangle25.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-white text-center py-2">Main di Perusahaan</h5>
        </div>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-44 bg-gradient-to-b from-orange-400 to-red-500 border rounded-lg">
        <img class="rounded-t-lg pt-2 px-2" src="{{ asset('assets/home/Rectangle25.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-white text-center py-2">Main di Perusahaan</h5>
        </div>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-44 bg-gradient-to-b from-orange-400 to-red-500 border rounded-lg">
        <img class="rounded-t-lg pt-2 px-2" src="{{ asset('assets/home/Rectangle25.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-white text-center py-2">Main di Perusahaan</h5>
        </div>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-44 bg-gradient-to-b from-orange-400 to-red-500 border rounded-lg">
        <img class="rounded-t-lg pt-2 px-2" src="{{ asset('assets/home/Rectangle25.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-white text-center py-2">Main di Perusahaan</h5>
        </div>
    </div>
</div>
<h3 class="text-2xl text-center font-bold py-20">Belajar Bersama Senior Operator Langsung di Kantor</h3>
<div class="snap-x snap-mandatory flex overflow-x-auto no-scrollbar ps-6 gap-11"
    style="scrollbar-width: none; -ms-overflow-style: none;" ontouchstart="this.classList.add('touching')"
    ontouchend="this.classList.remove('touching')" onmousedown="this.classList.add('touching')"
    onmouseup="this.classList.remove('touching')">
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-96 bg-gradient-to-b from-orange-400 to-red-500 border rounded-xl">
        <img class="rounded-2xl pt-2 px-2" src="{{ asset('assets/home/image91.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-black text-center py-1">Udin LinkedIn</h5>
            <h5 class="text-lg font-semibold text-black text-center py-1">Fullstack Development</h5>
        </div>
        <button class="flex justify-bottom rounded-xl bg-black text-white font-semibold mt-10 ms-5 px-7 py-2">Lihat
            Operator</button>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-96 bg-gradient-to-b from-orange-400 to-red-500 border rounded-xl">
        <img class="rounded-2xl pt-2 px-2" src="{{ asset('assets/home/image91.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-black text-center py-1">Udin LinkedIn</h5>
            <h5 class="text-lg font-semibold text-black text-center py-1">Fullstack Development</h5>
        </div>
        <button class="flex justify-bottom rounded-xl bg-black text-white font-semibold mt-10 ms-5 px-7 py-2">Lihat
            Operator</button>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-96 bg-gradient-to-b from-orange-400 to-red-500 border rounded-xl">
        <img class="rounded-2xl pt-2 px-2" src="{{ asset('assets/home/image91.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-black text-center py-1">Udin LinkedIn</h5>
            <h5 class="text-lg font-semibold text-black text-center py-1">Fullstack Development</h5>
        </div>
        <button class="flex justify-bottom rounded-xl bg-black text-white font-semibold mt-10 ms-5 px-7 py-2">Lihat
            Operator</button>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-96 bg-gradient-to-b from-orange-400 to-red-500 border rounded-xl">
        <img class="rounded-2xl pt-2 px-2" src="{{ asset('assets/home/image91.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-black text-center py-1">Udin LinkedIn</h5>
            <h5 class="text-lg font-semibold text-black text-center py-1">Fullstack Development</h5>
        </div>
        <button class="flex justify-bottom rounded-xl bg-black text-white font-semibold mt-10 ms-5 px-7 py-2">Lihat
            Operator</button>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-96 bg-gradient-to-b from-orange-400 to-red-500 border rounded-xl">
        <img class="rounded-2xl pt-2 px-2" src="{{ asset('assets/home/image91.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-black text-center py-1">Udin LinkedIn</h5>
            <h5 class="text-lg font-semibold text-black text-center py-1">Fullstack Development</h5>
        </div>
        <button class="flex justify-bottom rounded-xl bg-black text-white font-semibold mt-10 ms-5 px-7 py-2">Lihat
            Operator</button>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-96 bg-gradient-to-b from-orange-400 to-red-500 border rounded-xl">
        <img class="rounded-2xl pt-2 px-2" src="{{ asset('assets/home/image91.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-black text-center py-1">Udin LinkedIn</h5>
            <h5 class="text-lg font-semibold text-black text-center py-1">Fullstack Development</h5>
        </div>
        <button class="flex justify-bottom rounded-xl bg-black text-white font-semibold mt-10 ms-5 px-7 py-2">Lihat
            Operator</button>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-96 bg-gradient-to-b from-orange-400 to-red-500 border rounded-xl">
        <img class="rounded-2xl pt-2 px-2" src="{{ asset('assets/home/image91.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-black text-center py-1">Udin LinkedIn</h5>
            <h5 class="text-lg font-semibold text-black text-center py-1">Fullstack Development</h5>
        </div>
        <button class="flex justify-bottom rounded-xl bg-black text-white font-semibold mt-10 ms-5 px-7 py-2">Lihat
            Operator</button>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-96 bg-gradient-to-b from-orange-400 to-red-500 border rounded-xl">
        <img class="rounded-2xl pt-2 px-2" src="{{ asset('assets/home/image91.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-black text-center py-1">Udin LinkedIn</h5>
            <h5 class="text-lg font-semibold text-black text-center py-1">Fullstack Development</h5>
        </div>
        <button class="flex justify-bottom rounded-xl bg-black text-white font-semibold mt-10 ms-5 px-7 py-2">Lihat
            Operator</button>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-96 bg-gradient-to-b from-orange-400 to-red-500 border rounded-xl">
        <img class="rounded-2xl pt-2 px-2" src="{{ asset('assets/home/image91.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-black text-center py-1">Udin LinkedIn</h5>
            <h5 class="text-lg font-semibold text-black text-center py-1">Fullstack Development</h5>
        </div>
        <button class="flex justify-bottom rounded-xl bg-black text-white font-semibold mt-10 ms-5 px-7 py-2">Lihat
            Operator</button>
    </div>
    <div
        class="snap-always snap-center flex-shrink-0 w-52 h-96 bg-gradient-to-b from-orange-400 to-red-500 border rounded-xl">
        <img class="rounded-2xl pt-2 px-2" src="{{ asset('assets/home/image91.svg') }}" alt="" />
        <div>
            <h5 class="text-lg font-semibold text-black text-center py-1">Udin LinkedIn</h5>
            <h5 class="text-lg font-semibold text-black text-center py-1">Fullstack Development</h5>
        </div>
        <button class="flex justify-bottom rounded-xl bg-black text-white font-semibold mt-10 ms-5 px-7 py-2">Lihat
            Operator</button>
    </div>
</div>
<p class="py-20 sm:mx-8 text-center text-2xl font-bold">Bersama Experts dan Case Study dari Beberapa Company</p>
<div class="grid grid-cols-4 gap-4 px-16">
    <div class="flex justify-center items-center">
        <img class="w-56 h-auto" src="{{ asset('assets/home/gojek.svg') }}" alt="">
    </div>
    <div class="flex justify-center items-center">
        <img class="w-56 h-auto" src="{{ asset('assets/home/shopee.svg') }}" alt="">
    </div>
    <div class="flex justify-center items-center">
        <img class="w-56 h-auto" src="{{ asset('assets/home/astra.svg') }}" alt="">
    </div>
    <div class="flex justify-center items-center">
        <img class="w-56 h-auto" src="{{ asset('assets/home/efishery.svg') }}" alt="">
    </div>
    <div class="flex justify-center items-center">
        <img class="w-56 h-auto" src="{{ asset('assets/home/halodoc.svg') }}" alt="">
    </div>
    <div class="flex justify-center items-center">
        <img class="w-56 h-auto" src="{{ asset('assets/home/kitabisa.svg') }}" alt="">
    </div>
    <div class="flex justify-center items-center">
        <img class="w-56 h-auto" src="{{ asset('assets/home/idn.svg') }}" alt="">
    </div>
    <div class="flex justify-center items-center">
        <img class="w-56 h-auto" src="{{ asset('assets/home/dentsu.svg') }}" alt="">
    </div>
</div>
<h3 class="text-center text-2xl font-bold py-16">Investors dan Affiliations</h3>
<div class="snap-x snap-mandatory flex overflow-x-auto no-scrollbar ps-6 gap-5 lg:gap-11"
    style="scrollbar-width: none; -ms-overflow-style: none;" ontouchstart="this.classList.add('touching')"
    ontouchend="this.classList.remove('touching')" onmousedown="this.classList.add('touching')"
    onmouseup="this.classList.remove('touching')">
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center p-8" src="{{ asset('assets/home/east.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-4 w-16" src="{{ asset('assets/home/aws.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center my-4 mx-auto w-20" src="{{ asset('assets/home/linkedin.svg') }}"
            alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-4 w-16" src="{{ asset('assets/home/kominfo.svg') }}"
            alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-3 w-40" src="{{ asset('assets/home/startup.svg') }}"
            alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-2" src="{{ asset('assets/home/asia.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-2" src="{{ asset('assets/home/asia.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-2" src="{{ asset('assets/home/asia.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-2" src="{{ asset('assets/home/asia.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-2" src="{{ asset('assets/home/asia.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-2" src="{{ asset('assets/home/asia.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-2" src="{{ asset('assets/home/asia.svg') }}" alt="" />
    </div>
</div>
<h3 class="py-16 text-center text-2xl font-bold">Most Featured in</h3>
<div class="snap-x snap-mandatory flex overflow-x-auto no-scrollbar ps-6 gap-5 lg:gap-11"
    style="scrollbar-width: none; -ms-overflow-style: none;" ontouchstart="this.classList.add('touching')"
    ontouchend="this.classList.remove('touching')" onmousedown="this.classList.add('touching')"
    onmouseup="this.classList.remove('touching')">
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-3 w-20" src="{{ asset('assets/home/techinasia.svg') }}"
            alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-9 w-36" src="{{ asset('assets/home/idn.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mt-6 mx-auto w-40" src="{{ asset('assets/home/cnbc.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-10 w-40" src="{{ asset('assets/home/technode.svg') }}"
            alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-3 w-40" src="{{ asset('assets/home/startup.svg') }}"
            alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-2" src="{{ asset('assets/home/asia.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-2" src="{{ asset('assets/home/asia.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-2" src="{{ asset('assets/home/asia.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-2" src="{{ asset('assets/home/asia.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-2" src="{{ asset('assets/home/asia.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-2" src="{{ asset('assets/home/asia.svg') }}" alt="" />
    </div>
    <div class="snap-always snap-center flex-shrink-0 w-48 h-24 border border-black rounded-xl">
        <img class="flex justify-center mx-auto mt-2" src="{{ asset('assets/home/asia.svg') }}" alt="" />
    </div>
</div>
<h3 class="py-20 text-center text-2xl font-bold ">Yang Sering Ditanyakan</h3>
<div class="relative inline-block w-screen px-4 md:px-4 lg:px-0 py-4">
    <div class="relative inline-block w-screen lg:px-32 py-2">
        <div class="border-2 px-5 py-3 rounded-xl shadow-lg">
            <div>
                <button type="button" onclick="toggleDropdown('dropdown2', 'icon2')" data-open="false"
                    class="inline-flex justify-between w-screen text-lg font-medium text-start text-dark"
                    id="menu-button2" aria-expanded="false" aria-haspopup="true">
                    Apakah ProSkill bagus ?
                    <i id="icon2" class="fa-solid fa-chevron-down ml-2 text-sm mt-1.5"></i>
                </button>
            </div>
            <div id="dropdown2" class="dropdown-content" role="menu" aria-orientation="vertical"
                aria-labelledby="menu-button2" tabindex="-1">
                <div class="pt-2" role="none">
                    <p class="text-gray-700 block text-sm" role="menuitem">Proskill memiliki tiga fitur utama
                        e-learning untuk belajar Mandiri via video modul belajar dan webinar series bulanan bootcamp
                        untuk belajar intensif fokus pada praktik via Zoom barang ekspor mentoring untuk dapat template
                        dan review CV hingga persiapan wawancara bersama HRD</p>
                </div>
            </div>
        </div>
    </div>

    <div class="relative inline-block w-screen lg:px-32 py-2">
        <div class="border-2 px-5 py-3 rounded-xl shadow-lg">
            <div>
                <button type="button" onclick="toggleDropdown('dropdown3', 'icon3')" data-open="false"
                    class="inline-flex justify-between w-screen text-lg font-medium text-start text-dark"
                    id="menu-button3" aria-expanded="false" aria-haspopup="true">
                    Apakah ProSkill Berbayar ?
                    <i id="icon3" class="fa-solid fa-chevron-down ml-2 text-sm mt-1.5"></i>
                </button>
            </div>
            <div id="dropdown3" class="dropdown-content" role="menu" aria-orientation="vertical"
                aria-labelledby="menu-button3" tabindex="-1">
                <div class="pt-2" role="none">
                    <p class="text-gray-700 block text-sm" role="menuitem">Ya, setiap peserta akan mendapatkan
                        sertifikat setelah menyelesaikan kursus.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="relative inline-block w-screen lg:px-32 py-2">
        <div class="border-2 px-5 py-3 rounded-xl shadow-lg">
            <div>
                <button type="button" onclick="toggleDropdown('dropdown4', 'icon4')" data-open="false"
                    class="inline-flex justify-between w-screen text-lg font-medium text-start text-dark"
                    id="menu-button4" aria-expanded="false" aria-haspopup="true">
                    Platform Pembayaran apa saja yang digunakan pada SkillPro ?
                    <i id="icon4" class="fa-solid fa-chevron-down ml-2 text-sm mt-1.5"></i>
                </button>
            </div>
            <div id="dropdown4" class="dropdown-content" role="menu" aria-orientation="vertical"
                aria-labelledby="menu-button4" tabindex="-1">
                <div class="pt-2" role="none">
                    <p class="text-gray-700 block text-sm" role="menuitem">Pembayaran bisa menggunakan
                        berbagai e-wallet, QRIS, transfer bank hingga melalui swalayan terdekat</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .dropdown-content {
        transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
        overflow: hidden;
        max-height: 0;
        opacity: 0;
    }

    .dropdown-content.show {
        max-height: 200px;
        opacity: 1.2;
    }
</style>

<script>
    function toggleDropdown(dropdownId, iconId) {
        const dropdown = document.getElementById(dropdownId);
        const button = document.querySelector(`[onclick="toggleDropdown('${dropdownId}', '${iconId}')"]`);
        const icon = document.getElementById(iconId);

        const isOpen = button.getAttribute("data-open") === "true";

        // Toggle dropdown visibility
        dropdown.classList.toggle("show");

        // Toggle the data-open attribute
        button.setAttribute("data-open", !isOpen);

        // Change the FontAwesome icon
        if (isOpen) {
            icon.classList.remove("fa-chevron-up");
            icon.classList.add("fa-chevron-down");
        } else {
            icon.classList.remove("fa-chevron-down");
            icon.classList.add("fa-chevron-up");
        }
    }
</script>
@endsection