@extends('app')

@section('content')
<form action="/reg" method="post">
    @csrf
    <div class="container">
        <h1>Регистрация</h1>
        <p>Заполните форму для создания аккаунта.</p>
        <hr>

        <label for="name"><b>Имя</b></label>
        <label>
            <input type="text" placeholder="Введите имя" name="name" required>
        </label>

        <label for="email"><b>Электронная почта</b></label>
        <label>
            <input type="text" placeholder="Введите электронную почту" name="email" required>
        </label>

        <label for="psw"><b>Пароль</b></label>
        <label>
            <input type="password" placeholder="Введите пароль" name="password" required>
        </label>

        <label for="psw-repeat"><b>Подтвердите пароль</b></label>
        <label>
            <input type="password" placeholder="Повторите пароль" name="password-repeat" required>
        </label>
        <hr>

        <p>Создавая учетную запись, вы соглашаетесь с нашими <a href="/reg">Условиями и Конфиденциальностью.</a>.</p>
        <button type="submit" class="registerbtn">Зарегестрироваться</button>
    </div>

    <div class="container signin">
        <p>У вас уже есть аккаунт? <a href="/login">Войти.</a>.</p>
    </div>
</form>
@endsection
