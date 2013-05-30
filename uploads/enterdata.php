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
<textarea name="description"rows="4" cols="50">
1500 Character limit

</textarea>
 </p>
 

  <p>
    <input type="reset" name="reset" value="Reset"/>
	<input type="submit" name="submit" value="Submit"/>
  </p>
</form>

 <a href="logout.php">LOGOUT</a>

<div align="center"><img src="background.jpg" class="bg"></div>
</body>
</html>