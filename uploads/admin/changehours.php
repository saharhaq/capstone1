<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Admin</title>
</head>
<body>
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

</body>
</html>