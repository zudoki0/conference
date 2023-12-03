<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
use Illuminate\Database\Eloquent\Collection;
use App\Enums\Status;

class ConferenceController extends Controller
{
    function get() {
        $id = (int)request('amount');
        if(!isset($id) || $id == 0 || !is_int($id)) {
            $id = 10;
        }
        $amountOfConfereneces = Conference::count();
        if($amountOfConfereneces == 0) {
            return view('main')->with('fail', 'No conferences currently exist.');
        }
        $conferences = new Collection;
        $conferences = Conference::take($id)->get();
        return view('main')->with('conferences', $conferences);
    }
    function add(Request $request) {
        $request->validate([
            'title' => 'required',
            'author' => 'required|max:99',
            'speaker' => 'required|max:99',
            'description' => 'max:999',
            'address' => 'required|max:199',
            'location' => 'max:99',
            'max_participants' => 'required|max:300',
            'status' => 'required|in:' . implode(',', Status::cases()),
            'conference_start_date' => 'required|date',
            'conference_end_date' => 'required|date',
        ]);

        $conference = new Conference;
        $conference->author = $request->author;
        $conference->speaker = $request->speaker;
        $conference->description = $request->description;
        $conference->address = $request->address;
        $conference->location = $request->location;
        $conference->max_participants = $request->max_participants;
        $conference->status = $request->status;
        $conference->conference_start_date = $request->conference_start_date;
        $conference->conference_end_date = $request->conference_end_date;
        $save = $conference->save();
        
        if($save) {
            return back()->with('success', 'New Conference has been successfully added to database');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
}
