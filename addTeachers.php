<html>
<head>
<title>Add Student</title>
<link href="style/addingusers.css" rel="stylesheet" type="text/css"/>
</head>

<body class="body">
<div class="logbox">
<h1>Add Teachers</h1>
<form name="form" action="#" method="post">
<table class="tabledate">
<tr>
    <td>Image</td>
    <td><input name="imgfile" type="file" placeholder="Browse"></td>
  </tr>
<tr>
<td>ID Number: </td>
<td><input name="id" type="text"  maxlength="20"></td>
</tr>
<tr>
<td>Full Name: </td>
<td><input name="fullname" type="text" ></td>
</tr>
<tr>
<td>Name With Initial: </td>
<td><input name="ininame" type="text" ></td>
</tr>
<tr>
<td>Address: </td>
<td><textarea name="address"></textarea></td>
</tr>
<tr>
<td>Date of Birth: </td>
<td><input name="dob" type="date" ></td>
</tr>
<tr>
<td>Gender: </td>
<td>Male:<input name="gender" type="radio" >Female:<input name="gender" type="radio" ></td>
</tr>
<tr>
<td>School: </td>
<td><input name="school" type="text" ></td>
</tr>
<tr>
<td>Phone: </td>
<td>Mobile: <input name="mobile" type="text" ><br/>Fixed: <input name="fixed" type="text" ></td>
</tr>

</tr>
<td></td>
<td><input name="Submit" type="submit" value="Submit"><input name="Reset" type="reset" value="Reset"></td>
</tr>
</table>
</form>
</div>
</body>
</html>