<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png" sizes="16x16" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #19293a;
            /* Light background for better contrast */
        }

        nav {
            background-color: #343a40;
            /* Dark background for the navbar */
            color: #ffffff;
            padding: 1rem;
        }

        nav a {
            color: #ffffff;
            margin: 0 1rem;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        nav form {
            display: inline;
            /* Align logout button with links */
        }

        main {
            padding: 2rem;
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #343a40;
            color: #ffffff;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav>
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit" style="background:none; border:none; color: white; cursor: pointer;">Log
                        Out</button>
                </form>
            @else
                <a href="{{ route('login') }}">Log in</a>
            @endauth
        </nav>

        <main>
            @yield('content')
        </main>

        <footer>
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>
