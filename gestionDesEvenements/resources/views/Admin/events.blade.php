@extends('layouts.adminMaster')
@section('title')
Evenements
@endsection
@section('main')
        <h2 class="text-3xl mt-8 font-bold mb-14 text-center">Autorisation des Evenement</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 font-[sans-serif]">
              <thead class="bg-gray-100 whitespace-nowrap">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Titre
                  </th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Lieu
                  </th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nombre de place
                  </th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Date
                  </th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                  </th>
                </tr>
              </thead>
              @foreach ($events as $event)
              <tbody class="bg-white divide-y divide-gray-200 whitespace-nowrap">
                <tr>
                  <td class="px-6 py-4 text-sm text-[#333]">
                  {{$event->title}}
                  </td>
                  <td class="px-6 py-4 text-sm text-[#333]">
                    {{$event->lieu}}
                    </td>
                  <td class="px-6 py-4 text-sm text-[#333]">
                    {{$event->nbPlaces}}
                  </td>
                  <td class="px-6 py-4 text-sm text-[#333]">
                    {{$event->date}}
                  </td>
                  <td class="px-6 py-4 text-sm text-[#333]">
                    <form action="{{ route('admin.pub', $event->id) }}" method="POST" >
                    @csrf
                    <input type="hidden" name="status" value="1">
                    <button type="submit"class="text-blue-500 hover:text-blue-700 mr-4">Publier</button>

                    </form>
                  </td>
                </tr>
               
              </tbody>
              @endforeach

            </table>
          </div>
    
@endsection