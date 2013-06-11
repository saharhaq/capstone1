
<?php
	// this auto-magically inserts header.html here
	require('header1.html');  
?>

 <!-- <h2>Welcome</h2>

    <p>RN to BSN Student </br></br>   </p>---->
  
  
  
  
  
    <h2>Welcome RN to BSN Students</h2>
  
  
    <h3><p> <?php echo  $_SESSION['classcode']; ?></p></h3>
  
  
  
  
  
  
  <br />
  
 <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
	</br>
    <input type="submit">
</form>









 <?php
	// this auto-magically inserts footer.html here
	require('footer1.html');
?>
