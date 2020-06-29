<!-- Metas -->
@if (2>1)
    
@else
    @yield('metas', View::make('layouts.metas'))
@endif

<!-- Scripts -->
@if (2>1)
    
@else
    @yield('scripts', View::make('layouts.scripts'))
@endif

<!-- Fonts -->
@yield('fonts', View::make('layouts.fonts'))

<!-- Styles -->
@yield('styles', View::make('layouts.styles'))