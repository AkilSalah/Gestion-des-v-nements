@extends('layouts.clientMaster')
@section('title')
Evenelment
@endsection
@section('main')
<div class="mx-auto flex h-screen max-w-lg flex-col md:max-w-none md:flex-row md:pr-10">
    <div class="max-w-md rounded-3xl bg-gradient-to-t from-blue-700 via-blue-700 to-blue-600 px-4 py-10 text-white sm:px-10 md:m-6 md:mr-8" style="background-image: url({{$evento->image}}); background-size: cover; background-position: center;">
        <p class="mb-20 font-bold tracking-wider">EVENTO</p>
      <p class="mb-4 text-3xl font-bold md:text-4xl md:leading-snug">
        Start your <br />
        journey with us
      </p>
    
    </div>
    <div class="px-4 py-20">
        @if(session('success'))
        <div class="bg-green-200 text-green-700 p-3 mb-3 rounded-md">{{ session('success') }}</div>
        @endif
        @if(session('error'))
        <div class="bg-red-200 text-red-700 p-3 mb-3 rounded-md">{{ session('error') }}</div>
        @endif    
      <h2 class="mb-2 text-3xl font-bold">{{$evento->title}} </h2>
      <div class="flex items-center  font-bold mt-4 text-gray-700">
        <svg class="h-6 w-6 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
          <h1 class="px-2 text-sm">{{$evento->date}} | BY {{$evento->organisateur->user->name}}  </h1>
      </div>
      <div class="flex font-bold items-center mt-3 text-gray-700">
        <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
            <path d="M256 32c-88.004 0-160 70.557-160 156.801C96 306.4 256 480 256 480s160-173.6 160-291.199C416 102.557 344.004 32 256 32zm0 212.801c-31.996 0-57.144-24.645-57.144-56 0-31.357 25.147-56 57.144-56s57.144 24.643 57.144 56c0 31.355-25.148 56-57.144 56z"/>
        </svg>
        <h1 class="px-2 text-sm">{{$evento->lieu}}</h1>
    </div>

    <div class="flex items-center mt-3 font-bold text-gray-700">
        <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
            <path d="M239.208 343.937c-17.78 10.103-38.342 15.876-60.255 15.876-21.909 0-42.467-5.771-60.246-15.87C71.544 358.331 42.643 406 32 448h293.912c-10.639-42-39.537-89.683-86.704-104.063zM178.953 120.035c-58.479 0-105.886 47.394-105.886 105.858 0 58.464 47.407 105.857 105.886 105.857s105.886-47.394 105.886-105.857c0-58.464-47.408-105.858-105.886-105.858zm0 186.488c-33.671 0-62.445-22.513-73.997-50.523H252.95c-11.554 28.011-40.326 50.523-73.997 50.523z"/><g><path d="M322.602 384H480c-10.638-42-39.537-81.691-86.703-96.072-17.781 10.104-38.343 15.873-60.256 15.873-14.823 0-29.024-2.654-42.168-7.49-7.445 12.47-16.927 25.592-27.974 34.906C289.245 341.354 309.146 364 322.602 384zM306.545 200h100.493c-11.554 28-40.327 50.293-73.997 50.293-8.875 0-17.404-1.692-25.375-4.51a128.411 128.411 0 0 1-6.52 25.118c10.066 3.174 20.779 4.862 31.895 4.862 58.479 0 105.886-47.41 105.886-105.872 0-58.465-47.407-105.866-105.886-105.866-37.49 0-70.427 19.703-89.243 49.09C275.607 131.383 298.961 163 306.545 200z"/></g>
        </svg>
        <h1 class="px-2 text-sm">{{$evento->nbPlaces}} seats disponible </h1>
    </div> 

      <p class="mb-1 mt-5 font-medium text-gray-500">{{$evento->description}}</p>
        <form action="{{ route('Client.Reservation') }}" method="POST">
          @csrf
          <div class="flex justify-center mt-20" >
            <input type="hidden" name="eventId" value="{{$evento->id}}">
        <button type="submit" class=" text-2xl  hover:shadow-blue-600/40 rounded-xl bg-gradient-to-r from-blue-700 to-blue-600 px-10 py-5 font-bold text-white transition-all hover:opacity-90 hover:shadow-lg">Réserver</button>
     </div>
        </form>
    </div>
  </div>
  
@endsection