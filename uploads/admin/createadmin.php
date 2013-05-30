<?php
	// this auto-magically inserts header.html here
	require('header.html');  
?>


  <h2>Welcome</h2>

  <p>RN to BSN Admin Profile</p>

 
  <br />
 <form method="post" action="addadmin.php">
    <label for="ProfessorId">Please type in your employee ID:</label>
    <input type="text" name="ProfessorId" /><br />
	
	<label for="Firstname">Please type in your First Name :</label>
    <input type="text" name="Firstname" /><br />
	
	<label for="Lastname">Please type in your Last Name:</label>
    <input type="text" name="Lastname" /><br />
	
	
    <input type="submit" value="Create new Admin" name="submit" />
  </form>

 

<div align="center"><img src="background.jpg" class="bg"></div>  

<?php
	// this auto-magically inserts footer.html here
	require('footer.html');
?>