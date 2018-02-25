<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		@foreach($rooms as $room)

		<h1>{{ $room->name }}</h1>
		<br>
		<label>{{ $room->slug }}</label><br>
		<label>{{ $room->description }} </label><br>
		<label>{{ $room->available_seats }} </label><br>
		IsActive:<label> {{$room->is_active}}</label><br>
		Teleconference:<label>{{$room->can_teleconference}}</label> <br><br>
		@endforeach

</body>
</html>