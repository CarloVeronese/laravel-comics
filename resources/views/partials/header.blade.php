@php
 $menu = ['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FANS', 'NEWS', 'SHOP'];   
@endphp

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
                    @foreach ($menu as $item)
                        <li><a href="" class="text-decoration-none text-dark fw-bold">{{ $item }}</a></li>                        
                    @endforeach
                </ul>
                <div class="col-auto search">
                    <input type="text" placeholder="search" class="border border-0 search-bar">
                </div>
            </div>
        </div>
    </div>
</header>