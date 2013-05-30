<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Welcome Hours</title>
</head>
<body>
  <h2>Welcome RN to BSN Students</h2>
 
 <?php
 session_start();
 if (empty($_SESSION['employee_id'])) {
	echo '<p>Please log in to continue</p>';
	echo '<a href="index.html">Login here</a>';
	
 }
 else{
 
 
 $_SESSION['classcode']= 'NUR4636L';
 
 
 
 ?>
 
 <a href="download.php">Download</a>
 
 <a href="upload.html">Upload</a>

 <a href="enterdata.php">Enter Hours</a>
 
 <a href="viewhours.php">View Hours</a>
 
 

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

 <a href="1.php">back to courses</a>
 <a href="logout.php">LOGOUT</a>
<?php } ?>
 <div align="center"><img src="background.jpg" class="bg"></div>
</body>
</html>