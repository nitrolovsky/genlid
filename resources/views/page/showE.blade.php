<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="/css/docs.min.css">
        <link rel="stylesheet" href="/css/styleC.css">
        <style>
            html {
                background: url(/upload/images/{{ $page->bg }}) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;

                background-blend-mode: overlay;
            }
        </style>
        <title>
            {{ $page->descriptor }}
        </title>
    </head>
    <body>
        <section class="main-content">
            <div class="container">
                <br>
                <div class="row text-white">
                    <div class="col-xl-6 col-lg-6 col-md-6 text-xl-left text-lg-left text-md-left text-sm-center text-xs-center">
                        <p class="lead">
                            {{ $page->descriptor }}
                        </p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 text-xl-right text-lg-right text-md-right text-sm-center text-xs-center pr-1">
                        <p class="lead">
                            {{ $page->phone }}
                        </p>
                    </div>
                </div>
                <br>
                <br>
                <h1 class="display-4 text-xl-center text-lg-center text-md-center text-sm-center text-xs-center text-white">
                    {{ $page->offer }}
                </h1>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="embed-responsive embed-responsive-16by9" id="video">
                            <iframe class="embed-responsive-item" src="{{ $page->video }}" allowfullscreen></iframe>
                        </div>
                        <br>
                        <p class="lead text-white">
                            {{ $page->details }}
                        </p>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class=" text-white">
                            <div class="">
                                <div class="container">
                                    <p class="lead text-xl-center text-lg-center text-md-center text-sm-center text-xs-center">
                                        {{ $page->form_title }}
                                    </p>
                                    <br>
                                    <form action="/proposals" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="page_id" value="{{ $page->id }}">
                                        <input type="hidden" name="template" value="c">
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
                                                <button type="submit" class="btn btn-primary btn-block">{{ $page->call_to_action }}&nbsp;<span class="fa fa-fw fa-paper-plane"></span></button>
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
            <div class="container-fluid">
                <div class="container py-1 text-white">
                    {{ $page->legal }} Телефон: <a href="callto:{{ $page->phone }}" class="a-dark">{{ $page->phone }}</a>. Email: <a href="mailto:{{ $page->email }}" class="a-dark">{{ $page->email }}</a>. Дата обновления сайта: {{ date_format($page->updated_at, 'd.m.Y') }}. Сайт разработан <a href="http://nitrolovsky.com" class="a-dark">nitrolovsky.com</a>.
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    </body>
</html>
