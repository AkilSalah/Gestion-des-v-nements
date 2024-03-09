@extends('layouts.organisateurMaster')
@section('title')
Mes Evenements
@endsection
@section('main')
<h2 class="text-3xl mt-5 font-bold mb-14 text-center">Gestion des réservation</h2>
<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200 font-[sans-serif]">
      <thead class="bg-gray-100 whitespace-nowrap">
        <tr>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Client
          </th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Email
          </th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Evenement
          </th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Date de réservation
          </th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Actions
          </th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200 whitespace-nowrap">
        @foreach ($event as $evento)
        {{-- @dd($evento) --}}
        <tr>
          <td class="px-6 py-4 text-sm text-[#333]">
            {{ $evento->client->user->name }}  
        </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            {{ $evento->client->user->email }}
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            {{ $evento->event->title }}
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            {{ $evento->dateReservation }}

          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            <form action="{{ route('organisateur.accepterReservation', $evento->id) }}" method="POST" >
              @method('put')
              @csrf
            <input type="hidden" name="status" value="1">
            <button  type="submit"  class="text-blue-500 hover:text-blue-700 mr-4">Accepter</button>
            </form>
            <form action="{{ route('reservation.delete', $evento->id) }}" method="POST">
              @method('delete')
              @csrf
              <button class="text-red-500 hover:text-red-700">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    
@endsection