@extends('layouts.main')

@section('main-content')
    <div class="container">
        @if (! empty($comics))
            <div class="cards">
                @foreach ($comics as $index => $comic)
                    <div class="card">
                        <a href="{{ route('comic-detail', ['id' => $index]) }}">
                            <img src="{{ $comic['thumb'] }}" alt="">
                            <div class="comic-title">{{ $comic['series'] }}</div>
                        </a>
                    </div>
                @endforeach
                
                <button>load more</button>
            </div>        
        @else
            <h2>Nessun comics trovato</h2>
        @endif
    </div>
@endsection