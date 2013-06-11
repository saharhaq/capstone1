

<?php
	// this auto-magically inserts header.html here
	require('header.html');  
?>




  <h2>Admin</h2>

<?php
  $user_name = $_POST['studentID'];
  $pass_word = $_POST['password'];
  $pass_word = crypt ($pass_word);
  $dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
    or die('Error connecting to MySQL server.');

  $query = "update Students set password = '$pass_word' where StudentID='$user_name'";
    
    
  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
  //$row = mysqli_fetch_array($result);
  mysqli_close($dbc);
  //$first_name = $row['first_name'];
  //$last_name = $row['last_name'];

  echo 'Password has been changed succesfully.<br />';
?>

<?php
	// this auto-magically inserts footer.html here
	require('footer.html');
?>
