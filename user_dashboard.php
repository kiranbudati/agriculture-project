<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">

<tr class="tablerow">
<td>
<?php
if($_SESSION["username"]) {

	include('config.php');	
	$username = $_SESSION['username'];
	$data = mysql_query("SELECT * FROM formers WHERE username = '$username'");

	while($row = mysql_fetch_array($data)) {
		$id = $row['id'];
		$name = $row['username'];
		$area = $row['area'];
		$age = $row['age'];
		 
		$ph = $row['ph_value'];
	}

?>
Welcome <?php echo "Name : ".$_SESSION["username"]; ?><br/>
<?php echo "Id : ".$_SESSION["id"]; ?>.<br/>
<?php echo "Age : ".$age; ?>.<br/>
<?php echo "Area : ".$area; ?>.<br/>
 Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}
?>
</td>
</tr>
</a>
</td>
</tr>
</table>

<br>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
	<tr class="tableheader">
		<th>Crop name</th>
		<th>Minimum pH value</th>
	</tr>
	<tr class="tableheader">
		<td align="center" style="background-color: ">Rice</td>
		<td align="center">8</td>
	</tr>
		<tr class="tableheader">
		<td align="center">Sugar Cane</td>
		<td align="center">4</td>
	</tr>

	<tr class="tableheader">
		<td align="center">Cotton</td>
		<td align="center">6</td>
	</tr>
</table>
<br>
	<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
	<tr class="tableheader">
		<th>Your Soil ph value</th>
	</tr>

	<tr class="tableheader">
		<td align="center"><?php echo $ph;?></td>
	</tr>
</table>

</body>
</html>