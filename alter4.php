<html>
<head></head>
<body>

<?php

$description=$_POST["desc"];
$proj_coord=$_POST["pc"];
$edate=$_POST["edate"];
$priority=$_POST["priority"];
$classification=$_POST["classification"];
$remark=$_POST["remarks"];
$justification = $_POST["justification"]; 
$date=$_POST["sdate"];


$connection=mysql_connect("localhost","root");
$dbselect=mysql_select_db("budget",$connection);

$sqlquery="UPDATE req
SET DESCRIPTION='$description',PROJECT_COORDINATOR='$proj_coord',EXPECTED_DATE='$edate',PRIORITY='$priority',CLASSIFICATION='$classification',REMARK='$remark',JUSTIFICATION ='$justification', STATUS='ALTERED'
WHERE SDATE='$date';";
$result=mysql_query($sqlquery,$connection);





echo"ALTERED SUCESSFULLY !";


?>
</body>
</html> 