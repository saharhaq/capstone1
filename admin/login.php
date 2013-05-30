<?php
session_start();
if(!empty($_POST)){
  $name_user = $_POST['username'];
  $word_pass = $_POST['password'];
  
  $dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
    or die('Error connecting to MySQL server.');

  
  $query = "select ProfessorID, Username, Password from Admin where Username='$name_user' ";
    
   
  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
  $row = mysqli_fetch_array($result);
  mysqli_close($dbc);
  
  if(crypt( $word_pass,$row['Password'])!=$row['Password'])
  echo'Invalid password or username';
  else 
 {
	session_start();
	$_SESSION['ProfessorID']= $row['ProfessorID'];
	$name_user = $row['Username'];
    $word_pass = $row['Password'];
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = 'hoursupload.php';
	header("Location: http://$host$uri/$extra");
exit;
	 }}
?>