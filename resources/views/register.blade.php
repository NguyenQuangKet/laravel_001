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
<form action="" method="post">
    @csrf
    <input type="text" name="name" id="" placeholder="Name ..."><br>
    <input type="email" name="email" id="" placeholder="Email ..."><br>
    <input type="password" name="password" id="" placeholder="Password ..."><br>
    <input type="password" name="repassword" id="" placeholder="Password ..."><br>
    <button type="submit">Register</button>
    <a href="{{ route('login.show') }}">Login</a>
</form>
</body>
</html>
