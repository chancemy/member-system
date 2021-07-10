@extends('layouts.template')
@section('css')

@endsection
@section('main')
    @foreach ($news as $new)
        {{-- @php
        dd($new);
        @endphp --}}
    <h1>{{ $new->title }}</h1>
    <h2>{{ $new->publish_date }}</h2>
    <div>{!! $new->content !!}</div>
    @endforeach
@endsection
@section('js')

@endsection
