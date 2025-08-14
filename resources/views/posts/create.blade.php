@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input 
                type="text" name="title" id="title" class="form-control" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea 
                name="body" id="body" class="form-control" placeholder="Body Text"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
