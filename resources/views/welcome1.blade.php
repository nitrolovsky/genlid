<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="/css/docs.min.css">
        <link rel="stylesheet" href="/vendor/lightGallery-master/dist/css/lightgallery.css">
        <link rel="stylesheet" href="/css/custom.css">
        <title>
            {{ $data['title'] }}
        </title>
        <style>
            .display-4 {
                font-size: 3rem;
            }
            body {
                padding-top: 50px;
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
                            <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">{{ $data['description'] }} <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            Каталог
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            Заказ
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            Войти
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <div>
            </nav>
        </header>
        <div class="container">
            <br>
            <br>
            <h1 class="display-4">
                {{ $data['h1'] }}
            </h1>
            <br>
            <br>
            <div class="row">
                <div class="col-xl-8">
                    <div class="embed-responsive embed-responsive-16by9" id="video">
                        <iframe class="embed-responsive-item" src="{{ $data['video'] }}" allowfullscreen></iframe>
                    </div>

                </div>
                <div class="col-lg-4">

                    <p class="lead">
                        {{ $data['h1-sub'] }}
                    </p>

                    <p class="lead">
                        <b>
                            {{ $data['price'] }}
                        </b>
                    </p>
                    <br>
                            <div class="card card-block bg-faded sw">

                    <div class="form">
                        <div class="form-group row">
                            <label for="example-number-input" class="col-xl-6 col-form-label">Количество</label>
                            <div class="col-xl-6">
                                <input class="form-control" type="number" min="1" value="1" id="example-number-input">
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success btn-block">Добавить в заказ</a>
                    <br>
                    <button type="button" class="btn btn-primary">Заказать по телефону</button>
                    <br>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xl-6">
                    <div id="lightgallery">
                        @foreach ($data['gallery'] as $image)
                            <a href="{{ $image['src'] }}" data-sub-html="{{ $image['alt'] }}">
                                <img src="{{ $image['src'] }}" class="img-fluid col-xl-3 px-0 cm-gallery">
                            </a>
                        @endforeach
                    </div>
                    <br>
                    <table class="table">
                        <tbody>
                            @foreach ($data['properties'] as $propertie)
                                <tr class="row">
                                    <td class="col-xl-6">
                                        {{ $propertie['name'] }}
                                    </td>
                                    <td class="col-xl-6">
                                        {{ $propertie['value'] }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-xl-6">
                    <img src="/images/comm_vkontakte.jpg" class="img-fluid">
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#lightgallery").lightGallery({
                    speed: 0
                });
            });
        </script>
        <script src="/vendor/lightGallery-master/dist/js/jquery.justifiedGallery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
        <script src="/vendor/lightGallery-master/dist/js/lightgallery.js"></script>
        <script src="/vendor/lightGallery-master/demo/js/lg-thumbnail.js"></script>
        <script src="/vendor/lightGallery-master/demo/js/lg-autoplay.js"></script>
        <script src="/vendor/lightGallery-master/demo/js/lg-video.js"></script>
        <script src="/vendor/lightGallery-master/demo/js/lg-fullscreen.js"></script>
        <script src="/vendor/lightGallery-master/demo/js/lg-zoom.js"></script>
        <script src="/vendor/lightGallery-master/demo/js/lg-hash.js"></script>
        <script src="/vendor/lightGallery-master/demo/js/lg-share.js"></script>
    </body>
</html>
