@component("components.head-2")
    @slot("title")
        {{ $page->descriptor }}
    @endslot
@endcomponent

<link rel="stylesheet" href="/css/imperium-stroy.css">

<style>
.bgimg-1 {
    background: url("/upload/images/{{ $page->bg }}") no-repeat center center;
    background-size: cover;
    background-color: rgba(0, 0, 0, 0.5);
    background-blend-mode: overlay;
    color: white;
    height: 100%;
    min-height: 100%;
}
.btn-circle {
    border-radius: 2rem !important;
}
a {
    color: #ccd4ff !important;
}
a:hover {
    color: #546fff !important;
}
</style>
<div class="container-fluid p-0">
    <div class="container-fluid px-0">
        <div class="container pt-3 pb-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                    <h5 class="russo py-0 my-0">Genlid.com</h5>
                    {{ $page->descriptor }}
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                    <div class="hidden-md-up">
                        <br>
                    </div>
                    {{ $page->phone }}<br>
                    {{ $page->email or "" }}
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-0 pb-2">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2 ">
                <h1 class="h2 russo">
                    {{ $page->offer }}
                </h1>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                <div class="h5 russo">
                    {{ $page->details }}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="embed-responsive embed-responsive-16by9" id="video">
                    <iframe class="embed-responsive-item" src="{{ $page->video }}" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="container">
                    <div class="hidden-xl-up">
                        <br>
                    </div>
                    <div class="russo px-3 pb-3">
                        {{ $page->form_title }}
                    </div>
                    <form action="/proposals" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="page_id" value="{{ $page->id }}">
                        <input type="hidden" name="template" value="g">
                        <div class="form-group {{ !empty($errors->proposal->first('name')) ? 'has-danger' : ''}} {{ !empty(old('name')) ? 'has-success' : ''}}">
                            <div class="">
                                <input type="text" class="btn-circle form-control {{ !empty($errors->proposal->first('name')) ? 'form-control-danger' : ''}} {{ !empty(old('name')) ? 'form-control-success' : ''}}" id="name" placeholder="Имя" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="form-group {{ !empty($errors->proposal->first('email')) ? 'has-danger' : ''}} {{ !empty(old('email')) ? 'has-success' : ''}}">
                            <div class="">
                                <input type="email" class="btn-circle form-control {{ !empty($errors->proposal->first('email')) ? 'form-control-danger' : ''}} {{ !empty(old('email')) ? 'form-control-success' : ''}}" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="form-group {{ !empty($errors->proposal->first('phone')) ? 'has-danger' : ''}} {{ !empty(old('phone')) ? 'has-success' : ''}}">
                            <div class="">
                                <input type="phone" class="btn-circle form-control {{ !empty($errors->proposal->first('phone')) ? 'form-control-danger' : ''}} {{ !empty(old('phone')) ? 'form-control-success' : ''}}" id="phone" placeholder="Телефон" name="phone" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn-circle btn btn-primary btn-block">{{ $page->call_to_action }}</button>
                            </div>
                        </div>
                    </form>
                    <div class="px-3 small">
                        Ваша персональная информация защищена в соблюдение политики конфиденциальности
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-3">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                {{ $page->legal }}
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-xl-right text-lg-right text-md-right text-sm-right text-left">
                <div class="hidden-sm-up">
                    <br>
                </div>
                Телефон <a href="callto:{{ $page->phone }}">{{ $page->phone }}</a><br>
                Email <a href="mailto:{{ $page->email }}">{{ $page->email }}</a><br>
                Дата обновления сайта {{ date_format($page->updated_at, 'd.m.Y') }}<br>
                Сайт разработал <a href="http://genlid.com">genlid.com</a>
            </div>
        </div>
    </div>
</div>

@component("components.js")
@endcomponent
