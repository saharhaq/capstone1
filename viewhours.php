
<?php
	// this auto-magically inserts header.html here
	require('header1.html');  
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

<body>
  <h2>Total hours</h2>
<table>
<tr>
<th>Hours</th>
<th>Activity</th>
<th>Description</th>
<th>Approval</th>
<th>Delete</th>
</tr>

<?php
session_start(); 
  $dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
    or die('Error connecting to MySQL server.');

	
	$sql = " SELECT id, Hours,Activity,Description,Approval FROM Hours where StudentID='".$_SESSION['employee_id']."' and `Class code`='".$_SESSION['classcode']."'";
	

	
	$result = mysqli_query($dbc, $sql)
		or die("Could not fetch data: " . mysqli_error($dbc));
	
	while ( $row = mysqli_fetch_assoc($result) ) {
		echo "<tr>\n";
		foreach($row as $key => $value) {
			if($key != "id")
			{
				echo "<td>", $value, "</td>\n";
			}
		}
		echo ' <td><a href="hoursdelete.php?id='.$row['id'].'"onclick="return myFunction();"><img width="25" height="25" alt="" src="trash.png"></a></td>';
		echo "</tr>\n";
	}
	

	$sql = " SELECT SUM(Hours) AS Hours FROM Hours where StudentID='".$_SESSION['employee_id']."' AND Approval='Approved'";

	$result = mysqli_query($dbc, $sql)
		or die("Could not fetch data: " . mysqli_error($dbc));
		
	$row = mysqli_fetch_assoc($result);
	echo '<tr><th colspan="5" align="left">';
	echo 'Total Approved hours:'.$row['Hours'];
	echo'</th></tr>';

	$sql = " SELECT SUM(Hours) AS Hours FROM Hours where StudentID='".$_SESSION['employee_id']."' AND Approval='Pending'";

	$result = mysqli_query($dbc, $sql)
		or die("Could not fetch data: " . mysqli_error($dbc));
		
	$row = mysqli_fetch_assoc($result);
	echo '<tr><th colspan="5" align="left">';
	echo 'Total Pending hours:'.$row['Hours'];
	echo'</th></tr>';

	
	// total disapproved ******************************************************************************************
	
/*
	$sql = " SELECT SUM(Hours) AS Hours FROM Hours where StudentID='".$_SESSION['employee_id']."' AND Approval='Disapproved'";

	$result = mysqli_query($dbc, $sql)
		or die("Could not fetch data: " . mysqli_error($dbc));
		
	$row = mysqli_fetch_assoc($result);
	echo '<tr><th colspan="4" align="left">';
	echo 'Total Disapproved hours:'.$row['Hours'];
	echo'</th></tr>';
*/
	
	mysqli_close($dbc);
?>

</table>


   <?php
	// this auto-magically inserts footer.html here
	require('footer1.html');
?>

