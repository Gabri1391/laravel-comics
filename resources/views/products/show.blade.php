@extends('home');

@section('title', $comic['title'])

@section('content')

<div class="blue-banner">
    <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}">
</div>

<section class="card-details container">
    <div class="wrapper">
        <div class="description">
           <h3>{{strtoupper($comic['title']) }}</h3>
           <div id="price">
            <p>US.PRICE: {{ $comic['price'] }}</p>
            <p>AVAILABLE</p>
           </div>
           <p>{{ $comic['description']}}</p>
        </div>
        <figure>
            <img src="{{ asset('/img/adv.jpg') }}" alt="advertising">
        </figure>
    </div>
</section>

<section class="talent-specs py-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h4 class="border-bottom pb-4">Talent</h4>
                <div class="row m-0 border-bottom py-2">

                    <div class="col-3">
                        <span>
                            Art by:
                        </span>
                    </div>
                    <div class="col-9">
                        @foreach ($comic['artists'] as $artist)
                            <span class="text-primary">{{ $artist }},</span>
                        @endforeach
                    </div>
                </div>
                <div class="row m-0 border-bottom py-2">
                    <div class="col-3">
                        <span>
                            Written by:
                        </span>
                    </div>
                    <div class="col-9">
                        @foreach ($comic['writers'] as $writer)
                            <span class="text-primary">{{ $writer }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-6 pl-5">
                <h4 class="border-bottom pb-4">Specs</h4>
                <div class="row m-0 py-2 border-bottom">
                    <div class="col-3">
                        <span>Series:</span>
                    </div>
                    <div class="col-9">
                        <span class="fw-bold text-primary">{{ $comic['series'] }}</span>

                    </div>
                </div>
                <div class="row m-0 py-2 border-bottom">
                    <div class="col-3">
                        <span>U.S. Price:</span>
                    </div>
                    <div class="col-9">
                        <span class="fw-bold">{{ $comic['price'] }}</span>

                    </div>
                </div>
                <div class="row m-0 py-2 border-bottom">
                    <div class="col-3">
                        <span>On Sale Date:</span>
                    </div>
                    <div class="col-9">
                        <span class="fw-bold">{{ $comic['sale_date'] }}</span>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

