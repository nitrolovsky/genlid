<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Play:400,700|Roboto+Slab:300,400,700&amp;subset=cyrillic" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/2017-02-28.css">
        <title>
            genlid.com Примеры сайтов
        </title>
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
        <div class="container padding-top">
            <div class="row">
                <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1 col-md-12 col-sm-12 col-12">
                    <h1 class="h2 russo pt-5">
                        Разработка landing pages с рентабельной конверсией от 35 000 рублей
                    </h1>
                    <ul class="h5 russo pt-3 pb-5">
                        <li class="py-1">Гарантирую заявки в течении 2 недель с запуска рекламы</li>
                        <li class="py-1">A/B тестирование 3 вариантов до рентабельной конверсии</li>
                        <li class="py-1">Хорошо отображаются на мобильных устройствах</li>
                        <li class="py-1">Уведомления с контактами клиентов на ваш email</li>
                        <li class="py-1">Настроенная аналитика в Яндекс Метрики и Google Analytics</li>
                        <li class="py-1">Текст в информационном стиле Максима Ильяхова</li>
                    </ul>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="http://genlid.com/pages/25/g" target="_blank">
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
                    <a href="http://genlid.com/pages/24/g" target="_blank">
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
                    <a href="http://genlid.com/pages/23/g" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-23.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Видеоролики для бизнеса увеличивающие продажи в 2 раза
                        </div>
                    </a>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="http://genlid.com/pages/22/g" target="_blank">
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
                    <a href="http://genlid.com/pages/21/g" target="_blank">
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
                    <a href="http://genlid.com/pages/20/g" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-20.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Создай свою сеть кофеен по франшизе Baggins coffee
                        </div>
                    </a>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="http://genlid.com/pages/19/g" target="_blank">
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
                    <a href="http://genlid.com/pages/18/g" target="_blank">
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
                    <a href="http://genlid.com/pages/17/g" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-17.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Программа комплексного развития бизнеса, для увеличения прибыли до 10 раз
                        </div>
                    </a>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="http://genlid.com/pages/16/g" target="_blank">
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
                    <a href="http://genlid.com/pages/15/g" target="_blank">
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
                    <a href="http://genlid.com/pages/14/g" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-14.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Вебинар "Подготовка к ЕГЭ. Русский язык" Урок 1
                        </div>
                    </a>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="http://genlid.com/pages/13/g" target="_blank">
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
                    <a href="http://genlid.com/pages/12/g" target="_blank">
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
                    <a href="http://genlid.com/pages/11/g" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-11.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Оптовые продажи орехов, сухофруктов и сладостей!
                        </div>
                    </a>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="http://genlid.com/pages/10/g" target="_blank">
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
                    <a href="http://genlid.com/pages/9/g" target="_blank">
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
                    <a href="http://genlid.com/pages/8/g" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-8.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            Купи здорового чихуахуа в Санкт-Петербурге напрямую у проверенного заводчика
                        </div>
                    </a>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <a href="http://genlid.com/pages/7/g" target="_blank">
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
                    <a href="http://genlid.com/pages/6/g" target="_blank">
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
                    <a href="http://genlid.com/pages/5/g" target="_blank">
                        <img src="/images/portfolio/genlid-primeri-rabot-5.jpg" class="img-fluid mx-auto d-block" alt="Примеры работ genlid.com генератор видео лендингов">
                        <div class="py-4">
                            8 октября. Бесплатный Мастер-класс "Продажи фитнес тренера х2"
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <hr>
            <div class="row small">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    2017 genlid.com. Санкт-Петербург, метро Василеостровская. Телефон +7 929 116 85 65. Email nitrolovsky@gmail.com. <a href="https://vk.com/nitrolovsky"target="_blank">Павел Нитроловский</a>.
                </div>
            </div>
            <br>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter42928359 = new Ya.Metrika({ id:42928359, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/42928359" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
        </body>
    </html>
