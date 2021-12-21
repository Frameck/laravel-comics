@extends('layouts.default')

@section("page_title", $cartoon['title'] . " | Dettagli fumetto")



@section('content')

<div class="container-fluid my-bg-primary py-5"></div>

<div class="container px-0">
    <div class="img-cartoon-container">
        <img src="{{ $cartoon["thumb"] }}" alt="cartoon poster">
        <span class="series-tag text-light px-2">{{ strtoupper($cartoon["series"]) }}</span>
        <span class="gallery-tag text-light px-2 w-100 text-center">VIEW GALLERY</span>
    </div>


    <div class="row my-5">
        <div class="col-9 pe-5">
            <h2 class="pb-3 text-white">{{ strtoupper($cartoon["title"]) }}</h2>

            <div class="d-flex bg-green border-bottom">
                <div class="text-start p-3"><span style="color: lightgray">U.S. Price:</span> <span style="color: white">{{ $cartoon["price"] }}</span></div>
                <div class="ms-auto text-end p-3"><span style="color: lightgray">AVAILABLE</span></div>
                <div class="text-center border-start p-3"><a href="#" class="text-light text-decoration-none">Check Availability</a></div>
            </div>

            <p class="text-white mt-4">{{ $cartoon["description"] }}</p>
        </div>

        <div class="col-3">
            <p class="text-end mb-0 text-white">ADVERTISEMENT</p>
            <img src="/img/adv.jpg" alt="adv image">
        </div>
    </div>
</div>

<div class="container-fluid details-container py-5">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <h3 class="pb-4 border-bottom">Talent</h3>
                <div class="d-flex justify-content-between border-bottom mb-2">
                    <span class="me-auto">Art by:</span>
                    @php
                        $artists = $cartoon['artists'];
                        $artists_string = '';

                        foreach ($artists as $index => $artist) {
                            if ($index == 0) {
                                $artists_string .= $artist;
                            } else {
                                $artists_string .= ', ' . $artist;
                            }
                        }
                    @endphp

                    <p class="w-75">{{ $artists_string }}</p>
                </div>

                <div class="d-flex justify-content-between border-bottom">
                    <span class="me-auto">Written by:</span>
                    @php
                        $writers = $cartoon['writers'];
                        $writers_string = '';

                        foreach ($writers as $index => $writer) {
                            if ($index == 0) {
                                $writers_string .= $writer;
                            } else {
                                $writers_string .= ', ' . $writer;
                            }
                        }
                    @endphp
                    <p class="w-75">{{ $writers_string }}</p>
                </div>

            </div>
            <div class="col-5">
                <h3 class="pb-4 border-bottom">Specs</h3>
                <div class="d-flex justify-content-between border-bottom align-items-center">
                    <span class="me-auto">Series:</span>
                    <a href="#" class="w-50 m-0 py-2 d-inline-block text-decoration-none">{{ strtoupper($cartoon["series"]) }}</a>
                </div>

                <div class="d-flex justify-content-between border-bottom align-items-center">
                    <span class="me-auto">Price:</span>
                    <p class="w-50 m-0 py-2">{{ $cartoon["price"] }}</p>
                </div>

                <div class="d-flex justify-content-between border-bottom align-items-center">
                    <span class="me-auto">On Sale Date:</span>
                    <p class="w-50 m-0 py-2">{{ date("m.d.y") }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection