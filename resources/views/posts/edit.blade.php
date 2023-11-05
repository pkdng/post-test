@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Post</h1>
    <form method="POST" action="/post/update">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $posts->id }}" name="id">
        <div class="form-group pb-3">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $posts->title }}" required>
        </div>
        <div class="form-group pb-3">
            <label for="content">Content:</label>
            <textarea class="form-control" id="content" name="content" required>{{ $posts->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
@endsection
