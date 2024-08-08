<nav class="relative px-8 py-4 flex justify-between items-center bg-orange-400">
    <a class="text-3xl font-bold leading-none" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 hover:text-green-600" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                clip-rule="evenodd" />
        </svg>
    </a>
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center p-3 focus:outline-none hover:text-green-500 focus:text-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>
    <ul
        class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-8">
        <li>
            <a class="text-sm text-gray-700 font-medium hover:text-green-500 items-center hover:border border-green-600 px-2 py-2 rounded hover:shadow"
                href="#">
                News
            </a>
        </li>
        <li>
            <a class="text-sm text-gray-700 font-medium hover:text-green-500 items-center hover:border border-green-600 px-2 py-2 rounded hover:shadow"
                href="#">
                About Us
            </a>
        </li>
        <li>
            <a class="text-sm text-gray-700 font-medium hover:text-green-500 items-center hover:border border-green-600 px-2 py-2 rounded hover:shadow"
                href="#">
                Lectures
            </a>
        </li>
        <li>
            <a class="text-sm text-gray-700 font-medium hover:text-green-500 items-center hover:border border-green-600 px-2 py-2 rounded hover:shadow"
                href="#">
                Contacts
            </a>
        </li>
    </ul>
    <div class="flex space-x-2">
      <button type="button"
          class="text-white border border-pink-400 bg-transparent hover:bg-pink-500 hover:border-pink-500 focus:ring-4 focus:outline-none focus:ring-pink-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:border-pink-300 dark:text-white dark:hover:bg-pink-400 dark:focus:ring-pink-900 transition-all duration-300">
          Login
      </button>
      <button type="button"
          class="text-white bg-pink-500 hover:bg-pink-600 focus:ring-4 focus:ring-pink-300 font-medium rounded-full text-sm px-5 py-2.5 dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-500 transition-all duration-300">
          Sign Up
      </button>
  </div>
  
</nav>
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none hover:text-green-600" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                        clip-rule="evenodd" />
                </svg>
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
            <ul>
                <li class="mb-1 inline-flex group hover:bg-green-50 rounded w-full">
                    <div
                        class="flex w-1 group-hover:bg-green-500 scale-y-0 group-hover:scale-100 transition-transform origin-top rounded-full duration-400 ease-in">
                    </div>
                    <a class="flex p-4 text-sm font-semibold text-gray-500 group-hover:text-green-600"
                        href="#">News</a>
                </li>
                <li class="mb-1 inline-flex group hover:bg-green-50 rounded w-full">
                    <div
                        class="flex w-1 group-hover:bg-green-500 scale-y-0 group-hover:scale-100 transition-transform origin-top rounded-full duration-400 ease-in">
                    </div>
                    <a class="block p-4 text-sm font-semibold text-gray-500 group-hover:text-green-600"
                        href="#">About Us</a>
                </li>
                <li class="mb-1 inline-flex group hover:bg-green-50 rounded w-full">
                    <div
                        class="flex w-1 group-hover:bg-green-500 scale-y-0 group-hover:scale-100 transition-transform origin-top rounded-full duration-400 ease-in">
                    </div>
                    <a class="block p-4 text-sm font-semibold text-gray-500 group-hover:text-green-600"
                        href="#">Lectures</a>
                </li>
                <li class="mb-1 inline-flex group hover:bg-green-50 rounded w-full">
                    <div
                        class="flex w-1 group-hover:bg-green-500 scale-y-0 group-hover:scale-100 transition-transform origin-top rounded-full duration-400 ease-in">
                    </div>
                    <a class="block p-4 text-sm font-semibold text-gray-500 group-hover:text-green-600"
                        href="#">Contacts</a>
                </li>
            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6 rounded-lg">
                <button type="button"
                    class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-pink-300 dark:hover:text-white dark:hover:bg-pink-400 dark:focus:ring-yellow-900">Login</button>
            </div>
        </div>
    </nav>
</div>
