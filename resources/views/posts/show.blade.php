@extends('master.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div>
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->content }}</p>
                <a href="{{ route('posts.index') }}">Back to list</a>
            </div>
        </div>
    </div>
@endsection
