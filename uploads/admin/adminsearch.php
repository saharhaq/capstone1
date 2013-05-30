<?php
session_start();

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>
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
</head>
<body>


<?php
if(!isset($_SESSION['ProfessorID']))
{
echo "<a href='index.html'>Log in</a>"; 
die("click link to login");
}
?>

 <form  method="get" action="adminsearch.php">
 
 <select name="admin"> 

<option  value="select">Select</option>
		<option value = "All">View All</option>
		<option value = "ID" onclick="showSIDinput();">Student Id</option>
		<option value = "REF" onclick="showREFinput();">Reference #</option>
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
	
	if($search == "All")	
	{
	echo' <table align="center">
	<tr>
	<th>Download</th>
	<th>Delete</th>

</tr>';
$sql = "SELECT id,path FROM upload WHERE `Class code` = '".$_SESSION['class']."';";
	
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

	}
	else if($search == "ID")	
	{
	
	echo' <table align="center">
	<tr>
	<th>Download</th>
	<th>Delete</th>

</tr>';
$sql = "SELECT id,path FROM upload WHERE `studentid` = '".$number."';";
	
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

	}
/*	else if($search == "REF")	
	{
	
	echo' <table align="center">
	<tr>
	<th>Download</th>
	<th>Delete</th>

</tr>';
$sql = "SELECT id,path FROM upload WHERE `Class code` = '".$_SESSION['class']."';";
	
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

	}*/
	
?>	


</body>
</html>