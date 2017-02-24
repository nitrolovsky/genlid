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
</style>
<div class="container-fluid p-0 {{ $bgimageid }}">
    <div class="container-fluid px-0">
        <div class="container py-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                    <h5 class="russo py-0 my-0">{{ $domen }}</h5>
                    {{ $descriptor }}
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
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2 text-center">
                <h1 class="h2 russo">
                    {{ $heading }}
                </h1>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2 text-center">
                <h1 class="h4 russo">
                    {{ $bullets }}
                </h1>
            </div>
        </div>
    </div>
</div>
