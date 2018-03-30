<html>
<head><title>Login Process</title></head>
<body>

<?php
$username=$_POST["uname"];
$password=$_POST["passwd"];
$utype=$_POST["utype"];
$connection=mysql_connect("localhost","root");
$dbselect=mysql_select_db("budget",$connection);
$sqlquery="select * from register where uname = '$username' and pwd='$password' and utype='$utype'";
$result=mysql_query($sqlquery,$connection);
$numofrows=mysql_num_rows($result);
if($numofrows>0)
{	if($utype=="staff")
	header("Location:main.php");
	else if($utype=="hod")
	header("Location:hod.php");
	else if($utype=="princi")
	header("Location:princi.php");
	else if($utype=="mgmt")
	header("Location:mgmt.php");
	else if($utype=="admin")
	header("Location:admin.php");

}
else
{
	
header("Location:loginwrong.php");



}
?>
</body>
</html>          