@extends('layouts.app')

@section('title')
    Create a post
@endsection
@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="mb-3">
            <label for="formTitle" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="formTitle">
        </div>
        <div class="mb-3">
            <label for="formDescription" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="formDescription"></textarea>
        </div>
        <div class="mb-3">
            <label for="formCreator" class="form-label">Post Creator</label>
            <select name="post_creator" id="formCreator" class="form-select" aria-label="Select Author">
                <option value="1">Ahmed</option>
                <option value="2">Mohammed</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
