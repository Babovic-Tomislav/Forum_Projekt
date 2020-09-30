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

    <div class="row content-heading">
            <div class="col pl-5">
                <div class="row">
                    <div class="col-8 d-flex justify-content-start">
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        <a class="btn btn-primary" href="{{route('Post.create')}}">Create post</a>
                    </div>
                </div>
        </div>
    </div>

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
                Posts
                <br>
                </div>
                @yield('content')
            </div>

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

