

<?php
	// this auto-magically inserts header.html here
	require('header1.html');  
?>


<?php
session_start();
	
	// connect to the database
	$dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
		or die(mysqli_connect_error());

	// grab the form data
	$hoursofstudent= mysqli_real_escape_string($dbc, strip_tags($_POST['hoursofstudent']));
	$activityofstudents = mysqli_real_escape_string($dbc, strip_tags($_POST['activityofstudents']));
	$description = mysqli_real_escape_string($dbc, strip_tags($_POST['description']));
	

$sql = "INSERT INTO `Hours` (id,`StudentID`, `Hours`, `Activity`, `Description`,`Class code`) VALUES (" .
	"'".uniqid('',true)."',".
	"'" .$_SESSION['employee_id']. "', " .
	"'" .$hoursofstudent. "', " .
	"'" .$activityofstudents. "', " .
	"'" .$description. "', " .
	"'" . $_SESSION['classcode']. "' " .
	
	");";
	
			$result = mysqli_query($dbc, $sql)
		or die("Could not submit data: " . mysqli_error($dbc));

		 echo "<br/>Thank you for your submission<br/>";
		<br/>
		<br/>
		<br/>
	
		
	
	mysqli_close($dbc);
?>


   <?php
	// this auto-magically inserts footer.html here
	require('footer1.html');
?>