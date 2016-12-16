<!DOCTYPE html>
<html lang="en" class="html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="/css/docs.min.css">
        <link rel="stylesheet" href="/css/custom.css">
    </head>
    <body>
        @include('layouts.navbar')
        <section class="main-content">
            <div class="container">
                <br>
                <h1 class="display-4 text-xl-center text-lg-center text-md-center text-sm-center text-xs-center">
                    Создавайте видео-лендинги для тестирования ниши за 5 минут
                </h1>
                <br>
                <br>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="embed-responsive embed-responsive-16by9" id="video">
                            <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/y-74q-HEswI" allowfullscreen></iframe>
                        </div>
                        <br>
                        <p class="lead">
                            Тестирование 5 ниш за 1 вечер - это реально. Конверсия выше, чем у лендингов заказанных в веб-студии. Только самая суть вашего бизнеса, красиво оформленный лендинг в 3 вариантах дизайна. Без игр со шрифтами, цветами, тенями, расположением блоков. Просто, быстро, эффективно.
                        </p>
                    </div>
                    <div class="col-xl-4">
                        <div class="card bg-faded sw">
                            <div class="card-block">
                                <div class="container">
                                    <p class="lead text-xl-center text-lg-center text-md-center text-sm-center text-xs-center">
                                        Заполните форму для доступа к бесплатному тестовому периоду
                                    </p>
                                    <br>
                                    <form action="/proposals" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="page_id" value="1">
                                        <input type="hidden" name="template" value="a">
                                        <div class="form-group {{ !empty($errors->proposal->first('name')) ? 'has-danger' : ''}} {{ !empty(old('name')) ? 'has-success' : ''}}">
                                            <div class="">
                                                <input type="text" class="form-control {{ !empty($errors->proposal->first('name')) ? 'form-control-danger' : ''}} {{ !empty(old('name')) ? 'form-control-success' : ''}}" id="name" placeholder="Имя : Павел Нитроловский" name="name" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                        <div class="form-group {{ !empty($errors->proposal->first('email')) ? 'has-danger' : ''}} {{ !empty(old('email')) ? 'has-success' : ''}}">
                                            <div class="">
                                                <input type="email" class="form-control {{ !empty($errors->proposal->first('email')) ? 'form-control-danger' : ''}} {{ !empty(old('email')) ? 'form-control-success' : ''}}" id="email" placeholder="Email : nitrolovsky@gmail.com" name="email" value="{{ old('email') }}">
                                            </div>
                                        </div>
                                        <div class="form-group {{ !empty($errors->proposal->first('phone')) ? 'has-danger' : ''}} {{ !empty(old('phone')) ? 'has-success' : ''}}">
                                            <div class="">
                                                <input type="phone" class="form-control {{ !empty($errors->proposal->first('phone')) ? 'form-control-danger' : ''}} {{ !empty(old('phone')) ? 'form-control-success' : ''}}" id="phone" placeholder="Телефон : + 7 929 116 85 65" name="phone" value="{{ old('phone') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="">
                                                <button type="submit" class="btn btn-primary btn-block">Получить доступ&nbsp;<span class="fa fa-fw fa-paper-plane"></span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <br>
                <div class="container-fluid bg-faded text-muted">
                <div class="container py-1">
                    © 2016 Павел Нитроловский. г. Санкт-Петербург. Телефон: <a href="callto:8 (929) 116 85 65">8 (929) 116 85 65</a>. Email: <a href="mailto:nitrolovsky@gmail.com">nitrolovsky@gmail.com</a>.
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    </body>
</html>
