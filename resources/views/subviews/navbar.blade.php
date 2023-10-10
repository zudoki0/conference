<div id="navbarContainer">
    <a id="navbarElement1" href="{{url('/')}}">
        <img src="../logo.svg" alt="logo" id="logo"/>
    </a>
    <a id="navbarElement2" href="{{route('info.about')}}">
        <div id="navbarText">@lang('welcome.about')</div>
    </a>
    @if(session('user'))
        <a id="navbarElement3" href="{{route('auth.logout')}}">
            <div id="navbarText">@lang('welcome.logout')</div>
        </a>
    @else
        <a id="navbarElement3" href="{{route('auth.login')}}">
            <div id="navbarText">@lang('welcome.login')</div>
        </a>
    @endif
</div>