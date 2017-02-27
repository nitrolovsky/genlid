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
                                <a href="/pages/{{ $page->id }}/g">{{ $page->offer }}</a>
                                <br>
                                {{ $page->details }}
                            </div>
                        </div>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection
