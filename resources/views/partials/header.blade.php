<?php
$headerList = [
    'CHARACTER',
    'COMICS',
    'MOVIES',
    'TV',
    'GAMES',
    'COLLECTIBLES',
    'VIDEOS',
    'FANS',
    'NEWS',
    'SHOP',
]

?>

<header>
    <div class="container header-flex">
        <div class="img-header">
            <img src="http://localhost:8000/img/dc-logo.png" alt="logo DC">
        </div>
        <div class="navbar-header">
            <ul class="navbar-header-flex">
                @foreach ($headerList as $element)
                    <li>
                        {{$element}}
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="sandwich-menu">
            <section>Search</section>
        </div>
    </div>
</header>
