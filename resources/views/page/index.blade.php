@extends('layouts.main')
@section('content')
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
                                <td>
                                    {{ $page->id }}
                                </td>
                                <td>
                                    {{ $page->updated_at }}
                                </td>
                                <td>
                                    <a href="/pages/{{ $page->id }}">
                                        {{ $page->descriptor }}
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="/pages/{{ $page->id }}/edit" role="button"><span class="fa fa-fw fa-pencil"></span></a>
                                    @if ($page->status == 'show')
                                        <a class="btn btn-danger btn-sm" href="/pages/{{ $page->id }}/hide" role="button"><span class="fa fa-fw fa-eye-slash"></span></a>
                                    @elseif ($page->status == 'hide')
                                        <a class="btn btn-success btn-sm" href="/pages/{{ $page->id }}/show" role="button"><span class="fa fa-fw fa-eye"></span></a>
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
