@extends('app')

@section('title', 'View conference')

@section('content')
    <div id="formContainer">
        <div>Title: 
            <input class="formInputs" disabled type="text" name="title" value="{{ $conference->title }}">
        </div>
        <div>Author:
            <input class="formInputs" disabled type="text" name="author" value="{{ $conference->author }}">
        </div>
        <div>Speaker: 
        <input class="formInputs" disabled type="text" name="speaker" value="{{ $conference->speaker }}">
        </div>
        <div>Description: 
        <textarea class="formInputs" disabled name="description" placeholder="{{ $conference->description }}"></textarea>
        </div>
        <div>Address: 
        <input class="formInputs" disabled type="text" name="address" value="{{ $conference->address }}">
        </div>
        <div>Location:
        <input class="formInputs" disabled type="text" name="location" value="{{ $conference->location }}">
        </div>
        <div>Status:
        <input class="formInputs" disabled type="text" name="status" value="{{ $conference->status }}">
        </div>
        <div>Start date:
        <input class="formInputs" disabled type="text" name="conference_start_date" value="{{ $conference->conference_start_date }}">
        </div>
        <div>End date:
        <input class="formInputs" disabled type="text" name="conference_end_date" value="{{ $conference->conference_end_date }}">
        </div>
    </div>
    <div style="width:100%;display:flex;justify-content:center">
        <button onclick="window.location.href='/'" class="formInputs">@lang('welcome.return')</button>
    </div> 
    <script src="{{ mix('js/app.js') }}"></script>
@endsection