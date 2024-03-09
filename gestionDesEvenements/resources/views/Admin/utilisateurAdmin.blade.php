@extends('layouts.adminMaster')
@section('title')
Utilisateur access
@endsection
@section('main')

<div class="overflow-x-auto mt-8">
    <h2 class="text-3xl font-bold mb-14 text-center">Gestion d'utilisateur</h2>
    @if(session('success'))
    <div class="mb-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mt-4" role="alert">
        <p class="font-bold">Succès!</p>
        <p>{{ session('success') }}</p>
    </div>
    @endif

    <table class="min-w-full divide-y divide-gray-200 font-[sans-serif]">
      <thead class="bg-gray-100 whitespace-nowrap">
        <tr>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Name
          </th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Email
          </th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Role
          </th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Actions
          </th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200 whitespace-nowrap">
        @foreach ($utilisateurs as $utilisateur)
        <tr>
          <td class="px-6 py-4 text-sm text-[#333]">
            {{$utilisateur->name}}
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            {{$utilisateur->email}}
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            {{$utilisateur->role}}
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            <form action="{{ route('admin.access', $utilisateur->id ) }}" method="POST">
                @csrf
                <button type="submit" id="block" name="status" value="bloque" class="text-red-500 hover:text-red-700 mr-4"style="display: block">Block</button>
                <button type="submit" id="dblock" name="status" value="libre" class="text-blue-500 hover:text-blue-700  " style="display: none" >Deblock</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <script>
    const blockBtn = document.getElementById('block');
    const deblockBtn = document.getElementById('dblock');


    blockBtn.addEventListener('click', function() {
        blockBtn.style.display = 'none';
        deblockBtn.style.display = 'block';
    });

    deblockBtn.addEventListener('click', function() {
        deblockBtn.style.display = 'none';
        blockBtn.style.display = 'block';
    });
</script>
@endsection