<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="new.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Admin</title>
</head>
<body>
  <h2>Admin</h2>

<?php
  $user_name = $_POST['username'];
  $pass_word = $_POST['password'];
  $the_code = $_POST['empc'];
  $pass_word = crypt ($pass_word);
  $dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
    or die('Error connecting to MySQL server.');

  $query = "update Admin set Password = '$pass_word', Username='$user_name' where ProfessorID='$the_code'";
    
    
  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
  //$row = mysqli_fetch_array($result);
  mysqli_close($dbc);
  //$first_name = $row['first_name'];
  //$last_name = $row['last_name'];

  echo 'Your Profile has been updated succesfully.<br />';
 
    
?>

 <p> Login here <a href="lookupprofile.html">Here</a><br /><p>

</body>
</html>