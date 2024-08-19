@extends('layouts.main')
@section('container')

<div class="flex flex-col md:flex-row gap-4">
    <!-- Sidebar -->
    <aside class="w-full md:w-1/4 px-4 mb-8 h-full max-sm:relative md:sticky lg:sticky top-11 md:top-0">
        <!-- Sidebar Container -->
        <input type="checkbox" id="toggle-nav" class="hidden" />
        <div class="bg-white rounded-lg shadow-md mt-4 md:mt-8 overflow-hidden">
            <!-- Toggle Button -->
            <label for="toggle-nav" class="md:hidden bg-blue-600 text-white font-semibold p-4 rounded-lg shadow-md cursor-pointer flex items-center justify-between">
                Navigasi Profil
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </label>

            <!-- Sidebar Content -->
            <div class=" transition-all duration-300 ease-in-out max-h-0 md:max-h-full md:block" id="sidebar-content">
                <h2 class="text-gray-700 font-semibold mb-4 max-sm:hidden">Navigasi Profil</h2>
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
                        <a href="/profile/my-purchase" class="flex items-center text-blue-600 hover:text-blue-800">
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
                        <a href="/profile/my-transaction" class="flex items-center text-gray-600 hover:text-blue-800">
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

    <!-- Content Area -->
    <div class="w-full md:w-3/4 bg-white shadow-md rounded-lg p-6">
        <div class="flex justify-between items-center border-b border-gray-300 pb-2 mb-6 tab-container">
            <div class="flex space-x-4">
                <a href="#" id="show-elearning" class="text-lg tab active-tab">E-Learning</a>
                <a href="#" id="show-bootcamp" class="text-lg tab">Bootcamp</a>
                <a href="#" id="show-mentoring" class="text-lg tab">Mentoring</a>
            </div>
            <span class="underline" id="underline"></span>
        </div>

        <div id="elearning-content" class="text-start">
            <h2 class="text-xl font-semibold text-gray-800">Oops, sepertinya Kamu Tidak Memiliki Langganan Aktif.</h2>
            <p class="mt-2 text-gray-600">Ayo berlangganan sekarang untuk akses ratusan materi e-learning MySkill!</p>
            <button class="mt-4 bg-teal-500 text-white px-6 py-2 rounded-lg hover:bg-teal-600">
                ⚡ Mulai Berlangganan
            </button>
            <div class="mt-10">
                <h3 class="text-lg font-semibold text-gray-800">Pembelian Sebelumnya</h3>
                <p class="mt-2 text-gray-600">Hmm, sepertinya kamu belum pernah berlangganan e-learning. Yuk segera berlangganan untuk dapatkan akses penuh ke materi MySkill.</p>
            </div>
        </div>
        <div id="bootcamp-content" class="text-start hidden">
            <h2 class="text-xl font-semibold text-gray-800">Semua Bootcamp Saya</h2>
            <p class="mt-2 text-gray-600">Hmm, sepertinya kamu belum pernah bergabung bootcamp MySkill. Yuk eksplor bootcamp yang tersedia di MySkill dengan mengklik tombol dibawah.</p>
            <button class="mt-4 bg-teal-500 text-white px-6 py-2 rounded-lg hover:bg-teal-600">
                ⚡ Mulai Berlangganan Bootcamp
            </button>
        </div>

        <div id="mentoring-content" class="text-start hidden">
            <h2 class="text-xl font-semibold text-gray-800">Oops, sepertinya Kamu Tidak Memiliki Langganan Mentoring Aktif.</h2>
            <p class="mt-2 text-gray-600">Ayo beli sekarang dan dapatkan review CV dari MySkill!</p>
            <button class="mt-4 bg-teal-500 text-white px-6 py-2 rounded-lg hover:bg-teal-600">
                ⚡ Mulai Berlangganan Mentoring
            </button>
            <div class="mt-10">
                <h3 class="text-lg font-semibold text-gray-800">Pembelian Sebelumnya</h3>
                <p class="mt-2 text-gray-600">Hmm, sepertinya kamu belum pernah berlangganan review CV. Yuk segera berlangganan untuk dapatkan akses untuk review CV MySkill.</p>
            </div>
        </div>


        <div class="flex justify-end gap-4 mt-6">
            <button class="bg-gray-100 text-gray-500 px-4 py-2 rounded hover:bg-gray-200">
                &lt; Sebelumnya
            </button>
            <button class="bg-gray-100 text-gray-500 px-4 py-2 rounded hover:bg-gray-200">
                Selanjutnya &gt;
            </button>
        </div>
    </div>

    <style>
        .underline {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 2px;
            background-color: black;
            transition: left 0.3s, width 0.3s;
        }

        .tab-container {
            position: relative;
        }

        .tab {
            position: relative;
            padding-bottom: 8px;
        }

        .active-tab {
            font-weight: bold;
        }
    </style>

    <script>
        const tabs = document.querySelectorAll('.tab');
        const underline = document.getElementById('underline');
        const contents = {
            'show-elearning': 'elearning-content',
            'show-bootcamp': 'bootcamp-content',
            'show-mentoring': 'mentoring-content'
        };

        function updateUnderline(tab) {
            const tabRect = tab.getBoundingClientRect();
            const containerRect = tab.parentElement.getBoundingClientRect();
            underline.style.width = `${tabRect.width}px`;
            underline.style.left = `${tabRect.left - containerRect.left}px`;
        }

        tabs.forEach(tab => {
            tab.addEventListener('click', function(event) {
                event.preventDefault();
                tabs.forEach(t => t.classList.remove('active-tab'));
                tab.classList.add('active-tab');
                updateUnderline(tab);

                Object.keys(contents).forEach(key => {
                    document.getElementById(contents[key]).classList.add('hidden');
                });
                document.getElementById(contents[tab.id]).classList.remove('hidden');
            });
        });

        // Initialize underline position
        updateUnderline(document.querySelector('.active-tab'));
    </script>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3" defer></script>
@endsection