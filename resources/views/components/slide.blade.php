<div class="{{ $bg or '' }}">
    <div class="container pt-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                <h2 class="russo text-center text-uppercase">
                    {{ $heading }}
                </h2>
            </div>
        </div>
    </div>
        <img src="/images/{{ $image }}" class="img-fluid mx-auto d-block">
        <div class="text-center">
            {{ $description }}
        </div>
    </div>
    <div class="container hidden-xs-down pt-4">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <img src="/images/{{ $image }}" class="img-fluid mx-auto d-block">
                <div class="text-center">
                    {{ $description }}
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
                <h5 class="russo pt-4">
                    {{ $subheading }}
                </h5>
                <div class="pt-3">
                    {{ $text }}
                </div>
            </div>
        </div>
    </div>
</div>
