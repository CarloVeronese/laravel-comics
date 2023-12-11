<header class="page-header" style="background-image: url( {{ Vite::asset('resources/img/jumbotron.jpg') }})">
    <div class="page-top">
        <div class="container">
            <ul class="row justify-content-end">
                <li class="col-auto">DC POWER VISA &reg;</li>
                <li class="col-auto">ADDITIONAL DC SITES</li>
            </ul>
        </div>
    </div>
    <div class="nav-bar bg-light">
        <div class="container">
            <div class="row flex-nowrap align-items-center">
                <div class="col-auto">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="" class="logo">
                </div>
                <ul class="col d-flex flex-grow-1 justify-content-between">
                    <li><a href="{{route('characters')}}" class="text-decoration-none text-dark fw-bold">CHARACTERS</a></li>          
                    <li><a href="{{route('comics')}}" class="text-decoration-none text-dark fw-bold">COMICS</a></li>          
                    <li><a href="{{route('movies')}}" class="text-decoration-none text-dark fw-bold">MOVIES</a></li>          
                    <li><a href="{{route('tv')}}" class="text-decoration-none text-dark fw-bold">TV</a></li>          
                    <li><a href="{{route('games')}}" class="text-decoration-none text-dark fw-bold">GAMES</a></li>          
                    <li><a href="{{route('collectibles')}}" class="text-decoration-none text-dark fw-bold">COLLECTIBLES</a></li>                        
                    <li><a href="{{route('videos')}}" class="text-decoration-none text-dark fw-bold">VIDEOS</a></li>          
                    <li><a href="{{route('fans')}}" class="text-decoration-none text-dark fw-bold">FANS</a></li>          
                    <li><a href="{{route('news')}}" class="text-decoration-none text-dark fw-bold">NEWS</a></li>          
                    <li><a href="{{route('shop')}}" class="text-decoration-none text-dark fw-bold">SHOP</a></li>          
                </ul>
                <div class="col-auto search">
                    <input type="text" placeholder="search" class="border border-0 search-bar">
                </div>
            </div>
        </div>
    </div>
</header>