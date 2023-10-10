@extends('app')

@section('title', 'Home Page')

@section('content')
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Speaker</th>
            <th>Address</th>
            <th>Location</th>
            <th>Max participants</th>
            <th>Status</th>
            <th>Start Date</th>
            <th>End Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($conferences as $conference)
            <tr>
                <td>{{ $conference->title }}</td>
                <td>{{ $conference->author }}</td>
                <td>{{ $conference->speaker }}</td>
                <td>{{ $conference->address }}</td>
                <td>{{ $conference->location }}</td>
                <td>{{ $conference->max_participants }}</td>
                <td>{{ $conference->status }}</td>
                <td>{{ $conference->conference_start_date }}</td>
                <td>{{ $conference->conference_end_date }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection