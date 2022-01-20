<header class="container">
    <div class="main-header">
        <img src="{{ asset('images/dc-logo.png') }}" alt="">

        <ul>
            <li @if (Request::route()->getName() === 'home') class="active" @endif>
                <a href="{{ route('home') }}">Comics</a>
            </li>
            <li>News</li>
        </ul>
    </div>
</header>