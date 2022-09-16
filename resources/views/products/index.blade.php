@php
$comics = config('comics')
@endphp

@extends('home');

@section('content')
<section class="banner">
    <div class="card-box container">
        @foreach ($comics as $comic)
        <div class="comics-card pt-5">
            <a href="{{ url('/comic')}}">
                <figure>
                    <img src="{{ asset ($comic['thumb']) }}" alt="">
                </figure>
                <figcaption>
                <p>{{ strtoupper($comic['title']) }}</p>
                </figcaption>
            </a>
        </div>
        @endforeach
    </div>
    <div class="button-load">
        <a href="#">LOAD MORE</a>
    </div>
</section>
<section class="bottom-banner">
    <ul>
     <li>
        <a class="text-white" href="#">COMICS</a>
     </li>
     <li>
        <a class="text-white" href="#">COMICS</a>
     </li>
     <li>
        <a class="text-white"  href="#">COMICS</a>
     </li>
     <li>
        <a class="text-white"  href="#">COMICS</a>
     </li>
     <li>
        <a class="text-white"  href="#">COMICS</a>
     </li>
    </ul>
</section>
@endsection