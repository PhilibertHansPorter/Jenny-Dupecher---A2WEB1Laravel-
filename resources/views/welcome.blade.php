@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="color: black !important;">Welcome to MPF</h1>
    </div>
    <div class="container">

        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

        </div>
    </div>
@endsection