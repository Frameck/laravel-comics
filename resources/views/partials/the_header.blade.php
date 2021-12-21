@php
$nav_links = [
    [
        "text"=> "Characters",
        "route_name"=> "characters.index"
    ],
    [
        "text"=> "Comics",
        "route_name"=> "comics.index"
    ],
    [
        "text"=> "Movies",
        "route_name"=> "movies.index"
    ],
    [
        "text"=> "Tv",
        "route_name"=> "tv.index"
    ],
    [
        "text"=> "Games",
        "route_name"=> "games.index"
    ],
    [
        "text"=> "Collectibles",
        "route_name"=> "collectibles.index"
    ],
    [
        "text"=> "Video",
        "route_name"=> "video.index"
    ],
    [
        "text"=> "Fans",
        "route_name"=> "fans.index"
    ],
    [
        "text"=> "News",
        "route_name"=> "news.index"
    ],
    [
        "text"=> "Shop",
        "route_name"=> "shop.index"
    ]
]
@endphp


<header class="main-header">
    <a href="/">
        <img class="logo" src="/img/dc-logo.png" alt="dc-logo">
    </a>
    <nav>
        <ul>
            @foreach($nav_links as $link)
                @php
                    $prefix = explode('.', $link['route_name'])[0]
                @endphp
                <li>
                    <a href="{{ $prefix }}">
                        {{ strtoupper($link['text']) }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>

<div class="hero-container"></div>