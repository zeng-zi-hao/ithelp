@extends('layouts.article')

@section('main')
    <h1>Article > Add Article</h1>

    <form action="{{route('articles.store')}}" method="post">
        @csrf
        <div class="field my-2">
            <lable for="">Title</lable>
            <input type="text" name="title" class="border border-gray-300 p-2">
        </div>

        <div class="field my-2">
            <label for="">Content</label>
            <textarea name="content" cols="30" rows="10" class="border-gray-300 p-2"></textarea>
        </div>

        <div class="action">
            <button type="submit">add article</button>
        </div>

    </form>
@endsection
