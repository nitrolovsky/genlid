<div class="container pt-5">
    <div class="row">
        <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-1">
            <h2 class="russo">
                {{ $heading }}
            </h2>
        </div>
    </div>
</div>
<div class="container hidden-sm-up px-0 pt-4">
    <img src="/images/{{ $image }}" class="img-fluid mx-auto d-block">
    <div class="text-xl-center text-lg-center text-md-center text-sm-center text-center">
        {{ $description }}
    </div>
</div>
<div class="container hidden-xs-down pt-4">
    <div class="row">
        <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 offset-xl-2 offset-lg-1">
            <img src="/images/{{ $image }}" class="img-fluid mx-auto d-block">
            <div class="text-xl-center text-lg-center text-md-center text-sm-center text-center">
                {{ $description }}
            </div>
        </div>
    </div>
</div>
<div class="container pb-5">
    <div class="row">
        <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-1">
            <h5 class="russo pt-4">
                {{ $subheading }}
            </h5>
            <div class="pt-3">
                {{ $text }}
            </div>
        </div>
    </div>
</div>
