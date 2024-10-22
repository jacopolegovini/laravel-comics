<?php $dcListTitle = config("db.dcListTitle");
$dcLists1 = config("db.dcLists1");
$dcLists2 = config("db.dcLists2");
$dcLists3 = config("db.dcLists3");
$dcLists4 = config("db.dcLists4");
?>

<footer>
    <div class="list-footer d-flex">
        <div class="list-sx container d-flex">
            <ul>
                @foreach ($dcLists1 as $dcList)
                    <li>
                        {{$dcList}}
                    </li>
                @endforeach
            </ul>
            <ul>
                @foreach ($dcLists4 as $dcList)
                    <li>
                        {{$dcList}}
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="list-dx container d-flex">
            <ul>
                @foreach ($dcLists3 as $dcList)
                    <li>
                        {{$dcList}}
                    </li>
                @endforeach
            </ul>
            <ul>
                @foreach ($dcLists2 as $dcList)
                    <li>
                        {{$dcList}}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="container social-footer">
        <div class="sign-up">
            <p>SIGN-UP NOW!</p>
        </div>
        <div class="social-icon">
            <p>FOLLOW ME</p>
            <img src="http://localhost:8000/img/footer-facebook.png" alt="Facebook">
            <img src="http://localhost:8000/img/footer-twitter.png" alt="Twitter">
            <img src="http://localhost:8000/img/footer-youtube.png" alt="Youtube">
            <img src="http://localhost:8000/img/footer-pinterest.png" alt="Pinterest">
            <img src="http://localhost:8000/img/footer-periscope.png" alt="Periscope">
        </div>
    </div>
</footer>
