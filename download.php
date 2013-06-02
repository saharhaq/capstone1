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

<center style="margin-left:-250px;">
  <h2>Welcome</h2>

  <p>RN to BSN Student Profile</p>
  <br />


<br>RIGHT-CLICK TO DOWNLOAD FILE<br>
</br>
</br>
</br>
</br>
 <form id="form1" action="download.php" method="post">
<table>
<tr>
<th>Download</th>
<th>Delete</th>

</tr>


<?php
	
	$dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
		or die(mysqli_connect_error());
		
	session_start();	
	
	$sql = "SELECT id,path FROM upload WHERE studentid = '".$_SESSION['employee_id']."';";
	
	//echo $sql;
	
	// execute the query
	$result = mysqli_query($dbc, $sql)
		or die("Could not fetch data: " . mysqli_error($dbc));
	
	while ( $row = mysqli_fetch_assoc($result) ) {
		echo "<tr>\n";
		
			$filepath=explode("/",$row['path']);
			echo "<td><a href=\"", $row['path'], "\">",$filepath[count($filepath)-1],"</a> </td>\n";
			echo ' <td><a href="filedelete.php?id='.$row['id'].'"onclick="return myFunction();"><img width="25" height="25" alt="" src="trash.png"></a></td>';
		
		echo "</tr>\n";
	}
	
	// close the database connection
	mysqli_close($dbc);
	 
?>



</table>

</form>

</center>

   <?php
	// this auto-magically inserts footer.html here
	require('footer1.html');
?>

