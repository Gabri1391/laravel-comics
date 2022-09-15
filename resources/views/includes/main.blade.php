@php 
$comics = config('comics')
@endphp

<!DOCTYPE html>
<html lang="en">
 @include('includes.head')
<body>
    <main>
        <section class="banner">
            <div class="card-box container">
                @foreach ($comics as $comic)
                <div class="comics-card pt-5">
                    <figure>
                        <img src="{{ asset ($comic['thumb']) }}" alt="">
                    </figure>
                    <figcaption>
                    <p>{{ strtoupper($comic['title']) }}</p>
                    </figcaption>
                </div>
                @endforeach
            </div>
            <div class="button">
                <a href="#">LOAD MORE</a>
            </div>
        </section>
    </main>
</body>
</html>