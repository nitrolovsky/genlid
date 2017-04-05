@component("components.head-3")
    @slot("title")
        {{ $page->descriptor }}
    @endslot
@endcomponent

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
</style>

<div class="container-fluid p-0">
    <div class="container-fluid px-0">
        <div class="container pt-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                    <span class="h2 text-uppercase logo">
                        {{ $page->company or "" }}
                    </span><br>
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
    <div class="container pt-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2 ">
                <h1 class="h2 russo text-center my-0">
                    {{ $page->offer }}
                </h1>
            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                <div class="h5 russo">
                    @php echo html_entity_decode($page->details); @endphp
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="embed-responsive embed-responsive-16by9 sw " id="video">
                    <iframe class="embed-responsive-item" src="{{ $page->video }}" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="container">
                    <div class="hidden-xl-up">
                        <br>
                    </div>
                    <h5 class="russo px-3 pb-3 text-center">
                        {{ $page->form_title }}
                    </h5>
                    <form action="/proposals" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="page_id" value="{{ $page->id }}">
                        <input type="hidden" name="template" value="g">
                        <div class="form-group {{ !empty($errors->proposal->first('name')) ? 'has-danger' : ''}} {{ !empty(old('name')) ? 'has-success' : ''}}">
                            <div class="">
                                <input type="text" class="sw btn-circle form-control {{ !empty($errors->proposal->first('name')) ? 'form-control-danger' : ''}} {{ !empty(old('name')) ? 'form-control-success' : ''}}" id="name" placeholder="Имя" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="form-group {{ !empty($errors->proposal->first('email')) ? 'has-danger' : ''}} {{ !empty(old('email')) ? 'has-success' : ''}}">
                            <div class="">
                                <input type="email" class="sw btn-circle form-control {{ !empty($errors->proposal->first('email')) ? 'form-control-danger' : ''}} {{ !empty(old('email')) ? 'form-control-success' : ''}}" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="form-group {{ !empty($errors->proposal->first('phone')) ? 'has-danger' : ''}} {{ !empty(old('phone')) ? 'has-success' : ''}}">
                            <div class="">
                                <input type="phone" class="sw btn-circle form-control {{ !empty($errors->proposal->first('phone')) ? 'form-control-danger' : ''}} {{ !empty(old('phone')) ? 'form-control-success' : ''}}" id="phone" placeholder="Телефон" name="phone" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="sw btn-circle btn btn-primary btn-block" onclick="yaCounter42928359.reachGoal('Proposal'); return true;" role="button">{{ $page->call_to_action }}</button>
                            </div>
                        </div>
                    </form>
                    <div class="px-3 small">
                        Обработка персональных данных защищена политикой конфиденциальности
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 small">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6 col-12">
                {{ $page->legal }}
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6 col-12 text-xl-right text-lg-right text-md-right">
                <div class="hidden-md-up">
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
