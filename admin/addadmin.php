

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
	$Professorid= mysqli_real_escape_string($dbc, strip_tags($_POST['ProfessorId']));
	$Lastname= mysqli_real_escape_string($dbc, strip_tags($_POST['Lastname']));
	$Firstname	 = mysqli_real_escape_string($dbc, strip_tags($_POST['Firstname']));
	

$sql = "INSERT INTO `Admin` (ProfessorID,`Firstname`, `Lastname`) VALUES (" .
	
	"'" .$Professorid. "', " .
	"'" .$Firstname. "', " .
	"'" .$Lastname. "' " .
	//"'" . $_SESSION['classcode']. "' " .
	
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

