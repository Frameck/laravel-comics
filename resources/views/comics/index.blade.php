@php
$buy_items = [
    [
        "text"=> "digital comics",
        "fileName"=> "buy-comics-digital-comics"
    ],
    [
        "text"=> "dc merchandise",
        "fileName"=> "buy-comics-merchandise"
    ],
    [
        "text"=> "subscription",
        "fileName"=> "buy-comics-subscriptions"
    ],
    [
        "text"=> "comic shop locator",
        "fileName"=> "buy-comics-shop-locator"
    ],
    [
        "text"=> "dc power visa",
        "fileName"=> "buy-dc-power-visa"
    ]
]
@endphp



@extends("layouts.default")

@section("page_title", "Homepage Laravel Comics")

@section("content")
    <div class="main">
        <div class="banner">
            <h4>CURRENT SERIES</h4>
        </div>
        
        <div class="card-container">
            @foreach($comics_list as $index => $item)
                <a href="{{ route('comics.details', $index) }}" class="my-card">
                    <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                    <h5>{{ strtoupper($item['series']) }}</h5>
                </a>
            @endforeach
        </div>
        
        <div class="d-flex justify-content-center">
            <button><a href="#">LOAD MORE</a></button>
        </div>
    </div>


    <div class="blue-section-container">
        <div class="blue-section">
            @foreach($buy_items as $item)
                <a href="{{ $item['text'] }}" class="buy-section">
                    <img src="{{ '/img/' . $item['fileName'] . '.png' }}" alt="{{ $item['text'] }}">
                    <span>{{ $item['text'] }}</span>
                </a>
            @endforeach
        </div>
    </div>
@endsection

