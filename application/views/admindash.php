<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
	<meta charset="utf-8">
	<title>Admin Page Smith Family Reunion</title>
</head>
<body>
	<h4>Register A new User</h4>
	<form action="Users/register" method="post">
		<p>Name: <input type="text" name="name"></p>
		<p>Username: <input type="text" name="username"></p>
		<p>Password: <input type="password" name="password"></p>
		<input type="hidden" name="admin_id">
			<h5>*Password should be at least 8 characters</h5>
		<p>Confirm Password: <input type="password" name="pw_confirm"></p>
		<input class="btn" type="submit" value="Register">
	</form>
	<table id="userview_edit">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>username</th>
			<th>password</th>
			<th>created at</th>
			<th>updated at</th>
			<th>votes</th>
			<th>switch status</th>
			<th>created - by (admin)</th>
			<th>edit</th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>	
	</table>
</body>
</html>