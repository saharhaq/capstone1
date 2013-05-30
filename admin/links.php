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

<
<?php
session_start();
if (empty($_SESSION['employee_id'])) {
	echo '<p>Please log in to continue</p>';
	echo '<a href="index.html">Login here</a>';
 }
 else {
  echo '<img src="browardcollegelogo.jpg" alt="welcome"><br /><br /><br />';
  echo '<a href="createAdmin.php">Create Admin</a><br />';
  echo '<a href="createstudents.php">Create Students<a/><br />';
  echo '<a href="Changestudentpassword.php">Change Student Password<a/><br />';
  //echo '<a href="NUR4945L.php">NUR4945L<a/><br />';
  echo '<a href="logout.php">LOGOUT</a>';
  echo '<a href="changepassword.php">Change password</a>';
 
 }
?>

<div align="center"><img src="background.jpg" class="bg"></div>
</body>
</html>