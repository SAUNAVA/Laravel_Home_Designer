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


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
                <div class="container">
                  <a class="navbar-brand" href="{{ url('/') }}">Home Designer</a>
                  <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">
                      @auth
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('room-layouts.create') }}">Create Layout</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('profile.saved-designs') }}">My Profile</a>
                        </li>
                        <li class="nav-item">
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <button class="btn btn-link nav-link" type="submit">Logout</button>
                          </form>
                        </li>
                      @endauth
                      @guest
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                      @endguest
                    </ul>
                  </div>
                </div>
              </nav>
              
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
