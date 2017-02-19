<div class="{{ $bg or '' }}">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                <h2 class="russo text-center">
                    {{ $heading }}
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid hidden-sm-up px-0">
        <img src="/images/{{ $image }}" class="img-fluid mx-auto d-block" alt="{{ $description }}">
        <div class="container text-center">
            {{ $description }}
        </div>
    </div>
    <div class="container-fluid hidden-xs-down px-0">
        <img src="/images/{{ $image }}" class="img-fluid mx-auto d-block" alt="{{ $description }}">
        <div class="container text-center">
            {{ $description }}
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                <h4 class="russo pt-4">
                    {{ $subheading }}
                </h4>
                <div class="pt-3">
                    {{ $text }}
                </div>
                <div class="text-center pt-4">
                    <a href="#request" class="btn btn-primary  btn-circle">{{ $calltoaction or 'Бесплатный расчет сметы'}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
