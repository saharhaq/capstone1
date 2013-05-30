<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Welcome Hours</title>
</head>
<body>
  <h2>Welcome RN to BSN Students</h2>

<?php
session_start();
/*if(!empty($_POST)){
  $name_user = $_POST['username'];
  $word_pass = $_POST['password'];
  
  $dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
    or die('Error connecting to MySQL server.');

  $query = "select StudentID, username, password from Students where username='$name_user' and password='$word_pass' ";
    
   
  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
  $row = mysqli_fetch_array($result);
  mysqli_close($dbc);
  
  if($row==NULL)
  echo'Invalid password or username';
  else 
 {
	session_start();
	$_SESSION['employee_id']= $row['StudentID'];
	$name_user = $row['username'];
    $word_pass = $row['password'];

  echo '<img src="browardcollegelogo.jpg" alt="welcome"><br /><br /><br />';
  echo '<a href="NUR3069L.php">NUR3069L</a><br />';
  echo '<a href="NUR4636L.php">NUR4636L<a/><br />';
  echo '<a href="NUR4195C.php">NUR4195C<a/><br />';
  echo '<a href="NUR4945L.php">NUR4945L<a/><br />';
 
 

    
 } 
 }
 else */if (empty($_SESSION['employee_id'])) {
	echo '<p>Please log in to continue</p>';
	echo '<a href="index.html">Login here</a>';
 }
 else {
  echo '<img src="browardcollegelogo.jpg" alt="welcome"><br /><br /><br />';
  echo '<a href="NUR3069L.php">NUR3069L</a><br />';
  echo '<a href="NUR4636L.php">NUR4636L<a/><br />';
  echo '<a href="NUR4195C.php">NUR4195C<a/><br />';
  echo '<a href="NUR4945L.php">NUR4945L<a/><br />';
  echo '<a href="logout.php">LOGOUT</a>';
  echo '<a href="changepassword.php">Change password</a>';
 
 }
?>

<div align="center"><img src="background.jpg" class="bg"></div>
</body>
</html>
