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
if($_SESSION["username"]) {
?>
Welcome <?php echo "name : ".$_SESSION["username"]; ?> <?php echo "id : ".$_SESSION["id"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}

if(count($_POST)>0) {

$phv = $_POST['pH'];
if($phv!=null){

	echo $phv;	
}
else{
	echo "empty";
}

$conn = mysql_connect("mysql.hostinger.in","u813618556_orl","orltest");
mysql_select_db("u813618556_orl",$conn);

$sql = mysql_query("INSERT INTO formers(id,ph_value) VALUES ('$_POST[id]','$_POST[ph_value]') ON DUPLICATE KEY UPDATE ph_value='$phv'");

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
		<td align="center">pH value</td>
		<td align="center"><input type="text" name="pH"/></td>
	</tr>
	
		<input type="submit" name="submit" value="submit" />
</table>
	
</form>
</body>
</html>