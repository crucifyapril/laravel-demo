@extends('app')

@section('content')
<h1>{{ $message ?? '' }}</h1>
<h1>{!! session()->get('error') !!}</h1>

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
            <input type="password" placeholder="Введите пароль" name="password" required>
        </label>
        <hr>

        <p>Создавая учетную запись, вы соглашаетесь с нашими <a href="/login">Условиями и Конфиденциальностью.</a>.</p>
        <button type="submit" class="registerbtn">Login</button>
    </div>

    <div class="container signin">
        <p>У вас нет учетной записи? <a href="/reg">Зарегистрироваться.</a>.</p>
    </div>
</form>
@endsection