<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;

class ConferenceController extends Controller
{
    function get() {
        $id = (int)request('amount');
        if(!isset($id) || $id == 0 || !is_int($id)) {
            $id = 20;
        }
        $conferences = new Collection;
        $conferences = Conference::take($id)->get();
        if($conferences->count() == 0) {
            return view('main')->with(['fail' => 'No conferences currently exist.', 'conferences' => []]);
        }
        Log::info('This is an information message.');
        return view('main')->with('conferences', $conferences);
    }
    function add(Request $request) {
        
        $request->validate([
            'title' => 'required|max:40',
            'author' => 'required|max:40',
            'speaker' => 'required|max:40',
            'description' => 'required|max:999',
            'address' => 'required|max:60',
            'location' => 'max:60',
            'max_participants' => 'required',
            'status' => 'required',
            'conference_start_date' => 'required|date',
            'conference_end_date' => [
                'required',
                'date',
                'after_or_equal:conference_start_date'
            ],
        ]);

        $conference = new Conference;
        $conference->title = $request->title;
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
    function delete($id) {
        $conference = Conference::find($id);
        $conference->delete();
        return back()->with('success', 'Conference has been successfully deleted');
    }

    function update(Request $request) {
        $conference = Conference::findOrFail($request->id);
        $validated = $request->validate([
            'title' => 'required|max:40',
            'author' => 'required|max:40',
            'speaker' => 'required|max:40',
            'description' => 'required|max:999',
            'address' => 'required|max:60',
            'location' => 'max:60',
            'max_participants' => 'required',
            'status' => 'required',
            'conference_start_date' => 'required|date',
            'conference_end_date' => [
                'required',
                'date',
                'after_or_equal:conference_start_date'
            ],
        ]);
        $conference->fill($validated);
        $save = $conference->save();

        if($save) {
            return back()->with('success', 'Conference has been successfully updated');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    
    }

}
