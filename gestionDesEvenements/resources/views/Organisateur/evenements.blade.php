@extends('layouts.organisateurMaster')
@section('title')
Mes Evenements
@endsection
@section('main')
<div class="overflow-x-auto mt-8 flex justify-around flex-wrap">
<div>
    <h2 class="text-3xl font-bold mb-14 text-center">Gestion de Evenements</h2>
</div>
<div class="mb-5" >
  <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Ajouter un evenement
  </button>  
</div>
</div>
@error('date')
    <div class="mb-5 bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative mt-2" role="alert">
        {{ $message }}
    </div>
@enderror
      <!-- Main modal -->
  <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-md max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Ajouter un evenement
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <form action="{{ route('add.evenement') }}" method="POST" class="p-4 md:p-5" enctype="multipart/form-data">
                @csrf
                  <div class="grid gap-4 mb-4 grid-cols-2">
                      <div class="col-span-2">
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                          <input type="text" name="title" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="event name" required="">
                      </div>
                      <div class="col-span-2 sm:col-span-1">
                          <label for="lieu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lieu de l'evenement</label>
                          <input type="text" name="lieu" id="lieu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="lieu" required="">
                      </div>
                      <div class="col-span-2 sm:col-span-1">
                          <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categories</label>
                          <select id="category" name="categorie" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                              <option selected="">Select categorie</option>
                              @foreach ($categories as $categorie)
                             <option value="{{$categorie->id}}"> {{$categorie->categorieName}} </option>
                              @endforeach
                          </select>
                      </div>
                      <div class="col-span-2 sm:col-span-1">
                        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de l'evenement</label>
                        <input type="date" name="date" id="lieu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="date" required="">
                      
                      </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="places" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombres de places</label>
                        <input type="number" name="nbPlaces" id="places" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="nombre" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1 ">
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                        <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="event image" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                      <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type de réservation</label>
                      <select id="category" name="acceptation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                          <option selected="">Select acceptation</option>
                         <option value="Automatique"> Automatique </option>
                         <option value="Manuelle"> Manuelle </option>
                      </select>
                  </div>
                      <div class="col-span-2">
                          <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                          <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write description here"></textarea>                    
                      </div>
                  </div>
                  <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Ajouter l'evenement
                    </button>
              </form>
          </div>
      </div>
  </div> 

  
  {{-- -----------content----------- --}}
  <div class="overflow-x-auto">
    <table class="min-w-full bg-white font-[sans-serif]">
      <thead class="bg-gray-100 whitespace-nowrap">
        <tr>
          <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">
            Titre
          </th>
          <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">
            Lieu
          </th>
          <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">
            Nombre de place
          </th>
          <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">
            Date
          </th>
          <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">
            Actions
          </th>
        </tr>
      </thead>
      <tbody class="whitespace-nowrap">
         @foreach ($events as $event)

        <tr class="hover:bg-gray-50">
          <td class="px-6 py-4 text-base">
            {{$event->title}}
          </td>
          <td class="px-6 py-4 text-base">
            {{$event->lieu}}
        </td>
          <td class="px-6 py-4 text-base">
            {{$event->nbPlaces}}
          </td>
          <td class="px-6 py-4 text-base">
            {{$event->date}}
          </td>
          <td class=" flex px-6 py-4">
            <button class="mr-4" title="Edit" data-modal-target="crud-modal-up-{{$event->id}}" data-modal-toggle="crud-modal-up-{{$event->id}}">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700"
                viewBox="0 0 348.882 348.882">
                <path
                  d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                  data-original="#000000" />
                <path
                  d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                  data-original="#000000" />
              </svg>
            </button>
            
            <div id="crud-modal-up-{{$event->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                              Modifier un evenement
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal-up-{{$event->id}}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form action="{{ route('update.evenement', $event) }}" method="POST" class="p-4 md:p-5" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                    <input type="text" value="{{ $event->title }}" name="title_edit" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Event name" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="lieu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lieu de l'evenement</label>
                                    <input type="text" value="{{ $event->lieu }}" name="lieu_edit" id="lieu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Lieu" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                  <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catégorie</label>
                                  <select id="category" name="categorie_edit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                      <option value="" disabled>Sélectionner une catégorie</option>
                                      @foreach ($categories as $categorie)
                                          <option value="{{ $categorie->id }}" @if($categorie->id == $event->categoryId) selected @endif>{{ $categorie->categorieName }}</option>
                                      @endforeach
                                  </select>
                              </div>
                              
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de l'evenement</label>
                                    <input type="date" value="{{ $event->date }}" name="date_edit" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Date" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="places" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de places</label>
                                    <input type="number" value="{{ $event->nbPlaces }}" name="nbPlaces_edit" id="places" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nombre" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                  <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                  @if($event->image)
                                      <img src="{{ asset($event->image) }}" alt="Event Image" class="mb-2 max-w-full h-auto">
                                  @else
                                      <p class="text-gray-500">Aucune image disponible</p>
                                  @endif
                                  <input type="file" name="image_edit" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                              </div>
                              
                                <div class="col-span-2 sm:col-span-1">
                                  <label for="acceptation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type de réservation</label>
                                  <select id="acceptation"   name="acceptation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                      <option value="" selected="">Select acceptation</option>
                                     <option value="Automatique" @if ($event->acceptation==='Automatique') selected 
                                     @endif > Automatique </option>
                                     <option value="Manuelle" @if ($event->acceptation==='Manuelle') selected
                                     @endif > Manuelle </option>
                                  </select>
                              </div>
                                <div class="col-span-2">
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                    <textarea id="description" name="description_edit" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Écrire la description ici">{{ $event->description }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                Enregistrer
                            </button>
                        </form>
                        
                    </div>
                </div>
            </div> 
            <form action="{{ route('delete.evenement', $event) }}" method="POST"  >
                @method('delete')
                @csrf
              <button class="mr-4" title="Delete">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                <path
                  d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                  data-original="#000000" />
                <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                  data-original="#000000" />
              </svg>
            </button>  
            </form>
            
          </td>
        </tr>
       @endforeach

      </tbody>

    </table>
  </div>

  
    
@endsection