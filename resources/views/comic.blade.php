@extends('home');

@section('title', $comic['title'])

<section class="card-details container">
    <div class="blue-banner">
        <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}">
    </div>

    <div class="wrapper">
        <div class="description">
           <h2>{{ $comic['title']}}</h2>
           <p>{{ $comic['description']}}</p>
        </div>
        <figure>
            <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}">
        </figure>
    </div>
    
</section>