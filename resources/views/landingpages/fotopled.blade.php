<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Play:400,700|Roboto+Slab:300,400,700&amp;subset=cyrillic" rel="stylesheet">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/fotopled.css">
        <title>
            Фотоплед Печать на пледах
        </title>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-89666787-1', 'auto');
          ga('require', 'displayfeatures');
          ga('send', 'pageview');
        </script>
        <style>
        .bgimage-first {
            background: url(/images/fotopled/fotopled-7.jpg) no-repeat bottom center;
            background-size: cover;
            background-attachment: fixed;
            background-color: rgba(0, 0, 0, 0.5);
            background-blend-mode: overlay;
            color: white;
        }
        .btn-circle {
            border-radius: 2rem !important;
        }
        </style>
    </head>
    <body>
        <div class="container-fluid p-0 bgimage-first">
            <div class="container-fluid px-0">
                <div class="container pt-5">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                            <h5 class="russo py-0 my-0">
                                Kunjut
                            </h5>
                            Фабрика по печати на ткани
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                            <div class="hidden-md-up">
                                <br>
                            </div>
                            8 800 777 18 09
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                        <h1 class="h2 russo text-center pb-5 m-0">
                            Фотопечать на пледе фотографий, картинок, логотипов и иллюстраций от 1995 рублей
                        </h1>
                        <ul class="h5 russo">
                            <li class="pb-1">Доставляем по всей России с 2009 года</li>
                            <li class="py-1">Свое швейное производство и дизайн-студия</li>
                            <li class="pt-1">Срок производства 4 дня</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row">
                    <form class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12" action="/proposals" method="POST">
                        <div class="form-inline">
                            {{ csrf_field() }}
                            <input type="hidden" name="product_url" value="fotopled">
                            <input type="hidden" name="type" value="Order from article">
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="form-group {{ !empty($errors->orders->first('email')) ? 'has-danger' : ''}} {{ !empty(old('email')) ? 'has-success' : ''}}">
                                    <input type="email" class="sw form-control col-12 btn-circle {{ !empty($errors->orders->first('email')) ? 'form-control-danger' : ''}} {{ !empty(old('email')) ? 'form-control-success' : ''}}" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="form-group {{ !empty($errors->orders->first('phone')) ? 'has-danger' : ''}} {{ !empty(old('phone')) ? 'has-success' : ''}}">
                                    <input type="phone" class="sw form-control col-12 btn-circle {{ !empty($errors->orders->first('phone')) ? 'form-control-danger' : ''}} {{ !empty(old('phone')) ? 'form-control-success' : ''}}" id="phone" placeholder="Телефон" name="phone" value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <button type="submit" class="sw btn btn-primary btn-block btn-circle" onclick="yaCounter42033909.reachGoal('OrderByPhone'); return true;">
                                    Заказать
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="{{ $bg or '' }}">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                        <h2 class="russo text-center">
                            8 лет успешного опыта
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-0">
                <img src="/images/fotopled/fotopled-10.jpg" class="img-fluid mx-auto d-block" alt="/images/imperium-stroy/remont-otdelka-kvartir-spb-fotografiya-8.jpg">
                <div class="container text-center">
                    Фотопечать коллажа из фотографий путешествия по Тенерифе в 2016 году
                </div>
            </div>
            <div class="container pb-5">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                        <h4 class="russo pt-4">
                            Что мы можем напечатать
                        </h4>
                        <div class="pt-3">
                            Плед с любой фотографией: любимого героя, близких людей, коллаж из фотографий.<br>
                            Плед с любым рисунком ребенка, любимая иллюстрация, картина.<br>
                            Плед с любым принтом для дизайнеров и декораторов.<br>
                            Плед с корпоративным дизайном.
                        </div>
                        <div class="text-center pt-4">
                            <a href="#request" class="btn btn-primary  btn-circle">
                                Заказать фотоплед
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-faded">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                        <h2 class="russo text-center">
                            Плед из флиса теплый и приятный на ощупь
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-0">
                <img src="/images/fotopled/fotopled-5.jpg" class="img-fluid mx-auto d-block" alt="/images/imperium-stroy/remont-otdelka-kvartir-spb-fotografiya-8.jpg">
                <div class="container text-center">
                    Фотография семейного фотопледа
                </div>
            </div>
            <div class="container pb-5">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                        <h4 class="russo pt-4">
                            Как печатаются пледы
                        </h4>
                        <div class="pt-3">
                            Сначала на специальной бумаге печатается картинка. Затем под воздействием температуры 210 градусов изображение переносится с бумаги на мягкий флис. Чернила глубоко проникают в структуру флиса, не ощущаются тактильно и не выстирываются. Печатать можно абсолютно любые изображения: фотографии, фотоколлажи, рисунки.
                        </div>
                        <div class="text-center pt-4">
                            <a href="#request" class="btn btn-primary  btn-circle">
                                Заказать фотоплед
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
        .bg-img-form {
            background: url(/images/fotopled/fotopled-6.jpg) no-repeat top center;
            background-size: cover;
            background-attachment: fixed;
            background-color: rgba(0, 0, 0, 0.5);
            background-blend-mode: overlay;
            color: white;
        }
        </style>
        <div class="container-fluid py-5 bg-img-form" id="request">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 offset-xl-3 offset-lg-3 offset-md-2">
                        <div class="mb-0">
                            <h4 class="pb-3 russo">
                                Получите каталог с примерами красивых фотопледов и подробной информацией
                            </h4>
                            <form action="/orders" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="product_url" value="fotopled">
                                <input type="hidden" name="type" value="Order from article">
                                <div class="form-group {{ !empty($errors->orders->first('email')) ? 'has-danger' : ''}} {{ !empty(old('email')) ? 'has-success' : ''}}">
                                    <input type="email" class="form-control btn-circle {{ !empty($errors->orders->first('email')) ? 'form-control-danger' : ''}} {{ !empty(old('email')) ? 'form-control-success' : ''}}" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group {{ !empty($errors->orders->first('phone')) ? 'has-danger' : ''}} {{ !empty(old('phone')) ? 'has-success' : ''}}">
                                    <input type="phone" class="form-control btn-circle {{ !empty($errors->orders->first('phone')) ? 'form-control-danger' : ''}} {{ !empty(old('phone')) ? 'form-control-success' : ''}}" id="phone" placeholder="Телефон" name="phone" value="{{ old('phone') }}">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block btn-circle" onclick="yaCounter42033909.reachGoal('OrderByPhone'); return true;">Получить каталог</button>
                            </form>
                            <div class="small pt-3">
                                Ваши персональные данные защищены политикой конфиденциальности. На электронную почту отправляются письма с согласия пользователя. Телефон для технической поддержки и помощи менеджером.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-5">
                <div class="row small">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        © 2017 Kunjut Все права защищены
                        <br>
                        <a href="/files/politika-confidencialnosti.pdf" target="_blank" class="a-f">Политика конфиденциальности</a>
                        <br>
                        Санкт-Петербург, проспект Энгельса дом 150 литер Б
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-left">
                        <div class="hidden-md-up">
                            <br>
                        </div>
                        Телефон <a href="callto:8 812 956 50 24" class="a-f">8 (812) 956-50-24</a><br>
                        Email <a href="zakaz@kunjut.com" class="a-f">zakaz@kunjut.com</a><br>
                        Дата обновления сайта 05.03.2017<br>
                        Сайт разработал <a href="https://vk.com/id327409638" class="a-f" target="_blank">Pavel Nitrolovsky</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter42928359 = new Ya.Metrika({ id:42928359, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/42928359" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
    </body>
</html>
