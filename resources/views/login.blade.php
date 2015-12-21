<!-- resources/views/auth/login.blade.php -->

<!--Error and notifications bar-->
@if (count($errors) > 0)
    <div class="error"> 
        {{ $errors->first() }}
    </div>
@elseif (session('success'))
    <div class="success">
        {{ session('success') }}
    </div>
@endif

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>