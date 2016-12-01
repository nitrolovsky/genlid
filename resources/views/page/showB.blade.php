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
        <style>
            @font-face {
                font-family: 'SegoeUI';
                src: url('/fonts/SegoeUI/SegoeUIRegular/SegoeUIRegular.eot');
                src: url('/fonts/SegoeUI/SegoeUIRegular/SegoeUIRegular.eot?iefix') format('eot'),
                    url('/fonts/SegoeUI/SegoeUIRegular/SegoeUIRegular.woff') format('woff'),
                    url('/fonts/SegoeUI/SegoeUIRegular/SegoeUIRegular.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }

            @font-face {
                font-family: 'SegoeUI';
                src: url('/fonts/SegoeUI/SegoeUIBold/SegoeUIBold.eot');
                src: url('/fonts/SegoeUI/SegoeUIBold/SegoeUIBold.eot?iefix') format('eot'),
                    url('/fonts/SegoeUI/SegoeUIBold/SegoeUIBold.woff') format('woff'),
                    url('/fonts/SegoeUI/SegoeUIBold/SegoeUIBold.ttf') format('truetype');
                font-weight: bold;
                font-style: normal;
            }

            @font-face {
                font-family: 'SegoeUI';
                src: url('/fonts/SegoeUI/SegoeUILight/SegoeUILight.eot');
                src: url('/fonts/SegoeUI/SegoeUILight/SegoeUILight.eot?iefix') format('eot'),
                    url('/fonts/SegoeUI/SegoeUILight/SegoeUILight.woff') format('woff'),
                    url('/fonts/SegoeUI/SegoeUILight/SegoeUILight.ttf') format('truetype');
                font-weight: 300;
                font-style: normal;
            }

            .bg-image {
                background-image: url(/upload/images/{{ $page->bg }});
                background-position: center;
            }
            .navbar {
                background-color: rgba(0, 0, 0, 0.6) !important;
            }
            a:hover {
                text-decoration: none;
            }
            .lead {
                font-weight: 400;
            }
        </style>
    </head>
    <body class="body">
        <nav class="navbar navbar-fixed-top navbar-dark bg-inverse sw">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                             <ul class="nav navbar-nav">
                                 <li class="nav-item active">
                                     <a class="nav-link" href="/pages/{{ $page->id }}">{{ $page->descriptor }}</a>
                                 </li>
                             </ul>
                            <span class="navbar-text float-xl-right float-lg-right text-white">
                                {{ $page->phone }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid bg-image box-shadow">
            <br>
            <br>
            <br>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 class="display-4 text-xl-center text-lg-center text-md-center text-sm-center text-xs-center text-white">
                            {{ $page->offer }}
                        </h1>
                    </div>
                </div>
                <br>
                <br>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    @include('layouts.errors')
                    @include('layouts.alerts')
                </div>
            </div>
        </div>
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-xl-6">
                    <div class="embed-responsive embed-responsive-16by9" id="video">
                        <iframe class="embed-responsive-item" src="{{ $page->video }}" allowfullscreen></iframe>
                    </div>
                    <br>
                    <p class="lead">
                        {{ $page->details }}
                    </p>
                </div>
                <div class="col-xl-6">
                    <div class="card bg-faded sw">
                        <div class="card-block">
                            <div class="container">
                                <p class="lead text-xl-center text-lg-center text-md-center text-sm-center text-xs-center">
                                    {{ $page->form_title }}
                                </p>
                                <br>
                                <form action="/proposals" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="page_id" value="{{ $page->id }}">
                                    <input type="hidden" name="template" value="b">
                                    <div class="form-group row">
                                        <label for="name" class="col-xl-3 col-lg-3 col-md-3 col-form-label">Имя</label>
                                        <div class="col-xl-9 col-lg-9 col-md-9">
                                            <input type="text" class="form-control" id="name" placeholder="Павел Нитроловский" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-xl-3 col-lg-3 col-md-3 col-form-label">Email</label>
                                        <div class="col-xl-9 col-lg-9 col-md-9">
                                            <input type="email" class="form-control" id="email" placeholder="nitrolovsky@gmail.com" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-xl-3 col-lg-3 col-md-3 col-form-label">Телефон</label>
                                        <div class="col-xl-9 col-lg-9 col-md-9">
                                            <input type="phone" class="form-control" id="phone" placeholder="+7 929 116 85 65" name="phone">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-xl-3 col-xl-9 offset-lg-3 col-lg-9 offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-primary btn-block">{{ $page->call_to_action }}&nbsp;<span class="fa fa-fw fa-paper-plane"></span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <div class="row text-muted">
                <div class="col-xl-12">
                    {{ $page->legal }} Телефон: <a href="callto:{{ $page->phone }}">{{ $page->phone }}</a>. Email: <a href="mailto:{{ $page->email }}">{{ $page->email }}</a>. Дата обновления сайта: {{ date_format($page->updated_at, 'd.m.Y') }}. Сайт разработан <a href="/">nitrolovsky.com</a>.
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    </body>
</html>
