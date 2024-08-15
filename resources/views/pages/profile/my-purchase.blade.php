@extends('layouts.main')
@section('container')

<div class="flex flex-col md:flex-row gap-4">
    <!-- Sidebar -->
    <aside class="w-full md:w-1/4 px-4 mb-8 sticky top-11 h-full">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-gray-700 font-semibold mb-4">Navigasi Profil</h2>
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
                    <a href="#" class="flex items-center text-blue-600 hover:text-blue-800">
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
                    <a href="/profile/my-transaction" class="flex items-center text-gray-800 hover:text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4.293 5.293a1 1 0 011.414 0L10 9.586l4.293-4.293a1 1 0 111.414 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414z" />
                        </svg>
                        Riwayat Transaksi
                    </a>
                </li>
            </ul>
        </div>
    </aside>

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

@endsection