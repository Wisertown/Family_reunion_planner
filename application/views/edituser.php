<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
	<meta charset="utf-8">
	<title>Edit User</title>
</head>
<body>
	<div class="edit">
		<br>
		<h4><a href="/admindash">Return to Admin Dashboard</a></h4>
		<h3>Edit <?= $edit['name'] ?></h3>
		<h3>User Id = <?= $edit['id'] ?></h3>
			<table id="userview_edit">
				<tr>
					<th>id</th>
					<th>name</th>
					<th>username</th>
					<th>password</th>
					<th>created at</th>
					<th>votes</th>
					<th>switch status</th>
					<th>UPDATE!</th>
				</tr>
				<tr>
					<form action="/user_update/<?= $edit['id'] ?>" method="post">
						<td><?= $edit['id'] ?></td>
						<input type="hidden" name="id" value="<?= $edit['id'] ?>">
						<td><input type="text" name="name"value="<?= $edit['name'] ?>"></td>
						<td><input type="text" name="username" value="<?= $edit['username'] ?>"></td>
						<td><input type="text" name="password" value="<?= $edit['password'] ?>"></td>
						<td><?= $edit['created_at'] ?></td>
						<td><input type="text" name="votes" value="<?= $edit['votes'] ?>"></td>
						<td><input type="text" name="switch" value="<?= $edit['switch'] ?>"></td>
						<td><input type="submit" class="btn"></td>
					</form>
				</tr>
			</table>
			<br>
			<br>
		<a href="/Trips/logout_user"><p>Logout</p></a>
	</div>
</body>
</html>