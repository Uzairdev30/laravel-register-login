<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Landing Page</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f6f7eb;
            color: #393e41;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        /* Navbar Styling */
        nav {
            background-color: #393e41;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo Styling inside Navbar */
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: #e94f37;
            letter-spacing: 2px;
            display: flex;
            align-items: center;
        }

        .logo .uzair {
            color: #e94f37;
        }

        .logo .dev {
            color: #393e41;
        }
        .logo .dev1 {
            color:rgb(255, 255, 255);
        }

        /* Navbar Links */
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 16px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #e94f37;
        }

        /* Main Content */
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-grow: 1;
            margin-top: 50px;
        }

        /* Logo inside the container */
        .container .logo {
            font-size: 36px;
            font-weight: 700;
            color: #e94f37;
            margin-bottom: 20px;
        }

        /* Button Styling */
        .btn {
            background-color: #e94f37;
            color: white;
            padding: 12px 20px;
            border-radius: 30px;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #393e41;
            color: #f6f7eb;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    @if (Route::has('login'))
        <nav>
            <!-- Logo inside Navbar -->
            <div class="logo">
                <span class="uzair">Uzair</span><span class="dev1">Dev</span>
            </div>

            <!-- Links -->
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        </nav>
    @endif

    <!-- Main Content -->
    <div class="container">
        <!-- Logo inside the container -->
        <div class="logo">
            <span class="uzair">Uzair</span><span class="dev">Dev</span>
        </div>
        
        <div class="message">
            <p>Get started by logging in or registering for a new account.</p>
        </div>
    </div>

</body>
</html>
