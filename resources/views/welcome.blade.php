<!DOCTYPE html>
<html lang="en" class="html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Play:400,700&amp;subset=cyrillic" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/docs.min.css">
        <link rel="stylesheet" href="/css/custom.css">
        <link rel="stylesheet" href="/vendor/lightGallery-master/dist/css/lightgallery.css">
        <link rel="stylesheet" href="/vendor/lightGallery-master/dist/css/lg-transitions.css">
        <link rel="stylesheet" href="/vendor/lightGallery-master/dist/css/lg-fb-comment-box.css">
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
                                    <a class="nav-link" href="#">Интернет-магазин <span class="sr-only">(current)</span></a>
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
                <li class="nav-item">
                    <a href="#" class="nav-link">Роликовая пилка</a>
                </li>
                <li class="nav-item">
                    <a href="#video" class="nav-link">Видео</a>
                </li>
                <li class="nav-item">
                    <a href="#gallery" class="nav-link">Фотогалерея</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Характеристики</a>
                </li>
                <li class="nav-item">
                    <a href="#comments" class="nav-link">Комментарии</a>
                </li>
                <li class="nav-item">
                    <a href="#comments" class="nav-link">Добавить в заказ</a>
                </li>
                <li class="nav-item">
                    <a href="#comments" class="nav-link">Купить в 1 клик</a>
                </li>
            </ul>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1 class="display-4">
                        Роликовая пилка Scholl Velvet Smooth Wet & Dry
                    </h1>
                    <br>
                    <p class="lead">
                        Водонепроницаемая, подходит для использования в душе. Аккумулятор и зарядное устройство. Электрическая роликовая пилка для удаления огрубевшей кожи стоп.
                    </p>
                    <br>
                    <br>
                    <div class="embed-responsive embed-responsive-16by9" id="video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2PnrVJPxpKY" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <img class="img-fluid" src="/images/scholl.jpg">
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <h5>
                                Аккумуляторная роликовая пилка Scholl
                            </h5>
                            <p class="lead">
                                1. Водонепроницаемая роликовая пилка.
                                <br>
                                2. Роликовая насадка Velvet Smooth wet & dry.
                                <br>
                                3. Зарядное устройство.
                                <br>
                                4. Инструкция.
                                <br>
                                5. Аккумулятор.
                            </p>
                            <h5>
                                3 990 р
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
                        <a href="../images/1.jpg" data-sub-html="В одних садах цветёт миндаль, в других метёт метель.">
                            <img src="../images/1.jpg" class="img-fluid col-xl-3 px-0 cm-gallery">
                        </a>
                        <a href="../images/2.jpg">
                            <img src="../images/2.jpg" class="img-fluid col-xl-3 px-0 cm-gallery">
                        </a>
                        <a href="../images/3.jpg">
                            <img src="../images/3.jpg" class="img-fluid col-xl-3 px-0 cm-gallery">
                        </a>
                        <a href="../images/1.jpg">
                            <img src="../images/1.jpg" class="img-fluid col-xl-3 px-0 cm-gallery">
                        </a>
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
                    <h2 class="display-4">
                        Характеристики
                    </h2>
                    <br>
                    <br>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td width="30%">
                                    Размер
                                </td>
                                <td width="70%">
                                    Высота - 104 см, длина - 105 см, глубина - 3 см
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Вес
                                </td>
                                <td>
                                    103 кг
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Комплектация
                                </td>
                                <td>
                                    Шнур, розетка
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Назначение
                                </td>
                                <td>
                                    Электрическая роликовая пилка для удаления огрубевшей кожи стоп
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Категория
                                </td>
                                <td>
                                    Аппарат для маникюра и педикюра
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Страна изготовитель
                                </td>
                                <td>
                                    Китай
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Год выпуска
                                </td>
                                <td>
                                    2016
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Вид питания
                                </td>
                                <td>
                                    Встроенный аккумулятор
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Комплектация
                                </td>
                                <td>
                                    Водонепроницаемая роликовая пилка с аккумулятором, роликовая насадка Velvet Smooth wet & dry, кабель, инструкция
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Размер упаковки (ДхШхВ)
                                </td>
                                <td>
                                    20 см x 20 см x 6.5 см
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Гарантия
                                </td>
                                <td>
                                    1 год
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Вес в упаковке
                                </td>
                                <td>
                                    415 грамм
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
