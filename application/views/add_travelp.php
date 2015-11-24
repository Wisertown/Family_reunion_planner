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
		<div id="text_hold">
			<h1>Create Your New Travel Plan!</h1>
			<div>
				<form action="/Trips/create" method="post">
					Destination: <input type="text" name="place">
					<br>
					<br>
					Description: <input type="text" name="description">
					<br>
					<input type="hidden" name="created_by" value="<?= $this->session->userdata('id') ?>">
					<br>
					Travel Date From: <input type="date" name="d_from">
					<br>
					<p><i>Date from <strong>MUST</strong> be before Date to</i></p>
					Travel Date To: <input type="date" name="d_to">
					<br>
					<input type="submit" value="Add">
				</form>
			</div>
			<div id="errors">
				<?= $this->session->flashdata("errors"); ?>
			</div>
		</div>
	</div>
</body>
</html>