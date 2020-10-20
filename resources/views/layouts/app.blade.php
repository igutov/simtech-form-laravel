<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Домой</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/form') }}">Список всех записей</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/form/create') }}">Форма создания записи</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ url('/form') }}">Редактирование или удаление записи</a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ url('/form/create') }}"></a>
                </li> --}}
            </ul>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
