<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="/assets/styles.css">
	<meta charset="utf-8">
	<title>Vacation Dashboard</title>
</head>
<body>
	<a href="/Trips/logout_user"><p>Logout</p></a>
	<h1>Hello, <?= $user['name'] ?>!</h1>
	<div id="your_vacation">
		<h3>Your Trip Schedules:</h3>
		<div>
			<table border=>
				<tr>
					<th>Destination</th>
					<th>Travel Start Date</th>
					<th>Travel End Date</th>
					<th>Plan</th>
				</tr>
			<?php foreach($my_trips as $my_trip) { ?>
				<tr>
					<td>
						<a href="/trip_view/<?= $my_trip['va_id'] ?>"><p><?= $my_trip['place'] ?></p></a>
					</td>
					<?php $date = strtotime($my_trip["d_from"]); ?>
					<td><?= date('M d Y', $date) ?></td>
					<?php $date = strtotime($my_trip["d_to"]); ?>
					<td><?= date('M d Y', $date) ?></td>
					<td><?= $my_trip['description'] ?></td>
					
    			</tr>
        	<?php } ?>
        	</table>
        </div>
	</div>
	<div id="Others_plans">
		<h3>Other's Travel Plans</h3>
		<div>
			<table border=>
				<tr>
					<th>Name</th>
					<th>Destination</th>
					<th>Travel Start Date</th>
					<th>Travel End Date</th>
					<th>Do You Want To Join?</th>
				</tr>
			<?php foreach($others_trips as $o_trips) { ?>
				<tr>
					<td><p><?= $o_trips['name'] ?></p></td>
					<td><a href="/trip_view/<?= $o_trips['tr_id'] ?>"><p><?= $o_trips['place'] ?></td>
					<?php $date = strtotime($o_trips["d_from"]); ?>
					<td><?= date('M d Y', $date) ?></td>
					<?php $date = strtotime($o_trips["d_to"]); ?>
					<td><?= date('M d Y', $date) ?></td>
					<td><a href="/join/<?= $o_trips['tr_id'] ?>">JOIN!</td>
        		</tr>
        	<?php } ?>
        	</table>
        </div>
	</div>
	<a href="/add_travelp">Add Travel Plan</a>
</body>
</html>