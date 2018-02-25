<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="/edit/{{ $room->id }}">
		 {{ csrf_field() }}
		<input type="text" name="name" placeholder="name" value="{{ $room->name }}">
		<br>
		<input type="text" name="slug" placeholder="slug" value="{{ $room->slug }}"><br>
		<input type="text" name="description" placeholder="description" value="{{ $room->description }}"><br>
		<input type="number" name="available_seats" placeholder="available_seats" value="{{ $room->available_seats }}"><br>
		IsActive:<input type="checkbox" name="is_active" @if ($room->is_active) checked @endif><br>
		Teleconference:<input type="checkbox" name="can_teleconference" @if ($room->can_teleconference) checked @endif>
		<button type="submit">Update</button>
	</form>
</body>
</html>