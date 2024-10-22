@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")

<?php $comics = config("db.comics") ?>

<h1>
    Homepage
    <ul>
        {{-- @foreach ($comics as $comic )
            <li>
                {{$comic["title"]}}
            </li>
        @endforeach --}}
    </ul>
</h1>
@endsection
