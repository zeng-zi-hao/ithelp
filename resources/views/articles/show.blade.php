@extends('layouts.article')

@section('main')
    <h1>{{$article->title}}</h1>
    <p>
        {{$article->content}}
    </p>

    <a href="{{route('articles.index')}}">Back Article List</a>
@endsection
