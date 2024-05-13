<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="topnav">
    <a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
    @guest
        <a href="/reg" class="{{ Request::is('reg') ? 'active' : '' }}">Регистрация</a>
        <a href="/login" class="{{ Request::is('login') ? 'active' : '' }}">Авторизация</a>
    @else
        <a href="/news" class="{{ Request::is('news') ? 'active' : '' }}">Добавить новость</a>
    @endguest
    <a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">О нас</a>

    @auth
        <a class="cnt" href="/profile" class="{{ Request::is('profile') ? 'active' : '' }}">Личный кабинет</a>
        <a href="/logout" class="{{ Request::is('logout') ? 'active' : '' }}">Выход</a>
        <p class="nameUser">Здравствуйте, {{ auth()->user()->name }}</p>
    @endauth
</div>

<div class="container">
    @yield('content')
</div>
</body>
</html>
