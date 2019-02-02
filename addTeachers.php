<?php

if(isset($_POST['Submit'])){
	
	$image=basename($_FILES["imgfile"]["name"]);
	$tid=$_POST['tid'];
	$id=$_POST['id'];
	$fullname=$_POST['fullname'];
	$ininame=$_POST['ininame'];
	$address=$_POST['address'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$fixed=$_POST['fixed'];


	$hostname='localhost';
	$username='swimming';
	$password='12345';

	$con=mysqli_connect($hostname,$username,$password);

	
	$db=mysqli_select_db($con, "swimmingclub");

	$sql="INSERT INTO teachers(image,tid,id,fullname,ininame,address,dob,gender,mobile,fixed) VALUES('$image', $tid,$id,'$fullname','$ininame','$address','$dob','$gender',$mobile,$fixed)";
	

	$result= mysqli_query($con,$sql);
	if (mysqli_query($con, $sql)) {
    	echo "New record created successfully";
	}

	mysqli_close($con);

	if($result==1){
		//uplord file to server
	//make file uplord path
		$path="teachers/".$_FILES["imgfile"]["name"];
	//uplord
		move_uploaded_file($_FILES["imgfile"]["tmp_name"],$path);
	}

	 

}

?>
<html>
<head>
<title>Add Teachers</title>
<link href="style/addingusers.css" rel="stylesheet" type="text/css"/>
</head>

<body class="body">
<div class="logbox">
<h1>Add Teachers</h1>
<form name="form" action="#" method="post" enctype="multipart/form-data">
<table class="tabledate"> 

<tr>
    <td>Image</td>
    <td><input name="imgfile" type="file" placeholder="Browse"></td>
  </tr>

<tr>
<td>Teacher ID: </td>
<td><input name="tid" type="text"  maxlength="20"></td>
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
<td>Male<input value="Male" name="gender" type="radio" >Female<input value="Female" name="gender" type="radio" ></td>
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

