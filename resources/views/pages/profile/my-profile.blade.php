@extends('layouts.main')
@section('container')

<!-- header here -->
<div class="review">
    <section class="w-full h-auto bg-white lg:bg-gradient-to-b from-orange-400 to-red-400 text-white lg:flex">

    </section>

    <div class="flex flex-col lg:flex-row">
        <!-- Sidebar -->
        <aside class="w-full md:w-full lg:w-1/4 px-4 h-full max-md:relative lg:sticky top-5 lg:top-0">
            <!-- Sidebar Container -->
            <input type="checkbox" id="toggle-nav" class="hidden" />
            <div class="bg-white rounded-lg shadow-md md:mt-2 overflow-hidden">
                <!-- Toggle Button -->
                <label for="toggle-nav" class="lg:hidden bg-blue-600 text-white font-semibold p-3 rounded-lg shadow-md cursor-pointer flex items-center justify-between">
                    Navigasi Profil
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </label>

                <!-- Sidebar Content -->
                <div class="transition-all duration-300 ease-in-out max-h-0 md:max-h-0 lg:max-h-full lg:block overflow-hidden" id="sidebar-content">
                    <h2 class="text-gray-700 font-semibold mb-2 hidden lg:block ml-4">Navigasi Profil</h2>
                    <ul class="space-y-4 py-3">
                        <li class="p-1 px-5">
                            <a href="/my-profile" class="flex items-center text-blue-600 hover:text-blue-800">
                                Profil Saya
                            </a>
                        </li>
                        <li class="p-1 px-5">
                            <a href="/profile/my-purchase" class="flex items-center text-gray-600 hover:text-blue-800">
                                Akses Pembelian
                            </a>
                        </li>
                        <li class="p-1 px-5">
                            <a href="/profile/my-activity" class="flex items-center text-gray-600 hover:text-blue-800">
                                Aktivitas Saya
                            </a>
                        </li>
                        <li class="p-1 px-5">
                            <a href="/profile/my-transaction" class="flex items-center text-gray-600 hover:text-blue-800">
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
                /* Adjust this value as needed to accommodate the content */
            }

            /* Rotate the arrow when the dropdown is active */
            #toggle-nav:checked~div label svg {
                transform: rotate(180deg);
            }

            /* Ensure content is hidden by default on small and medium screens */
            #sidebar-content {
                max-height: 0;
                overflow: hidden;
            }

            /* For large screens, display the content fully */
            @media (min-width: 1024px) {
                #sidebar-content {
                    max-height: none;
                    overflow: visible;
                }
            }
        </style>



        <!-- Profile Form -->
        <div class="w-full h-full  bg-white p-8 ">
            <h2 class="text-2xl font-semibold  text-center">Welcome, User!</h2>
            <p class="text-sm text-center mb-6">Informasi mengenai profil dan preferensi kamu di seluruh layanan myskill.</p>
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-1 px-5">
                    <div class="md:col-span-2">
                        <label for="link-cv" class="block text-gray-700">Nama Lengkap</label>
                        <input type="text" id="link-cv" class="mt-2 p-2 w-full border rounded" placeholder="User.......">
                    </div>
                    <div>
                        <label for="tanggal-lahir" class="block text-gray-700">Tanggal Lahir</label>
                        <input type="date" id="tanggal-lahir" class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="nama" class="block text-gray-700">Gender</label>
                        <input type="text" id="nama" class="mt-2 p-2 w-full border rounded" value="">
                    </div>

                    <div>
                        <label for="hp" class="block text-gray-700">No. HP</label>
                        <input type="text" id="hp" class="mt-2 p-2 w-full border rounded" value="">
                    </div>
                    <div>
                        <label for="domisili" class="block text-gray-700">Domisili</label>
                        <input type="text" id="domisili" class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="profesi" class="block text-gray-700">Profesi</label>
                        <input type="text" id="profesi" class="mt-2 p-2 w-full border rounded" placeholder="Silahkan pilih salah satu atau ketik langsung disini..">
                    </div>
                    <div>
                        <label for="peluang" class="block text-gray-700">Peluang yang Dicari</label>
                        <input type="text" id="peluang" class="mt-2 p-2 w-full border rounded" placeholder="Silahkan pilih salah satu atau ketik langsung disini..">
                    </div>
                    <div class="md:col-span-2">
                        <label for="link-cv" class="block text-gray-700">Link CV / Profil LinkedIn</label>
                        <input type="text" id="link-cv" class="mt-2 p-2 w-full border rounded" placeholder="https://drive.google.com/...">
                    </div>
                </div>
                <div>
                    <p class="text-sm ml-8">MySkill akan menghubungimu jika ada hiring partner yang tertarik dengan skill dan pengalamanmu.</p>
                </div>
                <div class="mt-6 flex items-center space-x-4 ml-6">
                    <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ubah Email</button>
                    <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ubah Password</button>
                </div>
                <div class="mt-6 flex items-center ml-6">
                    <input type="checkbox" id="subscribe" class="form-checkbox">
                    <label for="subscribe" class="ml-2 text-gray-700">Saya bersedia menerima update informasi dari MySkill</label>
                </div>


                <div class="mt-8 text-right">
                    <button type="submit" class="bg-teal-500 text-white px-6 py-2 rounded hover:bg-teal-600 ">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3" defer></script>
@endsection