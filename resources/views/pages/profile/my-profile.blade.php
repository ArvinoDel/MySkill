@extends('layouts.main')
@section('container')

<!-- header here -->
<div class="review">
    <section class="w-full h-auto bg-white lg:bg-gradient-to-b from-orange-400 to-red-400 text-white lg:flex">

    </section>

    <div class="flex flex-col md:flex-row">
        <!-- Sidebar -->
        <aside class="w-full md:w-1/4 px-4 mb-8 sticky top-11 h-full">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-gray-700 font-semibold mb-4">Navigasi Profil</h2>
                <ul class="space-y-4">
                    <li>
                        <a href="/my-profile" class="flex items-center text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v12a2 2 0 002 2h4v-7H5v-2h3V7.5A2.5 2.5 0 0110.5 5H13v2h-2.5a.5.5 0 00-.5.5V9h3l-.5 2H10v7h6a2 2 0 002-2V4a2 2 0 00-2-2H4z" clip-rule="evenodd" />
                            </svg>
                            Profil Saya
                        </a>
                    </li>
                    <li>
                        <a href="/profile/my-purchase" class="flex items-center text-gray-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 2a1 1 0 00-1 1v1H5a1 1 0 00-1 1v10a1 1 0 001 1h10a1 1 0 001-1V5a1 1 0 00-1-1h-4V3a1 1 0 00-1-1zM8 4h4v2H8V4zM4 7v9h12V7H4zm6 5h2v2h-2v-2z" />
                            </svg>
                            Akses Pembelian
                        </a>
                    </li>
                    <li>
                        <a href="/profile/my-activity" class="flex items-center text-gray-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M5.05 4.05a7 7 0 119.9 9.9 7 7 0 01-9.9-9.9zM12 9a2 2 0 10-4 0 2 2 0 004 0zm2.5 6a5.5 5.5 0 10-9 0h9z" />
                            </svg>
                            Aktivitas Saya
                        </a>
                    </li>
                    <li>
                        <a href="/profile/my-transaction" class="flex items-center text-gray-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 5.293a1 1 0 011.414 0L10 9.586l4.293-4.293a1 1 0 111.414 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            Riwayat Transaksi
                        </a>
                    </li>
                </ul>
            </div>
        </aside>


        <!-- Profile Form -->
        <div class="w-full md:w-3/4 bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold  text-center">Welcome, User!</h2>
            <p class="text-sm text-center mb-6">Informasi mengenai profil dan preferensi kamu di seluruh layanan myskill.</p>
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
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
                    <p class="text-sm">MySkill akan menghubungimu jika ada hiring partner yang tertarik dengan skill dan pengalamanmu.</p>
                </div>
                <div class="mt-6 flex items-center space-x-4">
                    <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ubah Email</button>
                    <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ubah Password</button>
                </div>
                <div class="mt-6 flex items-center">
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
@endsection