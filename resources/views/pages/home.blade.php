@extends('layouts.app')
@section('title')
  Insight e-Learning
@endsection
@section('content')
     <div class="container mx-10">
      <div class="flex justify-around gap-8 mt-5 items-center mb-32 mr-0 sm:mr-10 md:mr-0">
        <div class="flex-col text-black">
          <h1 class="text-5xl font-bold leading-normal mb-3" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200">Virtual courses <br> for you</h1>
          <p class="text-gray-400 text-xl mb-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="100">Complete Distance Learning (CPL) platform <br> solution with video conferencing, and <br> integrated with SIAKAD</p>
          <a href="#">
            <span class="bg-pink-700 rounded-full text-white font-bold px-8 py-3 hover:bg-pink-600 transition-all cursor-pointer" >Learn Today</span>
          </a>
        </div>
          <img src="{{ asset('/images/banner-1.svg')}}" class="h-96 hidden md:block">
      </div>

    {{-- Trend Categories --}}
      <div class="flex items-center ml-5 my-7 gap-5">
        <img src="{{ asset('/images/trend.svg')}}" class="w-12">
        <h1 class="text-2xl font-bold text-black">Trend Categories</h1>
      </div>
      <div class="grid grid-cols-12 gap-5 mx-5">
        <a href="#" class="col-span-2 text-black p-8 bg-pink-600 rounded-lg text-center hover:bg-pink-700" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
          <div class="bg-gray-200 rounded-full">
            <img src="{{ asset('/images/category-1.svg')}}" class="w-16 mx-auto py-5">
          </div>
          <p class="text-white font-bold text-sm w-max mt-5 mx-auto">Machine Learning</p>
        </a>
        <a href="#" class="col-span-2 text-black p-8 bg-pink-600 rounded-lg text-center hover:bg-pink-700" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
          <div class="bg-gray-200 rounded-full">
            <img src="{{ asset('/images/category-2.svg')}}" class="w-16 mx-auto py-5">
          </div>
          <p class="text-white font-bold text-sm w-max mt-5 mx-auto">Backend</p>
        </a>
        <a href="#" class="col-span-2 text-black p-8 bg-pink-600 rounded-lg text-center hover:bg-pink-700" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
          <div class="bg-gray-200 rounded-full">
            <img src="{{ asset('/images/category-3.svg')}}" class="w-16 mx-auto py-5">
          </div>
          <p class="text-white font-bold text-sm w-max mt-5 mx-auto">Web Developer</p>
        </a>
        <a href="#" class="col-span-2 text-black p-8 bg-pink-600 rounded-lg text-center hover:bg-pink-700" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
          <div class="bg-gray-200 rounded-full">
            <img src="{{ asset('/images/category-4.svg')}}" class="w-16 mx-auto py-5">
          </div>
          <p class="text-white font-bold text-sm w-max mt-5 mx-auto">Debugger</p>
        </a>
        <a href="#" class="col-span-2 text-black p-8 bg-pink-600 rounded-lg text-center hover:bg-pink-700" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
          <div class="bg-gray-200 rounded-full">
            <img src="{{ asset('/images/category-5.svg')}}" class="w-16 mx-auto py-5">
          </div>
          <p class="text-white font-bold text-sm w-max mt-5 mx-auto">System Security</p>
        </a>
        <a href="#" class="col-span-2 text-black p-8 bg-pink-600 rounded-lg text-center hover:bg-pink-700" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
          <div class="bg-gray-200 rounded-full">
            <img src="{{ asset('/images/category-6.svg')}}" class="w-16 mx-auto py-5">
          </div>
          <p class="text-white font-bold text-sm w-max mt-5 mx-auto">Frontend</p>
        </a>
      </div>

    {{-- Popular Class --}}
      <div class="flex items-center ml-3 mb-7 mt-40 gap-5">
        <img src="{{ asset('/images/popular.svg')}}" class="w-14">
        <h1 class="text-2xl font-bold text-black">Popular Class</h1>
      </div>
      <div class="grid grid-cols-8 gap-5 mx-5">
        <div class="col-span-2 bg-white rounded-md shadow-lg p-7 flex-col">
          <img src="{{ asset('/images/banner-1.svg')}}" alt="">
          <p class="text-black text-center text-md font-bold mt-5">Disini tuh judulnya pengennya dibatesin gitu....</p>
          <div class="border-b-2 border-gray-300 my-8"></div>
          <div class="flex gap-3 items-center">
            <img src="{{ asset('/images/profile.svg')}}" class="w-10">
            <div class="flex-col">
              <p class="text-black text-left font-bold"> Saitama Juragan</p>
              <p class="text-gray-400 text-left text-sm"> Ceo Indofood</p>
            </div>
          </div>
          <button class="bg-pink-700 px-5 py-2 mt-14 rounded-full w-full text-white hover:bg-pink-600 transition-all">View Class</button>
        </div>
        <div class="col-span-2 bg-white rounded-md shadow-lg p-7 flex-col">
          <img src="{{ asset('/images/banner-1.svg')}}" alt="">
          <p class="text-black text-center text-md font-bold mt-5">Disini tuh judulnya pengennya dibatesin gitu....</p>
          <div class="border-b-2 border-gray-300 my-8"></div>
          <div class="flex gap-3 items-center">
            <img src="{{ asset('/images/profile.svg')}}" class="w-10">
            <div class="flex-col">
              <p class="text-black text-left font-bold"> Saitama Juragan</p>
              <p class="text-gray-400 text-left text-sm"> Ceo Indofood</p>
            </div>
          </div>
          <button class="bg-pink-700 px-5 py-2 mt-14 rounded-full w-full text-white hover:bg-pink-600 transition-all">View Class</button>
        </div>
        <div class="col-span-2 bg-white rounded-md shadow-lg p-7 flex-col">
          <img src="{{ asset('/images/banner-1.svg')}}" alt="">
          <p class="text-black text-center text-md font-bold mt-5">Disini tuh judulnya pengennya dibatesin gitu....</p>
          <div class="border-b-2 border-gray-300 my-8"></div>
          <div class="flex gap-3 items-center">
            <img src="{{ asset('/images/profile.svg')}}" class="w-10">
            <div class="flex-col">
              <p class="text-black text-left font-bold"> Saitama Juragan</p>
              <p class="text-gray-400 text-left text-sm"> Ceo Indofood</p>
            </div>
          </div>
          <button class="bg-pink-700 px-5 py-2 mt-14 rounded-full w-full text-white hover:bg-pink-600 transition-all">View Class</button>
        </div>
        <div class="col-span-2 bg-white rounded-md shadow-lg p-7 flex-col">
          <img src="{{ asset('/images/banner-1.svg')}}" alt="">
          <p class="text-black text-center text-md font-bold mt-5">Disini tuh judulnya pengennya dibatesin gitu....</p>
          <div class="border-b-2 border-gray-300 my-8"></div>
          <div class="flex gap-3 items-center">
            <img src="{{ asset('/images/profile.svg')}}" class="w-10">
            <div class="flex-col">
              <p class="text-black text-left font-bold"> Saitama Juragan</p>
              <p class="text-gray-400 text-left text-sm"> Ceo Indofood</p>
            </div>
          </div>
          <button class="bg-pink-700 px-5 py-2 mt-14 rounded-full w-full text-white hover:bg-pink-600 transition-all">View Class</button>
        </div>
      </div>

    {{-- New Class --}}
      <div class="flex items-center ml-5 mb-7 mt-40 gap-5">
        <img src="{{ asset('/images/new.svg')}}" class="w-12">
        <h1 class="text-2xl font-bold text-black">Latest Class</h1>
      </div>
      <div class="grid grid-cols-8 gap-5 mx-5">
        <div class="col-span-2 bg-white rounded-md shadow-lg p-7 flex-col">
          <img src="{{ asset('/images/banner-1.svg')}}" alt="">
          <p class="text-black text-center text-md font-bold mt-5">Disini tuh judulnya pengennya dibatesin gitu....</p>
          <div class="border-b-2 border-gray-300 my-8"></div>
          <div class="flex gap-3 items-center">
            <img src="{{ asset('/images/profile.svg')}}" class="w-10">
            <div class="flex-col">
              <p class="text-black text-left font-bold"> Saitama Juragan</p>
              <p class="text-gray-400 text-left text-sm"> Ceo Indofood</p>
            </div>
          </div>
          <button class="bg-pink-700 px-5 py-2 mt-14 rounded-full w-full text-white hover:bg-pink-600 transition-all">View Class</button>
        </div>
        <div class="col-span-2 bg-white rounded-md shadow-lg p-7 flex-col">
          <img src="{{ asset('/images/banner-1.svg')}}" alt="">
          <p class="text-black text-center text-md font-bold mt-5">Disini tuh judulnya pengennya dibatesin gitu....</p>
          <div class="border-b-2 border-gray-300 my-8"></div>
          <div class="flex gap-3 items-center">
            <img src="{{ asset('/images/profile.svg')}}" class="w-10">
            <div class="flex-col">
              <p class="text-black text-left font-bold"> Saitama Juragan</p>
              <p class="text-gray-400 text-left text-sm"> Ceo Indofood</p>
            </div>
          </div>
          <button class="bg-pink-700 px-5 py-2 mt-14 rounded-full w-full text-white hover:bg-pink-600 transition-all">View Class</button>
        </div>
        <div class="col-span-2 bg-white rounded-md shadow-lg p-7 flex-col">
          <img src="{{ asset('/images/banner-1.svg')}}" alt="">
          <p class="text-black text-center text-md font-bold mt-5">Disini tuh judulnya pengennya dibatesin gitu....</p>
          <div class="border-b-2 border-gray-300 my-8"></div>
          <div class="flex gap-3 items-center">
            <img src="{{ asset('/images/profile.svg')}}" class="w-10">
            <div class="flex-col">
              <p class="text-black text-left font-bold"> Saitama Juragan</p>
              <p class="text-gray-400 text-left text-sm"> Ceo Indofood</p>
            </div>
          </div>
          <button class="bg-pink-700 px-5 py-2 mt-14 rounded-full w-full text-white hover:bg-pink-600 transition-all">View Class</button>
        </div>
        <div class="col-span-2 bg-white rounded-md shadow-lg p-7 flex-col">
          <img src="{{ asset('/images/banner-1.svg')}}" alt="">
          <p class="text-black text-center text-md font-bold mt-5">Disini tuh judulnya pengennya dibatesin gitu....</p>
          <div class="border-b-2 border-gray-300 my-8"></div>
          <div class="flex gap-3 items-center">
            <img src="{{ asset('/images/profile.svg')}}" class="w-10">
            <div class="flex-col">
              <p class="text-black text-left font-bold"> Saitama Juragan</p>
              <p class="text-gray-400 text-left text-sm"> Ceo Indofood</p>
            </div>
          </div>
          <button class="bg-pink-700 px-5 py-2 mt-14 rounded-full w-full text-white hover:bg-pink-600 transition-all">View Class</button>
        </div>
      </div>
      
      {{--  --}}

      <div class="bg-pink-700 h-72 mt-40 mb-48 -ml-20 -mr-20" id="count">
         <div class="container mx-14">
           <div class="grid grid-cols-8 py-8 w-max mx-40 gap-20">
             <div class="span-cols flex-cols text-center" data-aos="zoom-in" data-aos-duration="1500">
               <img src="{{ asset('/images/banner-1.svg')}}" class="w-40">
               <p class="text-white font-bold text-5xl mt-5 value" akhi="666">0</p>
               <p class="text-white font-bold text-xl mt-5">Million Learners</p>
             </div>
             <div class="span-cols flex-cols text-center" data-aos="zoom-in" data-aos-duration="1500">
               <img src="{{ asset('/images/banner-1.svg')}}" class="w-40">
               <p class="text-white font-bold text-5xl mt-5 value" akhi="666">0</p>
               <p class="text-white font-bold text-xl mt-5">Graduates</p>
             </div>
             <div class="span-cols flex-cols text-center" data-aos="zoom-in" data-aos-duration="1500">
               <img src="{{ asset('/images/banner-1.svg')}}" class="w-40">
               <p class="text-white font-bold text-5xl mt-5 value" akhi="666">0</p>
               <p class="text-white font-bold text-xl mt-5">Courses</p>
             </div>
             <div class="span-cols flex-cols text-center" data-aos="zoom-in" data-aos-duration="1500">
               <img src="{{ asset('/images/banner-1')}}.svg" class="w-40">
               <p class="text-white font-bold text-5xl mt-5 value" akhi="666">0</p>
               <p class="text-white font-bold text-xl mt-5">Countries</p>
             </div>
           </div>
         </div>
      </div>

    {{-- Second Banner --}}
      <div class="flex justify-around gap-8 mt-5 items-center mb-32 mr-0 sm:mr-10 md:mr-0 flex-row-reverse">
        <div class="flex-col text-black">
          <h1 class="text-5xl font-bold leading-normal mb-3" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200">Find a convenient way to learn</h1>
          <p class="text-gray-400 text-xl mb-10" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="100">Learn more personally according to the <br> needs and learning styles of students with guidance from Tutors and Supervising Brothers. Experience a more effective and interactive learning experience!</p>
          <a href="#">
            <span class="bg-pink-700 rounded-full text-white font-bold px-8 py-3 hover:bg-pink-600 transition-all cursor-pointer" >Learn More</span>
          </a>
        </div>
          <img src="{{ asset('/images/banner-3.svg')}}" class="h-96 hidden md:block">
      </div>

    {{-- Review --}}
      <h5 class="text-center text-4xl font-bold text-black mt-40 mb-20" data-aos="fade-down" data-aos-duration="2000">
        Says Those Who Have Learned Together Insight
      </h5>
      <div class="grid grid-cols-12 gap-5 mb-40">
        <div class="col-span-3 bg-white rounded-md shadow-lg py-5 px-4 flex-col bg-gradient-to-r from-pink-500 via-pink-600 to-pink-700" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="0">
          <div class="flex gap-3 items-center">
            <img src="{{ asset('/images/profile.svg')}}" class="w-20">
            <div class="flex-col w-full">
              <p class="text-white text-lg text-left font-bold">Saitama Juragan</p>
              <p class="text-white text-left text-sm"> Ceo Indofood</p>
            </div>
          </div>
          <p class="text-white mt-7">Insight bukan cuma ngajarin gue untuk lulus ujian, gue juga belajar untuk berpikir kritis dan jadi pembelajar yang mandiri</p>
        </div>
        <div class="col-span-3 bg-white rounded-md shadow-lg py-5 px-4 flex-col bg-gradient-to-r from-pink-500 via-pink-600 to-pink-700" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
          <div class="flex gap-3 items-center">
            <img src="{{ asset('/images/profile.svg')}}" class="w-20">
            <div class="flex-col w-full">
              <p class="text-white text-lg text-left font-bold">Saitama Juragan</p>
              <p class="text-white text-left text-sm"> Ceo Indofood</p>
            </div>
          </div>
          <p class="text-white mt-7">Insight bukan cuma ngajarin gue untuk lulus ujian, gue juga belajar untuk berpikir kritis dan jadi pembelajar yang mandiri</p>
        </div>
        <div class="col-span-3 bg-white rounded-md shadow-lg py-5 px-4 flex-col bg-gradient-to-r from-pink-500 via-pink-600 to-pink-700" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
          <div class="flex gap-3 items-center">
            <img src="{{ asset('/images/profile.svg')}}" class="w-20">
            <div class="flex-col w-full">
              <p class="text-white text-lg text-left font-bold">Saitama Juragan</p>
              <p class="text-white text-left text-sm"> Ceo Indofood</p>
            </div>
          </div>
          <p class="text-white mt-7">Insight bukan cuma ngajarin gue untuk lulus ujian, gue juga belajar untuk berpikir kritis dan jadi pembelajar yang mandiri adlkfjahsdfiuaehwfyi agisaduhfoiueahjfhdkslfkjsadhf iuhieuwafha ksdfhsjad hfiuwagfiaslksdfg</p>
        </div>
        <div class="col-span-3 bg-white rounded-md shadow-lg py-5 px-4 flex-col bg-gradient-to-r from-pink-500 via-pink-600 to-pink-700" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600">
          <div class="flex gap-3 items-center">
            <img src="{{ asset('/images/profile.svg')}}" class="w-20">
            <div class="flex-col w-full">
              <p class="text-white text-lg text-left font-bold">Saitama Juragan</p>
              <p class="text-white text-left text-sm"> Ceo Indofood</p>
            </div>
          </div>
          <p class="text-white mt-7">Insight bukan cuma ngajarin gue untuk lulus ujian, gue juga belajar untuk berpikir kritis dan jadi pembelajar yang mandiri</p>
        </div>
      </div>

    {{-- About --}}
      <div class="flex-col mt-40 mb-44">
        <img src="{{ asset('/images/about.svg')}}" id="about" class="w-80 mx-auto mb-16" data-aos="fade-down" data-aos-duration="2000">
        <h1 class="font-bold text-gray-700 text-xl text-center w-4/5 mx-auto leading-normal" data-aos="fade-up" data-aos-duration="1000">Our creative and award-winning learning and development team is ready to work for you. We'll design and develop a successful learning solution customized to your specific business goals and needs. Our team of learning strategists, backend developers, frontend developers, machine learning, and debugger are among the best in the business. We bring the brightest minds and most passionate professionals in our industry together to deliver solutions that are innovative and, most importantly, effective. We take pride in every deliverable we create, striving to provide the best solutions for our clients within their budget.</h1>
      </div>
    </div>
  </div>
@endsection