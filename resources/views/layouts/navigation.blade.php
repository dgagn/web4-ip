<nav class="">
    <div>Navigation</div>

    @if(Auth::check())
        Authenticated
    @else
        Not auth
    @endif
    <theme-switcher></theme-switcher>
</nav>
