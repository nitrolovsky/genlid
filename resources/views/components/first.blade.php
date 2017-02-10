<div class="container py-5">
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2">
            <h1 class="h2 russo text-center text-uppercase">
                {{ $heading }}
            </h1>
        </div>
    </div>
</div>
<div class="container hidden-sm-up px-0">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="{{ $video }}" allowfullscreen></iframe>
    </div>
</div>
<div class="container hidden-xs-down">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $video }}" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div class="container pt-4 pb-5">
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 offset-xl-2 offset-lg-2">
            <div>
                {{ $description }}
            </div>
            <div class="text-center pt-4">
                <a href="#request" class="btn btn-primary">
                    {{ $calltoaction }}
                </a>
            </div>
        </div>
    </div>
</div>
