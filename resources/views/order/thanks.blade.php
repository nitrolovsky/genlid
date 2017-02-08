<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Russo+One&amp;subset=cyrillic" rel="stylesheet">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/article.css">
        <title>
            {{ $product["title"] or "" }}
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
    </head>
    <body>
        <div class="container-fluid px-0 bg-inverse text-white sw">
            <div class="container py-3">
                <div class="row small">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        GENLID
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right">
                        <div class="hidden-md-up">
                            <br>
                        </div>
                        8 929 116 85 65
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <p class="py-5">
                Cпасибо за заявку. Специалист свяжется с вами в течении 15 минут по номеру <b>{{ $order->phone }}</b>. Обмен документами по email <b>{{ $order->email }}</b>.
            </p>
        </div>

        <div class="container">
            <hr>
            <div class="row small">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    © GENLID 2017 Все права защищены
                    <br>
                    <a href="/files/politika-confidencialnosti.pdf" target="_blank">Политика конфиденциальности</a>
                    <br>
                    Юридический адрес 117545, Санкт-Петербург, Невский проспект, д. 1, офис 103
                    ИНН 7726338554
                    КПП 772601001
                    ОГРН 1157746406850
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hidden-md-up">
                        <br>
                    </div>
                    Дата обновления сайта 08.02.2017
                    <br>
                    Сайт разработал <a href="https://vk.com/id327409638">Pavel Nitrolovsky</a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hidden-md-up">
                        <br>
                    </div>
                    Телефон <a href="callto:8 929 116 85 65">8 929 116 85 65</a><br>
                    Email <a href="mailto:nitrolovsky@gmail.com">nitrolovsky@gmail.com</a><br>
                </div>
            </div>
            <br>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/js/app.js"></script>
        <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter42033909 = new Ya.Metrika({ id:42033909, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ecommerce:"dataLayer" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/42033909" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
    </body>
</html>
