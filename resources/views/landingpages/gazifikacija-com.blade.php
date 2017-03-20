<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Scada:400,700" rel="stylesheet">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/article.css">
        <link rel="stylesheet" href="/css/gazifikacija-com.css">
        <title>
            Газификация частного дома в Санкт-Петербурге и Ленинградской области
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




<style>
.bgimage-first {
    background: url(/images/gazifikaciya-3/gazifikaciya-fotografiya-7.jpg) no-repeat bottom center;
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
<div class="container-fluid p-0 bgimage-first">
    <div class="container-fluid px-0">
        <div class="container py-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <img src="/images/gazifikaciya-3/gazifikaciya-logo.png" class="img-fluid">
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            ООО "Альтаир"<br>
                            Газификация домов и предприятий<br>в Санкт-Петербурге и Ленинградской области
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                    <div class="hidden-md-up">
                        <br>
                    </div>
                    8 800 550 50 46<br>
                    8 812 245 17 35<br>
                    Всеволожск, Всеволожский проспект дом 17 офис 434
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 offset-xl-1 offset-lg-1">
                <h1 class="h2 russo text-center offer text-uppercase">
                    Мы экономим порядка 58% ваших средств за счет комплексной газификации уже через 50 дней
                </h1>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2 text-center">
                <button class="btn btn-primary btn-circle" data-toggle="modal" data-target="#formModal" role="button">Заказ звонка специалиста</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="russo text-center pt-2 pb-3">
                    Заказ звонка специалиста
                </h5>
                <form action="/proposals" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="page_id" value="1">
                    <input type="hidden" name="template" value="g">
                    <div class="form-group {{ !empty($errors->proposal->first('name')) ? 'has-danger' : ''}} {{ !empty(old('name')) ? 'has-success' : ''}}">
                        <div class="">
                            <input type="text" class=" btn-circle form-control {{ !empty($errors->proposal->first('name')) ? 'form-control-danger' : ''}} {{ !empty(old('name')) ? 'form-control-success' : ''}}" id="name" placeholder="Имя" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group {{ !empty($errors->proposal->first('phone')) ? 'has-danger' : ''}} {{ !empty(old('phone')) ? 'has-success' : ''}}">
                        <div class="">
                            <input type="phone" class=" btn-circle form-control {{ !empty($errors->proposal->first('phone')) ? 'form-control-danger' : ''}} {{ !empty(old('phone')) ? 'form-control-success' : ''}}" id="phone" placeholder="Телефон" name="phone" value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <button type="submit" class=" btn-circle btn btn-primary btn-block" onclick="yaCounter42928359.reachGoal('Proposal'); return true;" role="button">Заказать</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-faded pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h2 class="russo text-center py-5">
                    Расчитайте стоимость газификации
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#truboprovod" role="tab">Природный магистральный газ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#gazgolder" role="tab">Газгольдер - сжиженный газ</a>
                    </li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <form class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="tab-content">
                    <div class="tab-pane active" id="truboprovod" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-check mb-0 bgimage-form-1 p-4">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Требуется разработка проекта наружного газопровода
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="hidden-md-up">
                                    <br>
                                </div>
                                <div class="form-check mb-0 bgimage-form-2 p-4">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Требуется разработка проекта внутреннего газопровода
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <fieldset class="form-group mb-0 bgimage-form-8 p-4">
                                    <label>
                                        Количество и удаленность потребителей газа
                                    </label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="checked">
                                            Один потребитель
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            Два потребителя через стену друг от друга меньше 2 метров
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label mb-0">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            Два потребителя на удалении больше 2 метров
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <fieldset class="form-group bgimage-form-9 p-4 mb-0">
                                    <label class="">
                                        Давление в системе газоснабжения
                                    </label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios1" value="option1" checked="checked">
                                            Низкое
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios2" value="option2">
                                            Среднее-Высокое
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group mb-0 bgimage-form-10 p-4">
                                    <label for="formGroupExampleInput">
                                        Длина от основной магистрали до места подключения в метрах
                                    </label>
                                    <input type="number" class="form-control btn-circle" id="formGroupExampleInput" placeholder="1" value="1" min="0">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-check mb-0 bgimage-form-6 p-4">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Требуется получить акт обследования дымоходов
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="hidden-md-up">
                                    <br>
                                </div>
                                <div class="form-check mb-0 bgimage-form-7 p-4">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Требуется заключить договор на сервисное обслуживание котла
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="gazgolder" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <fieldset class="form-group mb-0 bgimage-form-1 p-4">
                                    <label>
                                        Объем газгольдера
                                    </label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="checked">
                                            2 400 л
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            4 300 л
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            6 200 л
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label mb-0">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            8 100 л
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label mb-0">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            10 000 л
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-check mb-0 bgimage-form-2 p-4">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Анодно-катодная <br>защита
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="hidden-xl-up">
                                    <br>
                                </div>
                                <div class="form-check mb-0 bgimage-form-3 p-4">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Конденсатосборник<br>10 л
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="hidden-xl-up">
                                    <br>
                                </div>
                                <div class="form-check mb-0 bgimage-form-4 p-4">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Молниеотвод трубчатый <br>4 м
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-check mb-0 bgimage-form-5 p-4">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Cпецотвод изолированный
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="hidden-xl-up">
                                    <br>
                                </div>
                                <div class="form-check mb-0 bgimage-form-6 p-4">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Установка сигнализатора загазованности
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="hidden-xl-up">
                                    <br>
                                </div>
                                <div class="form-check mb-0 bgimage-form-7 p-4">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Земельные работы с техникой
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-check mb-0 bgimage-form-8 p-4">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Ввод газопровода <br>в дом
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="hidden-xl-up">
                                    <br>
                                </div>
                                <div class="form-check mb-0 bgimage-form-9 p-4">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Подведение внутреннего газопровода
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="hidden-xl-up">
                                    <br>
                                </div>
                                <div class="form-check mb-0 bgimage-form-10 p-4">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Газгольдер с высокой горловиной
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="hidden-xl-up">
                                    <br>
                                </div>
                                <div class="form-check mb-0 bgimage-form-11 p-4">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Первичная заправка ёмкости
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="russo pt-5 text-center" id="request">
                    Расчет прийдет в письме на email и смс на телефон
                </h4>
                <h6 class="russo pb-3 text-center">
                    или оставьте свои контактные данные и инженер поможет со сметой
                </h6>

                <div class="form-inline">
                    {{ csrf_field() }}
                    <input type="hidden" name="product_url" value="gazifikaciya2">
                    <input type="hidden" name="type" value="Order from landing page">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="form-group {{ !empty($errors->orders->first('email')) ? 'has-danger' : ''}} {{ !empty(old('email')) ? 'has-success' : ''}}">
                            <input type="email" class="form-control col-12 btn-circle {{ !empty($errors->orders->first('email')) ? 'form-control-danger' : ''}} {{ !empty(old('email')) ? 'form-control-success' : ''}}" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="hidden-lg-up">
                            <br>
                        </div>
                        <div class="form-group {{ !empty($errors->orders->first('phone')) ? 'has-danger' : ''}} {{ !empty(old('phone')) ? 'has-success' : ''}}">
                            <input type="phone" class="form-control col-12 btn-circle {{ !empty($errors->orders->first('phone')) ? 'form-control-danger' : ''}} {{ !empty(old('phone')) ? 'form-control-success' : ''}}" id="phone" placeholder="Телефон" name="phone" value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="hidden-lg-up">
                            <br>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-circle" onclick="yaCounter42033909.reachGoal('OrderByPhone'); return true;"><span class="fa fa-fw fa-calculator" aria-hidden="true"></span>&nbsp;Получить расчет</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h2 class="russo text-center py-5">
                Объекты на которых мы работаем
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <img src="/images/gazifikaciya-3/gazifikaciya-dom.jpg" class="img-fluid mx-auto d-block">
            <h3 class="russo text-center pt-3">
                Частные дома
            </h3>
            <div class="hidden-lg-up">
                <br>
                <br>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <img src="/images/gazifikaciya-3/gazifikaciya-mnogokvartirnie.jpg" class="img-fluid mx-auto d-block">
            <h3 class="russo text-center pt-3">
                Многоквартирные дома
            </h3>
            <div class="hidden-lg-up">
                <br>
                <br>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <img src="/images/gazifikaciya-3/gazifikaciya-prom.jpg" class="img-fluid mx-auto d-block">
            <h3 class="russo text-center pt-3">
                Промышленные объекты
            </h3>
            <div class="hidden-lg-up">
                <br>
                <br>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 offset-xl-2">
            <img src="/images/gazifikaciya-3/gazifikaciya-commercheskie.jpg" class="img-fluid mx-auto d-block">
            <h3 class="russo text-center pt-3">
                Коммерческие объекты
            </h3>
            <div class="hidden-lg-up">
                <br>
                <br>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <img src="/images/gazifikaciya-3/gazifikaciya-poselki.jpg" class="img-fluid mx-auto d-block">
            <h3 class="russo text-center pt-3">
                Садоводства и поселки
            </h3>
            <div class="hidden-lg-up">
                <br>
                <br>
            </div>
        </div>
    </div>
</div>

<style>
.bgimage-kredit {
    background: url("/images/gazifikaciya-3/gazifikaciya-fotografiya-1.jpg") no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
    background-color: rgba(0, 0, 0, 0.5);
    background-blend-mode: overlay;
    color: white;
}
</style>
<div class="container-fluid p-0 bgimage-kredit">
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2 class="russo text-center py-5 my-0">
            Возможна помощь от банков партнеров в предоставлении рассрочки<br>
        </h2>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <img src="/images/gazifikaciya-3/bank-1.png" class="img-fluid">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <img src="/images/gazifikaciya-3/bank-6.png" class="img-fluid">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <img src="/images/gazifikaciya-3/bank-3.png" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <img src="/images/gazifikaciya-3/bank-2.png" class="img-fluid">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <img src="/images/gazifikaciya-3/bank-4.png" class="img-fluid">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                <img src="/images/gazifikaciya-3/bank-5.png" class="img-fluid">
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12 text-center">
                    <button class="btn btn-primary btn-circle" data-toggle="modal" data-target="#formModal" role="button">Получить рассрочку</a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>

<div class="container pb-5">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h2 class="russo text-center py-5">
                Примеры выполненных работ
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/gazifikaciya-primer-1.jpg" alt="Card image cap">
                <div class="card-block">
                    <h5 class="russo pb-3 text-center">
                        Строительство газовой котельной для Общественно-Делового Центра ювелирной сети «585/Золотой» в д. Скотное
                    </h5>
                    <ul>
                        <li>Мощность котельной – 2,24 мВт
                        <li>Проектно-изыскательские работы, прохождение государственной экспертизы
                        <li>Общестроительные работы и монтаж оборудования котельной
                        <li>Сдача результатов работ в Государственный Архитектурно-Строительный Надзор и РосТехНадзор
                    </ul>
                    <br>
                    <div class="text-center">
                        <button class="btn btn-primary btn-circle" data-toggle="modal" data-target="#zakazIngenerModal" role="button">Заказать выезд инженера</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="hidden-xl-up">
                <br>
            </div>
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/gazifikaciya-primer-2.jpg" alt="Card image cap">
                <div class="card-block">
                    <h5 class="russo pb-3 text-center">
                        Газификация д.Колясово и Общественно-Делового Центра ювелирной сети «585/Золотой» в д. Скотное
                    </h5>
                    <ul>
                        <li>Общая протяженность газопровода 1,8 км
                        <li>Ежегодное потребление – 600 м3/ч
                        <li>Выполнение Работ ННБ для перехода автомобильной трассы федерального назначения А 121 «Сортавала»
                        <li>Газоснабжение частных домовладений д. Колясово

                    </ul>
                    <br>
                    <br>
                    <br>

                    <div class="text-center">
                        <button class="btn btn-primary btn-circle" data-toggle="modal" data-target="#zakazIngenerModal" role="button">Заказать выезд инженера</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/gazifikaciya-primer-3.jpg" alt="Card image cap">
                <div class="card-block">
                    <h5 class="russo pb-3 text-center">
                        Наружное и внутреннее газоснабжение, устройство котельной и индивидуальных тепловых пунктов Многоквартирного жилого комплекса «Полар-Южный» в г. Всеволожске
                    </h5>
                    <ul>
                        <li>Мощность котельной – 1,62 мВт
                        <li>Высотные работы по прокладке фасадного газопровода
                        <li>Сдача результатов работ в Государственный Архитектурно-Строительный Надзор и РосТехНадзор
                        <li>Газоснабжение квартир в соответствии с проектом


                    </ul>
                    <br>
                    <div class="text-center">
                        <button class="btn btn-primary btn-circle" data-toggle="modal" data-target="#zakazIngenerModal" role="button">Заказать выезд инженера</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="hidden-xl-up">
                <br>
            </div>
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/gazifikaciya-primer-4.jpg" alt="Card image cap">
                <div class="card-block">
                    <h5 class="russo pb-3 text-center">
                        Газификация муниципальных объектов Дубровского городского поселения в Ленинградской области
                    </h5>
                    <ul>
                        <li>Общая протяженность газопровода – 0,8 км
                        <li>Государственный контракт
                        <li>Сроки ожидания газификации жильцами муниципальных квартир и домов – более 3 лет
                        <li>Работы по ГНБ для сохранения муниципального имущества


                    </ul>
                    <br>
                    <br>


                    <div class="text-center">
                        <button class="btn btn-primary btn-circle" data-toggle="modal" data-target="#zakazIngenerModal" role="button">Заказать выезд инженера</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/gazifikaciya-primer-5.jpg" alt="Card image cap">
                <div class="card-block">
                    <h5 class="russo pb-3 text-center">
                        Реконструкция газопроводов в квартале, ограниченном ул. Ольги Берггольц, пр. Елизарова, ул. Седова и Старопутиловским валом для комитета по энергетике и инженерному обеспечению Правительства СПб
                    </h5>
                    <ul>
                        <li>Общая протяженность газопровода – 2,4 км
                        <li>Государственный контракт
                        <li>Организация работ в стесненных городских условиях

                    </ul>
                    <br>
                    <br>
                    <div class="text-center">
                        <button class="btn btn-primary btn-circle" data-toggle="modal" data-target="#zakazIngenerModal" role="button">Заказать выезд инженера</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="hidden-xl-up">
                <br>
            </div>
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/gazifikaciya-primer-6.jpg" alt="Card image cap">
                <div class="card-block">
                    <h5 class="russo pb-3 text-center">
                        Комплексное газоснабжение и водоснабжение ДНТ «РОВАМ» массив Проба в Ленинградской Области
                    </h5>
                    <ul>
                        <li>Общая протяженность газопровода и водопровода 7 км
                        <li>Строительство распределительной сети, насосной станции и резервуара чистой воды
                        <li>Работа в условиях крайне высокого уровня грунтовых вод
                        <li>Газификация частных домовладений

                    </ul>



                    <div class="text-center">
                        <button class="btn btn-primary btn-circle" data-toggle="modal" data-target="#zakazIngenerModal" role="button">Заказать выезд инженера</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="zakazIngenerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="russo text-center pt-2 pb-3">
                    Заказать выезд инженера
                </h5>
                <form action="/proposals" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="page_id" value="1">
                    <input type="hidden" name="template" value="g">
                    <div class="form-group {{ !empty($errors->proposal->first('name')) ? 'has-danger' : ''}} {{ !empty(old('name')) ? 'has-success' : ''}}">
                        <div class="">
                            <input type="text" class=" btn-circle form-control {{ !empty($errors->proposal->first('name')) ? 'form-control-danger' : ''}} {{ !empty(old('name')) ? 'form-control-success' : ''}}" id="name" placeholder="Имя" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group {{ !empty($errors->proposal->first('phone')) ? 'has-danger' : ''}} {{ !empty(old('phone')) ? 'has-success' : ''}}">
                        <div class="">
                            <input type="phone" class=" btn-circle form-control {{ !empty($errors->proposal->first('phone')) ? 'form-control-danger' : ''}} {{ !empty(old('phone')) ? 'form-control-success' : ''}}" id="phone" placeholder="Телефон" name="phone" value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <button type="submit" class=" btn-circle btn btn-primary btn-block" onclick="yaCounter42928359.reachGoal('Proposal'); return true;" role="button">Заказать</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.bgimage-stoimost {
    background: url("/images/gazifikaciya-3/gazifikaciya-fotografiya-9.jpg") no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
    background-color: rgba(0, 0, 0, 0.5);
    background-blend-mode: overlay;
    color: white;
}
</style>
<div class="container-fluid p-0 bgimage-stoimost">
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2 class="russo text-center py-5 my-0">
            Стоимость работ в смете фиксирована. Все дополнительные издержки, не указанные в сметном расчете, производятся за счет компании ООО «АЛЬТАИР».
        </h2>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>

<div class="container pb-5">
    <div class="row">
        <div class="col-xl-12">
            <h2 class="russo text-center py-5">
                Благодарственные письма заказчиков
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
            <img src="/images/gazifikaciya2/ets.jpg" class="img-fluid mx-auto d-block">
            <br>
            <h3 class="russo text-center pt-3">
                ООО СК "ЭТС"
            </h3>
            <div class="hidden-xl-up">
                <br>
                <br>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
            <img src="/images/gazifikaciya2/polar.jpg" class="img-fluid mx-auto d-block">
            <br>
            <h3 class="russo text-center pt-3">
                ЗАО "Полар"
            </h3>
            <div class="hidden-xl-up">
                <br>
                <br>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
            <img src="/images/gazifikaciya2/prommonolit.jpg" class="img-fluid mx-auto d-block">
            <br>
            <h3 class="russo text-center pt-3">
                АО "ПРОММОНОЛИТ"
            </h3>
            <div class="hidden-xl-up">
                <br>
                <br>
            </div>
        </div>
    </div>
</div>

<style>
.bgimage-garantiya-srokov {
    background: url("/images/gazifikaciya2/gazifikaciya-fotografiya-3.jpg") no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
    background-color: rgba(0, 0, 0, 0.5);
    background-blend-mode: overlay;
    color: white;
}
</style>
<div class="container-fluid p-0 bgimage-garantiya-srokov">
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2 class="russo text-center py-5 my-0">
            Гарантия выполнения работ в срок. В случае задержки компания ООО «АЛЬТАИР» выплачивает вам пени в соответствии с договором.
        </h2>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>

<div class="container pb-5">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h2 class="russo text-center py-5">
                У нас есть техника для любых земельных условий
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/tehnika-11.jpg" alt="Card image cap">
                <div class="card-block text-center">
                    Установка горизонтально-направленного бурения для бестраншейной прокладки
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="hidden-lg-up">
                <br>
            </div>
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/tehnika-12.jpg" alt="Card image cap">
                <div class="card-block text-center">
                    Мини-экскаватор для работы в стесненных условиях
                </div>
                <br>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="hidden-lg-up">
                <br>
            </div>
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/tehnika-13.jpg" alt="Card image cap">
                <div class="card-block text-center">
                    Авто-вышка для проведения высотных работ
                </div>
                <br>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/tehnika-14.jpg" alt="Card image cap">
                <div class="card-block text-center">
                    Мини-погрузчик для работы в городских условиях
                </div>
                <br>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="hidden-lg-up">
                <br>
            </div>
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/tehnika-17.jpg" alt="Card image cap">
                <div class="card-block text-center">
                    Экскаватор-погрузчик для обеспечения нужд при прокладке наружных сетей
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="hidden-lg-up">
                <br>
            </div>
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/tehnika-16.jpg" alt="Card image cap">
                <div class="card-block text-center">
                    Буровая установка для проведения геологических изысканий
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

<style>
.bgimage-garantiya-dopusk {
    background: url("/images/gazifikaciya-3/gazifikaciya-fotografiya-12.jpg") no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
    background-color: rgba(0, 0, 0, 0.5);
    background-blend-mode: overlay;
    color: white;
}
.bgimage-garantiya-dopusk a {
    color: #c5d4f7;
}
</style>
<div class="container-fluid p-0 bgimage-garantiya-dopusk">
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <a href="/images/gazifikaciya-3/dopusk.pdf" target="_blank">
            <h2 class="russo text-center py-5 my-0">
                Свидетельство о допуске к определенным видам работ
            </h2>
        </a>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>

<div class="container pb-5">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h2 class="russo text-center py-5">
                Наши партнеры
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <img src="/images/gazifikaciya-3/gazifikaciya-partner.jpg" class="img-fluid">
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h2 class="russo text-center py-5">
                Этапы взаимодействия
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12 offset-1">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                    <img src="/images/gazifikaciya-3/e-1.png" class="img-fluid d-block mx-auto">
                    <div class="text-center pt-3">
                        ~1 день
                        <br>
                        <br>
                        Расчет сметы и заключение договора
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                    <img src="/images/gazifikaciya-3/e-2.png" class="img-fluid d-block mx-auto">
                    <div class="text-center pt-3">
                        ~16 дней
                        <br>
                        <br>
                        Получение Технических Условий
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                    <img src="/images/gazifikaciya-3/e-3.png" class="img-fluid d-block mx-auto">
                    <div class="text-center pt-3">
                        ~14 дней
                        <br>
                        <br>
                        Разработка проекта ГСН и ГСВ. Согласование.
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                    <img src="/images/gazifikaciya-3/e-5.png" class="img-fluid d-block mx-auto">
                    <div class="text-center pt-3">
                        ~12 дней
                        <br>
                        <br>
                        Строительно-монтажные работы
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                    <img src="/images/gazifikaciya-3/e-6.png" class="img-fluid d-block mx-auto">
                    <div class="text-center pt-3">
                        ~18 день
                        <br>
                        <br>
                        Оформление инженерно-технической документации. Подписание акта госкомиссии.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-faded pb-5">
    <div class="container">
        <div class="row">
            <form class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12" action="/orders" method="POST">
                <h4 class="russo pt-5 pb-4 text-center" id="request2">
                    Оставьте заявку на бесплатный выезд инженера <br>и помощь в расчете сметы
                </h4>
                <div class="form-inline">
                    {{ csrf_field() }}
                    <input type="hidden" name="product_url" value="gazifikaciya-3">
                    <input type="hidden" name="type" value="Order from landing page">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="form-group {{ !empty($errors->orders->first('email')) ? 'has-danger' : ''}} {{ !empty(old('email')) ? 'has-success' : ''}}">
                            <input type="email" class="form-control col-12 btn-circle {{ !empty($errors->orders->first('email')) ? 'form-control-danger' : ''}} {{ !empty(old('email')) ? 'form-control-success' : ''}}" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="hidden-lg-up">
                            <br>
                        </div>
                        <div class="form-group {{ !empty($errors->orders->first('phone')) ? 'has-danger' : ''}} {{ !empty(old('phone')) ? 'has-success' : ''}}">
                            <input type="phone" class="form-control col-12 btn-circle {{ !empty($errors->orders->first('phone')) ? 'form-control-danger' : ''}} {{ !empty(old('phone')) ? 'form-control-success' : ''}}" id="phone" placeholder="Телефон" name="phone" value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="hidden-lg-up">
                            <br>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-circle" onclick="yaCounter42033909.reachGoal('OrderByPhone'); return true;"><span class="fa fa-fw fa-calculator" aria-hidden="true"></span>&nbsp;Получить расчет</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.bgimage-first {
    background: url("/images/gazifikaciya2/gazifikaciya-fotografiya-4.jpg") no-repeat bottom center;
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
<div class="container-fluid p-0 bgimage-first">
    <div class="container-fluid px-0">
        <div class="container py-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <img src="/images/gazifikaciya-3/gazifikaciya-logo.png" class="img-fluid">
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            ООО "Альтаир"<br>
                            Газификация домов и предприятий<br>в Санкт-Петербурге и Ленинградской области
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                    <div class="hidden-md-up">
                        <br>
                    </div>
                    8 800 550 50 46<br>
                    8 812 245 17 35<br>
                    Всеволожск, Всеволожский проспект дом 17 офис 434
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 offset-xl-1 offset-lg-1">
                <h1 class="h2 russo text-center offer text-uppercase">
                    Мы экономим порядка 58% ваших средств за счет комплексной газификации уже через 50 дней
                </h1>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2 text-center">
                <button class="btn btn-primary btn-circle" data-toggle="modal" data-target="#formModal" role="button">Заказ звонка специалиста</a>
            </div>
        </div>
    </div>
</div>

@component("components.js")
@endcomponent
