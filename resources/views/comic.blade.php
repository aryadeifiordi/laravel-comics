@extends('layouts.app')

@section('content')
    <div class="comic-details">
        <h1>{{ $comic['title'] }}</h1>
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        <p>Description: {{ $comic['description'] }}</p>
        <p>Price: {{ $comic['price'] }}</p>
        <p>Series: {{ $comic['series'] }}</p>
        <p>Sale Date: {{ $comic['sale_date'] }}</p>
        <p>Type: {{ $comic['type'] }}</p>
    </div>
@endsection
