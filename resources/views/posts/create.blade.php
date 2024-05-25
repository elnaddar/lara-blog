@extends('layouts.app')

@section('title')
    Create a post
@endsection
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="mb-3">
            <label for="formTitle" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="formTitle" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="formDescription" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="formDescription">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="formCreator" class="form-label">Post Creator</label>
            <select name="post_creator" id="formCreator" class="form-select" aria-label="Select Author">
                @foreach ($users as $user)
                    <option @selected($user->id == old('post_creator')) value="{{ $user['id'] }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
