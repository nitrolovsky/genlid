@component("components.head")
    @slot("title")
        Газификация частного дома в Санкт-Петербурге и Ленинградской области
    @endslot
@endcomponent

<link rel="stylesheet" href="/css/gazifikaciya-3.css">

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
    <div class="container pt-5">
        <h1 class="h2 russo text-center">
            Поможем газифицироваться в любой ситуации
        </h1>
    </div>
    <div class="container pb-5">
        <h2 class="h2 russo text-center">
            Оставьте заявку на бесплатный выезд инженера
        </h2>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2 text-center">
                <a href="#request" class="btn btn-primary  btn-circle">Бесплатный расчет сметы</a>
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
                        <a class="nav-link active" data-toggle="pill" href="#truboprovod" role="tab">Природный газ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#gazgolder" role="tab">Газгольдер</a>
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
            <img src="/images/gazifikaciya2/dom-2.jpg" class="img-fluid mx-auto d-block">
            <br>
            <h3 class="russo text-center pt-3">
                Частные дома
            </h3>
            <div class="hidden-lg-up">
                <br>
                <br>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <img src="/images/gazifikaciya2/mnogokvartirnie-doma.jpg" class="img-fluid mx-auto d-block">
            <br>
            <h3 class="russo text-center pt-3">
                Многоквартирные дома
            </h3>
            <div class="hidden-lg-up">
                <br>
                <br>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <img src="/images/gazifikaciya2/predpriyatie-2.jpg" class="img-fluid mx-auto d-block">
            <br>
            <h3 class="russo text-center pt-3">
                Промышленность
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
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/gazifikaciya-fotografiya-14.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="russo">
                        Монтаж встроенной газовой котельной частного дома в поселке Лисий Нос.
                    </h4>
                    <ul>
                        <li>Площадь дома - 260 кв. м.
                        <li>Мощность отопления - 26 кВт.
                        <li>Срок выполнения работ - 21 день.
                    </ul>
                    <br>
                    <div class="text-center">
                        <a href="#request" class="btn btn-primary btn-circle">Заказать выезд инженера</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="hidden-xl-up">
                <br>
            </div>
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/gazifikaciya-fotografiya-16.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="russo">
                        Газификация коттеджного поселка в Ленинградской области
                    </h4>
                    <ul>
                        <li>Ежегодное потребление 9,5 млн. куб/год
                        <li>Общая протяженность газопровода  3,6 км
                        <li>Прокладка газопровода через лес и передача газопровода на баланс филиалу ОАО "Газпром"
                    </ul>
                    <div class="text-center">
                        <a href="#request" class="btn btn-primary btn-circle">Заказать выезд инженера</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/gazifikaciya-fotografiya-15.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="russo">
                        Газификация производственно-складского комплекса со встроенной котельной
                    </h4>
                    <ul>
                        <li>Площадь - 1300 кв.м.
                        <li>Мощность отопления 300 кВт
                        <li>Мощность газовых генераторов 250 кВт
                    </ul>
                    <div class="text-center">
                        <a href="#request" class="btn btn-primary btn-circle">Заказать выезд инженера</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="hidden-xl-up">
                <br>
            </div>
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya-3/gazifikaciya-fotografiya-17.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="russo">
                        Комплексная газификация зданий и сооружений складского назначения
                    </h4>
                    <ul>
                        <li>Прокладка газопровода высокого давления 1,8 км.
                        <li>Строительство распределительного газопровода
                        <li>Введение в эксплуатацию газовых потребителей
                    </ul>
                    <br>
                    <div class="text-center">
                        <a href="#request" class="btn btn-primary btn-circle">Заказать выезд инженера</a>
                    </div>
                </div>
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
            Стоимость работ фиксируется в смете и не может быть повышена
            <br>
            Никаких дополнительных расходов
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
            Гарантия соблюдения сроков работ до 1 дня
            <br>
            Условия прописываются в договоре. В случае нарушения сроков, мы выплатим вам штраф.
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
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya2/tehnika-1.jpg" alt="Card image cap">
                <div class="card-block">
                    Экскаватор-погрузчик для общестроительных работ.
                </div>
                <br>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="hidden-lg-up">
                <br>
            </div>
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya2/tehnika-2.jpg" alt="Card image cap">
                <div class="card-block">
                    Установка горизонтального бурения для прокладки газопровода без траншеи
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="hidden-lg-up">
                <br>
            </div>
            <div class="card sw">
                <img class="card-img-top img-fluid mx-auto d-block" src="/images/gazifikaciya2/tehnika-4.jpg" alt="Card image cap">
                <div class="card-block">
                    Мини-экскаватор применяется в условиях ограниченного маневра
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>

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
    <div class="container pt-5">
        <h1 class="h2 russo text-center">
            Поможем газифицироваться в любой ситуации
        </h1>
    </div>
    <div class="container pb-5">
        <h2 class="h2 russo text-center">
            Оставьте заявку на бесплатный выезд инженера
        </h2>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2 text-center">
                <a href="#request" class="btn btn-primary  btn-circle">Бесплатный расчет сметы</a>
            </div>
        </div>
    </div>
</div>

@component("components.js")
@endcomponent
