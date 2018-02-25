<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="/meeting/new">
		 {{ csrf_field() }}
		<input type="text" name="scheduled_by" placeholder="scheduled_by">
		<br>
		<input type="date" name="date_time_from" ><br>
		<input type="date" name="date_time_to" ><br>
		<input type="text" name="meeting_details" placeholder="meeting_details"><br>
		<select name="meeting_room_id">
			@foreach ($rooms as $room)
			<option value="{{ $room->id }}">{{ $room->name }}</option>
			@endforeach
		</select>
		<button type="submit">Save</button>
	</form>
</body>
</html>