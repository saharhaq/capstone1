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
    document.getElementById("form1").submit();
  }
}
</script>

<body>
  <h2>Welcome</h2>

  <p>RN to BSN Student Profile</p>
  <br />

<br>
<br>

 <?php
$dbc = mysqli_connect('localhost', 'root', 'Capstone', 'NursingHours')
	or die (mysqli_connect_error());

$id = mysqli_real_escape_string($dbc, strip_tags ($_GET['id']));


$sql = "DELETE FROM `upload` WHERE `id` = '$id'";


 
$result = mysqli_query($dbc, $sql)
or die ("Could not submit data:".mysqli_error($dbc));
echo "Delete successful";
 
mysqli_close($dbc);
?>
<a href="download.php">Click here to return</a>


   <?php
	// this auto-magically inserts footer.html here
	require('footer1.html');
?>