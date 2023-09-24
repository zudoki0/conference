<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="navbarContainer">
        <a id="navbarElement1" href="{{url('/')}}">
            <img src="../logo.svg" alt="logo" id="logo"/>
        </a>
        <a id="navbarElement2" href="{{route('info.about')}}">
            <div id="navbarText">ABOUT</div>
        </a>
        <a id="navbarElement3" href="{{route('auth.login')}}">
            <div id="navbarText">LOGIN</div>
        </a>
    </div>
    <div id="loginContainer">
        <form id="loginForm" action="{{route('auth.check')}}" method="post">
            
            @if(Session::get('success'))
            <div class="text-success">{{Session::get('success')}}</div>
            @endif

            @if(Session::get('fail'))
            <div class="text-fail">{{Session::get('fail')}}</div>
            @endif

            @csrf
        
            <div class="loginDiv">
                <img id="emailIcon" src="../email.svg" alt="Email" class="loginIcon"/>
                <input class="loginInput" type="text" name="email" placeholder="Enter email address">
            </div>
            <div class="text-danger-container">
                <span class="text-danger">@error('email'){{$message}}@enderror</span>
            </div>
            <div class="loginDiv">
                <img id="passIcon" src="../pass.svg" alt="Password" class="loginIcon"/>
                <input class="loginInput" type="password" name="password" placeholder="Enter password">
            </div>
            <div class="text-danger-container">
                <span class="text-danger">@error('password'){{$message}}@enderror</span>
            </div>
            <div class="loginSubmitContainer">
                <button id="loginSubmit" type="submit">@lang('welcome.signIn')</button>
            </div>
            <div class="loginSubmitContainer">
                <a id="noAccountButton" href="{{route('auth.register')}}">@lang('welcome.dontHaveAccount')</a>
            </div>
        </form>
    </div>
</body>
</html>