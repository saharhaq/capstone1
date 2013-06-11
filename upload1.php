
<?php
	// this auto-magically inserts header.html here
	require('header1.html');  
?>

  <h2>Welcome</h2>

    <p>RN to BSN Student </br></br> <?php echo  $_SESSION['classcode']; ?></p>
  
  
  
  <br />
  
 <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
	</br>
    <input type="submit">
</form>

<?php
 session_start();
 if (empty($_SESSION['employee_id'])) {
	echo '<p>Please log in to continue</p>';
	echo '<a href="index.html">Login here</a>';
	
 }
 else{
 
 
 $_SESSION['classcode']= 'NUR4636L';
 }
 
 
 
 ?>







 <?php
	// this auto-magically inserts footer.html here
	require('footer1.html');
?>
