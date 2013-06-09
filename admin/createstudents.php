
<?php
	// this auto-magically inserts header.html here
	require('header.html');  
?>




  <h2>Welcome</h2>

  <p>Create Student Profile</p>

 
  <br />
 <form method="post" action="addstudent.php">
    <label for="StudentId">Please type in new student ID:</label>
    <input type="text" name="StudentId" /><br />
	
	<label for="Firstname">Please type in new First Name :</label>
    <input type="text" name="Firstname" /><br />
	
	<label for="Lastname">Please type in new Last Name:</label>
    <input type="text" name="Lastname" /><br />
	
	<!--<label for="courseReference">Please type in Student's course reference number:</label>
    <input type="text" name="courseReference" /><br />-->
	
    <input type="submit" value="Create new Student" name="submit" />
  </form>

 


<?php
	// this auto-magically inserts footer.html here
	require('footer.html');
?>