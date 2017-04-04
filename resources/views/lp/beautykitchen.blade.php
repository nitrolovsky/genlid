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
            Студия маникюра и педикюра Beauty Kitchen
        </title>
    </head>
    <body>
        <div class="bg-img">
            <div class="bg-overlay">
                <div class="container font">
                    <div class="row pt-4">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                            <span class="h2 text-uppercase font">
                                 Beauty Kitchen
                            </span><br>
                            <span class="descriptor">Студия маникюра и педикюра</span>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                            <div class="hidden-md-up">
                                <br>
                            </div>
                            <span class="phone">+7 952 288 71 13</span><br>
                            <span class="address">СПБ, Загородный проспект 16</span>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 offset-xl-1">
                            <h1 class="text-center my-0 weight-700">
                                Сделай маникюр с покрытием гель-лак и получи три супер гарантии
                            </h1>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 offset-xl-1">
                            <div class="my-0 text-center">
                                <h5 class="font">
                                    Гарантия качества. Если вам не понравится результат - вернем вам деньги.
                                </h5>
                                <h5 class="font">
                                    Любые проблемы с покрытием устраним в течении двух недель бесплатно.
                                </h5>
                                <h5 class="font">
                                    Гарантия выгодной цены.
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-xl-8 col-lg-8">
                            <div class="embed-responsive embed-responsive-16by9 sw" id="video">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Mg9aSVFVNMo?rel=0&showinfo=0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 offset-xl-0 offset-lg-0 offset-md-3">
                            <div class="hidden-lg-up">
                                <br>
                            </div>
                            <h3 class="px-3 pb-3 text-center weight-700">
                                Узнай как сэкономить 300 рублей
                            </h3>
                            <form action="/beautykitchen" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="">
                                        <input type="text" class="font black sw btn-circle form-control" id="name" placeholder="Имя" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <input type="text" class="font black sw btn-circle form-control" id="email" placeholder="Email" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <input type="text" class="font black sw btn-circle form-control" id="email" placeholder="Телефон" name="phone" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <button type="submit" class="font sw btn-circle btn btn-primary btn-block" role="button">Узнать</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row pt-5 pb-4">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6 col-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                             © 2017 Студия маникюра и педикюра "Beauty Kitchen"
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6 col-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                            <div class="hidden-md-up">
                                <br>
                            </div>
                            +7 952 288 71 13<br>
                            СПБ, Загородный проспект 16
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>
