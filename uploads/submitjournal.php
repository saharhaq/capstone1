<?php
	// connect to the database
	$dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
		or die(mysqli_connect_error());

	// grab the form data
	$hoursofstudent= mysqli_real_escape_string($dbc, strip_tags($_POST['hoursofstudent']));
	$activityofstudents = mysqli_real_escape_string($dbc, strip_tags($_POST['activityofstudents']));
	$description = mysqli_real_escape_string($dbc, strip_tags($_POST['description']));
	

$sql = "INSERT INTO `Hours` (`StudentID`, `Hours`, `Activity`, `Description`, `Approval`, `Entrytime`) VALUES (" .
	"'" . $flightNum . "', " .
	"'" . $month . "', " .
	"'" . $day . "', " .
	"'" . $year . "', " .
	"'" . $hour . "', " .
	"'" . $minute . "', " .
	"'" . $opinion . "'" .
	");";
	
			$result = mysqli_query($dbc, $sql)
		or die("Could not submit data: " . mysqli_error($dbc));

		echo "<br/>Thank you for your submission<br/>";
	
		
	
	mysqli_close($dbc);
?>