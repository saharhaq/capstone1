
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="new.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>RN to BSN Student Profile</title>
</head>
<body>




<?php
session_start();
if(!empty($_POST)){
  $name_user = $_POST['username'];
  $word_pass = $_POST['password'];
  
  $dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
    or die('Error connecting to MySQL server.');

  
  $query = "select StudentID, username, password from Students where username='$name_user' ";
    
   
  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
  $row = mysqli_fetch_array($result);
  mysqli_close($dbc);
  
  if(crypt( $word_pass,$row['password'])!=$row['password'])
  echo'Invalid password or username';
  else 
 {
	session_start();
	$_SESSION['employee_id']= $row['StudentID'];
	$name_user = $row['username'];
    $word_pass = $row['password'];
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = '1.php';
	header("Location: http://$host$uri/$extra");
exit;
	 }}
?>


</body>
</html>