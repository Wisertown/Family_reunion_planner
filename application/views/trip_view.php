<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="/assets/styles.css">
	<meta charset="utf-8">
	<title><?= $trip_data[0]['place'] ?></title>
</head>
<body>
	<a href="/dashboard"><p>Back to the Dashboard</p></a>
	<a href="/Items/logout_user"><p>Logout</p></a>
	<div id="wrapper">
		<h1>Trip Location: <?= $trip_data[0]['place'] ?></h1>
		<p>Planned By: <?= $trip_data[0]['name'] ?></p>
		<p>Description: <?= $trip_data[0]['description'] ?></p>
		<?php $date = strtotime($trip_data[0]["d_from"]); ?>
		<p>Start Date: <?= date('M d Y', $date) ?></p>
		<?php $date = strtotime($trip_data[0]["d_to"]); ?>
		<p>End Date: <?= date('M d Y', $date) ?></p>
		<div>
			<h3>Other users's joining the trip</h3>
			<?php foreach($trip_v as $trip_v) { ?>
				<p><?= $trip_v['name'] ?></p>
        	<?php } ?>
		</div>
	</div>
</body>
</html>