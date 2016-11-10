@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-block">
                        <p class="lead">
                            Вход
                        </p>
                        <hr>
                        <form action="/users/login" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="email" class="col-xl-3 col-form-label">
                                    Email
                                </label>
                                <div class="col-xl-9">
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-xl-3 col-form-label">
                                    Пароль
                                </label>
                                <div class="col-xl-9">
                                    <input type="password" class="form-control" id="password" placeholder="Пароль" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-xl-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary">Войти</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-block">
                        <p class="lead">
                            Регистрация
                        </p>
                        <hr>
                        <form action="/users" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="email" class="col-xl-3 col-form-label">
                                    Email
                                </label>
                                <div class="col-xl-9">
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-xl-3 col-form-label">
                                    Пароль
                                </label>
                                <div class="col-xl-9">
                                    <input type="password" class="form-control" id="password" placeholder="Пароль" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="confirmPassword" class="col-xl-3 col-form-label">
                                    Подтверждение пароля
                                </label>
                                <div class="col-xl-9">
                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Подтверждения пароля" name="confirmPassword">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-xl-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary">Регистрация</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
