<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
		<h1>{{ $room->name }}</h1>
		<br>
		<label>{{ $room->slug }}</label><br>
		<label>{{ $room->description }} </label><br>
		<label>{{ $room->available_seats }} </label><br>
		IsActive:<label> {{$room->is_active}}</label><br>
		Teleconference:<label>{{$room->can_teleconference}}</label>
		
		@if (!(count($meetings)))

			<p>No scheduled meetings.</p>

		@else 

			<p>{{ count($meetings) }}</p>

		@endif

</body>
</html>