@extends('layouts.app')
@section('title')
  Insight Class Details
@endsection
@section('content')
  <div class="container mx-auto px-5">
    <h1 class="text-black text-2xl font-bold my-12">Home / <span class="text-gray-400 font-normal">Class Details</span></h1>
    <div class="grid grid-cols-6 gap-7 items-start mb-20">
      <div class="col-span-4">
        <iframe class="rounded-lg shadow-lg" width="820px" height="500px" src="https://www.youtube.com/embed/Jz2nAmRXMS8" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="col-span-2">
        <div class="flex-col border-2 border-gray-300 shadow-lg rounded-lg p-5 overflow-auto" style="height: 500px;">
          <a href="{{ url('chapter') }}" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <div class="font-bold text-black text-2xl">
              1.
            </div>
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="{{ url('chapter') }}" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <div class="font-bold text-black text-2xl">
              2.
            </div>
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="{{ url('chapter') }}" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <div class="font-bold text-black text-2xl">
              3.
            </div>
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="{{ url('chapter') }}" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <div class="font-bold text-black text-2xl">
              4.
            </div>
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="{{ url('chapter') }}" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <div class="font-bold text-black text-2xl">
              5.
            </div>
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="{{ url('chapter') }}" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <div class="font-bold text-black text-2xl">
              6.
            </div>
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="{{ url('chapter') }}" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <div class="font-bold text-black text-2xl">
              7.
            </div>
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
        </div>
      </div>
    </div>
    <div class="mt-10 flex-col">
      <h1 class="text-black font-bold text-3xl w-3/5 leading-relaxed">5 Menit menjadi Fullstack DeveloperMenit menjadi Fullstack DeveloperMenit menjadi Fullstack Developer</h1>
      <div class="flex space-x-3 items-center mt-10">
        <img src="/images/profile.svg" class="w-14">
        <div class="flex-col">
          <p class="text-black font-bold text-lg">
            Muhammad Pepet
          </p>
          <p class="text-gray-400 text-sm">
            Ceo Cretivox
          </p>
        </div>
      </div>
      <div class="w-3/5 text-black text-lg leading-relaxed mt-10">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin commodo augue nec mauris mattis aliquam. Sed tristique quis mi sit amet commodo. Mauris eget risus a sem porta dignissim. Nullam viverra leo justo, ut rhoncus justo molestie quis. Ut rutrum sagittis aliquam. Proin maximus maximus ipsum id congue. Fusce vehicula massa vel vestibulum placerat. Morbi vel purus non ipsum tempus porttitor eget ut eros. Aliquam molestie congue purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin commodo augue nec mauris mattis aliquam. Sed tristique quis mi sit amet commodo. Mauris eget risus a sem porta dignissim. Nullam viverra leo justo, ut rhoncus justo molestie quis. Ut rutrum sagittis aliquam. Proin maximus maximus ipsum id congue. Fusce vehicula massa vel vestibulum placerat. Morbi vel purus non ipsum tempus porttitor eget ut eros. Aliquam molestie congue purus. 
      </div>
      <div class="text-pink-700 text-2xl font-bold mt-24">
        Student Review ( 3 )
      </div>
      <div class="flex space-x-3 items-start my-20">
        <img src="/images/profile.svg" class="w-14">
        <div class="flex-col">
          <p class="text-black font-bold text-lg">
            Muhammad Pepet
          </p>
          <p class="text-gray-800 w-3/5 mt-3">
            Non ipsum tempus porttitor eget ut eros. Aliquam molestie congue purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin commodo augue nec mauris mattis aliquam. Sed tristique quis mi sit amet commodo. Mauris eget risus a sem porta dignissim. Nullam viverra leo justo, ut rhoncus justo molestie quis. Ut rutrum sagittis aliquam. Proin maximus maximus ipsum id congue. Fusce vehicula massa vel vestibulum placerat. Morbi vel purus non ipsum tempus porttitor eget ut eros. Aliquam molestie congue purus. 
          </p>
        </div>
      </div>
      <div class="flex space-x-3 items-start my-20">
        <img src="/images/profile.svg" class="w-14">
        <div class="flex-col">
          <p class="text-black font-bold text-lg">
            Muhammad Pepet
          </p>
          <p class="text-gray-800 w-3/5 mt-3">
            Non ipsum tempus porttitor eget ut eros. Aliquam molestie congue purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin commodo augue nec mauris mattis aliquam. Sed tristique quis mi sit amet commodo. Mauris eget risus a sem porta dignissim. Nullam viverra leo justo, ut rhoncus justo molestie quis. Ut rutrum sagittis aliquam. Proin maximus maximus ipsum id congue. Fusce vehicula massa vel vestibulum placerat. Morbi vel purus non ipsum tempus porttitor eget ut eros. Aliquam molestie congue purus. 
          </p>
        </div>
      </div>
      <div class="flex space-x-3 items-start my-20">
        <img src="/images/profile.svg" class="w-14">
        <div class="flex-col">
          <p class="text-black font-bold text-lg">
            Muhammad Pepet
          </p>
          <p class="text-gray-800 w-3/5 mt-3">
            Non ipsum tempus porttitor eget ut eros. Aliquam molestie congue purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin commodo augue nec mauris mattis aliquam. Sed tristique quis mi sit amet commodo. Mauris eget risus a sem porta dignissim. Nullam viverra leo justo, ut rhoncus justo molestie quis. Ut rutrum sagittis aliquam. Proin maximus maximus ipsum id congue. Fusce vehicula massa vel vestibulum placerat. Morbi vel purus non ipsum tempus porttitor eget ut eros. Aliquam molestie congue purus. 
          </p>
        </div>
      </div>
      <form method="post" enctype="multipart/form-data" class="mb-20">
        @csrf
        <div class="flex flex-wrap items-stretch w-4/6 mb-4 relative">
          <input type="text" class="flex-shrink flex-grow text-black flex-auto leading-normal border-2 h-10 border-grey-400 bg-pink-50 outline-none focus:border-pink-400 rounded-md rounded-r-none px-3 relative" placeholder="Below your comment here...">
          <div class="flex -mr-px">
            <button class="flex items-center leading-normal bg-pink-700 rounded-md rounded-l-none border border-l-0 border-grey-light px-10 whitespace-no-wrap text-grey-dark text-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>	
        </div>	
      </form>
    </div>
  </div>
</div>
@endsection