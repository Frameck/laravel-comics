@php
$footer_items = [
            "dc_comics"=> [
                [
                    "text"=> "Characters",
                    "href"=> "#"
                ],
                [
                    "text"=> "Comics",
                    "href"=> "#"
                ],
                [
                    "text"=> "Movies",
                    "href"=> "#"
                ],
                [
                    "text"=> "TV",
                    "href"=> "#"
                ],
                [
                    "text"=> "Games",
                    "href"=> "#"
                ],
                [
                    "text"=> "Videos",
                    "href"=> "#"
                ],
                [
                    "text"=> "News",
                    "href"=> "#"
                ]
            ],
            "shop"=> [
                [
                    "text"=> "Shop DC",
                    "href"=> "#"
                ],
                [
                    "text"=> "Shop DC Collectibles",
                    "href"=> "#"
                ]
            ],
            "dc"=> [
                [
                    "text"=> "Terms Of Use",
                    "href"=> "#"
                ],
                [
                    "text"=> "Privacy policy (New)",
                    "href"=> "#"
                ],
                [
                    "text"=> "Ad Choices",
                    "href"=> "#"
                ],
                [
                    "text"=> "Advertising",
                    "href"=> "#"
                ],
                [
                    "text"=> "Jobs",
                    "href"=> "#"
                ],
                [
                    "text"=> "Subscriptions",
                    "href"=> "#"
                ],
                [
                    "text"=> "Talent Workshops",
                    "href"=> "#"
                ],
                [
                    "text"=> "CPSC Certificates",
                    "href"=> "#"
                ],
                [
                    "text"=> "Ratings",
                    "href"=> "#"
                ],
                [
                    "text"=> "Shop Help",
                    "href"=> "#"
                ],
                [
                    "text"=> "Contact Us",
                    "href"=> "#"
                ]
            ],
            "sites"=> [
                [
                    "text"=> "DC",
                    "href"=> "#"
                ],
                [
                    "text"=> "MAD Magazine",
                    "href"=> "#"
                ],
                [
                    "text"=> "DC Kids",
                    "href"=> "#"
                ],
                [
                    "text"=> "DC Universe",
                    "href"=> "#"
                ],
                [
                    "text"=> "DC Power Visa",
                    "href"=> "#"
                ]
            ]
        ]
@endphp


<div class="footer-container">
    <footer class="footer">
        <!-- links -->
        <div class="list-container">
            <div class="list-container-left">
                <ul>
                    <h3>DC COMICS</h3>
                    @foreach($footer_items['dc_comics'] as $item)
                        <li>
                            <a href="{{ $item['href'] . $item['text'] }}">{{ $item['text'] }}</a>
                        </li>
                    @endforeach
                </ul>

                <ul>
                    <h3>SHOP</h3>
                    @foreach($footer_items['shop'] as $item)
                        <li>
                            <a href="{{ $item['href'] . $item['text'] }}">{{ $item['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="list-container-middle">
                <ul>
                    <h3>DC</h3>
                    @foreach($footer_items['dc'] as $item)
                        <li>
                            <a href="{{ $item['href'] . $item['text'] }}">{{ $item['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="list-container-right">
                <ul>
                    <h3>SITES</h3>
                    @foreach($footer_items['sites'] as $item)
                        <li>
                            <a href="{{ $item['href'] . $item['text'] }}">{{ $item['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- dc_logo_bg -->
            <div class="background-container">
                <img src="/img/dc-logo-bg.png" alt="dc_logo_bg">
            </div>
        </div>
    </footer>
</div>