<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Q/A')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1 class="text-center my-5">
            <a class="text-dark" href="/">Q & A</a>
        </h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                
                    @yield('content')

                </div>
            </div>        
        </div>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
