<header class='shadow-md py-4 px-4 sm:px-10 bg-white font-[sans-serif] min-h-[70px]'>
    <div class='flex flex-wrap items-center justify-between gap-5 relative'>
      <a href="javascript:void(0)"><img src={{asset('/image/eventLogo-removebg-preview.png')}} alt="logo" class='w-36' />
      </a>
      <div class='flex lg:order-1 max-sm:ml-auto gap-2'>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
        <button
          class='px-4 py-2 text-sm rounded-full font-bold text-white border-2 border-[#007bff] bg-[#007bff] transition-all ease-in-out duration-300 hover:bg-transparent hover:text-[#007bff]'>Logout</button>
        </form>
        <form method="GET" action="{{ route('Client.ticket') }}">
          @csrf
        <button
          class='px-4 py-2 text-sm rounded-full font-bold text-white border-2 border-[#ffea00] bg-[#ff1500] transition-all ease-in-out duration-300 hover:bg-transparent hover:text-[#ff00a69c]'>Get Ticket</button>
        </form>
        <button id="toggle" class='lg:hidden ml-7'>
          <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <ul id="collapseMenu" class='lg:!flex lg:space-x-5 max-lg:space-y-2 max-lg:hidden max-lg:py-4 max-lg:w-full'>
        <li class='max-lg:border-b max-lg:bg-[#007bff] max-lg:py-2 px-3 max-lg:rounded'>
          <a href='{{ route('Client') }}'
            class='lg:hover:text-[#007bff] text-[#007bff] max-lg:text-white block font-semibold text-[15px]'>Home</a>
        </li>
        <li class='max-lg:border-b max-lg:py-2 px-3 max-lg:rounded'><a href='#about'
            class='lg:hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>About </a>
        </li>
        <li class='max-lg:border-b max-lg:py-2 px-3 max-lg:rounded'><a href='#events'
            class='lg:hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>Evenements</a>
        </li>
        
        <li class='max-lg:border-b max-lg:py-2 px-3 max-lg:rounded'><a href='#contact'
            class='lg:hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>Contact</a>
        </li>
      </ul>
    </div>
  </header>