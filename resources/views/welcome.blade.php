<!DOCTYPE html>
<html lang="en" class="html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Play:400,700&amp;subset=cyrillic" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/docs.min.css">
        <link rel="stylesheet" href="/vendor/lightGallery-master/dist/css/lightgallery.css">
        <link rel="stylesheet" href="/css/custom.css">
    </head>
    <body class="body" data-spy="scroll" data-target="#navbar-example">
        <nav class="navbar navbar-fixed-top navbar-light bg-faded">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
                        <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">{{ $data['description'] }} <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <div>
        </nav>
        <div class="bd-sidebar pos-f-t cm-top hidden-lg-down col-xl-2" id="navbar-example">
            <ul class="nav">
                <li class="nav-item {{ Request::is('user/login') ? 'active' : '' }}">
                    <a href="/user/login" class="nav-link">Войти</a>
                </li>
                <li class="nav-item {{ Request::is('user/create') ? 'active' : ''}}">
                    <a href="/user/create" class="nav-link">Регистрация</a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="#" class="nav-link">Корзина</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Доставка</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Оплата</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Оформить заказ</a>
                </li>
                <hr>
                @if (isset($data['menu']))
                    @foreach ($data['menu'] as $menu)
                        <li class="nav-item">
                            <a href="{{ $menu['href'] }}" class="nav-link">{{ $menu['text'] }}</a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        <div id="start">
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1 class="display-4">
                        {{ $data['h1'] }}
                    </h1>
                    <br>
                    <p class="lead">
                        {{ $data['h1-sub'] }}
                    </p>
                    <div id="video"></div>
                    <br>
                    <br>
                    <br>
                    
                    <div class="embed-responsive embed-responsive-16by9" id="video">
                        <iframe class="embed-responsive-item" src="{{ $data['video'] }}" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <img class="img-fluid" src="{{ $data['form-image'] }}">
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <h5>
                                {{ $data['form-title']  }}
                            </h5>
                            <p class="lead">
                                @foreach ($data['form-bullet'] as $formBullet)
                                    {{ $formBullet }}<br>
                                @endforeach
                            </p>
                            <h5>
                                {{ $data['price'] }}
                            </h5>
                            <br>
                            <div class="form">
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-xl-6 col-form-label">Количество</label>
                                    <div class="col-xl-6">
                                        <input class="form-control" type="number" value="1" id="example-number-input">
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-success">Добавить в заказ</a>
                            <button type="button" class="btn btn-primary">Купить в 1 клик</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if (isset($data['gallery']))
            <div id="gallery"></div>
            <br>
            <br>
            <br>
            <br>
            <div class="container" id="gallery">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h2 class="display-4">
                            Фотогалерея
                        </h2>
                        <br>
                        <br>
                        <div id="lightgallery">
                            @foreach ($data['gallery'] as $image)
                                <a href="{{ $image['src'] }}" data-sub-html="{{ $image['alt'] }}">
                                    <img src="{{ $image['src'] }}" class="img-fluid col-xl-3 px-0 cm-gallery">
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if (isset($data['properties']))
            <div id="properties"></div>
            <br>
            <br>
            <br>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h2 class="display-4">
                            Характеристики
                        </h2>
                        <br>
                        <br>
                        <table class="table">
                            <tbody>
                                @foreach ($data['properties'] as $propertie)
                                    <tr>
                                        <td width="30%">
                                            {{ $propertie['name'] }}
                                        </td>
                                        <td width="70%">
                                            {{ $propertie['value'] }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
        <br>
        <br>
        <br>
        <br>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <span class="text-muted">Place sticky footer content here.</span>
                    </div>
                </div>
            </div>
        </footer>
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
