<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('header', View::make('layouts.header'))
    @yield('extra-header')
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body @yield('body-config')>
    @yield('navigation', View::make('layouts.navigation'))
    @yield('content')
</body>
</html>