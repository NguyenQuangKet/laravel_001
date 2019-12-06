<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
@if($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
@endif
<form action="{{ route('login.login') }}" method="post">
{{--    <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
    @csrf
    <input type="email" name="email" id="" placeholder="Email ..."><br>
    <input type="password" name="password" id="" placeholder="Password ..."><br>
    <button type="submit">Login</button>
    <a href="{{ route('register.show') }}">Register</a>
</form>
</body>
</html>
