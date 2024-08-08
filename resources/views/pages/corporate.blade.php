@extends('layouts.main')
@section('container')
<div class="home">
    <section class="w-screen h-auto rounded-b-3xl bg-white lg:bg-gradient-to-b from-orange-400 to-red-400 text-white flex items-center">
        <img src="{{ asset('./assets/corporate/corporate.webp') }}" class="h-64 w-64 ml-16 py-2 mb-24">
        <div class="ml-4">
            <button type="button" class="focus:outline-none text-white bg-gray-900 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">GMT for Business</button>
            <p class="text-4xl font-bold mt-4">
                Layanan Pengembangan Skill dan
            </p>
            <p class="text-4xl font-bold mb-0">
                Peningkatan Performa Karyawan
            </p>
            <p class="mt-2 text-lg  ">Jalankan corporate training yang disesuaikan dengan kebutuhan perusahaan,</p>
            <p class=" text-lg"> maupun akses Performance Management Software dan E-learning MySkill for</p>
            <p class="text-lg"> Business.</p>
            <br>
            <button type="button" class="focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Corporate Training</button>
            <button type="button" class="focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Performance Manajement Software</button>
            <div class="flex justify-start items-center space-x-4 mr-24 mt-4">
                <img src="./assets/corporate/microsoft.webp" alt="Microsoft" class="h-6">
                <img src="./assets/corporate/kemenkeu.webp" alt="kemenkeu" class="h-6">
                <img src="./assets/corporate/bank-mandiri.webp" alt="mandiri" class="h-6">
                <img src="./assets/corporate/bank-indonesia.webp" alt="bi" class="h-6">
                <img src="./assets/corporate/mizan.webp" alt="mizan" class="h-6">
            </div>
            <h3 class="text-center mt-4 mr-4 text-3xl font-bold mb-4">Mengapa Ratusan Perusahaan Memilih GMTrainer?</h3>
        </div>
    </section>
</div>
@endsection