
        @extends('layout.app')
        
        @section('content')
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <div class="content">
                    <div class="title1 m-b-md">
                        <h3>Soraya Khyabani</h3>
                        <h5>web developer</h5>
                        @include('partials.header')
                    </div>
                </div>
            </div>
        @endsection

