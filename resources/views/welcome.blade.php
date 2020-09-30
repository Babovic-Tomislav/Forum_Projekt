<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Forum</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #e9ecef;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                color: #E95420;
                font-family: 'Helvetica Neue', sans-serif;
                font-size: 100px;
                font-weight: bold;
                letter-spacing: -1px;
                line-height: 1;
                text-align: center;
            }

            .links > a {
                color: gray;
                font-family: 'Helvetica Neue', sans-serif;
                padding: 0 25px;
                font-size: 22px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 40px;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    FORUM
                </div>

                <div class="links">
                    @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/Post') }}">Home</a>
                        <a href="/about" class="list-group-item list-group-item-action">About</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                        <a href="/about" class="list-group-item list-group-item-action">About</a>
                    @endauth
            @endif
                </div>
            </div>
        </div>

    </body>
</html>
