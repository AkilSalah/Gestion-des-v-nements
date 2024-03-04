@extends('layouts.adminMaster')
@section('title')
Utilisateur access
@endsection
@section('main')

<div class="overflow-x-auto mt-8">
    <h2 class="text-3xl font-bold mb-14 text-center">Gestion d'utilisateur</h2>

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
            Joined At
          </th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Actions
          </th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200 whitespace-nowrap">
        <tr>
          <td class="px-6 py-4 text-sm text-[#333]">
            John Doe
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            john@example.com
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            Admin
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            2022-05-15
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            <button class="text-blue-500 hover:text-blue-700 mr-4">Edit</button>
            <button class="text-red-500 hover:text-red-700">Delete</button>
          </td>
        </tr>
        <tr>
          <td class="px-6 py-4 text-sm text-[#333]">
            Jane Smith
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            jane@example.com
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            User
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            2022-07-20
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            <button class="text-blue-500 hover:text-blue-700 mr-4">Edit</button>
            <button class="text-red-500 hover:text-red-700">Delete</button>
          </td>
        </tr>
        <tr>
          <td class="px-6 py-4 text-sm text-[#333]">
            Alen doe
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            alen@example.com
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            User
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            2022-07-21
          </td>
          <td class="px-6 py-4 text-sm text-[#333]">
            <button class="text-blue-500 hover:text-blue-700 mr-4">Edit</button>
            <button class="text-red-500 hover:text-red-700">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

    
@endsection