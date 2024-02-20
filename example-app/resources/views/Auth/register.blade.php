<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <h2>Register Form</h2>
            <form class="login-form" action = "/register" method = "POST">
                @csrf
                {{ $errors->first('name') }}
                <input type="text" placeholder="name" name = "name" />
                {{ $errors->first('email') }}
                <input type="email" placeholder="email" name = "email"/>
                {{ $errors->first('password') }}
                <input type="password" placeholder="password" name = "password"/>
                <input type="password" placeholder="confirm password" name = "password_confirmation"/>
                <button type = "submit">register</button>
            </form>
        </div>
    </div>
</body>

</html>

</html>