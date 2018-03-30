<html>
<head><title>Login Process</title></head>
<body>


<?php
$sdate=$_POST["sub"];

$connection=mysql_connect("localhost","root");
$dbselect=mysql_select_db("budget",$connection);
$sqlquery="(UPDATE req
SET stat='ACCEPTED BY HOD'
WHERE sdate='$sdate')";
$result=mysql_query($sqlquery,$connection);



echo"ACCEPTED SUCESSFULLY !";




?>
</body>
</html>          