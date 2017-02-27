@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @if (count($proposals) > 0)
                    @foreach ($proposals as $proposal)
                        <div class="py-3">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-xl-right text-lg-right text-md-right text-sm-right text-xs-right">
                                    Номер заявки
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <b>{{ $proposal->id }}</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-xl-right text-lg-right text-md-right text-sm-right text-xs-right">
                                    Дата создания заявки
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <b>
                                        {{ $proposal->created_at }}
                                    </b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-xl-right text-lg-right text-md-right text-sm-right text-xs-right">
                                    Страница источник заявки
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <b>
                                        <a href="/pages/{{ $proposal->page_id }}/{{ $proposal->template }}">{{ $proposal->page_id }} {{ $proposal->template }}</a>
                                    </b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-xl-right text-lg-right text-md-right text-sm-right text-xs-right">
                                    Имя
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <b>
                                        {{ $proposal->name }}
                                    </b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-xl-right text-lg-right text-md-right text-sm-right text-xs-right">
                                    Email
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <b>
                                        {{ $proposal->email }}
                                    </b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-xl-right text-lg-right text-md-right text-sm-right text-xs-right">
                                    Телефон
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <b>
                                        {{ $proposal->phone }}
                                    </b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-xl-right text-lg-right text-md-right text-sm-right text-xs-right">
                                    Статус заявки
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <form method="POST" action="/proposals/{{ $proposal->id }}" class="form-inline">
                                        {{ method_field('PUT') }}
                                        {{ csrf_field() }}
                                        <input class="form-control form-control-sm" type="text" name="status" placeholder="Ожидает звонка" value="{{ $proposal->status }}">
                                        <button type="submit" class="btn btn-primary btn-sm">Ok</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
