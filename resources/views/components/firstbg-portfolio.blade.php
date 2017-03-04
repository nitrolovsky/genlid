<style>
.{{ $bgimageid }} {
    background: url({{ $image }}) no-repeat center center;
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
<div class="container-fluid p-0 {{ $bgimageid }}">
    <div class="container-fluid px-0">
        <div class="container py-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            {{ $domen }}<br>
                            {{ $descriptor }}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                    <div class="hidden-md-up">
                        <br>
                    </div>
                    {{ $phone }}<br>
                    {{ $email or "" }}
                    {{ $address or "" }}
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <h1 class="h2 russo text-center">
            {{ $heading }}
        </h1>
        <ul class="h5 russo pt-3 pb-5">
            <li class="py-1">Гарантирую заявки в течении 2 недель с запуска рекламы</li>
            <li class="py-1">A/B тестирование 3 вариантов до рентабельной конверсии</li>
            <li class="py-1">Хорошо отображаются на мобильных устройствах</li>
            <li class="py-1">Уведомления с контактами клиентов на ваш email</li>
            <li class="py-1">Настроенная аналитика в Яндекс Метрики и Google Analytics</li>
            <li class="py-1">Текст в информационном стиле Максима Ильяхова</li>
        </ul>
    </div>
    <div class="container py-5">
        <div class="row">
            <form class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-12">
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
                        <div class="hidden-lg-up">
                            <br>
                        </div>
                        <div class="form-group {{ !empty($errors->orders->first('phone')) ? 'has-danger' : ''}} {{ !empty(old('phone')) ? 'has-success' : ''}}">
                            <input type="phone" class="sw form-control col-12 btn-circle {{ !empty($errors->orders->first('phone')) ? 'form-control-danger' : ''}} {{ !empty(old('phone')) ? 'form-control-success' : ''}}" id="phone" placeholder="Телефон" name="phone" value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="hidden-lg-up">
                            <br>
                        </div>
                        <button type="submit" class="sw btn btn-primary btn-block btn-circle" onclick="yaCounter42033909.reachGoal('OrderByPhone'); return true;">{{ $calltoaction }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
