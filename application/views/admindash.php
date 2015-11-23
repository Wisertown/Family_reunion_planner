<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
	<meta charset="utf-8">
	<title>Admin Page Smith Family Reunion</title>
</head>
<body>
	<div class="nav">
		<h4><a href="/adminlogin">users</a></h4>
		<h4><a href="/dashboard">reunion locations</a></h4>
		<h4><a href="/forum">posts/messages</a></h4>
	</div>
	<div class="users">
		<h2>Register A new User</h2>
		<form action="Users/register" method="post" class="user_table">
			<p>Name: <input type="text" name="name"></p>
			<p>Username: <input type="text" name="username"></p>
			<p>Password: <input type="password" name="password"></p>
				<h5>*Password should be at least 8 characters</h5>
			<p>Confirm Password: <input type="password" name="pw_confirm"></p>
			<input class="btn" type="submit" value="Register">
		</form>
		<div>
			<?= $this->session->flashdata("success_message"); ?>
		</div>
		<div id="errors">
			<?= $this->session->flashdata("errors"); ?>
		</div>
	</div>
	<br>
		<h2 class="users">All Current Users</h2>
	<div class="table_all">	
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
				<th>Delete</th>
			</tr>
			<?php foreach($useredits as $user_e) { ?>
			<tr>
				<td><?= $user_e['id'] ?></td>
				<td><?= $user_e['name'] ?></td>
				<td><?= $user_e['username'] ?></td>
				<td><?= $user_e['password'] ?></td>
				<td><?= $user_e['created_at'] ?></td>
				<td><?= $user_e['updated_at'] ?></td>
				<td><?= $user_e['votes'] ?></td>
				<td><?= $user_e['switch'] ?></td>
				<td><?= $user_e['admin'] ?></td>
				<td><a href="edit/<?= $user_e['id'] ?>">Edit this person</a></td>
				<td> 
					<form action="Users/delete/<?= $user_e['id'] ?>" method="Post">
						<input type="hidden" name="id" value="<?= $user_e['id'] ?>">
						<input onclick="return confirm('Are you sure?')" type="submit" value="DELETE">
					</form>
				</td>
			</tr>
			<?php } ?>	
		</table>
	</div>

	<a href="/Trips/logout_user"><p>Logout</p></a>
</body>
</html>