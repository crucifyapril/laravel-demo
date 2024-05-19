@extends('app')

@section('content')
    <div class="container-center">
        @foreach($news as $item)
            <h1>{{ $item->title }}</h1>
            <p>{{ $item->body }}</p>

            <p>{{ $item->created_at }}</p>

            <hr>
        @endforeach
    </div>
    <div class="pagination-container">
        <div class="pagination">
            @if ($news->currentPage() > 1)
                <a href="{{ $news->url(1) }}">&laquo;</a>
                <a href="{{ $news->url($news->currentPage() - 1) }}">{{ $news->currentPage() - 1 }}</a>
            @endif
            <a class="active" href="{{ $news->url($news->currentPage()) }}">{{ $news->currentPage() }}</a>
            @if ($news->currentPage() < $news->lastPage())
                <a href="{{ $news->url($news->currentPage() + 1) }}">{{ $news->currentPage() + 1 }}</a>
                <a href="{{ $news->url($news->lastPage()) }}">&raquo;</a>
            @endif
        </div>
    </div>
@endsection
