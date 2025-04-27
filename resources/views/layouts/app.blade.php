<!-- filepath: c:\Users\souvi\OneDrive\Desktop\Home_Designer Project\interiordesigner\resources\views\layouts\app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <style>
            body {
                background-color: #f8f9fa;
            }
            .navbar {
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .navbar-brand {
                font-weight: bold;
                font-size: 1.5rem;
            }
            .nav-link {
                font-size: 1rem;
                font-weight: 500;
            }
            main {
                padding: 2rem;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            {{-- @include('layouts.navigation') --}}

            <!-- Navigation Bar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white mb-4">
                <div class="container">
                    <a class="navbar-brand text-primary" href="{{ url('/dashboard') }}">Home Designer</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class=" navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="{{ route('dashboard') }}">View Designs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="{{ route('room-layouts.create') }}">Create Layout</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="{{ route('profile.saved-designs') }}">My Profile</a>
                                </li>
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                        @csrf
                                        <button class="btn btn-link nav-link text-dark" type="submit">Logout</button>
                                    </form>
                                </li>
                            @endauth
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="{{ route('login') }}">Login</a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="container bg-white shadow-sm rounded p-4">
                {{ $slot }}
            </main>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>