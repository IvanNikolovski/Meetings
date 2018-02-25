<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Meeting;

class MeetingController extends Controller
{
    public function create() {
    	$rooms = Room::all();
    	return view ('meetings.create', compact('rooms'));

    }
    public function store() {
    		Meeting::create([
    		'scheduled_by' => request('scheduled_by'),
    		'date_time_from' => request('date_time_from'),
    		'date_time_to' => request('date_time_to'),
    		'meeting_details' => request('meeting_details'),
    		'meeting_room_id' => request('meeting_room_id')

    	]);
    		return redirect('/');
    }
}
