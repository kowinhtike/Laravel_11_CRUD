@extends("master.layout")

@section('content')
<div class="container" >
    <div class="row">
    <div>
        <h1>Edit Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label class="form-label" for="title">Title:</label>
            <input class="form-control" type="text" id="title" name="title" value="{{ $post->title }}" required>
            <br>
            <label class="form-label" for="content">Content:</label>
            <textarea class="form-control" id="content" name="content" required>{{ $post->content }}</textarea>
            <br>
            <div class="mb-3">
                <button class="btn btn-dark" type="submit">Update</button>
            </div>
        </form>
        <a href="{{ route('posts.index') }}">Back to list</a>
    </div>
    </div>
</div>
@endsection
