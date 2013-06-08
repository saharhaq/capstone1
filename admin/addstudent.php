<?php
	// this auto-magically inserts header.html here
	require('header.html');  
?>






<?php
session_start();
	
	// connect to the database
	$dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
		or die(mysqli_connect_error());

	// grab the form data
	$StudentId= mysqli_real_escape_string($dbc, strip_tags($_POST['StudentId']));
	$Lastname= mysqli_real_escape_string($dbc, strip_tags($_POST['Lastname']));
	$Firstname	 = mysqli_real_escape_string($dbc, strip_tags($_POST['Firstname']));
	$courseReference = mysqli_real_escape_string($dbc, strip_tags($_POST['courseReference']));
	

$sql = "INSERT INTO `Students` (StudentID,`first_name`, `last_name`, courseReference) VALUES (" .
	"'" .$StudentId. "', " .
	"'" .$Firstname. "', " .
	"'" .$Lastname. "', " .
	"'" . $courseReference . "' " .
	");";
	
	$result = mysqli_query($dbc, $sql)
		or die("Could not submit data: " . mysqli_error($dbc));

		echo "<br/>Thank you for your submission<br/>";
	
		
	
	mysqli_close($dbc);
?>




 

<?php
	// this auto-magically inserts footer.html here
	require('footer.html');
?>
