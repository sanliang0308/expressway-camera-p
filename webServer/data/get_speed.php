<?php
	// Import anything necessary
	include('../include/helper.php');
	$con = include('db-connect-query.php');

	if (isset($_GET["dir"])) {
		// do quick basic auth
		$dir = mysqli_real_escape_string($con, $_GET["dir"]);

		if ($dir == 'inbound') {
			$speed = getLatest($con, "inbound", "speed");
		}
		elseif ($dir == 'outbound') {
			$speed = getLatest($con, "outbound", "speed");
		}
		else {
			$speed = -1;
		}

		$speed = round($speed);

		echo $speed;
	}
	else {
		echo '-1';
	}
?>