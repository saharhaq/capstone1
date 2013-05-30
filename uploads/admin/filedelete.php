<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>RN to BSN Student Profile</title>
</head>
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
echo "<br/><center> Delete successful </center><br/>";
 
mysqli_close($dbc);
?>
<a href="download.php">Click here to return</a>


 <a href="logout.php">LOGOUT</a>






<div align="center"><img src="background.jpg" class="bg"></div>  
</body>
</html>