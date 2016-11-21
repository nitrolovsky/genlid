<!DOCTYPE html>
<html lang="en" class="html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Play:400,700&amp;subset=cyrillic" rel="stylesheet">
        <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/docs.min.css">
        <link rel="stylesheet" href="/css/custom.css">
    </head>
    <body class="body">
        <nav class="navbar navbar-fixed-top navbar-dark bg-inverse sw">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                             <ul class="nav navbar-nav">
                                 <li class="nav-item active">
                                     <a class="nav-link" href="/pages/{{ $page->id }}">{{ $page->brand }}</a>
                                 </li>
                             </ul>
                            <span class="navbar-text float-xl-right text-white">
                                {{ $page->phone }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="text-xl-center">
                        {{ $page->descriptor }}
                    </h1>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-xl-6">
                    <div class="embed-responsive embed-responsive-16by9" id="video">
                        <iframe class="embed-responsive-item" src="{{ $page->video }}" allowfullscreen></iframe>
                    </div>
                    <br>
                    <p class="lead">
                        {{ $page->profit }}
                    </p>
                </div>
                <div class="col-xl-6">
                    <div class="card bg-faded sw">
                        <div class="card-block">
                            <div class="container">
                                <p class="lead text-xl-center">
                                    {{ $page->form_title }}
                                </p>
                                <hr>
                                <form action="/proposals" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="page_id" value="{{ $page->id }}">
                                    <div class="form-group row">
                                        <label for="name" class="col-xl-3 col-form-label">Имя</label>
                                        <div class="col-xl-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><span class="fa fa-fw fa-user"></span></div>
                                                <input type="text" class="form-control" id="name" placeholder="Александр Алексеевич" name="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-xl-3 col-form-label">Email</label>
                                        <div class="col-xl-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><span class="fa fa-fw fa-envelope-o"></span></div>
                                                <input type="email" class="form-control" id="email" placeholder="email@gmail.com" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-xl-3 col-form-label">Телефон</label>
                                        <div class="col-xl-9">
                                            <div class="input-group">
                                                <div class="input-group-addon"><span class="fa fa-fw fa-phone"></span></div>
                                                <input type="phone" class="form-control" id="phone" placeholder="8 929 110 65 44" name="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-xl-3 col-xl-9">
                                            <button type="submit" class="btn btn-primary btn-block">{{ $page->call_to_action }}&nbsp;<span class="fa fa-fw fa-long-arrow-right"></span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <div class="row text-muted">
                <div class="col-xl-12">
                    {{ $page->legal }} Телефон: <a href="callto:{{ $page->phone }}">{{ $page->phone }}</a>. Email: <a href="mailto:{{ $page->email }}">{{ $page->email }}</a>. Сайт разработан <a href="/">nitrolovsky.dev</a>.
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    </body>
</html>
