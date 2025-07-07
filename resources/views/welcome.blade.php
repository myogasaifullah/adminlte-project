@extends('layouts.welcome-adminlte')

@section('content')
    <header class="mb-4">
        @if (Route::has('login'))
            <nav class="d-flex justify-content-end gap-3">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 align-baseline">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-link">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-link">Register</a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card p-4">
                        <h1 class="mb-3">Let's get started</h1>
                        <p class="text-muted mb-3">Laravel has an incredibly rich ecosystem. We suggest starting with the following.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="https://laravel.com/docs" target="_blank" class="text-primary">Documentation</a>
                            </li>
                            <li class="mb-2">
                                <a href="https://laracasts.com" target="_blank" class="text-primary">Laracasts</a>
                            </li>
                        </ul>
                        <a href="https://cloud.laravel.com" target="_blank" class="btn btn-primary">Deploy now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
