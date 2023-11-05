@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog Posts</h1>
    <a href="/post/create" class="btn btn-primary mb-3">Create Post</a>

    <div class="row">
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-3 h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">Publication Date: {{ $post->created_at->format('Y-m-d') }}</p>
                            <p class="card-text">{{ substr($post->content, 0, 100) }} @if (strlen($post->content) > 100)<a href="/post/{{ $post->id }}" class="btn btn-link pl-0">Lihat Selengkapnya</a>@endif</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="/post/edit/{{ $post->id }}" class="btn btn-warning ml-5">Edit</a>
                            <form action="/post/delete/{{ $post->id }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mr-5">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No posts available.</p>
        @endif
    </div>
</div>
@endsection
