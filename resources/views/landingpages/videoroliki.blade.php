@component("components.head")
    @slot("title")
        Видеоролики
    @endslot
@endcomponent

<link rel="stylesheet" href="/css/gazifikaciya-3.css">

<style>
.bgimage-first {
    background: url(/images/videoroliki/videoroliki.jpg) no-repeat center center;
    background-size: cover;
    background-color: rgba(0, 0, 0, 0.5);
    background-blend-mode: overlay;
    color: white;
}
.btn-circle {
    border-radius: 2rem !important;
}
.sw {
    box-shadow: 0 0 20px rgba(0, 0, 0, 1);
}
</style>
<div class="container-fluid p-0 bgimage-first">
    <div class="container-fluid px-0">
        <div class="container py-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <span class="russo">Ракета Студия</span><br>
                            Видеосъемка
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                    <div class="hidden-md-up">
                        <br>
                    </div>
                    +7 929 116 85 65<br>
                    nitrolovsky@gmail.com
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1 col-md-12 col-sm-12 col-12">
                <h1 class="h2 russo pb-5 text-center">
                    Производство красивых видеороликов с видеопродакшеном за 14 дней
                </h1>
                <ul class="h5 russo">
                    <li class="pb-1">От 45 000 рублей</li>
                    <li class="py-1">Написание сценария и 117 вопросов для интервью на видео</li>
                    <li class="py-1">Пост продакшн After Effects</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <form class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12" action="/proposals" method="POST">
                <div class="form-inline">
                    {{ csrf_field() }}
                    <input type="hidden" name="product_url" value="gazifikaciya-3">
                    <input type="hidden" name="type" value="Order from landing page">
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
                        <button type="submit" class="sw btn btn-primary btn-block btn-circle" onclick="yaCounter42033909.reachGoal('OrderByPhone'); return true;">
                            Оставить заявку
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
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/m-rLVXiFvdA" allowfullscreen></iframe>
            </div>
            <div class="py-4">
                Взыскание задолжности с юридических лиц
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="hidden-sm-up">
                <br>
                <br>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1ZPf-RGF9OY" allowfullscreen></iframe>
            </div>
            <div class="py-4">
                Взыскание задолжности с юридических лиц
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="hidden-sm-up">
                <br>
                <br>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jf8Bt72eZV0" allowfullscreen></iframe>
            </div>
            <div class="py-4">
                Взыскание задолжности с юридических лиц
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row pb-3">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9GHzbaxl9lg" allowfullscreen></iframe>
            </div>
            <div class="py-4">
                Взыскание задолжности с юридических лиц
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
            <div class="py-4">
                Взыскание задолжности с юридических лиц
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
            <div class="py-4">
                Взыскание задолжности с юридических лиц
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row pb-3">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_EIBrRzCWOo" allowfullscreen></iframe>
            </div>
            <div class="py-4">
                Взыскание задолжности с юридических лиц
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
            <div class="py-4">
                Взыскание задолжности с юридических лиц
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
            <div class="py-4">
                Взыскание задолжности с юридических лиц
            </div>
        </div>
    </div>
</div>
<div class="container">
    <hr>
    <div class="row small">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            2017 genlid.com. Санкт-Петербург, метро Василеостровская. Телефон +7 929 116 85 65. Email nitrolovsky@gmail.com. <a href="https://vk.com/nitrolovsky"target="_blank">Павел Нитроловский</a>.
        </div>
    </div>
    <br>
</div>

@component("components.js")
@endcomponent
