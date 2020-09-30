
<!doctype html>
<html lang="en">
  <head>
    <title>Forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet"  type="text/css" href="{{ asset('css/bootstrap.css') }}">



  </head>
  <body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
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

    @yield('postbar')

    <div class="row pt-3">
        <div class="col--1-12">
            <div class="list-group">
                <a href="{{ url('/Post') }}" class="list-group-item list-group-item-action">All posts
                    <span class="badge badge-pill badge-primary">{{postCount()}}</span>
                <a href="/about" class="list-group-item list-group-item-action">About</a>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="content-wrap card">

                @yield('content')
            </div>
        </div>
    </div>

</div>
<a id="back-to-top" href="" style="position: fixed; right: 5%; bottom: 5%; height: 50px; width: 50px; visibility: hidden;">&uArr; Back to top</a>
    <!-- Optional JavaScript -->

    <script src="{{asset('js/button.js')}}"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

