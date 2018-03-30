<html>
<head>
<link rel="stylesheet" type="text/css" href="style2.css"/>
</head>

<body>
<center>
<br><br>
<h1>Alter Current Budget Proposal</h1>

<form action ="alter4.php" method ="post">
<fieldset>
<p>Description : <input type = "text" name ="desc" size="78"/></p>
<p>Project Co-ordinator : <input type = "text" name ="pc" size="78"/></p>
<p>Expected Date of Delivery of Item : <input type = "text" name ="edate" size="78"/></p>
<p>Priority : <select name ="priority">
	<option value="high">HIGH</option>
	<option value="medium">MEDIUM</option>
	<option value="low">LOW</option>

</select></p>
<p>Classification of Work :<select name="classification">
  <option value="building">Buildings</option>
  <option value="electrical">Electrical Fittings</option>
  <option value="AC">Air condition</option>
  <option value="furniture">Furniture & fittings</option>
  <option value="lab">Lab/ Writing boards/ Office/ Sports equipment</option>
  <option value="comp">Computer & accessories/ Networking systems</option>
  <option value="UPS">Projector, UPS, Battery, Invertors</option>
  <option value="SW">Software</option>
  <option value="lib">Library Books**</option>
  <option value="prog">Work in Progress</option>
  <option value="others">Others</option>
  </select><p>
<p>Remarks :<input type = "text" name ="remarks" size="78"/></p>
<p>Justification : <textarea name="justification" rows="10" cols="70"></textarea></br><br>
Submission Date (YYYY-MM-DD): <input type = "text" name ="sdate" /></br><br>
<input type = "submit" value ="Alter"/>


<br><br>

</fieldset>
</form>
<br><br><br><br><br><br><br>


Vidya Academy of Science and Technology, P.O. Thalakkottukara, Thrissur - 680 501, Kerala, India<br>
© 2015 Vidya Academy of Science & Technology, Thrissur | <a href ="credit.php" target="_blank">credits</a>

</center>
