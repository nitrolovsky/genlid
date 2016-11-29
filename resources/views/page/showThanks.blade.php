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

            html, body {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            .parent {
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                overflow: auto;
            }

            .tableC {
                width: 100%;
                height: 100%;
                display: table;
            }

            .cell {
                display: table-cell;
                text-align: center;
                vertical-align: middle;
            }

            .block {
                display: inline-block;
            }

            .in-center {
                display: block;
                border: none;
            }

        </style>
    </head>
    
    <body class="body">
        <div class="parent">
            <div class="tableC">
                <div class="cell">
                    <div class="block">
                        <div class="container">
                            <h1 class="display-4 text-white in-center">
                                Спасибо за вашу заявку. Мы свяжемся с вами в ближайшее время.
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    </body>
</html>
