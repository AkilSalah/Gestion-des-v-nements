@extends('layouts.adminMaster')
@section('title')
    Utilisateur access
@endsection
@section('main')
    <div class="overflow-x-auto mt-8">
        <h2 class="text-3xl font-bold mb-14 text-center">Gestion d'utilisateur</h2>
        @if (session('success'))
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
                            {{ $utilisateur->name }}
                        </td>
                        <td class="px-6 py-4 text-sm text-[#333]">
                            {{ $utilisateur->email }}
                        </td>
                        <td class="px-6 py-4 text-sm text-[#333]">
                            {{ $utilisateur->role }}
                        </td>
                        <td class="px-6 py-4 text-sm text-[#333]">
                            <form action="{{ route('admin.access', $utilisateur->id) }}" method="POST">
                                @csrf

                                <button type="submit" name="status" value="bloque" class="block-btn text-red-500 hover:text-red-700 mr-4" data-user-id="{{ $utilisateur->id }}">Block</button>
                                <button type="submit" name="status" value="libre" class="deblock-btn text-blue-500 hover:text-blue-700" style="display: none" data-user-id="{{ $utilisateur->id }}">Deblock</button>                                
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
      // Fonction pour basculer entre Block et Deblock
      function toggleBlockDeblock(blockBtn, deblockBtn) {
          if (blockBtn.style.display === 'block') {
              blockBtn.style.display = 'none';
              deblockBtn.style.display = 'block';
              localStorage.setItem('userStatus_' + blockBtn.dataset.userId, 'blocked');
          } else {
              blockBtn.style.display = 'block';
              deblockBtn.style.display = 'none';
              localStorage.setItem('userStatus_' + blockBtn.dataset.userId, 'unblocked');
          }
      }
  
      const blockBtns = document.querySelectorAll('.block-btn');
      const deblockBtns = document.querySelectorAll('.deblock-btn');
  
      blockBtns.forEach(function(blockBtn) {
          blockBtn.addEventListener('click', function(event) {
              const deblockBtn = event.target.nextElementSibling;
              toggleBlockDeblock(blockBtn, deblockBtn);
          });
      });
  
      deblockBtns.forEach(function(deblockBtn) {
          deblockBtn.addEventListener('click', function(event) {
              const blockBtn = event.target.previousElementSibling;
              toggleBlockDeblock(blockBtn, deblockBtn);
          });
      });
  
      blockBtns.forEach(function(blockBtn) {
          const userId = blockBtn.dataset.userId;
          const status = localStorage.getItem('userStatus_' + userId);
          const deblockBtn = blockBtn.nextElementSibling;
          if (status === 'blocked') {
              toggleBlockDeblock(blockBtn, deblockBtn);
          }
      });
  
      deblockBtns.forEach(function(deblockBtn) {
          const userId = deblockBtn.dataset.userId;
          const status = localStorage.getItem('userStatus_' + userId);
          const blockBtn = deblockBtn.previousElementSibling;
          if (status === 'unblocked') {
              toggleBlockDeblock(blockBtn, deblockBtn);
          }
      });
  </script>
  
  
  
@endsection
