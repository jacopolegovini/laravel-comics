@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")

<?php $comics = config("db.comics") ?>

<main>
    <ul class="comic-list container d-flex justify-content-between">
        @foreach ($comics as $comic )
            <li>
                <img src="http://localhost:8000/img/adv.jpg" alt="">
                <p>{{$comic["series"]}}</p>
            </li>
        @endforeach
    </ul>
</main>
@endsection
