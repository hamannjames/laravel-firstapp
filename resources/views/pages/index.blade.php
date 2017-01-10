@extends('app')

@section('content')

<h1>Pages</h1>

@foreach ($pages as $page)
    <article>
        <h2><a href="{{ action('PagesController@slug', [$page->slug]) }}">{{$page->title}}</a></h2>
    </article>
@endforeach

@stop
