@extends('layouts.app')

@section('content')
    <h1>Lista dei fumetti</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comic', ['id' => $loop->index]) }}">
                    <h2>{{ $comic['title'] }}</h2>
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <p>Description: {{ $comic['description'] }}</p>
                    <p>Price: {{ $comic['price'] }}</p>
                    <p>Series: {{ $comic['series'] }}</p>
                    <p>Sale Date: {{ $comic['sale_date'] }}</p>
                    <p>Type: {{ $comic['type'] }}</p>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
