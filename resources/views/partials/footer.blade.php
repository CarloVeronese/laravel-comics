@php
$categories = [
    [
        "title" => "Digital Comics",
        "img" => "resources/img/buy-comics-digital-comics.png"
    ],
    [
        "title" => "DC Merchandise",
        "img" => "resources/img/buy-comics-merchandise.png"
    ],
    [
        "title" => "Subscription",
        "img" => "resources/img/buy-comics-shop-locator.png"
    ],
    [
        "title" => "Comic Shop Locator",
        "img" => "resources/img/buy-comics-subscriptions.png"
    ],
    [
        "title" => "DC Power Visa",
        "img" => "resources/img/buy-dc-power-visa.svg"
    ]
];

$dcComics = [
    "title" => "DC COMICS",
    "voices" => ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News']
];

$shop = [
    "title" => "SHOP",
    "voices" => ['Shop DC', 'Shop DC Collectibles']
];

$dcInfo = [
    "title" => "DC",
    "voices" => ['Terms Of Use', 'Privacy Policy(New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us']
];

$sites = [
    "title" => "SITES",
    "voices" => ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa']
];

@endphp

<footer class="page-footer">
    <div class="categories">
        <div class="container d-flex justify-content-between align-items-center">
            @foreach ($categories as $item)
            <div class="category-content d-flex align-items-center">
                <img src="{{ Vite::asset($item['img'])}}" alt="" class="category-img">
                <div>{{ strtoupper($item['title'])}}</div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="footer-menu" style="background-image: url( {{ Vite::asset('resources/img/footer-bg.jpg') }}">
        <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="" class="dc-logo">
        <div class="container">
            <div class="footer-lists d-flex">
                <div class="first-col d-flex flex-column">
                    <ul>
                        <li class="list-title font-light">{{$dcComics['title']}}</li>
                        @foreach ($dcComics['voices'] as $voice)
                            <li class="list-voice">{{$voice}}</li>
                        @endforeach
                    </ul>
                    <ul>
                        <li class="list-title font-light">{{$shop['title']}}</li>
                        @foreach ($shop['voices'] as $voice)
                            <li class="list-voice">{{$voice}}</li>
                        @endforeach
                    </ul>
                </div>
                <ul>
                    <li class="list-title font-light">{{$dcInfo['title']}}</li>
                    @foreach ($dcInfo['voices'] as $voice)
                        <li class="list-voice">{{$voice}}</li>
                    @endforeach
                </ul>
                <ul>
                    <li class="list-title font-light">{{$sites['title']}}</li>
                    @foreach ($sites['voices'] as $voice)
                        <li class="list-voice">{{$voice}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="disclaimer d-flex flex-column">
                <span>All Site Content TM and @ 2020 DC Entertainment, unless otherwise <a class="blue" href="">noted here</a>. All rights reserved.</span>
                <a class="blue" href="">Cookies Settings</a>
            </div>
        </div>
        
    </div>
    <div class="footer-contact">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="sign-up">SIGN-UP NOW!</div>
            <div class="socials d-flex align-items-center gap-2">
                <div class="follow-us">FOLLOW US</div>
                <ul class="d-flex gap-2">
                    <li><img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt=""></li>
                    <li><img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt=""></li>
                    <li><img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt=""></li>
                    <li><img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt=""></li>
                    <li><img src="{{ Vite::asset('resources/img/footer-periscope.png')}}" alt=""></li>
                </ul>
            </div>
        </div>
    </div>
</footer>