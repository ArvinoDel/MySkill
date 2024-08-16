@extends('layouts.main')
@section('container')

<div class="flex flex-col md:flex-row gap-4">
    <!-- Sidebar -->
    <aside class="w-full md:w-1/4 px-4 mb-8 h-full max-sm:relative md:sticky lg:sticky top-11 md:top-0">
        <div class="bg-white rounded-lg shadow-md p-6 mt-8">
            <h2 class="text-gray-700 font-semibold mb-4 ">Navigasi Profil</h2>
            <ul class="space-y-4">
                <li>
                    <a href="/my-profile" class="flex items-center text-gray-800 hover:text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H4zm1 3a2 2 0 114 0 2 2 0 01-4 0zm4 10H5v-1a4 4 0 118 0v1h-4z" />
                        </svg>
                        Profil Saya
                    </a>
                </li>
                <li>
                    <a href="/profile/my-purchase" class="flex items-center text-gray-600 hover:text-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm2 4a1 1 0 110 2H7a1 1 0 010-2h1zm3 0a1 1 0 110 2h-1a1 1 0 010-2h1zm2 6a1 1 0 110 2H9a1 1 0 010-2h4z" />
                        </svg>
                        Akses Pembelian
                    </a>
                </li>
                <li>
                    <a href="/profile/my-activity" class="flex items-center text-gray-800 hover:text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8.5 4a3.5 3.5 0 10.002 7.002A3.5 3.5 0 008.5 4zm0 1a2.5 2.5 0 110 5 2.5 2.5 0 010-5zm-6.15 8A6.462 6.462 0 008.5 14.5c2.26 0 4.314-1.193 5.354-3h1.96c-.762 2.197-2.81 4-5.314 4H3.5a6.464 6.464 0 01-1.15-.5z" />
                        </svg>
                        Aktivitas Saya
                    </a>
                </li>
                <li>
                    <a href="/profile/my-transaction" class="flex items-center text-blue-800 hover:text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4.293 5.293a1 1 0 011.414 0L10 9.586l4.293-4.293a1 1 0 111.414 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414z" />
                        </svg>
                        Riwayat Transaksi
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="w-full h-full mt-4">
        <h2 class="text-2xl font-semibold text-left mr-4 ml-4">Transaksi Saya</h2>
        <p class="text-sm text-left mb-4 ml-4">Lihat semua transaksi kamu di MySkill.</p>
        <div class="p-4">
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 flex flex-col md:flex-row justify-between items-center">
                <!-- Left Section -->
                <div class="mb-4 md:mb-0">
                    <p class="text-sm text-gray-500 mb-1">20240812-XD-1301000000001988</p>
                    <h2 class="text-lg font-bold text-gray-800">Paket Video E-Learning 6 Bulan</h2>
                    <p class="text-sm text-gray-600 mt-2">Dibuat: 12 Agu 2024, 11:32</p>
                    <p class="text-sm text-gray-600">Dibayarkan: -</p>
                    <p class="text-sm text-gray-600">Metode: qr-code/qris</p>
                </div>

                <!-- Right Section -->
                <div class="flex flex-col items-end">
                    <!-- Status -->
                    <div class="mb-2">
                        <span class="text-sm font-semibold text-white bg-red-500 px-2 py-1 rounded-full">Kadaluarsa</span>
                    </div>
                    <!-- Price -->
                    <p class="text-lg font-semibold text-gray-800">Rp 111.514</p>
                    <!-- Detail Button -->
                    <button class="mt-2 bg-teal-500 text-white px-4 py-2 rounded-lg hover:bg-teal-600">
                        Lihat Detail
                    </button>
                </div>
            </div>
        </div>

        <div class="flex mb-8 justify-end gap-4 mt-6">
            <button class="bg-gray-100 text-gray-500 px-4 py-2 rounded hover:bg-gray-200">
                &lt; Sebelumnya
            </button>
            <button class="bg-gray-100 text-gray-500 px-4 py-2 rounded hover:bg-gray-200">
                Selanjutnya &gt;
            </button>
        </div>
    </div>
</div>
@endsection