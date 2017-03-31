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
        <link rel="stylesheet" href="/css/docs.min.css">
        <link rel="stylesheet" href="/css/styleG.css">
        <link rel="stylesheet" href="/css/beautykitchen.css">
        <title>
            Студия маникюра и педикюра Beauty Kitchen
        </title>
    </head>
    <body class="bgimg-1">
        <style>
            .bgimg-1 {
                background: url("/files/images/beautykitchen/bg.jpg") no-repeat top center;
                background-size: cover;
                background-color: rgba(0, 0, 0, 0.5);
                background-blend-mode: overlay;
                color: white;
                height: 100%;
                min-height: 100%;
            }

            * { box-sizing: border-box; }
            .video-background {
              background: #000;
              position: fixed;
              top: 0; right: 0; bottom: 0; left: 0;
              z-index: -99;
            }
            .video-foreground,
            .video-background iframe {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              pointer-events: none;
            }
            #vidtop-content {
            	top: 0;
            	color: #fff;
            }
            .vid-info {
                position: absolute;
                top: 0;
                right: 0;
                width: 100%;
                background: rgba(0,0,0,0.3);
                color: #fff;
                padding: 1rem;

            }

            .vid-info a { display: block; color: #fff; text-decoration: none; background: rgba(0,0,0,0.5); transition: .6s background; border-bottom: none; margin: 1rem auto; text-align: center; }
            @media (min-aspect-ratio: 16/9) {
              .video-foreground { height: 300%; top: -100%; }
            }
            @media (max-aspect-ratio: 16/9) {
              .video-foreground { width: 300%; left: -100%; }
            }
            @media all and (max-width: 600px) {
            .vid-info { width: 50%; padding: .5rem; }
            .vid-info h1 { margin-bottom: .2rem; }
            }
            @media all and (max-width: 500px) {
            .vid-info .acronym { display: none; }
            }

        </style>

        <div class="video-background">
            <div class="video-foreground">
              <iframe src="https://www.youtube.com/embed/ut8o5W8HX3M?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=ut8o5W8HX3M" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>

        <div id="vidtop-content">
            <div class="vid-info">

        <div class="container-fluid p-0">
            <div class="container-fluid px-0">
                <div class="container pt-5">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                            <span class="h2 text-uppercase logo">
                                 Beauty Kitchen
                            </span><br>
                             Студия маникюра и педикюра
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                            <div class="hidden-md-up">
                                <br>
                            </div>
                            +7 952 288 71 13<br>
                            СПБ, Загородный проспект 16
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2 ">
                        <h1 class="h1 russo text-center my-0">
                            Сделай маникюр с покрытием гель-лак и получи три супер гарантии
                        </h1>
                    </div>
                </div>
            </div>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="my-0 bullets">
                            <div class="py-1 text-center">
                                Гарантия качества. Если вам не понравится результат - вернем вам деньги.
                            </div>
                            <div class="py-1 text-center">
                                Любые проблемы с покрытием устраним в течении двух недель бесплатно.
                            </div>
                            <div class="py-1 text-center">
                                Гарантия выгодной цены.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="embed-responsive embed-responsive-16by9 sw " id="video">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Mg9aSVFVNMo?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="container">
                            <div class="hidden-xl-up">
                                <br>
                            </div>
                            <h4 class="russo px-3 pb-3 text-center">
                                Узнай как сэкономить 300 рублей
                            </h4>
                            <form action="/proposals" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="source" value="detox">
                                <div class="form-group {{ !empty($errors->proposal->first('name')) ? 'has-danger' : ''}} {{ !empty(old('name')) ? 'has-success' : ''}}">
                                    <div class="">
                                        <input type="text" class="sw btn-circle form-control {{ !empty($errors->proposal->first('name')) ? 'form-control-danger' : ''}} {{ !empty(old('name')) ? 'form-control-success' : ''}}" id="name" placeholder="Имя" name="name" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="form-group {{ !empty($errors->proposal->first('email')) ? 'has-danger' : ''}} {{ !empty(old('email')) ? 'has-success' : ''}}">
                                    <div class="">
                                        <input type="email" class="sw btn-circle form-control {{ !empty($errors->proposal->first('email')) ? 'form-control-danger' : ''}} {{ !empty(old('email')) ? 'form-control-success' : ''}}" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-group {{ !empty($errors->proposal->first('email')) ? 'has-danger' : ''}} {{ !empty(old('email')) ? 'has-success' : ''}}">
                                    <div class="">
                                        <input type="email" class="sw btn-circle form-control {{ !empty($errors->proposal->first('email')) ? 'form-control-danger' : ''}} {{ !empty(old('email')) ? 'form-control-success' : ''}}" id="email" placeholder="Телефон" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <button type="submit" class="sw btn-circle btn btn-primary btn-block" onclick="yaCounter42928359.reachGoal('Proposal'); return true;" role="button">Узнать</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6 col-12">
                         © 2017 Студия маникюра и педикюра "Beauty Kitchen"
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6 col-12 text-xl-right text-lg-right text-md-right">
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
    </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
        </body>
    </html>
