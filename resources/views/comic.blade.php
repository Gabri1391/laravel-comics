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

<section class="credit">
    <div class=" ms-5 container d-flex">
        <div class="row d-flex justify-content-between align-items-top mt-3">
            <div class="col mt-5">
                <h4>TALENT</h4>
                <div class="row mt-3 mb-3 d-flex border-bottom-grey align-items-top">
                    <div class="col">Art By:</div>
                    <div class="col">
                        @foreach ($comic['artists'] as $artist)
                        <span>{{$artist}}</span>@if(!$loop->last), @endif
                        @endforeach
                    </div>
                </div>
                <div class="row d-flex border-bottom-grey align-items-top">
                    <div class="col">Written By:</div>
                    <div class="col">
                        @foreach ($comic['writers'] as $writer)
                        <span>{{$writer}}</span>@if(!$loop->last), @endif
                        @endforeach
                    </div>
    
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-between  align-items-top  mt-3">
            <div class="col mt-5">
                <h4>SPECS</h4>
                <div class="row mt-3 mb-3 d-flex justify-content-between align-items-top  border-bottom-grey">
                    <div class="col">Series:</div>
                    <div class="col lightblue">{{ $comic['series'] }}</div>
                </div>
                <div class="row d-flex justify-content-between  align-items-top border-bottom-grey">
                    <div class="col">U.S. Price:</div>
                    <div class="col lightblue">{{ $comic['price'] }}</div>
                </div>
                <div class="row d-flex justify-content-between align-items-top  border-bottom-grey">
                    <div class="col">On Sale Date:</div>
                    <div class="col lightblue">{{ $comic['sale_date'] }}</div>
                </div>
            </div>
        </div>
    </div>
        
</section>

@endsection

