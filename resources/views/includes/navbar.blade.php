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
        <a href="{{ url('/') }}" class="{{ request()->path() === '/' ? 'text-black border-black' : 'text-gray-400' }} block md:inline-block border-transparent hover:text-black md:hover:border-black px-3 py-3 border-b-2 transition-all font-bold">HOME</a>
        <a href="{{ url('classes') }}" class="{{ request()->path() === 'classes' ? 'text-black border-black' : 'text-gray-400' }} block md:inline-block border-transparent hover:text-black md:hover:border-black px-3 py-3 border-b-2 transition-all font-bold">CLASSES </a>
        <a href="#about" class="{{ request()->path() === 'about' ? 'text-black border-black' : 'text-gray-400 border-gray-400' }} block md:inline-block hover:text-black md:hover:border-black px-3 py-3 border-b-2 md:border-transparent transition-all font-bold">ABOUT</a>
      </div>
      <div class="flex space-x-3">
        <a href="{{ url('login') }}" class="bg-pink-700 w-max py-2 px-2 rounded hover:bg-pink-600 text-white transition-all">Sign In</a>
        <a href="{{ url('register') }}" class="bg-pink-700 w-max py-2 px-2 rounded hover:bg-pink-600 text-white transition-all">Sign Up</a>
      </div>
    </nav>