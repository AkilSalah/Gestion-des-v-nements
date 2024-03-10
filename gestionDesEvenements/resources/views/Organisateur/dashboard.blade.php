@extends('layouts.organisateurMaster')
@section('title')
Dashboard
@endsection
@section('main')

<div class="overflow-x-auto mt-5">
    <h2 class="text-3xl font-bold mb-14 text-center">Mes Evenements Statistique</h2>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xl text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    Evénement
                </th>
                <th scope="col" class="px-6 py-3">
                    Date de Création
                </th>
                <th scope="col" class="px-6 py-3 rounded-e-lg">
                    Total réservations
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mesEvenements as $eventi)
            <tr class="bg-white font-semibold dark:bg-gray-800">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$eventi->title}}
                </th>
                <td class="px-6 py-4">
                    {{$eventi->created_at}}
                </td>
                <td class="px-6 py-4">
                    {{$eventi->reservations_count}}
                </td>   
               
            </tr>
            @endforeach

        </tbody>
       
    </table>
</div>

  </div>

    
@endsection