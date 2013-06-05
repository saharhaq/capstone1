
<?php
	// this auto-magically inserts header.html here
	require('header1.html');  
?>



<?php
  $user_name = $_POST['username'];
  $pass_word = $_POST['password'];
  $the_code = $_POST['empc'];
  $pass_word = crypt ($pass_word);
  $dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
    or die('Error connecting to MySQL server.');

  $query = "update Students set password = '$pass_word', username='$user_name' where StudentID='$the_code'";
    
    
  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
  //$row = mysqli_fetch_array($result);
  mysqli_close($dbc);
  //$first_name = $row['first_name'];
  //$last_name = $row['last_name'];
  
  
</br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
  echo 'Your Profile has been updated succesfully.<br />';
 
    
?>



   <?php
	// this auto-magically inserts footer.html here
	require('footer1.html');
?>