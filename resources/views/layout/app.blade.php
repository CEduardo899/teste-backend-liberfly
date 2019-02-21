<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/validation/jquery.validate.min.js') }}" defer></script>
    <script src="{{ asset('js/validation/additional-methods.min.js') }}" defer></script>
    <script src="{{ asset('js/validation/localization/messages_pt_BR.min.js') }}" defer></script>
    <script src="{{ asset('js//jquery.mask.min.js') }}" defer></script>
    <script src="{{ asset('js/liberfly.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>