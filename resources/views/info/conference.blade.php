@if(session('user'))
<div id="addButtonContainer">
    <img class="actionIcons" style="position:absolute; margin-top: 20px; right:5%;" onclick="window.location='{{ route('conferences.create') }}'" src="../plus.svg" alt="plusIcon"/>
</div>
@endif
<table id="dataContainer">
    <thead>
        <tr>
            <th class="columnNames">Title</th>
            <th class="columnNames">Speaker</th>
            <th class="columnNames">Status</th>
            <th class="columnNames">Start Date</th>
            <th class="columnNames">End Date</th>
            <th class="columnNames">Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($conferences as $conference)
            <tr>
                <td class="rowData">{{ $conference->title }}</td>
                <td class="rowData">{{ $conference->speaker }}</td>
                <td class="rowData">{{ $conference->status }}</td>
                <td class="rowData">{{ $conference->conference_start_date }}</td>
                <td class="rowData">{{ $conference->conference_end_date }}</td>
                <td class="rowData" id="editIcons">
                    <a href="{{ route('conferences.view',['id' => $conference->id]) }}">
                        <img class="actionIcons" src="../eye.svg" alt="eyeIcon" id="conference-form"/>
                    </a>
                    @if(session('user'))
                    <a href="{{ route('conferences.edit',['id' => $conference->id]) }}">
                    <img class="actionIcons" src="../edit.svg" alt="editIcon"/>
                    </a>
                    <form style="margin:0;width:32px; height:32px;" action="{{ route('conferences.delete', $conference->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="padding:0;border:0;background:transparent;width:32px; height:32px;">
                            <img class="actionIcons" src="../cross.svg" alt="crossIcon" onclick="return confirm('Are you sure you want to delete this conference?')"/>
                            </button>
                    </form>
                    @endif
                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<script src="{{ mix('js/app.js') }}"></script> 

