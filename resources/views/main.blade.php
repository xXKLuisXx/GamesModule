<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @extends('layouts.header')
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    @extends('layouts.navigation')
    @yield('content')
</body>
</html>