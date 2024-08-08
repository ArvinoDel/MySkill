@extends('layouts.main')
@section('container')
    <div class="w-full h-full  rounded-b-3xl bg-white lg:bg-gradient-to-b from-orange-400 to-red-400">
        <div class="snap-x snap-mandatory flex overflow-x-auto gap-12 mx-4"
            style="scrollbar-width: none; -ms-overflow-style: none;" ontouchstart="this.classList.add('touching')"
            ontouchend="this.classList.remove('touching')" onmousedown="this.classList.add('touching')"
            onmouseup="this.classList.remove('touching')">
            <div class="snap-always snap-center flex-shrink-0">
                <img src="{{ asset('assets/home/Rectangle.svg') }}" alt="" class="h-60 w-auto mx-auto">
            </div>
            <div class="snap-always snap-center flex-shrink-0">
                <img src="{{ asset('assets/home/Rectangle.svg') }}" alt="" class="h-60 w-auto mx-auto">
            </div>
        </div>
        <div>
            <h2 class="text-2xl text-center py-5 font-bold text-black">Mari Merintis Karir Bersama GMT</h2>
        </div>


        <div class="grid grid-cols-5 px-4 gap-4">
            <div class="w-52 h-60 bg-white border border-black rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="mx-auto rounded-t-lg w-36 h-36" src="{{ asset('assets/home/image118.svg') }}" alt="" />
                <div class="p-5">

                    <h5 class="text-sm text-center font-bold text-gray-900">Noteworthy
                        Lebih dari 1.5 Juta+ Member Belajar Bersama</h5>

                </div>
            </div>
            <div class="w-52 h-60 bg-white border border-black rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="mx-auto rounded-t-lg w-36 h-36" src="{{ asset('assets/home/image118.svg') }}" alt="" />
                <div class="p-5">

                    <h5 class="text-sm text-center font-bold text-gray-900">Noteworthy
                        Lebih dari 1.5 Juta+ Member Belajar Bersama</h5>

                </div>
            </div>
            <div class="w-52 h-60 bg-white border border-black rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="mx-auto rounded-t-lg w-36 h-36" src="{{ asset('assets/home/image118.svg') }}" alt="" />
                <div class="p-5">

                    <h5 class="text-sm text-center font-bold text-gray-900">Noteworthy
                        Lebih dari 1.5 Juta+ Member Belajar Bersama</h5>

                </div>
            </div>
            <div class="w-52 h-60 bg-white border border-black rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="mx-auto rounded-t-lg w-36 h-36" src="{{ asset('assets/home/image118.svg') }}" alt="" />
                <div class="p-5">

                    <h5 class="text-sm text-center font-bold text-gray-900">Noteworthy
                        Lebih dari 1.5 Juta+ Member Belajar Bersama</h5>

                </div>
            </div>
            <div class="w-52 h-60 bg-white border border-black rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="mx-auto rounded-t-lg w-36 h-36" src="{{ asset('assets/home/image118.svg') }}" alt="" />
                <div class="p-5">

                    <h5 class="text-sm text-center font-bold text-gray-900">Noteworthy
                        Lebih dari 1.5 Juta+ Member Belajar Bersama</h5>

                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <h2 class="text-2xl text-center font-bold">Terbukti Memberi Hasil dan Membuka Batasan Diri</h2>
    </div>

    <div class="grid grid-cols-5 px-4 gap-4">
        <div class="w-52 h-60 bg-white border border-black rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-center">
                <img class="flex justify-center mt-4 rounded-t-lg w-36 h-36"
                    src="{{ asset('assets/home/Rectangle51.svg') }}" alt="" />
            </div>
            <div class="p-5 flex justify-center">

                <button class="bg-yellow-400 text-white px-7 py-2">Baca Cerita</button>

            </div>
        </div>
        <div class="w-52 h-60 bg-white border border-black rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-center">
                <img class="flex justify-center mt-4 rounded-t-lg w-36 h-36"
                    src="{{ asset('assets/home/Rectangle51.svg') }}" alt="" />
            </div>
            <div class="p-5 flex justify-center">

                <button class="bg-yellow-400 text-white px-7 py-2">Baca Cerita</button>

            </div>
        </div>
        <div class="w-52 h-60 bg-white border border-black rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-center">
                <img class="flex justify-center mt-4 rounded-t-lg w-36 h-36"
                    src="{{ asset('assets/home/Rectangle51.svg') }}" alt="" />
            </div>
            <div class="p-5 flex justify-center">

                <button class="bg-yellow-400 text-white px-7 py-2">Baca Cerita</button>

            </div>
        </div>
        <div class="w-52 h-60 bg-white border border-black rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-center">
                <img class="flex justify-center mt-4 rounded-t-lg w-36 h-36"
                    src="{{ asset('assets/home/Rectangle51.svg') }}" alt="" />
            </div>
            <div class="p-5 flex justify-center">

                <button class="bg-yellow-400 text-white px-7 py-2">Baca Cerita</button>

            </div>
        </div>
        <div class="w-52 h-60 bg-white border border-black rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-center">
                <img class="flex justify-center mt-4 rounded-t-lg w-36 h-36"
                    src="{{ asset('assets/home/Rectangle51.svg') }}" alt="" />
            </div>
            <div class="p-5 flex justify-center">

                <button class="bg-yellow-400 text-white px-7 py-2">Baca Cerita</button>

            </div>
        </div>
    </div>

    <div>
        <h3 class="py-12 text-center font-bold text-2xl text-black">Berbagai Macam Program di GMT</h3>
    </div>

    <div class="flex">
        <img class="w-full h-80 ms-20" src="{{ asset('assets/home/image1.svg') }}" alt="" />
        <div class="pe-">
            <h2 class="font-bold text-black text-xl py">E-learning</h2>
            <h1 class="text-black text-lg pt-12 font-semibold">Pelajari Ratusan Skill Sekali Bayar. Praktik dan Bersertifikat</h1>
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

        </div>
    </div>
@endsection
