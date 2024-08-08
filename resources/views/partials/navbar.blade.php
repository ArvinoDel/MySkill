<nav class="sticky top-0 px-8 flex justify-between items-center bg-orange-400">
    <a class="text-2xl font-bold leading-none" href="#">
        <img class="w-21 h-21" src="{{ asset('assets/logo-company.svg') }}" alt="logo-company">
    </a>
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center p-3 focus:outline-none hover:text-white focus:text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>
    <ul
        class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-8">
        <li>
            <a href="/home"
                class="{{ request()->is('home') ? 'text-black before:scale-x-100' : 'text-white before:scale-x-0' }} text-sm font-medium hover:text-gray-900 relative px-2 py-2 rounded transition-all duration-300 before:absolute before:bottom-0 before:left-0 before:w-full before:h-0.5 before:bg-black before:scale-x-0 hover:before:scale-x-100 focus:outline-none focus:ring-0 active:text-black active:before:bg-black">
                Home
            </a>
        </li>
        <li>
            <a href="/e-learning"
                class="{{ request()->is('e-learning') ? 'text-black before:scale-x-100' : 'text-white before:scale-x-0' }} text-sm font-medium hover:text-gray-900 relative px-2 py-2 rounded transition-all duration-300 before:absolute before:bottom-0 before:left-0 before:w-full before:h-0.5 before:bg-black before:scale-x-0 hover:before:scale-x-100 focus:outline-none focus:ring-0 active:text-black active:before:bg-black">
                E-Learning
            </a>
        </li>
        <li>
            <a href="/bootcamp"
                class="{{ request()->is('bootcamp') ? 'text-black before:scale-x-100' : 'text-white before:scale-x-0' }} text-sm font-medium relative px-2 py-2 rounded transition-all duration-300 before:absolute before:bottom-0 before:left-0 before:w-full before:h-0.5 before:bg-black hover:text-gray-900 hover:before:scale-x-100 focus:outline-none focus:ring-0">
                Program & Bootcamp
            </a>

        </li>
        <li>
            <a href="/review"
                class="{{ request()->is('review') ? 'text-black before:scale-x-100' : 'text-white before:scale-x-0' }} text-sm font-medium hover:text-gray-900 relative px-2 py-2 rounded transition-all duration-300 before:absolute before:bottom-0 before:left-0 before:w-full before:h-0.5 before:bg-black before:scale-x-0 hover:before:scale-x-100 focus:outline-none focus:ring-0 active:text-black active:before:bg-black">
                Review CV
            </a>
        </li>
        <li>
            <a href="/corporate-service"
                class="{{ request()->is('corporate-service') ? 'text-black before:scale-x-100' : 'text-white before:scale-x-0' }} text-sm font-medium hover:text-gray-900 relative px-2 py-2 rounded transition-all duration-300 before:absolute before:bottom-0 before:left-0 before:w-full before:h-0.5 before:bg-black before:scale-x-0 hover:before:scale-x-100 focus:outline-none focus:ring-0 active:text-black active:before:bg-black">
                Corporate Service
            </a>
        </li>
    </ul>
    <div class="flex max-md:hidden space-x-2">
        <button type="button"
            class="text-white hover:text-white border border-pink-400 hover:bg-pink-500 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-300 dark:text-white dark:hover:text-white dark:hover:bg-pink-400 dark:focus:ring-pink-900">Login</button>
        <button type="button"
            class="focus:outline-none text-white bg-pink-500 hover:bg-pink-600 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-pink-600 dark:hover:bg-pink-600 dark:focus:ring-pink-500">Sign
            Up</button>

    </div>
</nav>
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none hover:text-green-600" href="#">
                <img class="w-23" src="{{ asset('assets/logo-company.svg') }}" alt="logo-company">
            </a>
            <button class="navbar-close focus:outline-none">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-green-500 "
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <div>
            <div>
                <ul>
                    <li class="mb-1 inline-flex group rounded w-full">
                        <div
                            class="flex w-1 scale-y-0 transition-transform origin-top rounded-full duration-400 ease-in">
                        </div>
                        <a class="flex p-4 text-sm font-semibold text-black" href="#">Home</a>
                    </li>
                    <li class="mb-1 inline-flex group rounded w-full">
                        <div
                            class="flex w-1 group0 scale-y-0 transition-transform origin-top rounded-full duration-400 ease-in">
                        </div>
                        <a class="block p-4 text-sm font-semibold text-black" href="#">E-learning</a>
                    </li>
                    <li class="mb-1 inline-flex group rounded w-full">
                        <div
                            class="flex w-1 group0 scale-y-0 transition-transform origin-top rounded-full duration-400 ease-in">
                        </div>
                        <a class="block p-4 text-sm font-semibold text-black" href="#">Program & Bootcamp</a>
                    </li>
                    <li class="mb-1 inline-flex group rounded w-full">
                        <div
                            class="flex w-1 group0 scale-y-0 transition-transform origin-top rounded-full duration-400 ease-in">
                        </div>
                        <a class="block p-4 text-sm font-semibold text-black" href="#">Review CV</a>
                    </li>
                    <li class="mb-1 inline-flex group rounded w-full">
                        <div
                            class="flex w-1 scale-y-0 transition-transform origin-top rounded-full duration-400 ease-in">
                        </div>
                        <a class="block p-4 text-sm font-semibold text-black" href="#">Corporate Service</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-auto flex justify-end">
            <button type="button"
                class="text-pink-500 hover:text-pink-500 border border-pink-400 hover:bg-pink-500 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-pink-300">
                Login
            </button>
            <button type="button"
                class="focus:outline-none text-white bg-pink-500 hover:bg-pink-600 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                Sign Up
            </button>
        </div>

    </nav>
</div>
