<?php
session_start();

	// this auto-magically inserts header.html here
	require('header.html');  
?>

  <script>
function myFunction()
{
var r=confirm("Are you sure you want to delete?\nPress OK to continue...");
if (r==true)
  {
    return true;
  }else return false;
}
</script>
  <script type="javascript/txt">
	function showSIDinput()
	{
		document.getElementById("mylabel").innerHTML="Student ID: ";
		document.getElementById("myinput").type="text";
	}
	
	function showREFinput()
	{
		document.getElementById("mylabel").innerHTML="Reference #: ";
		document.getElementById("myinput").type="text";
	}
  </script>



<?php
if(!isset($_SESSION['ProfessorID']))
{
echo "<a href='index.html'>Log in</a>"; 
die("click link to login");
}
?>
<h1>View <?php echo $_GET['TLD']; ?> Uploads</h1>
 <form  method="get" action="adminviewupload.php">
 <input type="hidden" name="TLD" value="<?php echo $_GET['TLD']; ?>"/>
 <select name="admin"> 

		<option  value="select">Select</option>
		<option value = "All">View All</option>
		<option value = "ID" onclick="showSIDinput();">Student Id</option>
		<!--<option value = "REF" onclick="showREFinput();">Reference #</option>-->
</select>


<!--Input box--->

 <label for="search"id="mylabel"></label>
	<input type="text" name="search"id="myinput"/><br />

	
<input  name="submit" type="submit" value="Submit" />	
	
	
</form>




<?php

	if ( ! empty($_GET["admin"]))
	{

    $dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
        or die(mysqli_connect_error());
     
	$search = mysqli_real_escape_string($dbc, strip_tags ($_GET['admin']));
	$number= mysqli_real_escape_string($dbc, strip_tags ($_GET['search']));
		
	echo' <table align="center">
	<tr>
	<th>Download</th>
	<th>Delete</th>

</tr>';
	if($search == "All")	
	{
		$sql = "SELECT id,path FROM upload WHERE `Class code` = '".$_GET['TLD']."';";
	}
	else if($search == "ID")	
	{
		$sql = "SELECT id,path FROM upload WHERE `studentid` = '".$number."';";
	}
	else if($search == "REF")	
	{
		$sql = "SELECT id,path FROM upload ".
		" INNER JOIN Students ON upload.studentid = Students.StudentID ".
		" WHERE Students.courseReference = '".$number."';";
	}
	
	//echo $sql;
	
	// execute the query
	$result = mysqli_query($dbc, $sql)
		or die("Could not fetch data: " . mysqli_error($dbc));
	
	while ( $row = mysqli_fetch_assoc($result) ) {
		echo "<tr>\n";
		
			$filepath=explode("/",$row['path']);
			echo "<td><a href=\"../", $row['path'], "\">",$filepath[count($filepath)-1],"</a> </td>\n";
			echo ' <td><a href="filedelete.php?id='.$row['id'].'"onclick="return myFunction();"><img width="25" height="25" alt="" src="trash.png"/></a></td>';
		
		echo "</tr>\n";
	}
	echo' </table>';
	// close the database connection
	mysqli_close($dbc);
}	
?>	


<?php
	// this auto-magically inserts footer.html here
	require('footer.html');
?>