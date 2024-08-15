@extends("master.layout")

@section('content')
<div class="container" >
    <div class="row">
    <div>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <label class="form-label" for="title">Title:</label>
            <input placeholder="input title" class="form-control" type="text" id="title" name="title" required>
            <br>
            <label class="form-label" for="content">Content:</label>
            <textarea class="form-control" id="content" name="content" required></textarea>
            <br>
            <div class="mb-3">
                <button class="btn btn-dark" type="submit">Create</button>
            </div>
        </form>
        <a href="{{ route('posts.index') }}">Back to list</a>
    </div>
    </div>
</div>
@endsection