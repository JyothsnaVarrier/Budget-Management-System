<html>
<head><title>REGISTER</title>
<link rel="stylesheet" type="text/css" href="style2.css"/>
</head>

<center>
<h1 >REGISTER</h1>
<form action="registerprocess.php" method="post">

<fieldset>
<p><label class="field" for name="EMPCODE"><span>*</span>EMPCODE : <input type="text" name="empcode"/> </p>
<p><label class="field" for name="First Name"><span>*</span>First Name : <input type="text" name="name1"></p>
<p><label class="field" for name="Last Name">Last Name : <input type="text" name="name2"></p>
<p><label class="field" for name="Date"><span>*</span>Date: <input type="text" id="datepicker"></p>


<p><label class="field" for name="Gender"><span>*</span>Gender : <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other</p>
<p><label class="field" for name="Username"><span>*</span>Username : <input type ="text" name="uname"/></p>
<p><label class="field" for name="E-mail"><span>*</span>E-mail : <input type ="text" name="email"/></p>
<p><label class="field" for name="Password"><span>*</span>Password : <input type = "password" name="passwd"/></p>
<p><label class="field" for name="User-Type"><span>*</span>User-Type: <select name ="utype">
  <option value="staff">Staff</option>
  <option value="hod">Head of Dept.</option>
  <option value="princi">Principal</option>
  <option value="mgmt">Management</option>
  <option value="admin">Admin</option>
</select></p>

<p><label class="field" for name="Mobile Number">Mobile Number :<input type ="text" name="mno"/></p>

<p><input type ="submit" value="Register"/></p>
</fieldset>
</html>