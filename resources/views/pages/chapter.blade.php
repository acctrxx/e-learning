@extends('layouts.app')
@section('title')
  Insight Chapter Details
@endsection
@section('content')
  <div class="container mx-auto px-5">
    <h1 class="text-black text-2xl font-bold my-12">Class / <span class="text-gray-400 font-normal">Chapter Details</span></h1>
    <div class="grid grid-cols-6 items-start gap-7 mb-20">
      <div class="col-span-4">
        <iframe class="rounded-lg shadow-lg border w-full border-gray-300" height="500px" src="https://www.youtube.com/embed/Jz2nAmRXMS8" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="col-span-2">
        <div class="flex-col border-2 border-gray-300 shadow-lg rounded-lg p-5 overflow-auto" style="height: 500px;">
          <a href="#" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <img src="{{ asset('/images/banner-2.svg') }}" class="rounded-sm w-24">
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="#" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <img src="{{ asset('/images/banner-2.svg') }}" class="rounded-sm w-24">
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="#" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <img src="{{ asset('/images/banner-2.svg') }}" class="rounded-sm w-24">
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="#" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <img src="{{ asset('/images/banner-2.svg') }}" class="rounded-sm w-24">
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="#" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <img src="{{ asset('/images/banner-2.svg') }}" class="rounded-sm w-24">
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="#" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <img src="{{ asset('/images/banner-2.svg') }}" class="rounded-sm w-24">
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="#" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <img src="{{ asset('/images/banner-2.svg') }}" class="rounded-sm w-24">
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
        </div>
      </div>
    </div>
    <div class="mt-10 flex-col">
      <h1 class="text-pink-700 font-bold text-3xl w-3/5 leading-relaxed">Chapter 2 : <span class="text-black font-semibold">5 Menit menjadi Fullstack DeveloperMenit menjadi Fullstack DeveloperMenit menjadi Fullstack Developer</span></h1>
      <div class="flex space-x-3 items-center mt-10 mb-14">
        <img src="{{ asset('/images/profile.svg') }}" class="w-14">
        <div class="flex-col">
          <p class="text-black font-bold text-lg">
            Muhammad Pepet
          </p>
          <p class="text-gray-400 text-sm">
            Ceo Cretivox
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection