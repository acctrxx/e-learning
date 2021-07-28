@extends('layouts.app')
@section('title')
  Insight Classes
@endsection
@section('content')
  <div class="container mx-10">
    <h1 class="text-3xl font-bold text-black">All Classes</h1>
    <div class="grid grid-cols-3 gap-10">
      <div class="col-span-1 mt-10">
        <div class="border-2 border-gray-300 rounded-lg p-5 flex-col">
          <div class="mb-5">
            <a href="#" class="decoration-none">
              <div class="flex justify-between items-center mb-5 hover:bg-pink-200 rounded-md transition-all p-2">
                <p class="text-gray-800 font-bold text-lg">Machine Learning</p>
                <div class="bg-pink-700 rounded-full px-4 py-2 text-white font-bold">
                  1
                </div>
              </div>
              <div class="border-b-2 border-gray-300"></div>
            </a>
          </div>
          <div class="mb-5">
            <a href="#" class="decoration-none">
              <div class="flex justify-between items-center mb-5 hover:bg-pink-200 rounded-md transition-all p-2">
                <p class="text-gray-800 font-bold text-lg">Machine Learning</p>
                <div class="bg-pink-700 rounded-full px-4 py-2 text-white font-bold">
                  1
                </div>
              </div>
              <div class="border-b-2 border-gray-300"></div>
            </a>
          </div>
          <div class="mb-5">
            <a href="#" class="decoration-none">
              <div class="flex justify-between items-center mb-5 hover:bg-pink-200 rounded-md transition-all p-2">
                <p class="text-gray-800 font-bold text-lg">Machine Learning</p>
                <div class="bg-pink-700 rounded-full px-4 py-2 text-white font-bold">
                  1
                </div>
              </div>
              <div class="border-b-2 border-gray-300"></div>
            </a>
          </div>
          <div class="mb-5">
            <a href="#" class="decoration-none">
              <div class="flex justify-between items-center mb-5 hover:bg-pink-200 rounded-md transition-all p-2">
                <p class="text-gray-800 font-bold text-lg">Machine Learning</p>
                <div class="bg-pink-700 rounded-full px-4 py-2 text-white font-bold">
                  1
                </div>
              </div>
              <div class="border-b-2 border-gray-300"></div>
            </a>
          </div>
          <div class="mb-5">
            <a href="#" class="decoration-none">
              <div class="flex justify-between items-center mb-5 hover:bg-pink-200 rounded-md transition-all p-2">
                <p class="text-gray-800 font-bold text-lg">Machine Learning</p>
                <div class="bg-pink-700 rounded-full px-4 py-2 text-white font-bold">
                  1
                </div>
              </div>
              <div class="border-b-2 border-gray-300"></div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-span-2 mt-10 mb-12">
        <div class="flex-1 flex justify-between sm:hidden">
          <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700">
            Previous
          </a>
          <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700">
            Next
          </a>
        </div>
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
          <div>
            <p class="text-sm text-gray-700">
              Showing
              <span class="font-medium">1</span>
              to
              <span class="font-medium">10</span>
              of
              <span class="font-medium">97</span>
              results
            </p>
          </div>
          <div>
            <nav class="relative z-0 inline-flex -space-x-px" aria-label="Pagination">
              <a href="#" class="hover:text-pink-700 hover:border-pink-700 transition-all relative inline-flex items-center px-2 py-2 rounded-l-md border-b-2 text-sm font-medium text-gray-500 ">
                <span class="sr-only">Previous</span>
                <!-- Heroicon name: solid/chevron-left -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </a>
              <!-- Current: "z-10 bg-indigo-50 border-b-2-indigo-500 text-indigo-600", Default: "text-gray-500 " -->
              <a href="#" aria-current="page" class="z-10 text-pink-700 relative inline-flex items-center px-4 py-2 border-b-2 text-sm font-medium">
                1
              </a>
              <a href="#" class="hover:text-pink-700 hover:border-pink-700 transition-all text-gray-500  relative inline-flex items-center px-4 py-2 border-b-2 text-sm font-medium">
                2
              </a>
              <a href="#" class="hover:text-pink-700 hover:border-pink-700 transition-all text-gray-500  hidden md:inline-flex relative items-center px-4 py-2 border-b-2 text-sm font-medium">
                3
              </a>
              <span class="relative inline-flex items-center px-4 py-2 border-b-2 text-sm font-medium text-gray-700">
                ...
              </span>
              <a href="#" class="hover:text-pink-700 hover:border-pink-700 transition-all text-gray-500  hidden md:inline-flex relative items-center px-4 py-2 border-b-2 text-sm font-medium">
                8
              </a>
              <a href="#" class="hover:text-pink-700 hover:border-pink-700 transition-all text-gray-500  relative inline-flex items-center px-4 py-2 border-b-2 text-sm font-medium">
                9
              </a>
              <a href="#" class="hover:text-pink-700 hover:border-pink-700 transition-all text-gray-500  relative inline-flex items-center px-4 py-2 border-b-2 text-sm font-medium">
                10
              </a>
              <a href="#" class="hover:text-pink-700 hover:border-pink-700 transition-all relative inline-flex items-center px-2 py-2 rounded-r-md border-b-2 text-sm font-medium text-gray-500 ">
                <span class="sr-only">Next</span>
                <!-- Heroicon name: solid/chevron-right -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
              </a>
            </nav>
          </div>
        </div>
        <div class="border-b-2 border-gray-300 mt-10"></div>
        <a href="{{ url('class-details') }}" class="grid grid-cols-5 my-10 items-center hover:bg-pink-200 px-3 py-5 rounded-lg transition-all">
          <div class="col-span-2">
            <img src="/images/banner-3.svg" class="w-72">
          </div>
          <div class="col-span-3">
            <div class="flex-col space-y-2">
              <h1 class="text-black font-bold text-xl">
                Ini tuh titlenya yak
              </h1>
              <p class="text-gray-400 text-md">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
            </div>
          </div>
        </a>
        <div class="border-b-2 border-gray-300"></div>
        <a href="{{ url('class-details') }}" class="grid grid-cols-5 my-10 items-center hover:bg-pink-200 px-3 py-5 rounded-lg transition-all">
          <div class="col-span-2">
            <img src="/images/banner-3.svg" class="w-72">
          </div>
          <div class="col-span-3">
            <div class="flex-col space-y-2">
              <h1 class="text-black font-bold text-xl">
                Ini tuh titlenya yak
              </h1>
              <p class="text-gray-400 text-md">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
            </div>
          </div>
        </a>
        <div class="border-b-2 border-gray-300"></div>
        <a href="{{ url('class-details') }}" class="grid grid-cols-5 my-10 items-center hover:bg-pink-200 px-3 py-5 rounded-lg transition-all">
          <div class="col-span-2">
            <img src="/images/banner-3.svg" class="w-72">
          </div>
          <div class="col-span-3">
            <div class="flex-col space-y-2">
              <h1 class="text-black font-bold text-xl">
                Ini tuh titlenya yak
              </h1>
              <p class="text-gray-400 text-md">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
            </div>
          </div>
        </a>
        <div class="border-b-2 border-gray-300"></div>
        <a href="{{ url('class-details') }}" class="grid grid-cols-5 my-10 items-center hover:bg-pink-200 px-3 py-5 rounded-lg transition-all">
          <div class="col-span-2">
            <img src="/images/banner-3.svg" class="w-72">
          </div>
          <div class="col-span-3">
            <div class="flex-col space-y-2">
              <h1 class="text-black font-bold text-xl">
                Ini tuh titlenya yak
              </h1>
              <p class="text-gray-400 text-md">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
            </div>
          </div>
        </a>
        <div class="border-b-2 border-gray-300 mb-10"></div>
        <div class="flex-1 flex justify-between sm:hidden">
          <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700">
            Previous
          </a>
          <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700">
            Next
          </a>
        </div>
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
          <div>
            <p class="text-sm text-gray-700">
              Showing
              <span class="font-medium">1</span>
              to
              <span class="font-medium">10</span>
              of
              <span class="font-medium">97</span>
              results
            </p>
          </div>
          <div>
            <nav class="relative z-0 inline-flex -space-x-px" aria-label="Pagination">
              <a href="#" class="hover:text-pink-700 hover:border-pink-700 transition-all relative inline-flex items-center px-2 py-2 rounded-l-md border-b-2 text-sm font-medium text-gray-500 ">
                <span class="sr-only">Previous</span>
                <!-- Heroicon name: solid/chevron-left -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </a>
              <!-- Current: "z-10 bg-indigo-50 border-b-2-indigo-500 text-indigo-600", Default: "text-gray-500 " -->
              <a href="#" aria-current="page" class="z-10 text-pink-700 relative inline-flex items-center px-4 py-2 border-b-2 text-sm font-medium">
                1
              </a>
              <a href="#" class="hover:text-pink-700 hover:border-pink-700 transition-all text-gray-500  relative inline-flex items-center px-4 py-2 border-b-2 text-sm font-medium">
                2
              </a>
              <a href="#" class="hover:text-pink-700 hover:border-pink-700 transition-all text-gray-500  hidden md:inline-flex relative items-center px-4 py-2 border-b-2 text-sm font-medium">
                3
              </a>
              <span class="relative inline-flex items-center px-4 py-2 border-b-2 text-sm font-medium text-gray-700">
                ...
              </span>
              <a href="#" class="hover:text-pink-700 hover:border-pink-700 transition-all text-gray-500  hidden md:inline-flex relative items-center px-4 py-2 border-b-2 text-sm font-medium">
                8
              </a>
              <a href="#" class="hover:text-pink-700 hover:border-pink-700 transition-all text-gray-500  relative inline-flex items-center px-4 py-2 border-b-2 text-sm font-medium">
                9
              </a>
              <a href="#" class="hover:text-pink-700 hover:border-pink-700 transition-all text-gray-500  relative inline-flex items-center px-4 py-2 border-b-2 text-sm font-medium">
                10
              </a>
              <a href="#" class="hover:text-pink-700 hover:border-pink-700 transition-all relative inline-flex items-center px-2 py-2 rounded-r-md border-b-2 text-sm font-medium text-gray-500 ">
                <span class="sr-only">Next</span>
                <!-- Heroicon name: solid/chevron-right -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
              </a>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection