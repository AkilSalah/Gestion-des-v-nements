<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @vite(['resources/css/style.css','resources/js/main.js'])

    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation ">
            <ul>
                <li>
                    <a href="">
                      
                        <span class="title text-3xl font-semibold   ">Evento </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Admin') }}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Admin.users') }}">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">utilisateurs</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Admin.categorie') }}">
                        <span class="icon">
                            <ion-icon name="hardware-chip-outline"></ion-icon>
                        </span>
                        
                        <span class="title">Catégories</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Admin.events') }}">
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                        
                        <span class="title">Evenements</span>
                    </a>
                </li>
                <li>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="">
                        <button class="flex" type="submit">
                             <span class="icon">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </span>
                            <span class="title">Log Out</span>   
                        </button>
                        </a>
                    </form>
                    
                </li>
            </ul>
        </div>
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="flex justify-end gap-3">
                    <div class="user">
                        <img src="https://cdn-icons-png.flaticon.com/512/115/115893.png" alt="">
                    </div>
                    <div class="my-auto" >{{ Auth::user()->name }}</div>
                </div>
                
            </div>
            
            @yield('main')

        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="/js/main.js"></script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
