<div id="formContainer">
    <input class="formInputs" type="text" name="title" placeholder="Title" value="{{ old('title', optional($conference ?? null)->title) }}">
    <span class="text-danger">@error('title'){{$message}}@enderror</span>
    <input class="formInputs" type="text" name="author" placeholder="Author" value="{{ old('author', optional($conference ?? null)->author) }}">
    <span class="text-danger">@error('author'){{$message}}@enderror</span>
    <input class="formInputs" type="text" name="speaker" placeholder="Speaker" value="{{ old('speaker', optional($conference ?? null)->speaker) }}">
    <span class="text-danger">@error('speaker'){{$message}}@enderror</span>
    <input class="formInputs" id="descriptionText" type="hidden" name="description" placeholder="Description" value="{{ old('description', optional($conference ?? null)->description) }}">
    <textarea rows="4" cols="50" class="formInputs" id="descriptionTextArea" name="description" placeholder="Description" value="{{ old('description', optional($conference ?? null)->description) }}"></textarea>
    <span class="text-danger">@error('description'){{$message}}@enderror</span>
    <input class="formInputs" type="text" name="address" placeholder="Address" value="{{ old('address', optional($conference ?? null)->address) }}">
    <span class="text-danger">@error('address'){{$message}}@enderror</span>
    <input class="formInputs" type="text" name="location" placeholder="Location" value="{{ old('location', optional($conference ?? null)->location) }}">
    <span class="text-danger">@error('location'){{$message}}@enderror</span>
    <input type="hidden" id="maxPart" name="max_participants" placeholder="Max participants" value="{{ old('max_participants', optional($conference ?? null)->max_participants) }}">
    <div>
        <label for="selectMaxPart" class="formInputs" type="text" placeholder="maxPart">Max participants: </label>
        <select id="selectMaxPart">
            <option value="100">100</option>
            <option value="200">200</option>
            <option value="300">300</option>
        </select>
    </div>
    <input type="hidden" name="status" id="status" value="{{ old('status', optional($conference ?? null)->status) }}">
    <div>
        <label for="selectStatus" class="formInputs" type="text" placeholder="Status">Status: </label>
        <select id="selectStatus">
            <option value="In-Progress">In-Progress</option>
            <option value="Completed">Completed</option>
            <option value="Canceled">Canceled</option>
            <option value="Upcoming">Upcoming</option>
            <option value="Delayed">Delayed</option>
        </select>
    </div>
    <input type="text" class="datepicker" name="conference_start_date" placeholder="Select conference start  date" value="{{ old('conference_start_date'), optional($conference ?? null)->conference_start_date }}">
    <span class="text-danger">@error('conference_start_date'){{$message}}@enderror</span>
    <input type="text" class="datepicker" name="conference_end_date" placeholder="Select conference end  date" value="{{ old('conference_end_date'), optional($conference ?? null)->conference_end_date }}">
    <span class="text-danger">@error('conference_end_date'){{$message}}@enderror</span>
    @if(Session::get('success'))
    <div class="text-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::get('fail'))
    <div class="text-danger">{{Session::get('fail')}}</div>
    @endif
</div>