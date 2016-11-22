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
                            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-xl-3 col-form-label">
                            Пароль
                        </label>
                        <div class="col-xl-9">
                            <input type="text" class="form-control" id="password" name="password" value="{{ $user->password }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-xl-3 col-xl-9">
                            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
