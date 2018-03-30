<html>
<head><title>Registration Process</title></head>
<body>
<body bgcolor="Azure">
<?php
$emp=$_POST["empcode"];
$first=$_POST["name1"];
$last=$_POST["name2"];
$dob=$_POST["date"];
$gender=$_POST["gender"];
$username=$_POST["uname"];
$email=$_POST["email"];
$password=$_POST["passwd"];
$mno=$_POST["mno"];
$utype=$_POST["utype"];

$connection=mysql_connect("localhost","root");
$dbselect=mysql_select_db("budget",$connection);
$sqlquery="insert into register(emp,fname,lname,dob,gender,uname,email,pwd,mno,utype) values('$emp','$first','$last','$dob','$gender','$username','$email','$password','$mno','$utype')";

mysql_query($sqlquery,$connection);
header("Location:login.php");
?>
</body>
</html>                     