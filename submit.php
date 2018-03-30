<html>
<head></head>
<body>

<?php
$description=$_POST["desc"];
$proj_coord=$_POST["pc"];
$date=$_POST["edate"];
$priority=$_POST["priority"];
$classification=$_POST["classification"];
$remark=$_POST["remarks"];
$justification = $_POST["justification"]; 
$sdate=$_POST["sdate"];
$connection=mysql_connect("localhost","root");
$dbselect=mysql_select_db("budget",$connection);
$sqlquery="insert into req(DESCRIPTION,PROJECT_COORDINATOR,EXPECTED_DATE,PRIORITY,CLASSIFICATION,REMARK,JUSTIFICATION,SDATE) values('$description','$proj_coord','$date','$priority','$classification','$remark','$justification','$sdate')";
$result=mysql_query($sqlquery,$connection);
echo"SUBMITTED SUCCESSFULLY !";
?><br><br>
<center>Click <a href ="main.php" target="_self">here</a> to go to main menu</center>
</body>
</html>          