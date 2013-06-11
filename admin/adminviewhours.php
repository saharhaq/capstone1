<?php
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
echo '<a href="index.html" style="font-size:18pt;">Login</a>'; 
die("");
}
?>
<h1>View <?php echo $_GET['TLD']; ?> Hours</h1>
 <form  method="get" action="adminviewhours.php">
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
		
	echo'<form  method="post" action="changehours.php"> <table>
<tr>
<th>Hours</th>
<th>Activity</th>
<th>Description</th>
<th>Status</th>
<th>Delete</th>
</tr>';
	if($search == "All")	
	{

	$sql = " SELECT id, Hours,Activity,Description,Approval FROM Hours WHERE `Class code` = '".$_GET['TLD']."';";
	$sql2 = " SELECT SUM(Hours) AS Hours FROM Hours where `Class code` = '".$_GET['TLD']."' AND Approval='Approved'";


	}
	else if($search == "ID")	
	{
	
	$sql = " SELECT id, Hours,Activity,Description,Approval FROM Hours  WHERE `studentid` = '".$number."';";
	$sql2 = " SELECT SUM(Hours) AS Hours FROM Hours where `studentid` = '".$number."' AND Approval='Approved'";

	}
	else if($search == "REF")	
	{
		$sql = "SELECT id, Hours,Activity,Description,Approval FROM Hours ".
		" INNER JOIN Students ON Hours.StudentID = Students.StudentID ".
		" WHERE Students.courseReference = '".$number."';";
		
		$sql2 = " SELECT SUM(Hours) AS Hours FROM Hours ".
		" INNER JOIN Students ON Hours.StudentID = Students.StudentID ".
		" WHERE Students.courseReference = '".$number."' AND Approval='Approved'";
	}
	
		//echo $sql;
	
	// execute the query
	$result = mysqli_query($dbc, $sql)
		or die("Could not fetch data: " . mysqli_error($dbc));
	
	while ( $row = mysqli_fetch_assoc($result) ) {
		echo "<tr>\n";
		foreach($row as $key => $value) {
			if($key != "id" && $key != "Approval")
			{
				echo "<td>", $value, "</td>\n";
			}
			if($key == "Approval")
			{
				$selectPending = "";
				$selectApproved = "";
				$selectDisapproved = "";
				if($value == "Pending") $selectPending = "selected";
				else if($value == "Approved") $selectApproved = "selected";
				else if($value == "Disapproved") $selectDisapproved = "selected";
				echo '<td>';
				echo '<select style="width:100%;" name="'.$row['id'].'"> 
					<option  value="Pending" '.$selectPending.'>Pending</option>
					<option value = "Approved" '.$selectApproved.'>Approved</option>
					<option value = "Disapproved" '.$selectDisapproved.'>Disapproved</option>
				</select>';
				echo '</td>';
			}
		}
		echo ' <td><a href="hoursdelete.php?id='.$row['id'].'"onclick="return myFunction();"><img width="25" height="25" alt="" src="trash.png"></a></td>';
		echo "</tr>\n";
	}
	
	$result = mysqli_query($dbc, $sql2)
		or die("Could not fetch data: " . mysqli_error($dbc));
		
	$row = mysqli_fetch_assoc($result);
	echo '<tr><th colspan="4" align="left">';
	echo 'Total Approved hours:'.$row['Hours'];
	echo'</th></tr>';
	echo '</table>';
	echo '<input  type="submit" value="Change Status" />	';
	echo '</form>';
	// close the database connection
	mysqli_close($dbc);
}	
?>	


<?php
	// this auto-magically inserts footer.html here
	require('footer.html');
?>