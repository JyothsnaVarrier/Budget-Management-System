<html>
<head> <link rel="stylesheet" type="text/css" href="style2.css"/></head>
<body>
<center><br><br>
<h1>ADD USER</h1>
<?php

$connection=mysql_connect("localhost","root");
mysql_select_db("budget");
$sql="select * from register where stat='PENDING'";
$record=mysql_query($sql);
?>
<center><br><br>

<form action="add1.php" method="post">
<table width ="800" border="1" cellpadding="5" cellspacing="1">
<tr><th>SELECT</th>	
	<th>EMPLOYEE ID</th>
	<th>FIRST NAME</th>
	<th>LAST NAME</th>
	<th>DATE OF BIRTH</th>
	<th>GENDER</th>
	<th>USERNAME</th>
	<th>EMAIL</th>
	<th>PASSWORD</th>
	<th>MOBILE NUMBER</th>
	<th>USER TYPE</th>


<?php
$i=1;
while($req=mysql_fetch_assoc($record))
{
	

	echo "<tr>";
	echo "<td><input type='checkbox' name='".$i."' value='".$req['emp']."'/>".$i."</td>";
	echo "<td>".$req['emp']."</td>";
	echo "<td>".$req['fname']."</td>";
	echo "<td>".$req['lname']."</td>";
	echo "<td>".$req['dob']."</td>";
	echo "<td>".$req['gender']."</td>";
	echo "<td>".$req['uname']."</td>";
	echo "<td>".$req['email']."</td>";
	echo "<td>".$req['pwd']."</td>";
	echo "<td>".$req['mno']."</td>";
	echo "<td>".$req['utype']."</td>";
	echo "</tr>";
	
	
	
	$i++;

	
	}	





?>


</tr> 
<input type="submit" value="SUBMIT" >
</form>

</center>
</body>
</html> 