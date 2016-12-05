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
        <link rel="image_src" href="/images/screenshot-nitrolovsky.com-2016-12-05-17-41-45.png">
        <meta property="og:image" content="/images/screenshot-nitrolovsky.com-2016-12-05-17-41-45.png">
    </head>
    <body>
        @include('layouts.navbar')
        <section class="main-content">
            <div class="container">
                <br>
                <h1 class="display-4 text-xl-center text-lg-center text-md-center text-sm-center text-xs-center">
                    Сгенерируйте видео-лендинг в 3 вариантах дизайна за 5 минут.
                </h1>
                <br>
                <br>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="embed-responsive embed-responsive-16by9" id="video">
                            <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/vKR4mNpgpR8" allowfullscreen></iframe>
                        </div>
                        <br>
                        <p class="lead">
                            Отразите суть вашего бизнеса в 1 экран с высокой конверсией.
                        </p>
                    </div>
                    <div class="col-xl-6">
                        <div class="card bg-faded sw">
                            <div class="card-block">
                                <div class="container">
                                    <p class="lead text-xl-center text-lg-center text-md-center text-sm-center text-xs-center">
                                        Заполните форму и вы получите доступ к бесплатному тестовому периоду сервиса по генерации видео-лендингов
                                    </p>
                                    <br>
                                    <form>
                                        <div class="form-group row {{ !empty($errors->proposal->first('name')) ? 'has-danger' : ''}} {{ !empty(old('name')) ? 'has-success' : ''}}">
                                            <label for="name" class="col-xl-3 col-lg-3 col-md-3 col-form-label form-control-label">Имя</label>
                                            <div class="col-xl-9 col-lg-9 col-md-9">
                                                <input type="text" class="form-control {{ !empty($errors->proposal->first('name')) ? 'form-control-danger' : ''}} {{ !empty(old('name')) ? 'form-control-success' : ''}}" id="name" placeholder="Павел Нитроловский" name="name" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row {{ !empty($errors->proposal->first('email')) ? 'has-danger' : ''}} {{ !empty(old('email')) ? 'has-success' : ''}}">
                                            <label for="email" class="col-xl-3 col-lg-3 col-md-3 col-form-label form-control-label">Email</label>
                                            <div class="col-xl-9 col-lg-9 col-md-9">
                                                <input type="email" class="form-control {{ !empty($errors->proposal->first('email')) ? 'form-control-danger' : ''}} {{ !empty(old('email')) ? 'form-control-success' : ''}}" id="email" placeholder="nitrolovsky@gmail.com" name="email" value="{{ old('email') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row {{ !empty($errors->proposal->first('phone')) ? 'has-danger' : ''}} {{ !empty(old('phone')) ? 'has-success' : ''}}">
                                            <label for="phone" class="col-xl-3 col-lg-3 col-md-3 col-form-label form-control-label">Телефон</label>
                                            <div class="col-xl-9 col-lg-9 col-md-9">
                                                <input type="phone" class="form-control {{ !empty($errors->proposal->first('phone')) ? 'form-control-danger' : ''}} {{ !empty(old('phone')) ? 'form-control-success' : ''}}" id="phone" placeholder="+ 7 929 116 85 65" name="phone" value="{{ old('phone') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-xl-3 col-xl-9 offset-lg-3 col-lg-9 offset-md-3 col-md-9">
                                                <button type="submit" class="btn btn-primary btn-block">Получить приглашение&nbsp;<span class="fa fa-fw fa-paper-plane"></span></button>
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
