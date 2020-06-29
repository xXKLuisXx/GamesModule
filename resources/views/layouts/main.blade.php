<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('header', View::make('layouts.header', ['isGame' => $isGame]))
    @yield('extra-header')
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body @yield('body-config')>
    @if ($isGame)
        @yield('credits', View::make('layouts.credits'))
    @else
        @yield('navigation', View::make('layouts.navigation'))
    @endif
    @yield('content')
</body>
</html>