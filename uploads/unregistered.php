<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Select Seminar to register</title>
</head>
<body>
  <h2>Confirm Registration</h2>

<?php

session_start();
$seminar_id = $_POST['seminar_id'];
$employee_id = $_SESSION['employee_id'];

$dbc = mysqli_connect('localhost', 'root', '', 'NursingHours')
or die('Error querying database.');
	
$query = "DELETE FROM seminaremployee WHERE employee_id='$employee_id' and seminar_id='$seminar_id'"; 

$result = mysqli_query($dbc, $query)
or die('Error querying database.');
echo 'Unregistered from Seminar<br />';
mysqli_close($dbc);
?>

</body>
</html>
