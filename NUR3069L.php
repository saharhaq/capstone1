
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
 
 $_SESSION['classcode']= 'NUR3069L';
 
 ?>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 
 <a href="1.php" style="margin-left:180px;">back to courses</a> 

<?php } ?>
   <?php
	// this auto-magically inserts footer.html here
	require('footer1.html');
?>