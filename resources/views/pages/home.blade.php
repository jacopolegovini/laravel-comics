@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")

<?php $comics = config("db.comics");
$cta = config("db.cta");
?>

<main>
    <div class="comic-list-general">
        <ul class="comic-list container d-flex justify-content-between">
            @foreach ($comics as $comic )
                <li>
                    <img src="http://localhost:8000/img/adv.jpg" alt="">
                    <p>{{$comic["series"]}}</p>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="main-cta">
        <ul class="d-flex justify-content-between pt-3">
            @foreach ($cta as $element)
                <li>
                    <img src="http://localhost:8000/img/{{$element["url"]}}" alt="{{$element["name"]}}">
                    <p>{{$element["name"]}}</p>
                </li>
            @endforeach
        </ul>
    </div>
</main>
@endsection
