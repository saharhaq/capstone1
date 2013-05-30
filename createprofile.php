<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Confirmation</title>
</head>
<body>
  <h2>Confirmation</h2>

<?php
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $StudentID = $_POST['employeecode'];
  

  $dbc = mysqli_connect('localhost', 'root', '', 'NursingHours')
    or die('Error connecting to MySQL server.');

  $query = "INSERT INTO Students (first_name, last_name, StudentID) " .
    "VALUES ('$first_name', '$last_name', '$StudentID') " ;
    
    

  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');

  mysqli_close($dbc);

  echo 'Thank you for registering.<br />';
  echo 'Your First Name is ' . $first_name . '<br />';
  echo 'Your Last Name is ' . $last_name . '<br />';
  echo 'Your Student ID is ' . $StudentID . '<br />';
  echo '<a href="http://localhost/capstone/index.html">Go Home</a><br />';
  
?>

</body>
</html>
