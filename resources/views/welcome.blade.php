<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>
<body>


        {{-- <h1 class="text-center">Ciao da vite</h1> --}}
        {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
    <div class="infoNav">

    </div>
    <header>
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" />
            <ul>
                <li>
                    <a href="#">CHARACTERS</a>
                </li>
                <li>
                    <a href="#">COMICS</a>
                </li>
                <li>
                    <a href="#">MOVIES</a>
                </li>
                <li>
                    <a href="#">TV</a>
                </li>
                <li>
                    <a href="#">GAMES</a>
                </li>
                <li>
                    <a href="#">COLLECTIBLES</a>
                </li>
                <li>
                    <a href="#">VIDEOS</a>
                </li>
                <li>
                    <a href="#">FANS</a>
                </li>
                <li>
                    <a href="#">NEWS</a>
                </li>
                <li>
                    <a href="#">SHOP</a>
                </li>
                <div>
                    search
                </div>

            </ul>

    </header>


    <div class="jumbo"></div>
    <div class="containerCard">
        <button class="series">Current series</button>
        <div class="card">
            <img src="" alt="" />
            <p></p>

        </div>

        <button class="load">Load More</button>
    </div>
    <div class="icons">
        <div class="iconMenu">
            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="" />
            <p>DIGITAL COMICS</p>
        </div>
        <div class="iconMenu">
            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="" />
            <p>MERCHANDISE</p>
        </div>
        <div class="iconMenu">
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="" />
            <p>SUBSCRIPTION</p>
        </div>
        <div class="iconMenu">
            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="" />
            <p>COMIC SHOP LOCATOR</p>
        </div>
        <div class="iconMenu">
            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="" />
            <p>DC POWER VISA</p>
        </div>
    </div>
    <footer>
    <div class="container">
      <div class="linkContainer">
        <ul>
          <li class="linkArea">DC COMICS</li>
          <li>Charaters</li>
          <li>Comics</li>
          <li>Movies</li>
          <li>TV</li>
          <li>Games</li>
          <li>Videos</li>
          <li>News</li>
          <li class="linkArea">SHOP</li>
          <li>Shop DC</li>
          <li>Shop DC Collectibles</li>
        </ul>

        <ul>
          <li class="linkArea">DC</li>
          <li>Terms Of Use</li>
          <li>Privacy policy (New)</li>
          <li>Ad Choices</li>
          <li>Advertising</li>
          <li>Jobs</li>
          <li>Subscriptions</li>
          <li>Talent Workshops</li>
          <li>CPSC Certificates</li>
          <li>Ratings</li>
          <li>Shop Help</li>
          <li>Contact Us</li>
        </ul>

        <ul>
          <li class="linkArea">SITES</li>
          <li>DC</li>
          <li>MAD Magazine</li>
          <li>DC Kids</li>
          <li>DC Universe</li>
          <li>DC Power Visa</li>
        </ul>
      </div>
      <div class="logoBg">
        <!-- <img src="../assets/img/dc-logo-bg.png" alt="" /> -->
      </div>
    </div>
  </footer>











    </body>
</html>
