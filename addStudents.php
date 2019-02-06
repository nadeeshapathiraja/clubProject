<?php

if(isset($_POST['Submit'])){
	
	$image=basename($_FILES["imgfile"]["name"]);
	$index=$_POST['index'];
	$fullname=$_POST['fullname'];
	$ininame=$_POST['ininame'];
	$address=$_POST['address'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$school=$_POST['school'];
	$grade=$_POST['grade'];
	$parentname=$_POST['parentname'];
	$mobile=$_POST['mobile'];
	$fixed=$_POST['fixed'];


	$hostname='localhost';
	$username='swimming';
	$password='12345';

	$con=mysqli_connect($hostname,$username,$password);

	
	$db=mysqli_select_db($con, "swimmingclub");

	$sql="INSERT INTO students(image,indexno,fullname,ininame,address,dob,gender,school,grade,parentname,mobile,fixed) VALUES('$image', $index,'$fullname','$ininame','$address','$dob','$gender','$school','$grade','$parentname',$mobile,$fixed)";
	

	$result= mysqli_query($con,$sql);
	if (mysqli_query($con, $sql)) {
    	echo "New record created successfully";
	}

	

	mysqli_close($con);

	if($result==1){
		//uplord file to server
	//make file uplord path
		$path="Students/".$_FILES["imgfile"]["name"];
	//uplord
		move_uploaded_file($_FILES["imgfile"]["tmp_name"],$path);
	}

	 

}

?>

 
<html>
<head>
<title>Add Student</title>
<link href="style/addingusers.css" rel="stylesheet" type="text/css"/>
</head>

<body class="body">
<div class="logbox">
<h1>Add Student</h1>
<form name="form" action="addStudents.php" method="post" enctype="multipart/form-data">
<table class="tabledate">
<tr>
    <td>Image</td>
    <td><input name="imgfile" type="file" placeholder="SEARCH"></td>
</tr>
<tr>
<td>Index Number: </td>
<td><input name="index" type="text"  maxlength="20"></td>
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
<td>Male<input value="Male" name="gender" type="radio" >Female<input value="Female" name="gender" type="radio" ></td>
</tr>
<tr>
<td>School: </td>
<td><input name="school" type="text" ></td>
</tr>
<tr>
<td>Grade: </td>
<td><select name="grade">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>

</select></td>
</tr>



<tr>
<td>Parent Name: </td>
<td><input name="parentname" type="text" ></td>
</tr>
<tr>
<td>Phone: </td>
<td>Mobile: <input name="mobile" type="text" ><br/>Fixed: <input name="fixed" type="text" ></td>
</tr>

<tr>
<td></td>
<td></td>
</tr> 

<tr>
<td></td>
<td></td>
</tr>

</tr>
<td></td>
<td><input class="button1" name="Submit" type="submit" value="Submit"><input class="button2" name="Reset" type="reset" value="Reset"></td>
</tr>
</table>
</form>
</div>
</body>
</html>









