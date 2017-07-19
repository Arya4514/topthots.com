<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TopThots.com</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 3px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .siterips {
                font-size: 36px !important;
                text-transform: none !important;
                font-weight: 300 !important;
                color:#636b6f;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    TopThots
                </div>

                <div class="links">
                    <a href="https://twitter.com/topthotdot" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @topthotdot</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <a href="https://twitter.com/intent/tweet?screen_name=TopThotDot" class="twitter-mention-button" data-size="large" data-show-count="false">Tweet to @TopThotDot</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <a target="_blank" href="//topthots.com/rabbit/porndeals.com/"><button style="background-color:#1B95E0 !important;font-size: 14px;cursor: pointer !important;margin-bottom: 20px !important;margin-left: -3px;padding: 0.35em;" type="button" class="btn btn-primary btn-sm">PornDeals SiteRip</button></a>
                    <a target="_blank" href="//topthots.com/rabbit/theporndude.com/"><button style="background-color:#1B95E0 !important;font-size: 14px;cursor: pointer !important;margin-bottom: 20px !important;margin-left: -3px;padding: 0.35em;" type="button" class="btn btn-primary btn-sm">ThePornDude SiteRip</button></a>
                </div>
            </div>
        </div>
    </body>
</html>
