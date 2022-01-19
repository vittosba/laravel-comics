@extends('layouts.main')

@section('main-content')
    <div class="container">
        @if (! empty($comics))
            <div class="cards">
                @foreach ($comics as $comic)
                    <div class="card">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <div class="comic-title">{{ $comic['series'] }}</div>
                    </div>
                @endforeach
                
                <button>load more</button>
            </div>        
        @else
            <h2>Nessun comics trovato</h2>
        @endif
    </div>
@endsection