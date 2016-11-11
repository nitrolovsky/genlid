@if (Session::get('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
@if (Session::get('info'))
    <div class="alert alert-info">
        {{ Session::get('info') }}
    </div>
@endif
@if (Session::get('danger'))
    <div class="alert alert-danger">
        {{ Session::get('danger') }}
    </div>
@endif
