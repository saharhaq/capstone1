<?php
	// this auto-magically inserts header.html here
	require('header.html');  
?>



  <h2>Admin</h2>

<?php

  $dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
    or die('Error connecting to MySQL server.');

	foreach($_POST as $key => $value) {
		$key = str_replace("_", ".", $key);
		$query = "update Hours set Approval = '$value' where id='$key'";
		//echo $query;
		$result = mysqli_query($dbc, $query)
			or die('Error querying database.');
	}

  echo 'Hours changed successfully<br />';
 
    mysqli_close($dbc);
?>




<?php
	// this auto-magically inserts footer.html here
	require('footer.html');
?>