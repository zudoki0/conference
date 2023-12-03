@extends('app')

@section('title', 'About Page')

@section('content')
    <h1>This is an About Page</h1>
    <form action="#" method="POST">
        <input type="text" class="datepicker" placeholder="Select date">
    </form>
        <script src="{{ mix('js/app.js') }}"></script> 
@endsection