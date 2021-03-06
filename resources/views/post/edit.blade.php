@extends('layouts/main')
@section('content')
    <form action="{{ route('post.update', $post) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" id="content" placeholder="Content" value="{{ $post->content }}"></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image" value="{{ $post->image }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
