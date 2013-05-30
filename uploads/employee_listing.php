<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Your Hours</title>
</head>
<body>
  <h2>Your Hours </h2>

<?php

  $dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
    or die('Error connecting to MySQL server.');
	
session_start();
$employee_id = $_SESSION['employee_id'];
$query = "select *from seminars inner join seminaremployee on seminars.seminar_id=seminaremployee.seminar_id where seminaremployee.employee_id='$employee_id'";

  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
  mysqli_close($dbc);

echo "<table width = 30% border = '1' cellspacing = '3' cellpadding = '0'>";
	echo "<tr>"
	."<td> Seminar Id </td>"	
	."<td> Seminar Name </td>"
	."<td> Seminar Date </td>";	

while ($row=mysqli_fetch_array($result)) { 
	$seminar_id=$row["seminar_id"]; 
    $seminar_name=$row["seminar_name"]; 
    $seminar_date=$row["seminar_date"];
	echo "<tr>"
	."<td>".$seminar_id ."</td>"	
	."<td>".$seminar_name ."</td>"
	."<td>".$seminar_date ."</td>";	

} 
echo "</table> <br/>";

?>

<div align="center"><img src="background.jpg" class="bg"></div>
</body>
</html>
