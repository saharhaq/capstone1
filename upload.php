
<?php
	// this auto-magically inserts header.html here
	require('header1.html');  
?>
 <?php
 session_start();
	$dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
		or die(mysqli_connect_error());
 $file = $_FILES['file'];
 $name = $file['name'];
 
 $folderpath = "uploads/" . $_SESSION['employee_id'];
 mkdir($folderpath);
 
 $path = $folderpath . '/' . basename($name);
// echo $path . '<br>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

 if (move_uploaded_file($file['tmp_name'], $path)) {
//echo 'Move succeed';
$sql = "INSERT INTO upload (id,studentid,path,`Class code`) VALUES ('".uniqid('',true)."','".$_SESSION['employee_id']."','" . mysql_real_escape_string($path) . "','".$_SESSION['classcode']."')";
$result = mysqli_query($dbc, $sql)
		or die("Could not submit data: " . mysqli_error($dbc));
		echo '<br/>Thank you for your submission on ' . date("Y-m-d H:m:s");
} 
else {
echo 'Move failed. Try again';
} 

mysqli_close($dbc);

?>


 
<br/>
<br/>
<br/>
<br/>
<a href="download.php">View Uploaded Files</a>

   <?php
	// this auto-magically inserts footer.html here
	require('footer1.html');
?>
