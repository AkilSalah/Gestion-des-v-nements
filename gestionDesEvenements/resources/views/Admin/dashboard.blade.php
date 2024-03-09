@extends('layouts.adminMaster')
@section('title')
Dashboard
@endsection
@section('main')

    <div class="bg-gray-50 px-4 py-10 font-[sans-serif] text-[#333]">
        <h2 class="text-3xl font-bold mb-14 text-center">Application Statistique</h2>
        <div class="grid sm:grid-cols-2 gap-6 max-w-6xl mx-auto">
          <div class="bg-white flex gap-6 max-lg:flex-col rounded-2xl md:p-8 p-6 shadow-[0_-4px_24px_-8px_rgba(0,0,0,0.2)]">
            <h3 class="text-5xl font-extrabold"> {{$clients}} </h3>
            <div>
              <p class="text-base font-bold">Total Users</p>
              <p class="text-sm text-gray-500 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
            </div>
          </div>
          <div class="bg-white flex gap-6 max-lg:flex-col rounded-2xl md:p-8 p-6 shadow-[0_-4px_24px_-8px_rgba(0,0,0,0.2)]">
            <h3 class="text-5xl font-extrabold"> {{$organisateur}}</h3>
            <div>
              <p class="text-base font-bold">Total Organisateur</p>
              <p class="text-sm text-gray-500 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
            </div>
          </div>
          <div class="bg-white flex gap-6 max-lg:flex-col rounded-2xl md:p-8 p-6 shadow-[0_-4px_24px_-8px_rgba(0,0,0,0.2)]">
            <h3 class="text-5xl font-extrabold"> {{$categories}} </h3>
            <div>
              <p class="text-base font-bold">Catégories</p>
              <p class="text-sm text-gray-500 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
            </div>
          </div>
          <div class="bg-white flex gap-6 max-lg:flex-col rounded-2xl md:p-8 p-6 shadow-[0_-4px_24px_-8px_rgba(0,0,0,0.2)]">
            <h3 class="text-5xl font-extrabold"> {{$events}} </h3>
            <div>
              <p class="text-base font-bold">Evenements</p>
              <p class="text-sm text-gray-500 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
            </div>
          </div>
        </div>
      </div>


    
@endsection