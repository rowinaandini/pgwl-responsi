<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap 5.3.3 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom CSS -->
    <style>
        .custom-header {
            background-color: #F7F7F7; /* Warna biru */
            text-align: center;
        }
        .custom-header h2 {
            color: #1D1919; /* Warna teks putih */
        }
        .custom-body {
            background-color: #EEEEEE; /* Warna biru untuk seluruh body */
            color: #929AAB; /* Warna teks putih untuk kontras */
        }
        .custom-container {
            background-color: #EEEEEE; /* Warna biru untuk container */
            color: #1D1919; /* Warna teks putih */
        }
        .custom-card {
            background-color: #929AAB; /* Warna biru untuk card */
            color: #1D1919; /* Warna teks putih */
        }
        .custom-card-header {
            background-color: #929AAB; /* Warna biru untuk card header */
            color: #1D1919; /* Warna teks putih */
        }
    </style>
</head>

<body class="font-sans antialiased custom-body">
    <div class="min-h-screen">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="custom-header shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <!-- Bootstrap 5.3.3 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
