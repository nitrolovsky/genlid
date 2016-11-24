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
            .html {
                background: url(/upload/images/{{ $page->bg }}) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-color: rgba(0, 0, 0, 0.5);
                background-blend-mode: multiply;
            }
            .body {
                background-color: rgba(0, 0, 0, 0);
            }
            .form-control {
                border: 1px solid rgb(200, 202, 203);
            }
            .a-dark {
                color: #4da6f3 !important;
            }
            .a-dark:hover {
                color: #4e89bb !important;
                text-decoration: none;
            }
        </style>
    </head>
    <body class="body">
        <div class="container">
            <br>
            <div class="row text-white">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <p class="lead">
                        {{ $page->descriptor }}
                    </p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-xl-right text-lg-right text-md-right text-sm-right pr-1">
                    <p class="lead">
                        {{ $page->phone }}
                    </p>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="display-4 text-xl-center text-lg-center text-md-center text-sm-center text-xs-center text-white">
                        {{ $page->offer }}
                    </h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-12">
                    <br>
                    <p class="text-white">
                        {{ $page->legal }} Телефон: <a href="callto:{{ $page->phone }}" class="a-dark">{{ $page->phone }}</a>. Email: <a href="mailto:{{ $page->email }}" class="a-dark">{{ $page->email }}</a>. Дата обновления сайта: {{ date_format($page->updated_at, 'd.m.Y') }}. Сайт разработан <a href="/" class="a-dark">nitrolovsky.dev</a>.
                    </p>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    </body>
</html>
