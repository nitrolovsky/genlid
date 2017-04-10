<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/lp.css">
        <title>
            genlid.com Примеры сайтов
        </title>
        <meta name="google-site-verification" content="3CsAIYTeBAJV19YePsvg-G1vCO8onV57WjmYJ_RVVvM" />
    </head>
    <body>
        <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse sw">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/">genlid</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
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
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/all">Все лендинги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/articles">Статьи</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <style>
        .bgimage-first {
            background: url(/images/lendingi/lendingi-7.jpg) no-repeat center center;
            background-size: cover;
            background-color: rgba(0, 0, 0, 0.5);
            background-blend-mode: overlay;
            color: white;
        }
        </style>

        <div class="container-fluid p-0 bgimage-first pt-5">
            <div class="container-fluid px-0">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                            <div class="row">
                                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <span class="h1 font">GENLID</span><br>
                                    Маркетинговое агентство
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center font">
                            <div class="hidden-md-up">
                                <br>
                            </div>
                            +7 929 116 85 65<br>
                            nitrolovsky@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1 col-md-12 col-sm-12 col-12">
                        <h1 class="h2 font text-center mb-0">
                            В 2 раза больше клиентов при той же рекламной кампании с помощью landing pages
                        </h1>
                        <div class="text-center font pt-5 bullets">
                            От 5 000 рублей в течении 3 дней<br>
                            Хорошо отображаются на мобильных устройствах<br>
                            Контакты клиентов приходят на email<br>
                            Настроенная аналитика в Яндекс Метрики и Google Analytics<br>
                            Редактура текста в информационном стиле
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row">
                    <form class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12" action="/proposals" method="POST">
                        <div class="form-inline">
                            {{ csrf_field() }}
                            <input type="hidden" name="product_url" value="lendingi">
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
                                    Отправить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <h1 class="h2 russo text-center">
                Посмотрите примеры Landing pages пуль на основе видео
            </h1>
        </div>

        <div class="container">
            <div class="row pb-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="http://genlid.com/pages/25/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-25.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Высоковакуумная эталонная установка для поверки вакуумметров
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="hidden-sm-up">
                        <br>
                        <br>
                    </div>
                    <a href="http://genlid.com/pages/24/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-24.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Взыскание задолжности с юридических лиц
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="hidden-sm-up">
                        <br>
                        <br>
                    </div>
                    <a href="http://genlid.com/pages/23/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-23.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Видеоролики для бизнеса увеличивающие продажи в 2 раза
                        </div>
                    </a>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="http://genlid.com/pages/22/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-22.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Эконатуральный торт на заказ по вашим пожеланиям за 1500 рублей 1 килограмм
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="hidden-sm-up">
                        <br>
                        <br>
                    </div>
                    <a href="http://genlid.com/pages/21/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-21.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            28 февраля в 19:00 вебинар "Как составить документы на победу в тендере".
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="hidden-sm-up">
                        <br>
                        <br>
                    </div>
                    <a href="http://genlid.com/pages/20/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-20.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Создай свою сеть кофеен по франшизе Baggins coffee
                        </div>
                    </a>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="http://genlid.com/pages/19/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-19.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Поставка пленок БОПП и СПП для фасовки и упаковки по всей России
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="hidden-sm-up">
                        <br>
                        <br>
                    </div>
                    <a href="http://genlid.com/pages/18/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-18.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Реставрация обуви - удаление потертостей, мелких царапин, пятен, срывов красителя 590 рублей
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="hidden-sm-up">
                        <br>
                        <br>
                    </div>
                    <a href="http://genlid.com/pages/17/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-17.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Программа комплексного развития бизнеса, для увеличения прибыли до 10 раз
                        </div>
                    </a>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="http://genlid.com/pages/16/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-16.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Увеличьте продажи с видео-лендингом в 2 раза за 5000 рублей
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="hidden-sm-up">
                        <br>
                        <br>
                    </div>
                    <a href="http://genlid.com/pages/15/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-15.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Займитесь фитнесом вместе с известными инструкторами г. Чебоксары в "Цитрусе" ЮЗР и СЗР
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="hidden-sm-up">
                        <br>
                        <br>
                    </div>
                    <a href="http://genlid.com/pages/14/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-14.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Вебинар "Подготовка к ЕГЭ. Русский язык" Урок 1
                        </div>
                    </a>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="http://genlid.com/pages/13/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-13.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Трикотажная ткань оптом
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="hidden-sm-up">
                        <br>
                        <br>
                    </div>
                    <a href="http://genlid.com/pages/12/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-12.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Геодезия и картография в Калининграде
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="hidden-sm-up">
                        <br>
                        <br>
                    </div>
                    <a href="http://genlid.com/pages/11/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-11.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Оптовые продажи орехов, сухофруктов и сладостей!
                        </div>
                    </a>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="http://genlid.com/pages/10/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-10.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Сэкономьте 46250 рублей, купив бытовку напрямую от производителя
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="hidden-sm-up">
                        <br>
                        <br>
                    </div>
                    <a href="http://genlid.com/pages/9/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-9.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Лучший способ приучить ребёнка пить воду, в игровой форме
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="hidden-sm-up">
                        <br>
                        <br>
                    </div>
                    <a href="http://genlid.com/pages/8/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-8.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Купи здорового чихуахуа в Санкт-Петербурге напрямую у проверенного заводчика
                        </div>
                    </a>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="http://genlid.com/pages/7/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-7.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Корм для домашних животных из Франции по России
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="hidden-sm-up">
                        <br>
                        <br>
                    </div>
                    <a href="http://genlid.com/pages/6/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-6.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Хотите стать мастером татуажа?
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="hidden-sm-up">
                        <br>
                        <br>
                    </div>
                    <a href="http://genlid.com/pages/5/h" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-5.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            8 октября. Бесплатный Мастер-класс "Продажи фитнес тренера х2"
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <style>
        .bg-img-form {
            background: url(/images/lendingi/lendingi-10.jpg) no-repeat top center;
            background-size: cover;
            background-color: rgba(0, 0, 0, 0.5);
            background-blend-mode: overlay;
            color: white;
        }
        </style>
        <div class="container-fluid py-5 bg-img-form" id="request">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12 col-xs-12 offset-xl-4 offset-lg-3 offset-md-2">
                        <div class="mb-0">
                            <h4 class="pb-3 russo text-center">
                                Бесплатная консультация и прототип вашего лендинга
                            </h4>
                            <form action="/orders" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="product_url" value="lendingi">
                                <input type="hidden" name="type" value="Order from article">
                                <div class="form-group {{ !empty($errors->orders->first('email')) ? 'has-danger' : ''}} {{ !empty(old('email')) ? 'has-success' : ''}}">
                                    <input type="email" class="sw form-control btn-circle {{ !empty($errors->orders->first('email')) ? 'form-control-danger' : ''}} {{ !empty(old('email')) ? 'form-control-success' : ''}}" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group {{ !empty($errors->orders->first('phone')) ? 'has-danger' : ''}} {{ !empty(old('phone')) ? 'has-success' : ''}}">
                                    <input type="phone" class="sw form-control btn-circle {{ !empty($errors->orders->first('phone')) ? 'form-control-danger' : ''}} {{ !empty(old('phone')) ? 'form-control-success' : ''}}" id="phone" placeholder="Телефон" name="phone" value="{{ old('phone') }}">
                                </div>
                                <button type="submit" class="sw btn btn-primary btn-block btn-circle" onclick="yaCounter42033909.reachGoal('Proposal'); return true;">Отправить</button>
                            </form>
                            <div class="small pt-3 px-3">
                                Ваши персональные данные защищены политикой конфиденциальности.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-5">
                <div class="row small">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        © 2017 genlid.com Все права защищены
                        <br>
                        <a href="/files/politika-confidencialnosti.pdf" target="_blank" class="a-f">Политика конфиденциальности</a>
                        <br>
                        Санкт-Петербург<br>
                        метро Василеостровская
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-left">
                        <div class="hidden-md-up">
                            <br>
                        </div>
                        Телефон <a href="callto:++79291168565" class="a-f">+7 929 116 85 65</a><br>
                        Email <a href="nitrolovsky@gmail.com" class="a-f">nitrolovsky@gmail.com</a><br>
                        Дата обновления сайта 07.03.2017<br>
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
