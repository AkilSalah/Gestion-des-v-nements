@extends('layouts.clientMaster')
@section('title')
Home
@endsection
@section('main')

<div class=" mt-20 font-sans text-[#333] max-w-6xl max-md:max-w-md mx-auto">
    <div class="grid md:grid-cols-2 items-center md:gap-8 gap-6">
      <div class="max-md:order-1 max-md:text-center z-50 relative">
        <h2 class="lg:text-6xl md:text-5xl text-3xl font-extrabold mb-4 "><span class="text-blue-600">EventMaster : </span> <span class="text-blue-600">Gestion</span> d'Événements</h2>
        <p class="mt-6 text-base leading-relaxed">Bienvenue sur EventMaster, votre compagnon de confiance pour planifier, organiser et gérer tous vos événements avec aisance et efficacité.</p>
        <button type='button'
          class="bg-blue-600 hover:bg-transparent hover:text-blue-600 border-2 border-blue-600 mt-10 transition-all text-white font-bold text-sm rounded-md px-6 py-2.5">Get Started</button>
        
      </div>
      {{-- <div class="lg:h-[550px] md:h-[550px] flex items-center relative max-md:before:hidden before:absolute before:bg-[#DEE2E5] before:h-[120%] before:w-[120%] before:right-0 before:z-0"> --}}
        <img src="{{asset('/image/event1.jpg')}}" class="rounded-md lg:w-4/10  z-50 relative" alt="Dining Experience" />
      {{-- </div> --}}
    </div>
    <div class="grid md:grid-cols-3 gap-4 z-50 relative md:px-4 max-md:mt-10">
      <div class="bg-white p-6">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-12 mb-4 inline-block bg-blue-100 p-3 rounded-md" viewBox="0 0 32 32">
          <path d="M28.068 12h-.128a.934.934 0 0 1-.864-.6.924.924 0 0 1 .2-1.01l.091-.091a2.938 2.938 0 0 0 0-4.147l-1.511-1.51a2.935 2.935 0 0 0-4.146 0l-.091.091A.956.956 0 0 1 20 4.061v-.129A2.935 2.935 0 0 0 17.068 1h-2.136A2.935 2.935 0 0 0 12 3.932v.129a.956.956 0 0 1-1.614.668l-.086-.091a2.935 2.935 0 0 0-4.146 0l-1.516 1.51a2.938 2.938 0 0 0 0 4.147l.091.091a.935.935 0 0 1 .185 1.035.924.924 0 0 1-.854.579h-.128A2.935 2.935 0 0 0 1 14.932v2.136A2.935 2.935 0 0 0 3.932 20h.128a.934.934 0 0 1 .864.6.924.924 0 0 1-.2 1.01l-.091.091a2.938 2.938 0 0 0 0 4.147l1.51 1.509a2.934 2.934 0 0 0 4.147 0l.091-.091a.936.936 0 0 1 1.035-.185.922.922 0 0 1 .579.853v.129A2.935 2.935 0 0 0 14.932 31h2.136A2.935 2.935 0 0 0 20 28.068v-.129a.956.956 0 0 1 1.614-.668l.091.091a2.935 2.935 0 0 0 4.146 0l1.511-1.509a2.938 2.938 0 0 0 0-4.147l-.091-.091a.935.935 0 0 1-.185-1.035.924.924 0 0 1 .854-.58h.128A2.935 2.935 0 0 0 31 17.068v-2.136A2.935 2.935 0 0 0 28.068 12ZM29 17.068a.933.933 0 0 1-.932.932h-.128a2.956 2.956 0 0 0-2.083 5.028l.09.091a.934.934 0 0 1 0 1.319l-1.511 1.509a.932.932 0 0 1-1.318 0l-.09-.091A2.957 2.957 0 0 0 18 27.939v.129a.933.933 0 0 1-.932.932h-2.136a.933.933 0 0 1-.932-.932v-.129a2.951 2.951 0 0 0-5.028-2.082l-.091.091a.934.934 0 0 1-1.318 0l-1.51-1.509a.934.934 0 0 1 0-1.319l.091-.091A2.956 2.956 0 0 0 4.06 18h-.128A.933.933 0 0 1 3 17.068v-2.136A.933.933 0 0 1 3.932 14h.128a2.956 2.956 0 0 0 2.083-5.028l-.09-.091a.933.933 0 0 1 0-1.318l1.51-1.511a.932.932 0 0 1 1.318 0l.09.091A2.957 2.957 0 0 0 14 4.061v-.129A.933.933 0 0 1 14.932 3h2.136a.933.933 0 0 1 .932.932v.129a2.956 2.956 0 0 0 5.028 2.082l.091-.091a.932.932 0 0 1 1.318 0l1.51 1.511a.933.933 0 0 1 0 1.318l-.091.091A2.956 2.956 0 0 0 27.94 14h.128a.933.933 0 0 1 .932.932Z" data-original="#000000" />
          <path d="M16 9a7 7 0 1 0 7 7 7.008 7.008 0 0 0-7-7Zm0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5Z" data-original="#000000" />
        </svg>
        <h3 class="text-xl font-bold mb-2">Customization</h3>
        <p class="text-sm">Tailor our product to suit your needs.</p>
        <a href="javascript:void(0);" class="text-blue-600 font-bold inline-block text-sm mt-2 hover:underline">Learn more</a>
      </div>
      <div class="bg-white p-6">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-12 mb-4 inline-block bg-blue-100 p-3 rounded-md" viewBox="0 0 512.001 512.001">
          <path d="M271.029 0c-33.091 0-61 27.909-61 61s27.909 61 61 61 60-27.909 60-61-26.909-61-60-61zm66.592 122c-16.485 18.279-40.096 30-66.592 30-26.496 0-51.107-11.721-67.592-30-14.392 15.959-23.408 36.866-23.408 60v15c0 8.291 6.709 15 15 15h151c8.291 0 15-6.709 15-15v-15c0-23.134-9.016-44.041-23.408-60zM144.946 460.404 68.505 307.149c-7.381-14.799-25.345-20.834-40.162-13.493l-19.979 9.897c-7.439 3.689-10.466 12.73-6.753 20.156l90 180c3.701 7.423 12.704 10.377 20.083 6.738l19.722-9.771c14.875-7.368 20.938-25.417 13.53-40.272zM499.73 247.7c-12.301-9-29.401-7.2-39.6 3.9l-82 100.8c-5.7 6-16.5 9.6-22.2 9.6h-69.901c-8.401 0-15-6.599-15-15s6.599-15 15-15h60c16.5 0 30-13.5 30-30s-13.5-30-30-30h-78.6c-7.476 0-11.204-4.741-17.1-9.901-23.209-20.885-57.949-30.947-93.119-22.795-19.528 4.526-32.697 12.415-46.053 22.993l-.445-.361-21.696 19.094L174.28 452h171.749c28.2 0 55.201-13.5 72.001-36l87.999-126c9.9-13.201 7.2-32.399-6.299-42.3z" data-original="#000000" />
        </svg>
        <h3 class="text-xl font-bold mb-2">Support</h3>
        <p class="text-sm">24/7 customer support for all your inquiries.</p>
        <a href="javascript:void(0);" class="text-blue-600 font-bold inline-block text-sm mt-2 hover:underline">Learn more</a>
      </div>
      <div class="bg-white p-6">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-12 mb-4 inline-block bg-blue-100 p-3 rounded-md" viewBox="0 0 24 24">
          <g fill-rule="evenodd" clip-rule="evenodd">
            <path d="M17.03 8.97a.75.75 0 0 1 0 1.06l-4.2 4.2a.75.75 0 0 1-1.154-.114l-1.093-1.639L8.03 15.03a.75.75 0 0 1-1.06-1.06l3.2-3.2a.75.75 0 0 1 1.154.114l1.093 1.639L15.97 8.97a.75.75 0 0 1 1.06 0z" data-original="#000000" />
            <path d="M13.75 9.5a.75.75 0 0 1 .75-.75h2a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0v-1.25H14.5a.75.75 0 0 1-.75-.75z" data-original="#000000" />
            <path d="M3.095 3.095C4.429 1.76 6.426 1.25 9 1.25h6c2.574 0 4.57.51 5.905 1.845C22.24 4.429 22.75 6.426 22.75 9v6c0 2.574-.51 4.57-1.845 5.905C19.571 22.24 17.574 22.75 15 22.75H9c-2.574 0-4.57-.51-5.905-1.845C1.76 19.571 1.25 17.574 1.25 15V9c0-2.574.51-4.57 1.845-5.905zm1.06 1.06C3.24 5.071 2.75 6.574 2.75 9v6c0 2.426.49 3.93 1.405 4.845.916.915 2.419 1.405 4.845 1.405h6c2.426 0 3.93-.49 4.845-1.405.915-.916 1.405-2.419 1.405-4.845V9c0-2.426-.49-3.93-1.405-4.845C18.929 3.24 17.426 2.75 15 2.75H9c-2.426 0-3.93.49-4.845 1.405z" data-original="#000000" />
          </g>
        </svg>
        <h3 class="text-xl font-bold mb-2">Performance</h3>
        <p class="text-sm">Experience blazing-fast performance with our product.</p>
        <a href="javascript:void(0);" class="text-blue-600 font-bold inline-block text-sm mt-2 hover:underline">Learn more</a>
      </div>
    </div>
  </div>


    <h2 class="lg:text-5xl md:text-4xl text-3xl mt-4 font-extrabold mb-4 text-center"><span class="text-blue-600">Our </span> Events</h2>
    <div class=" flex justify-around">
      <form action="{{ route('Client') }}" method="GET" >
        @csrf
        <div class="bg-white flex gap-2">
             <div>
            <input type='search' name="search" placeholder='Search Something...' class="mt-6 ml-auto bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div>
                <button type="submit" class="px-4 py-2 mt-7 text-sm font-medium text-white bg-blue-700 rounded-md hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">Search</button>
            </div>           
          </div>
        </form>

        <div>
          <form class="flex gap-2" action="{{ route('Client') }}" method="GET">
            @csrf
            <select id="Categorie" name="Categorie" class="mt-6 ml-auto bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected disabled>Sélectionnez une catégorie</option>
              <option value="Tout">Tout</option>
              @foreach ($categories as $categorie)
              <option value="{{$categorie->id}}">{{$categorie->categorieName}}</option>
              @endforeach
            </select>
            <div>
              <button type="submit" class="px-4 py-2 mt-7 text-sm font-medium text-white bg-blue-700 rounded-md hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">Filtrer</button>
            </div>
          </form>
        </div>
    </div>
      
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-3">
   @foreach ($clientEvents as $event)
    
   <a href="{{ route('Client.Evenement', ['idEvent' => $event->id]) }}">
    <div class="mt-10 cursor-pointer rounded overflow-hidden group">
        <img src="{{ asset($event->image) }}" alt="Blog Post 2" class="w-full h-52 object-cover" />
        <div class="py-6">
            <span class="text-sm block text-gray-400 mb-2">{{$event->date}} | BY {{$event->organisateur->user->name}}</span>
            <h3 class="text-xl font-bold text-[#333] group-hover:text-blue-500 transition-all">{{$event->title}}</h3>
        </div>
    </div>
</a>

   
  

{{-- ------------------------------------------------------------ --}}
  {{-- <div class=" mt-7 max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4">
    <img class="w-full h-56 object-cover object-center" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
   
    <div class="py-4 px-6">
        <h1 class="text-2xl font-semibold text-gray-800">{{$event->title}}</h1>
        <p class="py-2 text-lg text-gray-700">{{Str::substr($event->description, 0, 70) }}...</p>
        <div class="flex justify-between" >
          <div class="flex items-center mt-4 text-gray-700">
          <svg class="h-6 w-6 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
            <h1 class="px-2 text-sm">{{$event->date}}</h1>
        </div>
        <div class="flex items-center mt-4 text-gray-700">
          <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
              <path d="M239.208 343.937c-17.78 10.103-38.342 15.876-60.255 15.876-21.909 0-42.467-5.771-60.246-15.87C71.544 358.331 42.643 406 32 448h293.912c-10.639-42-39.537-89.683-86.704-104.063zM178.953 120.035c-58.479 0-105.886 47.394-105.886 105.858 0 58.464 47.407 105.857 105.886 105.857s105.886-47.394 105.886-105.857c0-58.464-47.408-105.858-105.886-105.858zm0 186.488c-33.671 0-62.445-22.513-73.997-50.523H252.95c-11.554 28.011-40.326 50.523-73.997 50.523z"/><g><path d="M322.602 384H480c-10.638-42-39.537-81.691-86.703-96.072-17.781 10.104-38.343 15.873-60.256 15.873-14.823 0-29.024-2.654-42.168-7.49-7.445 12.47-16.927 25.592-27.974 34.906C289.245 341.354 309.146 364 322.602 384zM306.545 200h100.493c-11.554 28-40.327 50.293-73.997 50.293-8.875 0-17.404-1.692-25.375-4.51a128.411 128.411 0 0 1-6.52 25.118c10.066 3.174 20.779 4.862 31.895 4.862 58.479 0 105.886-47.41 105.886-105.872 0-58.465-47.407-105.866-105.886-105.866-37.49 0-70.427 19.703-89.243 49.09C275.607 131.383 298.961 163 306.545 200z"/></g>
          </svg>
          <h1 class="px-2 text-sm">{{$event->nbPlaces}} seats disponible </h1>
      </div> 
        </div>
       

        <div class="flex items-center mt-4 text-gray-700">
            <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                <path d="M256 32c-88.004 0-160 70.557-160 156.801C96 306.4 256 480 256 480s160-173.6 160-291.199C416 102.557 344.004 32 256 32zm0 212.801c-31.996 0-57.144-24.645-57.144-56 0-31.357 25.147-56 57.144-56s57.144 24.643 57.144 56c0 31.355-25.148 56-57.144 56z"/>
            </svg>
            <h1 class="px-2 text-sm">{{$event->lieu}}</h1>
        </div>
        
        
    </div>
</div> --}}

@endforeach
    </div>
    
<div class="w-11/12 mx-auto my-8">{{ $clientEvents->links() }}</div>

<h2 class=" mt-5 lg:text-5xl md:text-4xl text-3xl font-extrabold mb-4 text-center"><span class="text-blue-600">Contact </span> us</h2>
<div class="font-[sans-serif]">
  <div class="bg-gradient-to-r mt-10 from-blue-700 to-blue-300 w-full h-60">
      <img src="https://png.pngtree.com/thumb_back/fh260/background/20191029/pngtree-lighting-3d-stadium-arena-concert-with-blue-spotlight-effect-vector-background-image_320586.jpg" alt="Banner Image" class="w-full h-full object-cover" />
  </div>
  <div class="-mt-28 mb-6 px-4">
      <div class="mt-5 mx-auto max-w-6xl shadow-lg py-8 px-6 relative bg-white rounded">
          <h2 class="text-xl text-[#333] font-bold">Eventoo </h2>
          <form class="mt-8 grid sm:grid-cols-2 gap-6">
              <div>
                  <label class="font-semibold text-sm">Your Name</label>
                  <input type='text' placeholder='Enter Name'
                      class="w-full rounded py-2.5 px-4 mt-2 border-2 text-sm outline-[#007bff]" />
              </div>
              <div>
                  <label class="font-semibold text-sm">Your Email</label>
                  <input type='email' placeholder='Email'
                      class="w-full rounded py-2.5 px-4 border-2 mt-2 text-sm outline-[#007bff]" />
              </div>
              <div>
                  <label class="font-semibold text-sm">Your Number</label>
                  <input type='email' placeholder='Phone No.'
                      class="w-full rounded py-2.5 px-4 border-2 mt-2 text-sm outline-[#007bff]" />
              </div>
              
              
              
              <div class="col-span-full">
                  <label class="font-semibold text-sm">Message</label>
                  <textarea placeholder='Message' rows="6"
                      class="w-full rounded px-4 border-2 mt-2 text-sm pt-3 outline-[#007bff]"></textarea>
              </div>
              <div class="flex items-center col-span-full">
                  <input id="checkbox1" type="checkbox"
                      class="w-4 h-4 mr-3" />
                  <label for="checkbox1" class="text-sm text-gray-400">I agree to the <a href="javascript:void(0);" class="underline">Terms and Conditions</a> and <a href="javascript:void(0);" class="underline">Privacy Policy</a></label>
              </div>
              <button type='button'
                  class="text-white w-max bg-[#007bff] hover:bg-blue-600 font-semibold rounded text-sm px-6 py-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' class="mr-2 inline" viewBox="0 0 548.244 548.244">
                      <path fill-rule="evenodd" d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z" clip-rule="evenodd" data-original="#000000" />
                  </svg>
                  Send Message
              </button>
          </form>
      </div>
  </div>
</div>

@endsection