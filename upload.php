<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Nursing Department Student Profile</title>
</head>
<body>

 <?php
 session_start();
	$dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
		or die(mysqli_connect_error());
 $file = $_FILES['file'];
 $name = $file['name'];
 
 $folderpath = "uploads/" . $_SESSION['employee_id'];
 mkdir($folderpath);
 
 $path = $folderpath . '/' . basename($name);
 //echo $path . '<br>';

 if (move_uploaded_file($file['tmp_name'], $path)) {
echo 'Move succeed';
$sql = "INSERT INTO upload (id,studentid,path,`Class code`) VALUES ('".uniqid('',true)."','".$_SESSION['employee_id']."','" . mysql_real_escape_string($path) . "','".$_SESSION['classcode']."')";
$result = mysqli_query($dbc, $sql)
		or die("Could not submit data: " . mysqli_error($dbc));
		echo '<br/>Thank you for your submission on ' . date("Y-m-d H:i:s");
} 
else {
echo 'Move failed. Try again';
} 

mysqli_close($dbc);

?>

 <a href="logout.php">LOGOUT</a>
 
<br/>
<a href="download.php">View Uploaded Files</a>
<div align="center"><img src="background.jpg" class="bg"></div>  
</body>
</html>
