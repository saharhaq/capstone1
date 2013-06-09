

<?php
	// this auto-magically inserts header.html here
	require('header1.html');  
?>




  <title>Create profile</title>

  <h2>Profile</h2>

<?php

session_start();

if (empty($_SESSION['employee_id'])) {
	echo '<p>Please log in to continue</p>';
	echo '<a href="index.html">Login here</a>';
 }
 else {
  
  $dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
    or die('Error connecting to MySQL server.');

  $query = "select first_name, last_name,password from Students where StudentID='".$_SESSION['employee_id']."'";
    
    
  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
  $row = mysqli_fetch_array($result);
  mysqli_close($dbc);
  $first_name = $row['first_name'];
  $last_name = $row['last_name'];
 
  

  echo 'Thank You.<br />';
  echo 'Your first name is : ' . $first_name . '<br />';
  echo 'Your last name is : ' . $last_name . '<br />';
  echo 'Your student ID is : ' .$_SESSION['employee_id'] . '<br />';
  echo '<br />';
  echo '<br />';
  echo '<p> Create username and password</p>';
  echo '<form method="post" action="lookupprofile2_1.php">';
  echo '<label for="username">Username : </label>';
  echo '<input type="text" name="username" /><br />';
  echo '<label for="password">Password : </label>';
  echo '<input type="password" name="password" /><br />';
  echo '<input type="hidden" name="empc" value='.$_SESSION['employee_id'] .'> <br />';
  echo '<input type="submit" value="Submit" name="submit" />';
  echo '</form>';
  
  }
  
?>



   <?php
	// this auto-magically inserts footer.html here
	require('footer1.html');
?>
