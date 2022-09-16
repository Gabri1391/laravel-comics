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
    <div class=" table container d-flex">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col mt-5">
                <h4>TALENT</h4>
                <div class="row mt-3 mb-3 d-flex">
                    <div class="col">Art By:</div>
                    <div class="col">
                        @foreach ($comic['artists'] as $artist)
                        <span>{{$artist}}</span>@if(!$loop->last), @endif
                        @endforeach
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col">Written By:</div>
                    <div class="col">
                        @foreach ($comic['writers'] as $writer)
                        <span>{{$writer}}</span>@if(!$loop->last), @endif
                        @endforeach
                    </div>
    
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-between mt-3">
            <div class="col mt-5">
                <h4>SPECS</h4>
                <div class="row mt-3 mb-3 d-flex">
                    <div class="col">Art By:</div>
                    <div class="col">
                        @foreach ($comic['artists'] as $artist)
                        <span>{{$artist}}</span>@if(!$loop->last), @endif
                        @endforeach
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col">Written By:</div>
                    <div class="col">
                        @foreach ($comic['writers'] as $writer)
                        <span>{{$writer}}</span>@if(!$loop->last), @endif
                        @endforeach
                    </div>
    
                </div>
            </div>
        </div>
    </div>
        
</section>

@endsection

