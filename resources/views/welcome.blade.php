<!-- filepath: c:\Users\souvi\OneDrive\Desktop\Home_Designer Project\interiordesigner\resources\views\welcome.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Designer</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! Add your custom styles here */
            </style>
        @endif
    </head>
    <body class="bg-[#F0F8FF] dark:bg-[#D3D3D3] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        {{-- <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6">
            <nav class="flex items-center justify-end gap-4">
                @if (Route::has('login'))
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#1b1b18] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#1b1b18] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#1b1b18] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </nav>
        </header> --}}

        <main class="text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Home Designer</h1>
            <p class="text-lg text-[#706f6c] mb-6">
                Transform your living spaces with ease. Home Designer helps you create stunning interiors that reflect your style and personality.
            </p>
            <div class="flex justify-center gap-4 mt-8">
                <a
                    href="{{ route('register') }}"
                    class="px-6 py-2 bg-[#1b1b18] text-white rounded-sm hover:bg-[#3E3E3A] text-sm"
                >
                    Get Started
                </a>
                <a
                    href="{{ route('login') }}"
                    class="px-6 py-2 border border-[#1b1b18] text-[#1b1b18] rounded-sm hover:bg-[#1b1b18] hover:text-white text-sm"
                >
                    Log In
                </a>
            </div>
        </main>
    </body>
</html>