<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="generator" content="Hugo 0.80.0">
        <title>原神-Genshin-公式</title>

        <!-- Bootstrap core CSS -->
        <link href={{asset("dist/css/bootstrap.min.css")}} rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href={{asset("dist/css/starter-template.css")}} rel="stylesheet">
    </head>

    <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="fw-bold fs-3 navbar-brand ms-3 me-5">原神</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('character', app()->getLocale())}}">{{__("Character")}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('weapon', app()->getLocale())}}">{{__("Weapon")}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('enemy', app()->getLocale())}}">{{__("Enemy")}}</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    @if($_SESSION['session'])
                        <a class="navbar-text me-3 text-white">{{__("Welcome, ") . $_SESSION['session_user']->name}}</a>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout', app()->getLocale())}}">{{__("Logout")}}</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="navbar-text me-3 text-white">{{__("Welcome, Traveler")}}</a>
                        <li/>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <script src={{asset("dist/js/bootstrap.bundle.min.js")}}></script>
    <script src={{asset("dist/js/jquery-3.6.0.min.js")}}></script>
    @yield('script')
    </body>
</html>
