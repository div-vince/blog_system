<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>My Blog</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@800&family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        {{-- CSS Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    </head>
    <body class="antialiased">
        
            <header id="header" class="header fixed-top d-flex align-items-center">
                <div class="container d-flex align-items-center justify-content-between">
                    
                    <img id="logo" src="{{ asset('assets/img/Logo-Crop.png') }}" alt="logo-my-blog">

                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a href="#gallery">Profile</a></li>
                            <li><a href="#hero">Home</a></li>
                            <li><a href="#about">Post</a></li>
                            <li><a href="#menu">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>

                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block btn-authentication">
                                    @auth
                                    
                                        <a href="{{ url('/home') }}" class="btn-book-a-table">Home</a>

                                    @else

                                        <a href="{{ route('login') }}" class="btn-book-a-table">Log in</a>

                                        @if (Route::has('register'))                       

                                            <a href="{{ route('register') }}" class="mx-1 btn-register">Register</a>

                                        @endif
                                    @endauth
                                </div>
                            @endif

                            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
                </div>
            </header>


        {{-- JS Bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
