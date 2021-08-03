  <div class="container-fluid mx-auto">
  {{-- Navbar --}}
    <nav id="navbar" class="flex items-center justify-between py-3 px-8 sm:py-5 sm:px-14 sticky top-0 z-10 sm:flex-auto lg:flex">
      <img src="https://i.pinimg.com/originals/8b/80/22/8b8022a1bdadc616217f2116243af729.png" class="w-32">
      <div class="flex md:hidden">
        <button id="hamburger">
          <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
          <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
        </button>
      </div>
      <div class="toggle hidden md:flex w-5/6 text-right text-bold mt-5 md:mt-0 border-t-2 border-gray-400 md:border-none">
        <a href="{{ url('/') }}" class="{{ request()->path() === '/' ? 'text-pink-700 border-pink-700' : 'text-gray-400' }} block md:inline-block border-transparent hover:text-pink-700 hover:border-pink-700 px-3 py-3 border-b-2 transition-all font-bold">HOME</a>
        <a href="{{ url('classes') }}" class="{{ (request()->is('classes')) ? 'text-pink-700 border-pink-700' : 'text-gray-400' }} {{ (request()->is('class-details')) ? 'text-pink-700 border-pink-700' : 'text-gray-400' }} {{ (request()->is('chapter')) ? 'text-pink-700 border-pink-700' : 'text-gray-400' }} block md:inline-block border-transparent hover:text-pink-700 hover:border-pink-700 px-3 py-3 border-b-2 transition-all font-bold">CLASSES </a>
        <a href="#about" class="{{ (request()->is('/#about')) ? 'text-pink-700 border-pink-700' : 'text-gray-400' }} block md:inline-block hover:text-pink-700 hover:border-pink-700 px-3 py-3 border-b-2 md:border-transparent transition-all font-bold">ABOUT</a>
      </div>
      <div class="flex space-x-3">
        @guest
          <a href="{{ url('login') }}" class="bg-pink-700 w-max py-2 px-2 rounded hover:bg-pink-600 text-white transition-all">Sign In</a>
          <a href="{{ url('register') }}" class="bg-pink-700 w-max py-2 px-2 rounded hover:bg-pink-600 text-white transition-all">Sign Up</a>
        @endguest
        @auth
          <div x-data="{ open: false }" class="w-64 flex justify-center items-center">
            <div @click="open = !open" class="relative border-b-4 border-transparent py-3" :class="{'border-pink-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
              <div class="flex justify-center items-center space-x-3 cursor-pointer">
                <div class="w-10 h-10 rounded-full overflow-hidden border-2 dark:border-white border-pink-700">
                  <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="font-semibold dark:text-white text-gray-900 text-md">
                  <div class="cursor-pointer">Hi, {{ Auth::user()->name }}</div>
                </div>
              </div>
              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-60 px-5 py-3 dark:bg-gray-800 bg-pink-50 rounded-lg shadow border dark:border-transparent mt-5">
                <ul class="space-y-3 dark:text-white">
                  <li class="font-medium">
                    <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-pink-500">
                      <div class="mr-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                      </div>
                      Account
                    </a>
                  </li>
                  <li class="font-medium">
                    <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-pink-500">
                      <div class="mr-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                      </div>
                      Setting
                    </a>
                  </li>
                  <hr class="dark:border-gray-700">
                  <li class="font-medium">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                      <div class="mr-3 text-red-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                      </div>
                      Logouts
                    </a>
                  </li>
                </ul>
              </div>
            </div>
        </div>
        @endauth
      </div>
    </nav>