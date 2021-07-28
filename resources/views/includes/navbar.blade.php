  <div class="container mx-auto sm:mx-0 sm:px-10">
  {{-- Navbar --}}
    <nav id="navbar" class="flex items-center w-screen justify-between py-3 px-8 sm:py-3 sm:px-14 bg-red-50 sticky top-0 z-10 sm:flex-auto lg:flex -ml-10">
      <img src="https://i.pinimg.com/originals/8b/80/22/8b8022a1bdadc616217f2116243af729.png" class="w-32">
      <div class="flex md:hidden">
        <button id="hamburger">
          <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
          <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
        </button>
      </div>
      <div class="toggle hidden md:flex w-full md:w-auto text-right text-bold mt-5 md:mt-0 border-t-2 border-gray-400 md:border-none">
        <a href="{{ url('/') }}" class="block md:inline-block text-gray-400 hover:text-black md:hover:border-black px-3 py-3 border-b-2 border-gray-400 md:border-transparent transition-all">Home</a>
        <a href="{{ url('classes') }}" class="block md:inline-block text-gray-400 hover:text-black md:hover:border-black px-3 py-3 border-b-2 border-gray-400 md:border-transparent transition-all">Classes</a>
        <a href="#about" class="block md:inline-block text-gray-400 hover:text-black md:hover:border-black px-3 py-3 border-b-2 border-gray-400 md:border-transparent transition-all">About Us</a>
      </div>
      <div class="flex gap-3">
        <button class="bg-pink-700 py-2 px-2 rounded hover:bg-pink-600 text-white transition-all">Sign In</button>
        <button class="bg-pink-700 py-2 px-2 rounded hover:bg-pink-600 text-white transition-all">Sign Up</button>
      </div>
    </nav>