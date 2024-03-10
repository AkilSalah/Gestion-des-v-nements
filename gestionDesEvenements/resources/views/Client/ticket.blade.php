@extends('layouts.clientMaster')
@section('title')
My Tickets
@endsection
@section('main')

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<style>
	.barcode {
		left: 50%;
		box-shadow: 1px 0 0 1px, 5px 0 0 1px, 10px 0 0 1px, 11px 0 0 1px, 15px 0 0 1px, 18px 0 0 1px, 22px 0 0 1px, 23px 0 0 1px, 26px 0 0 1px, 30px 0 0 1px, 35px 0 0 1px, 37px 0 0 1px, 41px 0 0 1px, 44px 0 0 1px, 47px 0 0 1px, 51px 0 0 1px, 56px 0 0 1px, 59px 0 0 1px, 64px 0 0 1px, 68px 0 0 1px, 72px 0 0 1px, 74px 0 0 1px, 77px 0 0 1px, 81px 0 0 1px, 85px 0 0 1px, 88px 0 0 1px, 92px 0 0 1px, 95px 0 0 1px, 96px 0 0 1px, 97px 0 0 1px, 101px 0 0 1px, 105px 0 0 1px, 109px 0 0 1px, 110px 0 0 1px, 113px 0 0 1px, 116px 0 0 1px, 120px 0 0 1px, 123px 0 0 1px, 127px 0 0 1px, 130px 0 0 1px, 131px 0 0 1px, 134px 0 0 1px, 135px 0 0 1px, 138px 0 0 1px, 141px 0 0 1px, 144px 0 0 1px, 147px 0 0 1px, 148px 0 0 1px, 151px 0 0 1px, 155px 0 0 1px, 158px 0 0 1px, 162px 0 0 1px, 165px 0 0 1px, 168px 0 0 1px, 173px 0 0 1px, 176px 0 0 1px, 177px 0 0 1px, 180px 0 0 1px;
		display: inline-block;
		transform: translateX(-90px);
	}
</style>
{{-- @dd($reservationTicket) --}}
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 bg-center bg-cover"
    style="background-image: url(https://img.freepik.com/free-vector/luminous-stadium-light-effect_23-2148366134.jpg?size=626&ext=jpg&ga=GA1.1.858961817.1696860184&semt=ais)">
    @foreach ($reservationTicket as $ticket)
    <div class="max-w-md mt-5 w-full mb-3 mx-auto z-10 bg-blue-900 rounded-3xl">
        <div class="flex flex-col">
            <div class="bg-white relative drop-shadow-2xl rounded-3xl p-4 m-4">
                <div class="flex-none sm:flex">
                    <div class="relative h-32 w-32 sm:mb-0 mb-3 hidden">
                        <img src="https://tailwindcomponents.com/storage/avatars/njkIbPhyZCftc4g9XbMWwVsa7aGVPajYLRXhEeoo.jpg"
                            alt="aji" class="w-32 h-32 object-cover rounded-2xl">
                        <a href="#"
                            class="absolute -right-2 bottom-2 -ml-3 text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="h-4 w-4">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="flex-auto justify-evenly">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center my-1">
                                <h2 class="text-xl font-bold">{{$ticket->event->title}}</h2>
                            </div>
                        </div>
                        <div class="border-b border-dashed my-5"></div>
                        <div class="flex items-center justify-between">
                            <div class="flex flex-col my-auto">
                                <img src="{{asset('/image/eventLogo-removebg-preview.png')}}" class="w-36 p-1">
                            </div>
                            <div class="flex flex-col">
                                <div class="w-full flex-none text-lg text-blue-800 font-bold leading-none">Mr.Organisateur</div>
                                <div class="mt-2 font-semibold">{{$ticket->event->organisateur->user->name}}</div>
                            </div>
                        </div>
                        <div class="border-b border-dashed my-5 pt-5">
                            <div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
                            <div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
                        </div>
                        <div class="flex justify-between items-center mb-4 px-5">
                            <div class="flex flex-col">
                                <span class="w-full flex-none text-lg text-blue-800 font-bold leading-none">Bénéficiaire</span>
                                <div class="mt-2 font-semibold">Mr.{{$ticket->client->user->name}}</div>
                            </div>
                            <div class="flex flex-col">
                                <span class="w-full flex-none text-lg text-blue-800 font-bold leading-none">Réservation : </span>
                                <div class="mt-2 font-semibold">N° = {{$ticket->id}}</div>
                            </div>
                        </div>
                        <div class="border-b border-dashed my-5 pt-5">
                            <div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
                            <div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
                        </div>
                        <div class="flex items-center px-5 pt-3 justify-between text-sm">
                            <div class="flex flex-col">
                                <span class="">Lieu</span>
                                <div class="text-xs whitespace-pre-wrap">{{$ticket->event->lieu}}</div>
                            </div>
                            <div class="flex flex-col">
                                <span class="">Date</span>
                                {{ \Carbon\Carbon::parse($ticket->event->date)->format('d.M.y / h ') }}H
                            </div>
                        </div>
                        <div class="flex flex-col py-5 justify-center text-sm">
                            <h6 class="font-bold text-center">Boarding Pass</h6>
                            <div class="barcode h-14 w-0 inline-block mt-4 relative left-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection