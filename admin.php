<?php 
session_start();
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
	error_reporting(E_ALL ^ E_DEPRECATED);

if($_SESSION["username"]) {
?>
Welcome <?php echo "name : ".$_SESSION["username"]; ?> <?php echo "id : ".$_SESSION["id"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}

if(isset($_POST['submit'])){

$conn = mysql_connect("mysql.hostinger.in","u813618556_orl","orltest");
mysql_select_db("u813618556_orl",$conn);

$sql = mysql_query("INSERT INTO formers(id,username,password,age,area) VALUES ('$_POST[id]','$_POST[username]','$_POST[password]','$_POST[age]','$_POST[area]')");

if($sql!=null){
	
	$message = "Data Inserted";
}
else{
		$message = "Data not Inserted".mysql_error();
}
}
?>
</td>
</tr>
</a>
</td>
</tr>
</table>

<br>
<form action="" method="POST" name="insert">
<div class="message"><?php if($message!="") { echo $message; } ?></div>

	<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
	
	<tr class="tableheader">
		<td align="center">ID</td>
		<td align="center"><input type="text" name="id" /></td>
	</tr>
	<tr class="tableheader">
		<td align="center">Username</td>
		<td align="center"><input type="text" name="username"/></td>
	</tr>

	<tr class="tableheader">
		<td align="center">Password</td>
		<td align="center"><input type="text" name="password"/></td>
	</tr>

	<tr class="tableheader">
		<td align="center">Age</td>
		<td align="center"><input type="text" name="age"/></td>
	</tr>

	<tr class="tableheader">
		<td align="center">Area</td>
		<td align="center"><input type="text" name="area"/></td>
	</tr>
</table>
		<center><input type="submit" name="submit" value="submit" /></center>		
</form>
</body>
</html>