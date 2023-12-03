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
                    <img class="actionIcons" src="../eye.svg" alt="eyeIcon" id="conference-form"/>
                    @if(session('user'))
                    <img class="actionIcons" src="../plus.svg" alt="eyeIcon"/>
                    <img class="actionIcons" src="../edit.svg" alt="eyeIcon"/>
                    @endif
                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<script src="{{ mix('js/app.js') }}"></script> 

