@extends('app')

@section('title', 'Update a conference')

@section('content')
    <form action="{{route('conferences.update')}}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$conference->id}}">
        @include('conferenceForm.formView')  
        <div style="width:100%;display:flex;justify-content:center">
        <button type="submit" class="formInputs">@lang('welcome.update')</button>
        </div>  
    </form>
    <script src="{{ mix('js/app.js') }}"></script>
@endsection