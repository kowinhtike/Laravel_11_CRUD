@extends("master.layout")

@section('content')
<div class="container" >
    <div class="row">
    <div>
        <h1>Posts</h1>
    <div class="mb-3">
        <a class="btn btn-primary" href="{{ route('posts.create') }}">Create New Post</a>
    </div>
    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif
    <ol>
        @foreach ($posts as $post)
            <li class=" w-50 mb-3 d-flex  flex-row p-3 justify-content-between align-items-center">
                <a class=" fs-5" href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                <div class=" d-flex flex-row ">
                    <a class="btn btn-secondary" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </div>
            </li>
        @endforeach
    </ol>
    </div>
    </div>
</div>
@endsection