<?php
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("mysql.hostinger.in","u813618556_orl","orltest");
mysql_select_db("u813618556_orl",$conn);
$result = mysql_query("SELECT * FROM formers WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["username"] = $row[username];
$_SESSION["id"] = $row[id];

} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["username"])) {
header("Location:user_dashboard.php");
}
?>

<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2">Enter Login Details</td>
</tr>
<tr class="tablerow">
<td align="right">Username</td>
<td><input type="text" name="username"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>


</body></html>	