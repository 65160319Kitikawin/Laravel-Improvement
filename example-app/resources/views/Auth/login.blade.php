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
            <h2>Login Form</h2>
            <form class="login-form" action = "/login" method = "POST">

                @csrf
                
                <?php if($errors -> has("login")) echo $errors -> first("login"); ?>

                {{ $errors->first('email') }}
                <input type="email" placeholder="email" name = "email" />
                {{ $errors->first('password') }}
                <input type="password" placeholder="password" name = "password"/>
                <button type = "submit">login</button>
            </form>
        </div>
    </div>
</body>

</html>