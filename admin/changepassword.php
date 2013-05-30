
<?php
	// this auto-magically inserts header.html here
	require('header.html');  
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>
</head>
<body>
  <h2>Change Password</h2>

<?php

session_start();

if (empty($_SESSION['ProfessorID'])) {
	echo '<p>Please log in to continue</p>';
	echo '<a href="index.html">Login here</a>';
 }
 else {
  
  $dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
    or die('Error connecting to MySQL server.');

  $query = "select first_name, last_name,password from Students where StudentID='".$_SESSION['ProfessorID']."'";
    
    
  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
  $row = mysqli_fetch_array($result);
  mysqli_close($dbc);
  $first_name = $row['Firstname'];
  $last_name = $row['Lastname'];
 
  

  //echo 'Thank You.<br />';
  echo 'Your first name is : ' . $first_name . '<br />';
  echo 'Your last name is : ' . $last_name . '<br />';
  echo 'Your student ID is : ' .$_SESSION['ProfessorID'] . '<br />';
  
  echo '<p> create username and password</p>';
  echo '<form method="post" action="lookupprofile2_1.php">';
  echo '<label for="username">Username : </label>';
  echo '<input type="text" name="username" /><br />';
  echo '<label for="password">Password : </label>';
  echo '<input type="password" name="password" /><br />';
  echo '<input type="hidden" name="empc" value='.$_SESSION['ProfessorID'] .'> <br />';
  echo '<input type="submit" value="Login" name="submit" />';
  echo '</form>';
  
  }
  
?>

<div align="center"><img src="background.jpg" class="bg"></div>
<?php
	// this auto-magically inserts footer.html here
	require('footer.html');
?>
