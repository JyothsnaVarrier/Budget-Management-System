<html>
<head> <link rel="stylesheet" type="text/css" href="style2.css"/></head>


<body>
<center><br><br>
<h1>ALTER CURRENT BUDGET PROPOSAL </h1>
<?php
$date=$_GET["sub"];
$connection=mysql_connect("localhost","root");
mysql_select_db("budget");
$sql="select * from req where sdate ='$date';";
$record=mysql_query($sql);


?>


<center><br><br>
<table width ="800" border="1" cellpadding="5" cellspacing="1">
<tr>
	<th>S.NO</th>
	<th>DESCRIPTION</th>
	<th>PROJECT COORDINATOR</th>
	<th>EXPECTED DATE OF DELIVERY OF ITEM</th>
	<th>PRIORITY</th>
	<th>CLASSIFICATION OF WORK</th>
	<th>REAMRKS</th>
	<th>JUSTIFICATION</th>
	<th>SUBMISSION DATE</th>
	<th>STATUS</th>
	

<tr>
<?PHP

while($req=mysql_fetch_assoc($record))
{
	echo "<tr>";
	echo "<td>".$req['ID']."</td>";
	echo "<td>".$req['DESCRIPTION']."</td>";
	echo "<td>".$req['PROJECT_COORDINATOR']."</td>";
	echo "<td>".$req['EXPECTED_DATE']."</td>";
	echo "<td>".$req['PRIORITY']."</td>";
	echo "<td>".$req['CLASSIFICATION']."</td>";
	echo "<td>".$req['REMARK']."</td>";
	echo "<td>".$req['JUSTIFICATION']."</td>";
	echo "<td>".$req['SDATE']."</td>";
	
	echo "<td>".$req['STATUS']."</td>";
	echo "</tr>";
}	
?>
<form action="alter3.php" method="post">
<input type = "submit" value ="Alter" name="alter" />
</form></BR></BR>

</center>


</BR></BR>


</body>
</html>          