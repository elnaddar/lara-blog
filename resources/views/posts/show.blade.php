@extends('layouts.app')

@section('title')
    {{ $post['title'] }}
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            Post Info
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post['title'] }}</h5>
            <p class="card-text">{{ $post['description'] }}</p>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            @if ($post->user)
                <h5 class="card-title">Author: {{ $post->user->name }}</h5>
                <p class="card-text">Email: {{ $post->user->email }}</p>
                <p class="card-text">Created At: {{ $post->created_at->format('Y-m-d') }}</p>
                @if ($post->updated_at)
                    <p class="card-text">Last Update: {{ $post->updated_at->format('Y-m-d') }}</p>
                @endif
            @else
                <h5 class="card-title">No Author for this post</h5>
                <p class="card-text">We have no data for this post's author.</p>
            @endif
        </div>
    </div>
@endsection
