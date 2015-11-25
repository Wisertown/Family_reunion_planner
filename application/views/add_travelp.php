<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
	<meta charset="utf-8">
	<title>Add Your Travel Plan</title>
</head>
<body>
	<a href="/dashboard"><p>Dashboard</p></a>
	<a href="/Trips/logout_user"><p>Logout</p></a>
	<div id="the_wrap">
		<h1 class="h1">Create Your Reunion Location</h1>
			<form action="/Trips/create" method="post" id="create_trip">
				<div id="cont">
					<div id="g1">
						Destination:<br>
						<input type="text" name="place" class="in">
						<br>
						<br>
						Description: <br>
						<textarea name="description" id="" cols="30" rows="10"></textarea>
						<br>
						<br>
					</div>
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
					<input type="submit" value="Add" class="btn">
				</div>
			</form>
		<div id="errors">
			<?= $this->session->flashdata("errors"); ?>
		</div>
	</div>
</body>
</html>