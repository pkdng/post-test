@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Post Detail</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">Created at: {{ $post->created_at->format('Y-m-d') }}</p>
            <p class="card-text">{{ $post->content }}</p>
        </div>
        <div class="card-footer">
            <a href="/post/edit/{{ $post->id }}" class="btn btn-warning">Edit</a>
            <form action="/post/delete/{{ $post->id }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
