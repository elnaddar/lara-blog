@extends('layouts.app')

@section('title')
    Edit "{{ $post['title'] }}" post
@endsection
@section('content')
    <form>
        @csrf
        <div class="mb-3">
            <label for="formTitle" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="formTitle" value="{{ $post['title'] }}">
        </div>
        <div class="mb-3">
            <label for="formDescription" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="formDescription">{{ $post['description'] }}</textarea>
        </div>
        <div class="mb-3">
            <label for="formCreator" class="form-label">Post Creator</label>
            <select name="post_creator" id="formCreator" class="form-select" aria-label="Select Author">
                <option value="1">Ahmed</option>
                <option value="2">Mohammed</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
