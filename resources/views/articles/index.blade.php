@extends('layouts.article')

@section('main')
    <h1>Article List</h1>
    <a href="{{route('articles.create')}}">add articles</a>

    @foreach($articles as $article)
        <div>
            <h2>
                <a href="{{route('articles.show',$article)}}">
                {{$article->title}}
                </a>
            </h2>
            <p>
                {{$article->created_at}} from {{$article->user->name}} share
            </p>
            <div>
                <a href="{{route('articles.edit',$article)}}">Edit</a>

                <form action="{{route('articles.destroy',$article)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
