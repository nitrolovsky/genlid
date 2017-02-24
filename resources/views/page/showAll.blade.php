@extends('layouts.main')
@section('content')
    @if (count($pages) > 0)
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    @foreach ($pages as $page)
                        <br>
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="embed-responsive embed-responsive-16by9" id="video">
                                    <iframe class="embed-responsive-item" src="{{ $page->video }}" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <b>{{ $page->descriptor }}</b>
                                <br>
                                {{ $page->updated_at }} # {{ $page->id }}
                                <br>
                                <br>
                                <a href="/pages/{{ $page->id }}">{{ $page->offer }}</a>
                                <br>
                                {{ $page->details }}
                                <br>
                                <br>
                                
                                <a href="/pages/{{ $page->id }}/a">
                                    А - чистый
                                </a>
                                <br>
                                <a href="/pages/{{ $page->id }}/b">
                                    B - баннер
                                </a>
                                <br>
                                <a href="/pages/{{ $page->id }}/c">
                                    C - фото
                                </a>
                                <br>
                                <a href="/pages/{{ $page->id }}/d">
                                    D - белое фото
                                </a>
                                <br>
                                <a href="/pages/{{ $page->id }}/e">
                                    E - C+ лучше видео
                                </a>
                                <br>
                                <a href="/pages/{{ $page->id }}/f">
                                    F - A+ лучше видео
                                </a>
                                <br>
                                <a href="/pages/{{ $page->id }}/g">
                                    G - F+
                                </a>

                            </div>
                        </div>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection
