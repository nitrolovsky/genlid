<!DOCTYPE html>
<html lang="en" class="html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Play:400,700&amp;subset=cyrillic" rel="stylesheet">
        <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/docs.min.css">
        <link rel="stylesheet" href="/css/custom.css">
    </head>
    <body class="body">
        <nav class="navbar navbar-fixed-top navbar-dark bg-inverse sw">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
                        <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Генератор видео-лендингов</a>
                                </li>
                                @if (Session::get('authed'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="/pages">Лендинги</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/proposals">Заявки</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/users/{{ Session::get('id') }}">Профиль</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/users/logout">Выйти</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="/users/login">Войти</a>
                                    </li>
                                @endif
                            </ul>
                            <span class="navbar-text float-xl-right float-lg-right text-white">
                                8 (929) 116 85 65
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('info'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ Session::get('info') }}
                        </div>
                    @endif
                    @if (Session::get('danger'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ Session::get('danger') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @yield('content')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    </body>
</html>
