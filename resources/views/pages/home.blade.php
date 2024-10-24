@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")

<main>
    <div class="jumbotron-img">
        <img src="http://localhost:8000/img/jumbotron.jpg" alt="Jumbotron-img">
    </div>
    <div class="comic-list-general">
        <ul class="comic-list container d-flex justify-content-between">
            @foreach ($comics as $key => $comic)
                <li class="square-box">
                    <a href="{{route("pages.comic", $key)}}">
                        <img src="{{$comic["thumb"]}}" alt="">
                        <p>{{$comic["series"]}}</p>
                    </a>
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
