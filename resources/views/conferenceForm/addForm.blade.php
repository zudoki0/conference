@extends('app')

@section('title', 'Create new conference')

@section('content')
    <form action="{{route('conferences.add')}}" method="POST">
        @csrf
        @include('conferenceForm.formView')    
        <div style="width:100%;display:flex;justify-content:center">
            <button type="submit" class="formInputs">@lang('welcome.create')</button>
        </div>
    </form>
    
    
    <script src="{{ mix('js/app.js') }}"></script>
@endsection