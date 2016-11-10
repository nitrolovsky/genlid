@if (Session::get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@if (Session::get('info'))
    <div class="alert alert-info">
        {{ session()->get('info') }}
    </div>
@endif
@if (Session::get('danger'))
    <div class="alert alert-danger">
        {{ session()->get('danger') }}
    </div>
@endif
