<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
	protected $fillable = ['scheduled_by', 'date_time_from', 'date_time_to', 'meeting_details', 'meeting_room_id' ];
    public function room(){
    	return $this->belongsTo(Room::class);
    }
}
