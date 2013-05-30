
<?php
	// this auto-magically inserts header.html here
	require('header.html');  
?>
  
  
  
  
  
  <title></title>
</head>
<body>
  <h2>Profile</h2>

<?php

session_start();

if (empty($_SESSION['ProfessorID'])) {
	echo '<p>Please log in to continue</p>';
	echo '<a href="index.html">Login here</a>';
 }
 else {
  
  $dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
    or die('Error connecting to MySQL server.');

  echo '<p> reset student password</p>';
  echo '<form method="post" action="changestudentpass_2.php">';
  echo '<label for="studentID">Student ID : </label>';
  echo '<input type="text" name="studentID" /><br />';
  echo '<label for="password">New Password : </label>';
  echo '<input type="password" name="password" /><br />';
  echo '<input type="submit" value="Reset student password" name="submit" />';
  echo '</form>';
  
  }
  
?>

<?php
	// this auto-magically inserts footer.html here
	require('footer.html');
?>