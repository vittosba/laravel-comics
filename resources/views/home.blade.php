@extends('layouts.main')

@section('main-content')
    @if (! empty($comics))
        <ul class="cards">
            @foreach ($comics as $comic)
                <li class="card">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <div class="comic-title">{{ $comic['series'] }}</div>
                </li>
            @endforeach
        </ul>        
    @else
        <h2>Nessun comics trovato</h2>
    @endif
@endsection