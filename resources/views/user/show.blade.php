@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <form action="/users/{{ Session::get('id') }}" method="POST">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="email" class="col-xl-3 col-form-label">
                            Email
                        </label>
                        <div class="col-xl-9">
                            <p class="form-control-static mb-0">{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-xl-3 col-form-label">
                            Пароль
                        </label>
                        <div class="col-xl-9">
                            <p class="form-control-static mb-0">{{ $user->password }}</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
