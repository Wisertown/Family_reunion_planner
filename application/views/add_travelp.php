<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
	<meta charset="utf-8">
	<title>Add Your Travel Plan</title>
</head>
<body>
	<div id="chunk">
		<head id="head">
			<a href="/dashboard"><h3>Dashboard</h3></a>
			<a href="/Trips/logout_user"><p>Logout</p></a>
		</head>
	<h1 id="welc">Create Your Reunion Location</h1>	
			<form action="/Trips/create" method="post" id="t_create">
		<div id="hold_input">
			<div id="g1_bubble">
				<div id="g1">
					Destination:<br>
					<input type="text" name="place" class="in">
					<br>
					<br>
					Description: <br>
					<textarea id="txtra" cols="30" rows="8" name="description"></textarea>
					<br>
					<br>
				</div>
			</div>
			<div id="g2_bubble">
				<div id="g2">
					Link: <br>
					<input type="text" name="link" class="in">
					<br>
					<input type="hidden" name="created_by" value="<?= $this->session->userdata('id') ?>">
					<br>
					Travel Date From:<br>
					<input type="date" name="d_from" class="in">
					<br>
					<p><i>Date from <strong>MUST</strong> be before Date to</i></p>
					Travel Date To:<br>
					<input type="date" name="d_to" class="in">
					<br>
					<br>
				</div>
			</div>
			<div id="g3_bubble">
				<div id="g3_errors">
					<?= $this->session->flashdata("errors"); ?>
				</div>
			</div>
		</div>		
			<input type="submit" value="Add" class="btn1">
			</form>
	</div>
</body>
</html>