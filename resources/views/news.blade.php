@extends('app')

@section('content')
    <form action="/submit-news" method="post">
        @csrf
        <div>
            <label for="title">Заголовок:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="article_text">Текст статьи:</label>
            <textarea id="article_text" name="body" required></textarea>
        </div>
        <div>
            <button type="submit">Отправить новость</button>
        </div>
    </form>
    <div class="container">
        <h1>{{ $message ?? '' }}</h1>
    </div>
@endsection

