<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="/create">
		 {{ csrf_field() }}
		<input type="text" name="name" placeholder="name">
		<br>
		<input type="text" name="slug" placeholder="slug"><br>
		<input type="text" name="description" placeholder="description"><br>
		<input type="number" name="available_seats" placeholder="available_seats"><br>
		IsActive:<input type="checkbox" name="is_active"><br>
		Teleconference:<input type="checkbox" name="can_teleconference">
		<button type="submit">Save</button>
	</form>
</body>
</html>