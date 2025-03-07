<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body class="bg-light text-dark d-flex p-4 min-vh-100 flex-column align-items-center justify-content-center">
        <header class="mb-5">
            @if (Route::has('login'))
                <nav class="d-flex justify-content-end gap-3">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="btn btn-outline-primary btn-sm"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="btn btn-outline-primary btn-sm"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="btn btn-primary btn-sm"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <div class="text-center">
            <h1 class="display-4">Welcome to GPU</h1>
            <p class="lead">
                PT Gorby Putra Utama
            </p>
        </div>

        @if (Route::has('login'))
            <div class="d-none d-lg-block" style="height: 100px;"></div>
        @endif

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
