<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Evento</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* Tailwind CSS */
    </style>
</head>
<body class="antialiased">
    <div class="relative sm:justify-between sm:items-center  bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-blue-500 selection:text-white">
        <div class="p-6 flex justify-between text-right z-10 bg-white dark:bg-gray-800 dark:text-white w-full">
           <div>
            <a href=""><img src=" {{'/image/eventLogo-removebg-preview.png'}} " alt="logo" class='w-20'>
           </div> 

            @if (Route::has('login'))
            
                <div class="mt-5">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-bold   text-gray-600 hover:text-gray-900 dark:hover:text-white">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-bold text-gray-600 hover:text-gray-900 dark:hover:text-white">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-bold  text-gray-600 hover:text-gray-900 dark:hover:text-white">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div class="max-w-7xl mx-auto px-4 mt-20 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-y-10 md:grid-cols-2 gap-x-12">
                <div class="text-right">
                    <img src="https://www.optisport.nl/sites/default/files/images/Activiteiten/Overige/Evenement%20organiseren/Muziek_evenement_organiseren_sporthal.jpg" alt="" class="inline rounded-lg lg:w-10/12 w-full object-cover" />
                </div>
                <div>
                    <h2 class="text-[#333] text-4xl font-extrabold mb-6">Welcome to Our Website</h2>
                    <p class="text-base text-gray-500 mb-4">"Evento" est bien plus qu'une simple plateforme de réservation d'événements. C'est une nouvelle façon de vivre des expériences uniques, de découvrir des passions et de créer des souvenirs inoubliables. Notre objectif est de simplifier le processus de recherche, de réservation et de gestion des événements pour tous les utilisateurs, qu'ils soient participants, organisateurs ou administrateurs.</p>
                    <p class="text-base text-gray-500">Chez "Evento", nous croyons que chaque événement devrait être une expérience mémorable, que ce soit pour ceux qui y assistent ou ceux qui les organisent. Rejoignez-nous dans cette aventure, et laissez "Evento" vous emmener au-delà des simples réservations, vers un monde d'événements extraordinaires.</p>
                    <a href="javascript:void(0);" class="inline-block mt-6 px-6 py-2.5 bg-blue-500 text-white text-base font-medium rounded-md hover:bg-green-600">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class='mt-7  '  >
    @include('partials.footer')
    </div>

</body>
</html>
