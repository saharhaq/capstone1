
<?php
	// this auto-magically inserts header.html here
	require('header1.html');  
?>

  <h2>Welcome RN to BSN Students</h2>
  

  
  <center style="margin-left:-250px;"><h3>NUR3069L</h3></center>
  
  <br/>
 
 <?php
 session_start();
 if (empty($_SESSION['employee_id'])) {
	echo '<p>Please log in to continue</p>';
	echo '<a href="index.html">Login here</a>';
	
 }
 else{
 
 $_SESSION['classcode']= 'NUR3069L';
 
 ?>
  
    <!--<div align="center"><img src="log.png" style="margin:auto; width:65%;"/></div>-->


	<img src="log.png" style="margin:auto; width:75%;"/>
	
	<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

 

</center> 
 



<?php } ?>
   <?php
	// this auto-magically inserts footer.html here
	require('footer1.html');
?>