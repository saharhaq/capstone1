<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Create profile</title>
</head>
<body>
  <h2>Profile</h2>
  
  
   <link rel="stylesheet" href="normalize.css">
 
  <link rel="stylesheet" type="text/css" href="new.css">
  <script src="custom.modernizr.js"></script>
  
  
  
  
  
  
  
  
  
  

<?php
  $StudentID = $_POST['employeecode'];
  
  $dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
    or die('Error connecting to MySQL server.');

  $query = "select first_name, last_name,password from Students where StudentID='$StudentID'";
    
    
  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
  $row = mysqli_fetch_array($result);
  mysqli_close($dbc);
  if ( is_null($row))
  {  
  
    echo 'ID not found';
	
	
 echo '<br /><br /><a href="index.html">Login here</a>';
	
	
	

  
  
  }
  else{
  
  
  
  
  $first_name = $row['first_name'];
  $last_name = $row['last_name'];
  $password = $row['password'];
  
  if( $password =='')
  {
  

  echo 'Thank You.<br />';
 // echo 'Your first name is : ' . $first_name . '<br />';
  //echo 'Your last name is : ' . $last_name . '<br />';
  //echo 'Your student ID is : ' . $StudentID . '<br />';
  
  echo '<p> Create username and password</p>';
  echo '<form method="post" action="lookupprofile2_1.php">';
  echo '<label for="username">Username : </label>';
  echo '<input type="text" name="username" /><br />';
  echo '<label for="password">Password : </label>';
  echo '<input type="password" name="password" /><br />';
  echo '<input type="hidden" name="empc" value='. $StudentID .'> <br />';
  echo '<input type="submit" value="Login" name="submit" />';
  echo '</form>';
  
  }
  else{
  echo'password already set';
  

  
 echo '<br /><br /><a href="index.html">Login here</a>';
  
  
  
  
  
 } }
  
?>


</body>
</html>
