@extends('layouts/main')
@section('content')
<div>
    <p>{{$post->id}}</p><br>
    <p>{{$post->title}}</p><br>
    <p>{{$post->content}}</p><br>
</div>
<div>
    <a href="{{  route('post.index') }}">Вернуться назад</a>
</div>
@endsection
