<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="navbarContainer">
        <a id="navbarElement1" href="{{url('/')}}">
            <img src="../logo.svg" alt="logo" id="logo"/>
        </a>
        <a id="navbarElement2" href="{{route('info.about')}}">
            <div id="navbarText">@lang('welcome.about')</div>
        </a>
        <a id="navbarElement3" href="{{route('auth.logout')}}">
            <div id="navbarText">@lang('welcome.logout')</div>
        </a>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>