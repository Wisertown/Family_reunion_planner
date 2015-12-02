<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
	<meta charset="utf-8">
	<title>Vacation Dashboard</title>
</head>
<body>
	<div class="holder">
		<head class="head">
			<img class="beach" src="/assets/img/beach2.jpg" alt="A Beach" >
		</head>
		<div id="the_wrap">
			<div id="text_hold">
				<div id="cash">
					<a class="logout" href="/Trips/logout_user"><button class="logout_btn" type="button">Logout</button></a>
					<a class="forum" href="/Forums/show"><button class="forum_btn" type="button">Discuss!</button></a>
				</div>
				<h1>Hello, <?= $user['name'] ?>!</h1>
				<?php if($user['votes'] > 0){ ?>
					<h2>You have <strong><?= $user["votes"] ?></strong> Votes</h2>
					<h3>Vote for your favorite place!</h3>
				<?php } else { ?>
					<h2>You have no more votes!</h2>
				<?php } ?>
				<div id="your_vacation">
					<p>The place with the most votes will be the site of the 2016 Smith family Reunion!</p>
					<div>
						<table class="t_bl">
							<tr>
								<th>Destination</th>
								<th>Description</th>
								<th>link</th>
								<th>Total Votes</th>
								<th>Travel Start Date</th>
								<th>Travel End Date</th>
								<th>Vote For it!</th>
							</tr>
						<?php foreach($my_trips as $my_trip){?>
							<tr>
								<td><?= $my_trip['place'] ?></td>
								<td><?= $my_trip['description'] ?></td>
								<td><a href="#" onClick="window.open('<?= $my_trip['link'] ?>', '_blank')"><?= $my_trip['link'] ?></a></td>
								<td><?= $my_trip['votes'] ?></td>
								<td><?= $my_trip['d_from'] ?></td>
								<td><?= $my_trip['d_to'] ?></td>
								<?php if($user['votes'] > 0){ ?>
									<td><form action="Trips/vote/<?= $my_trip['va_id']?>" method="post">
										<input type="hidden" value="<?= $my_trip['va_id']?>">
										<input type="submit" value="Vote!" class="vote">
									</form></td>
								<?php }else{ ?>
										<td><p>No more Votes!</p></td>
								<?php } ?>
							</tr>
							<?php } ?>
			        	</table>
			        </div>
				</div>
				<br>
				<br>
			<?php if($user['switch'] == 0){?>
				<div class="add_travel">	
					<?php echo('<h3><a href="/add_travelp">Add a Destination</a></h3>'); ?>
				</div>
			<?php } else { ?>
				<div>
					<?php echo("<h3>You can only submit one location</h3>"); ?>
				</div>
			<?php } ?>
			</div>
		</div>
		<footer class="foot">
			<img class="cabin" src="/assets/img/cabin.jpg" alt="A cabin">
		</footer>
	</div>
</body>
</html>