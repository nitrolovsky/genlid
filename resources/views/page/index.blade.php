@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <a class="btn btn-primary" href="/pages/create" role="button">
                    Создать страницу
                </a>
            </div>
        </div>
    </div>
    @if (count($pages) > 0)
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>
                                    Номер
                                </th>
                                <th>
                                    Дата обновления
                                </th>
                                <th>
                                    Дескриптор
                                </th>
                                <th>
                                </th>
                            </tr>
                        </thead>
                        @foreach ($pages as $page)
                            <tr>
                                <td width="10%">
                                    {{ $page->id }}
                                </td>
                                <td width="20%">
                                    {{ $page->updated_at }}
                                </td>
                                <td width="60%">
                                    <a href="/pages/{{ $page->id }}">
                                        {{ $page->descriptor }}
                                    </a>
                                </td>
                                <td width="10%">
                                    <a class="btn btn-warning btn-sm" href="/pages/{{ $page->id }}/edit" role="button"><span class="fa fa-fw fa-pencil"></span></a>
                                    @if ($page->status == 'publish')
                                        <a class="btn btn-danger btn-sm" href="/pages/{{ $page->id }}/hide" role="button"><span class="fa fa-fw fa-eye-slash"></span></a>
                                    @elseif ($page->status == 'hide')
                                        <a class="btn btn-success btn-sm" href="/pages/{{ $page->id }}/publish" role="button"><span class="fa fa-fw fa-eye"></span></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    @endif
@endsection
