@extends("layouts.app")

@section("page-title", "Comic")

@section("main-content")

<main class="comic-page">
    <div class="card" style="width: 18rem;">
        <img src="{{$comic["thumb"]}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$comic["title"]}}</h5>
          <p class="card-text">{{$comic["description"]}}</p>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
</main>

@endsection
