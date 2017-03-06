@component("components.head")
    @slot("title")
        Видеоролики
    @endslot
@endcomponent

<link rel="stylesheet" href="/css/videoroliki.css">

<style>
.bgimage-first {
    background: url(/images/videoroliki/videoroliki.jpg) no-repeat center center;
    background-size: cover;
    background-color: rgba(0, 0, 0, 0.5);
    background-blend-mode: overlay;
    color: white;
}
</style>

<div class="container-fluid p-0 bgimage-first">
    <div class="container-fluid px-0">
        <div class="container py-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <span class="russo">РАКЕТА СТУДИЯ</span><br>
                            Производство видеороликов
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                    <div class="hidden-md-up">
                        <br>
                    </div>
                    +7 911 838 49 96<br>
                    raketastudia@gmail.com
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1 col-md-12 col-sm-12 col-12">
                <h1 class="h2 russo pb-5 text-center">
                    Видео, раскрывающее красоту вашего бизнеса
                </h1>
                <ul class="h5 russo">
                    <li class="pb-1">Выделяет вас среди конкурентов</li>
                    <li class="py-1">Повышает лояльность клиентов</li>
                    <li class="py-1">Максимально передает ценность вашего продукта</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <form class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12" action="/orders" method="POST">
                <div class="form-inline">
                    {{ csrf_field() }}
                    <input type="hidden" name="product_url" value="videoroliki">
                    <input type="hidden" name="type" value="Order from article">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="form-group {{ !empty($errors->orders->first('email')) ? 'has-danger' : ''}} {{ !empty(old('email')) ? 'has-success' : ''}}">
                            <input type="email" class="sw form-control col-12 btn-circle {{ !empty($errors->orders->first('email')) ? 'form-control-danger' : ''}} {{ !empty(old('email')) ? 'form-control-success' : ''}}" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="form-group {{ !empty($errors->orders->first('phone')) ? 'has-danger' : ''}} {{ !empty(old('phone')) ? 'has-success' : ''}}">
                            <input type="phone" class="sw form-control col-12 btn-circle {{ !empty($errors->orders->first('phone')) ? 'form-control-danger' : ''}} {{ !empty(old('phone')) ? 'form-control-success' : ''}}" id="phone" placeholder="Телефон" name="phone" value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <button type="submit" class="sw btn btn-primary btn-block btn-circle" onclick="yaCounter42033909.reachGoal('Proposal'); return true;">
                            Отправить
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container py-5">
    <h1 class="h2 russo text-center">
        Примеры видеороликов
    </h1>
</div>

<div class="container">
    <div class="row pb-3">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Qt_rma1ZMw4" allowfullscreen></iframe>
            </div>
            <div class="pt-2 text-center">
                Имидж видео.
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="hidden-sm-up">
                <br>
                <br>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/98iEqKihK4c" allowfullscreen></iframe>
            </div>
            <div class="pt-2 text-center">
                 Видео снималось для проекта свадебных организаторов.
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="hidden-sm-up">
                <br>
                <br>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/m-rLVXiFvdA" allowfullscreen></iframe>
            </div>
            <div class="pt-2 text-center">
                Видео снималось к выпуску книги Вкусные истории. Душевные рецепты для теплой компании.
            </div>
        </div>
    </div>
</div>
<div class="container py-3">
    <div class="row pb-3">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9GHzbaxl9lg" allowfullscreen></iframe>
            </div>
            <div class="pt-2 text-center">
                Видео про любовь и стиль.
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="hidden-sm-up">
                <br>
                <br>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/I-QiWOdqXLI" allowfullscreen></iframe>
            </div>
            <div class="pt-2 text-center">
                Видео снималось для декораторов.
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="hidden-sm-up">
                <br>
                <br>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UFFc46DRs28" allowfullscreen></iframe>
            </div>
            <div class="pt-2 text-center">
                Видео снималось для проекта свадебных организаторов.
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row pb-5">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_EIBrRzCWOo" allowfullscreen></iframe>
            </div>
            <div class="pt-2 text-center">
                Имидж видео. Демонстрация товара и стиля.
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="hidden-sm-up">
                <br>
                <br>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9ef0jWaU0Bk" allowfullscreen></iframe>
            </div>
            <div class="pt-2 text-center">
                Fashion video.
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="hidden-sm-up">
                <br>
                <br>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ehrImAacM3s" allowfullscreen></iframe>
            </div>
            <div class="pt-2 text-center">
                Демонстрация товара.
            </div>
        </div>
    </div>
</div>

<style>
.bg-img-form {
    background: url(/images/videoroliki/videoroliki-2.jpg) no-repeat top center;
    background-size: cover;
    background-color: rgba(0, 0, 0, 0.5);
    background-blend-mode: overlay;
    color: white;
}
</style>
<div class="container-fluid py-5 bg-img-form" id="request">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 offset-xl-3 offset-lg-3 offset-md-2">
                <div class="mb-0">
                    <h4 class="pb-3 russo text-center">
                        Оставьте заявку и мы разработаем концепцию вашего видео БЕСПЛАТНО
                    </h4>
                    <form action="/orders" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="product_url" value="videoroliki">
                        <input type="hidden" name="type" value="Order from article">
                        <div class="form-group {{ !empty($errors->orders->first('email')) ? 'has-danger' : ''}} {{ !empty(old('email')) ? 'has-success' : ''}}">
                            <input type="email" class="sw form-control btn-circle {{ !empty($errors->orders->first('email')) ? 'form-control-danger' : ''}} {{ !empty(old('email')) ? 'form-control-success' : ''}}" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group {{ !empty($errors->orders->first('phone')) ? 'has-danger' : ''}} {{ !empty(old('phone')) ? 'has-success' : ''}}">
                            <input type="phone" class="sw form-control btn-circle {{ !empty($errors->orders->first('phone')) ? 'form-control-danger' : ''}} {{ !empty(old('phone')) ? 'form-control-success' : ''}}" id="phone" placeholder="Телефон" name="phone" value="{{ old('phone') }}">
                        </div>
                        <button type="submit" class="sw btn btn-primary btn-block btn-circle" onclick="yaCounter42033909.reachGoal('Proposal'); return true;">Отправить</button>
                    </form>
                    <div class="small pt-3">
                        Ваши персональные данные защищены политикой конфиденциальности. На электронную почту отправляются письма с согласия пользователя. Телефон для технической поддержки и помощи менеджером.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row small">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                © 2017 РАКЕТА СТУДИЯ Все права защищены
                <br>
                <a href="/files/politika-confidencialnosti.pdf" target="_blank" class="a-f">Политика конфиденциальности</a>
                <br>
                Санкт-Петербург
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-left">
                <div class="hidden-md-up">
                    <br>
                </div>
                Телефон <a href="callto:+79118384996" class="a-f">+7 911 838 49 96</a><br>
                Email <a href="raketastudia@gmail.com " class="a-f">raketastudia@gmail.com</a><br>
                Дата обновления сайта 06.03.2017<br>
                Сайт разработал <a href="https://vk.com/id327409638" class="a-f" target="_blank">Pavel Nitrolovsky</a>
            </div>
        </div>
    </div>
</div>

@component("components.js")
@endcomponent
