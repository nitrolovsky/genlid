@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                @if (count($proposals) > 0)
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Дата создания</th>
                                <th>Источник</th>
                                <th>Имя</th>
                                <th>Email</th>
                                <th>Телефон</th>
                                <th>Статус</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($proposals as $proposal)
                                <tr>
                                    <td>{{ $proposal->id }}</td>
                                    <td>{{ $proposal->created_at }}</td>
                                    <td><a href="/pages/{{ $proposal->page_id }}/{{ $proposal->template }}">{{ $proposal->page_id }} {{ $proposal->template }}</a></td>
                                    <td>{{ $proposal->name }}</td>
                                    <td>{{ $proposal->email }}</td>
                                    <td>{{ $proposal->phone }}</td>
                                    <td>
                                        <form method="POST" action="/proposals/{{ $proposal->id }}" class="form-inline">
                                            {{ method_field('PUT') }}
                                            {{ csrf_field() }}
                                            <input class="form-control form-control-sm" type="text" name="status" placeholder="Ожидает звонка" value="{{ $proposal->status }}">
                                            <button type="submit" class="btn btn-primary btn-sm">Ok</button>
                                        </for>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
