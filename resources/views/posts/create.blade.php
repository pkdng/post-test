@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Post</h1>
    <form method="post" action="/post/store">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title" required>
        </div>
        <div class="form-group mb-3">
            <label for="content">Content:</label>
            <textarea class="form-control" id="content" name="content" placeholder="Enter the content" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
@endsection
