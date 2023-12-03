<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceFormController extends Controller
{
    function create() {
        return view('conferenceForm.addForm');
    }

    function edit() {
        $id = request()->id;
        $conference = Conference::findOrFail($id);
        return view('conferenceForm.updateForm')->with('conference', $conference);
    }

    function view() {
        $id = request()->id;
        $conference = Conference::findOrFail($id);
        return view('conferenceForm.viewForm')->with('conference', $conference);
    }
}
