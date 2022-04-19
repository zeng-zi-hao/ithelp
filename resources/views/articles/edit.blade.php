@extends('layouts.article')

@section('main')
    <h1>Article > Edit Article</h1>

    @if($errors->any())
        <div class="errors p-3 bg-red-600 text-red-100 font-thin rounded">
            <u1>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </u1>
        </div>
    @endif

    <form action="{{route('articles.update',$article)}}" method="post">
        @method('patch')
        @csrf
        <div class="field my-2">
            <lable for="">Title</lable>
            <input type="text" value="{{$article->title}}" name="title" class="border border-gray-300 p-2">
        </div>

        <div class="field my-2">
            <label for="">Content</label>
            <textarea name="content" cols="30" rows="10" class="border-gray-300 p-2">{{$article->content}}</textarea>
        </div>

        <div class="action">
            <button type="submit">update article</button>
        </div>

    </form>

@endsection
