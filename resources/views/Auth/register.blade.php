@extends("master.layout")

@section('content')
<div class="container" >
    <div class="row">
    <div>
        <h1>Register Page</h1>
        <form action="/register" method="POST">
            @csrf
            <label class="form-label" for="name">Name:</label>
            <input placeholder="input name" class="form-control" type="text" id="name" name="name" required>
            <br>
            <label class="form-label" for="email">Email:</label>
            <input placeholder="input email" class="form-control" type="email" id="email" name="email" required>
            <br>
            <label class="form-label" for="password">Password:</label>
            <input placeholder="input password" class="form-control" type="password" id="password" name="password" required>
            <br>
            <label class="form-label" for="password">Password Again:</label>
            <input placeholder="confrim password" class="form-control" type="password" id="password" name="password_confirmation" required>
            <br>
            <br>
            <div class="mb-3">
                <button class="btn btn-dark" type="submit">Register</button>
            </div>
        </form>
        <a href="/login">You have an account?</a>
    </div>
    </div>
</div>
@endsection