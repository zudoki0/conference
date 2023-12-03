@extends('app')

@section('title', 'Register Page')

@section('content')
<div id="registerContainer">
    <form id="registerForm" action="{{route('auth.save')}}" method="post">

        @if(Session::get('success'))
        <div class="text-success">{{Session::get('success')}}</div>
        @endif

        @if(Session::get('fail'))
        <div class="text-danger">{{Session::get('fail')}}</div>
        @endif

        @csrf

        <div class="registerDiv">
            <img id="userIcon" src="../user.svg" alt="Password" class="registerIcon"/>
            <input class="registerInput" type="text" name="username" placeholder="Enter username" value="{{old('username')}}">
        </div>
        <div class="text-danger-container">
            <span class="text-danger">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="registerDiv">
            <img id="emailIcon" src="../email.svg" alt="Email" class="registerIcon"/>
            <input class="registerInput" type="text" name="email" placeholder="Enter email address" value="{{old('email')}}">
        </div>
        <div class="text-danger-container">
            <span class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="registerDiv">
            <img id="passIcon" src="../pass.svg" alt="Password" class="registerIcon"/>
            <input class="registerInput" type="password" name="password" placeholder="Enter password" value="{{old('password')}}">
        </div>
        <div class="text-danger-container">
            <span class="text-danger">@error('password'){{$message}}@enderror</span>
        </div>
        <div class="registerSubmitContainer">
            <button id="registerSubmit" type="submit">Create</button>
        </div>
        <div class="registerSubmitContainer">
            <a id="noAccountButton" href="{{route('auth.login')}}">@lang('welcome.alreadyHaveAccount')</a>
        </div>
    </form>
</div>
    
@endsection