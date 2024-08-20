@extends('layouts.main')
@section('container')

<div class="flex flex-col md:flex-row gap-4">
    <!-- Sidebar -->
    <aside class="w-full md:w-1/4 px-4 h-full max-sm:relative md:sticky lg:sticky top-5 md:top-0">
        <!-- Sidebar Container -->
        <input type="checkbox" id="toggle-nav" class="hidden" />
        <div class="bg-white rounded-lg shadow-md mb-4 md:mt-2 overflow-hidden">
            <!-- Toggle Button -->
            <label for="toggle-nav" class="md:hidden bg-blue-600 text-white font-semibold p-3 rounded-lg shadow-md cursor-pointer flex items-center justify-between">
                Navigasi Profil
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </label>

            <!-- Sidebar Content -->
            <div class=" transition-all duration-300 ease-in-out max-h-0 md:max-h-full md:block" id="sidebar-content">
                <h2 class="text-gray-700 font-semibold mb-2 max-sm:hidden ml-4">Navigasi Profil</h2>
                <ul class="space-y-4 py-3">
                    <li class="p-1 px-5">
                        <a href="/my-profile" class="flex items-center text-gray-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v12a2 2 0 002 2h4v-7H5v-2h3V7.5A2.5 2.5 0 0110.5 5H13v2h-2.5a.5.5 0 00-.5.5V9h3l-.5 2H10v7h6a2 2 0 002-2V4a2 2 0 00-2-2H4z" clip-rule="evenodd" />
                            </svg>
                            Profil Saya
                        </a>
                    </li>
                    <li class="p-1 px-5">
                        <a href="/profile/my-purchase" class="flex items-center text-gray-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 2a1 1 0 00-1 1v1H5a1 1 0 00-1 1v10a1 1 0 001 1h10a1 1 0 001-1V5a1 1 0 00-1-1h-4V3a1 1 0 00-1-1zM8 4h4v2H8V4zM4 7v9h12V7H4zm6 5h2v2h-2v-2z" />
                            </svg>
                            Akses Pembelian
                        </a>
                    </li>
                    <li class="p-1 px-5">
                        <a href="/profile/my-activity" class="flex items-center text-gray-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M5.05 4.05a7 7 0 119.9 9.9 7 7 0 01-9.9-9.9zM12 9a2 2 0 10-4 0 2 2 0 004 0zm2.5 6a5.5 5.5 0 10-9 0h9z" />
                            </svg>
                            Aktivitas Saya
                        </a>
                    </li>
                    <li class="p-1 px-5">
                        <a href="/profile/my-transaction" class="flex items-center text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 5.293a1 1 0 011.414 0L10 9.586l4.293-4.293a1 1 0 111.414 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            Riwayat Transaksi
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>

    <style>
        /* Toggle the visibility of the sidebar content */
        #toggle-nav:checked~div #sidebar-content {
            max-height: 500px;
            /* Adjust as needed */
        }

        #toggle-nav:checked~div label svg {
            transform: rotate(180deg);
        }

        @media (min-width: 768px) {
            #sidebar-content {
                max-height: none !important;
            }
        }
    </style>

    <div class="w-full h-full">
        <h2 class="text-2xl font-semibold text-left mr-4 ml-4">Transaksi Saya</h2>
        <p class="text-sm text-left mb-4 ml-4">Lihat semua transaksi kamu di MySkill.</p>
        <div class="p-4">
            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 flex flex-col md:flex-row justify-between items-center text-center md:text-left">
                <!-- Left Section -->
                <div class="mb-4 md:mb-0">
                    <p class="text-sm text-gray-500 mb-1">20240812-XD-1301000000001988</p>
                    <h2 class="text-lg font-bold text-gray-800">Paket Video E-Learning 6 Bulan</h2>
                    <p class="text-sm text-gray-600 mt-2">Dibuat: 12 Agu 2024, 11:32</p>
                    <p class="text-sm text-gray-600">Dibayarkan: -</p>
                    <p class="text-sm text-gray-600">Metode: qr-code/qris</p>
                </div>
            
                <!-- Right Section -->
                <div class="flex flex-col items-center md:items-end">
                    <!-- Status -->
                    <div class="mb-2">
                        <span class="text-sm font-semibold text-white bg-red-500 px-4 py-2 rounded-full">Kadaluarsa</span>
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

        <div class="flex mb-8 justify-end gap-4 mt-6 mr-4">
            <button class="bg-gray-100 text-gray-500 px-4 py-2 rounded hover:bg-gray-200">
                &lt; Sebelumnya
            </button>
            <button class="bg-gray-100 text-gray-500 px-4 py-2 rounded hover:bg-gray-200">
                Selanjutnya &gt;
            </button>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3" defer></script>
@endsection