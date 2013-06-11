<?php
	// this auto-magically inserts header.html here
	require('header1.html');  
?>

  <title>Welcome Hours</title>
</head>
<body>
  <h2>Welcome RN to BSN Students</h2>
  
  
    <center><p></br> <?php echo  $_SESSION['classcode']; ?></p></center>
	 
<form action="submit.php" method="post">
  <p>
    <label for="hoursofstudent">Hours </label>
    <input type="text" name="hoursofstudent"/>
  </p>
  
<p>
    <label for="activityofstudents">Activity </label>
    <input type="text" name="activityofstudent"/>
  </p>
  
<p>  
 <label for="WorkDescription">Description</label>
 
 <br>
<textarea name="description"rows="4" cols="50" maxlength="500">
500 Character limit

</textarea>
 </p>
 

  <p>
    <input type="reset" name="reset" value="Reset"/>
	<input type="submit" name="submit" value="Submit"/>
  </p>
</form>


   <?php
	// this auto-magically inserts footer.html here
	require('footer1.html');
?>