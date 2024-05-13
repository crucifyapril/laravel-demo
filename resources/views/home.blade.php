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
@endsection
