@extends('layouts.main')

@section('main-content')
    <div class="comic-detail">
        <div class="hero">
            <div class="container">
                <div class="img-container">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <div class="comic-book">comic book</div>
                    <div class="gallery">view gallery</div>
                </div>
            </div>
            <div class="bottom-hero"></div>
        </div>
        <section class="details">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h1 class="comic-title">{{ $comic['title'] }}</h1>
                        <div class="infos">
                            <div class="left-infos">
                                <div>
                                    U.S. Price:
                                    <span class="price">{{ $comic['price'] }}</span>
                                </div>
                                <div class="availability">available</div>
                            </div>
                            <div class="right-infos">
                                Check Availability
                            </div>
                        </div>
                        <div class="description">
                            {{ $comic['description'] }}
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="adv">advertisement</div>
                        <img src="{{ asset('images/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection