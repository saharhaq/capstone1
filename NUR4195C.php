

<?php
	// this auto-magically inserts header.html here
	require('header1.html');  
?>







  <h2>Welcome RN to BSN Students</h2>
 
 <?php
 session_start();
 if (empty($_SESSION['employee_id'])) {
	echo '<p>Please log in to continue</p>';
	echo '<a href="index.html">Login here</a>';
	
 }
 else{
 

 $_SESSION['classcode']= 'NUR4195C';
 
 ?>
 
 <!--<a href="download.php">Download</a>
 
 <a href="upload.html">Upload</a>

 <a href="enterdata.php">Enter Hours</a>
 
 <a href="viewhours.php">View Hours</a>-->
 
 
 </br>
 </br>

<img src="log.png" style="margin:auto; width:75%;"/>
<?php } ?>
 
   <?php
	// this auto-magically inserts footer.html here
	require('footer1.html');
?>
 