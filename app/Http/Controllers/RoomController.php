<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Meeting;
use Carbon\Carbon;

class RoomController extends Controller
{
	    public function index() {
	    $rooms = Room::all();
	    
	    return view ('index', compact('rooms'));
    }
    public function create () {

    	return view ('MeetingRooms.create');
    }
    public function store () {
    	$is_active = 0;
    	$can_teleconference = 0;
    	if (request('is_active') == 'on') {
    		$is_active = 1;
    	}
    	if (request('can_teleconference') == 'on') {
    		$can_teleconference = 1;
    	}
    	 //dd(request('is_active'));
    	   	Room::create([
    		'name' => request('name'),
    		'slug' => request('slug'),
    		'description' => request('description'),
    		'available_seats' => request('available_seats'),
    		'is_active' => $is_active,
    		'can_teleconference' => $can_teleconference
    		
    	]);
    	   	return redirect('/');
    }
    public function edit ($id) {
    	$room = Room::where('id', '=', $id)->first();
    	 	return view ('MeetingRooms.edit', compact('room'));

    }
    public function update ($id) {
    	$is_active = 0;
    	$can_teleconference = 0;
    	if (request('is_active') != null) {
    		$is_active = 1;
    	}else {
    		$is_active = 0;
    	}
    	if (request('can_teleconference') != null) {
    		$can_teleconference = 1;
    	}else {
    		$can_teleconference = 0;
    	}
    	$room = Room::where('id', '=', $id)->first();
    	$room->name = request('name');
    	$room->slug = request('slug');
    	$room->description = request('description');
    	$room->available_seats = request('available_seats');
    	$room->is_active = $is_active;
    	$room->can_teleconference = $can_teleconference;
    	$room->save();

    	return redirect('/view/' . $room->id);
    }
    public function view($id) {
    	$meetings = Meeting::where('meeting_room_id', $id)->where('date_time_from', '>=', Carbon::now())->take(10)->get();
    	$room = Room::where('id', '=', $id)->first();
    	return view('MeetingRooms.view', compact('room', 'meetings'));
    }
}
