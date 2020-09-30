<!doctype html>
<html lang="en">
  <head>
    <title>Forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"  href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  </head>
  <body>

    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand text_custom" href="{{route('welcome')}}">FORUM</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">
            @if (Route::has('login'))
                <div class="top-right links my-3">
                    @auth
                        <a href="{{url('/logout')}}"> Logout </a>
                    @else
                        <a href="{{ route('login') }}"class="pr-4">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="pr-1">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

@yield('banner')

<div class="container pt-2">

    <div class="row pt-3">
        <div class="col--1-12">
            <div class="list-group">
                <a href="{{ url('/Post') }}" class="list-group-item list-group-item-action">All posts
                    <span class="badge badge-pill badge-primary">14</span>
                <a href="/about" class="list-group-item list-group-item-action">About</a>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="content-wrap card">
                <div class="text_custom2">
                About
                <br>
                </div>
            </div>
            <p>
                <br>
                <h2 class="text_custom3">O aplikaciji</h2>
                <p>Forum je web aplikacija namijenjena kreiranju, čitanju i komentiranju objava (postova) korisnika. Korisnik može uređivati
                i brisati svoje objave te može likeati i komentirati objave ostalih korisnika.Da bi pristupio aplikaciji korisnik se mora
                registrirati (klikom na register dugme). Aplikacija je rađena pomoću Laravel frameworka.</p>
                <h2 class="text_custom3">O frameworku</h2>
                <p>Laravel je open-source web framework. Baziran je na PHP-u, odnosno Simfony framework-u. Razvio ga je Taylor Otwell s
                ciljem razvoja web aplikacija prateći model–view–controller (MVC) arhitekturu. Smatra se jednim od najpopularnijih PHP framework-a.
                Cijeli izvorni kod Laravel-a nalazi se na GitHub-u pod MIT licencom. <a href="https://hr.wikipedia.org/wiki/Laravel">(Wikipedija)</a></p>
                <p>Verzija Frameworka koju mi koristimo je: 7.14.1</p>
                <h2 class="text_custom3">Login</h2>
                <p>
                    <div class="div_custom">
                        Administrator
                         <ul>
                         <li>
                             <a href=''>Username: administrator</a>
                         </li>
                         <li>
                          <a href=''>Password: administrator2020</a>
                         </li>
                       </ul>
                     </div>

                     <div class="div_custom">
                        Korisnik
                          <ul>
                               <li>
                                 <a href=''>Username: korisnik</a>
                               </li>
                               <li>
                                <a href=''>Password: korisnik2020</a>
                               </li>
                            </ul>
                     </div>
                </p><br>
                <p class="p_custom">&copy; Made by: Tomislav Babović i Paolo Kos</p>
            </p>
        </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

