@extends("master.layout")

@section('content')
<div class="container" >
    <div class="row">
    <div>
        <h1>Login Page</h1>
        <form action="/login" method="POST">
            @csrf
            <label class="form-label" for="email">Email:</label>
            <input placeholder="input email" class="form-control" type="email" id="email" name="email" required>
            <br>
            <label class="form-label" for="password">Password:</label>
            <input placeholder="input password" class="form-control" type="password" id="password" name="password" required>
            <br>
            <br>
            <div class="mb-3">
                <button class="btn btn-dark" type="submit">Login</button>
            </div>
        </form>
        <a href="/register">Don't have any account?</a>
    </div>
    </div>
</div>
@endsection