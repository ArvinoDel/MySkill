@extends('layouts.main')
@section('container')

<!-- header here -->
<div class="review">
    <section class="w-screen h-auto bg-white lg:bg-gradient-to-b from-orange-400 to-red-400 text-white lg:flex">
        <img src="{{ asset('./assets/review/reviewcv.png') }}" class="h-72 w-100 lg:ml-16 py-2">
        <div class="ml-4">
            <p class="text-4xl font-bold w-4/5">Dapatkan Review CV oleh HRD & Dokumen Persiapan Melamar Kerja.</p>
            <br>
            <p class="w-8/12">Tingkatkan peluang diterima magang dan kerja full-time dengan bantuan HRD. Mulai dari Review CV, Template Surat Lamaran, hingga persiapan wawancara.</p>
            <br>
            <button type="button" class="focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Daftar Sekarang</button>
            <div class="flex items-center mt-2">
                <div class="flex space-x-1">
                    <img src="{{ asset('./assets/bootcamp/hero-header.png') }}" class="h-6 w-6 rounded-full">
                    <img src="{{ asset('./assets/bootcamp/hero-header.png') }}" class="h-6 w-6 rounded-full">
                    <img src="{{ asset('./assets/bootcamp/hero-header.png') }}" class="h-6 w-6 rounded-full">
                    <img src="{{ asset('./assets/bootcamp/hero-header.png') }}" class="h-6 w-6 rounded-full">
                    <img src="{{ asset('./assets/bootcamp/hero-header.png') }}" class="h-6 w-6 rounded-full">
                </div>
                <p class="ml-4 text-white text-md font-semibold">> 10.000 CV Telah Direview</p>
            </div>
        </div>
    </section>

    <!-- card here -->
    <section class="bg-white lg:bg-red-400 text-white lg:flex">
        <div class="flex justify-center items-center">
            <p class="flex text-center lg:px-40 lg:ml-64 text-2xl font-bold text-white">Testimoni Peserta Review CV MySkill</p>
        </div>
    </section>
    <section class="bg-white lg:bg-gradient-to-b from-red-400 to-red-500 text-white lg:flex">
        <div class="flex space-x-2 mt-4 mb-4">
            <div class="bg-white p-2 rounded-lg ml-4">
                <img src="{{ asset('./assets/review/dummyreview.png') }}" class="w-56 rounded-md">
                <button type="button" class="mt-2 ml-2 px-14 py-2 text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm">Baca Sekarang</button>
            </div>
            <div class="bg-white p-2 rounded-lg ml-4">
                <img src="{{ asset('./assets/review/dummyreview.png') }}" class="w-56 rounded-md">
                <button type="button" class="mt-2 ml-2 px-14 py-2 text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm">Baca Sekarang</button>
            </div>
            <div class="bg-white p-2 rounded-lg ml-4">
                <img src="{{ asset('./assets/review/dummyreview.png') }}" class="w-56 rounded-md">
                <button type="button" class="mt-2 ml-2 px-14 py-2 text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm">Baca Sekarang</button>
            </div>
            <div class="bg-white p-2 rounded-lg ml-4">
                <img src="{{ asset('./assets/review/dummyreview.png') }}" class="w-56 rounded-md">
                <button type="button" class="mt-2 ml-2 px-14 py-2 text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm">Baca Sekarang</button>
            </div>
            <div class="bg-white p-2 rounded-lg ml-4">
                <img src="{{ asset('./assets/review/dummyreview.png') }}" class="w-56 rounded-md">
                <button type="button" class="mt-2 ml-2 px-14 py-2 text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm">Baca Sekarang</button>
            </div>
        </div>
    </section>

    <section class="w-screen h-auto bg-white mt-10 lg:flex">
        <!-- sidebar sticky disini -->
        <div class="sticky top-0 w-64 bg-white p-4 shadow-lg rounded-lg border ml-12 mt-2 mb-2 mr-2">
            <h2 class="font-bold text-md text-black">Detail</h2>
            <ul class="mt-2">
                <li class="py-1">
                    <a href="#" class="text-black"><i class="fas fa-chevron-right mr-2"></i> Tentang Program</a>
                </li>
                <li class="py-1">
                    <a href="#" class="text-black"><i class="fas fa-chevron-right mr-2"></i> Benefit Tambahan</a>
                </li>
                <li class="py-1">
                    <a href="#" class="text-black"><i class="fas fa-chevron-right mr-2"></i> Untuk Siapa Saja</a>
                </li>
                <li class="py-1">
                    <a href="#" class="text-black"><i class="fas fa-chevron-right mr-2"></i> Harga Program</a>
                </li>
            </ul>
            <button type="button" class="mt-4 w-full text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm py-2"><i class="fas fa-bolt ml-1 mr-1 text-black"></i>Daftar Sekarang</button>
        </div>
        <!--  -->

        <div class="ml-4">
            <p class="text-xl bg-gradient-to-b from-red-400 to-red-500 font-bold bg-clip-text text-transparent"><i class="fas fa-chevron-right bg-clip-text text-transparent mr-2"></i>Tentang Program</p>
            <br>
            <p>MySkill paham, proses melamar magang atau kerja amat membingungkan. Kita seolah menebak-nebak</p>
            <p> standar HRD dalam menilai CV kita akan seperti apa? Untuk itu, HR Consultant MySkill hadir untuk membantu </p>
            <p>mereview CV kamu. Dalam waktu 7 hari kerja, kamu akan mendapatkan saran terperinci untuk meningkatkan </p>
            kualitas CV lamaranmu.
            <br>
        </div>
    </section>
    @endsection