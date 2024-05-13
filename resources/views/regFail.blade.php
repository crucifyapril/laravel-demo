@extends('app')

@section('content')
<div class="mnmbb">
    <h1>Ошибка регистрации, {{ $message }}</h1>

    <button class="btn-new" onclick="history.back()">Назад</button>
</div>
@endsection