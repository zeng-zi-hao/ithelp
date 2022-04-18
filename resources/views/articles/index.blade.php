@extends('layouts.article')

@section('main')
    <h1>Article List</h1>
    <a href="{{route('articles.create')}}">add articles</a>
@endsection
