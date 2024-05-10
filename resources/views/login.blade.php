<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ $title }}</title>
</head>
<body>

<div class="topnav">
    <a href="/">Home</a>
    <a href="/reg">Регистрация</a>
    <a class="active" href="/login">Авторизация</a>
    <a href="/news">Новости</a>
    <a href="/about">О нас</a>
</div>

<form id="logh" action="/login" method="post">
    @csrf
    <div class="container">
        <h1>Login</h1>
        <hr>

        <label for="email"><b>Электронная почта</b></label>
        <label>
            <input type="text" placeholder="Введите электронную почту" name="email" required>
        </label>

        <label for="psw"><b>Пароль</b></label>
        <label>
            <input type="password" placeholder="Введите пароль" name="psw" required>
        </label>
        <hr>

        <p>Создавая учетную запись, вы соглашаетесь с нашими <a href="/login">Условиями и Конфиденциальностью.</a>.</p>
        <button type="submit" class="registerbtn">Login</button>
    </div>

    <div class="container signin">
        <p>У вас нет учетной записи? <a href="/reg">Зарегистрироваться.</a>.</p>
    </div>
</form>
</body>
</html>