<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Checklist service</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        html, body {
            width: 100%;
            height: 100%;
        }

        body {
            font-family: 'Nunito', serif;
            background: #f7fafc;
            justify-content: center;
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid fixed-top p-4">
        <div class="col-12">
            <div class="d-flex justify-content-end">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/admin') }}" class="text-muted">Admin</a>
                        @else
                            <a href="{{ route('voyager.login') }}" class="text-muted">Log in</a>

                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid text-center">
        <h1>API Сервис чеклистов</h1>
    </div>
</body>
</html>
