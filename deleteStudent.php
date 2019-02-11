<?php

	error_reporting(0);

	$image="";
	$indexno="";
	$fullname="";
	$ininame="";
	$address="";
	$dob="";
	$gender="";
	$school="";
	$grade="";
	$parentname="";
	$mobile="";
	$fixed="";
		
if (isset($_POST["searchid"])){

		$searchid=$_POST["searchid"];

	$hostname= "localhost";
	$username="swimming";
	$password="12345";
	
	$con=mysqli_connect($hostname,$username,$password);
	
	
	$database=mysqli_select_db($con,"swimmingclub");
	
	
	$sql="SELECT * FROM students WHERE indexno='$searchid' ";
	
	
	$result=mysqli_query($con,$sql);


 
 	if($row = mysqli_fetch_array($result)){

		$image=$row[0];
		$indexno=$row[1];
		$fullname=$row[2];
		$ininame=$row[3];
		$address=$row[4];
		$dob=$row[5];
		$gender=$row[6];
		$school=$row[7];
		$grade=$row[8];
		$parentname=$row[9];
		$mobile=$row[8];
		$fixed=$row[9];
		//echo $id;
		//echo $fullname;
	}else{
		echo "Not  This Record In Database<br/>";	
	}
	
//CLOSE CONNECTION
	mysqli_close($con);
	
	
	}
	
?>



 <?php


if (isset($_REQUEST["delete"])){

	$hostname= "localhost";
	$username="swimming";
	$password="12345";
	
	$con=mysqli_connect($hostname,$username,$password);
	
	
	$database=mysqli_select_db($con,"swimmingclub");
	
	$image = basename($_FILES['imgfile']['name']);
	$indexno = $_POST['indexno'];
	$fullname = $_POST['fullname'];
	$ininame=$_POST['ininame'];
	$address=$_POST['address']; 
	$dob=$_POST['dob'] ;
	$gender=$_POST['gender'] ;
	$school=$_POST['school'];
	$grade=$_POST['grade'];
	$parentname=$_POST['parentname'];
	$mobile=$_POST['mobile'];
	$fixed=$_POST['fixed'];

$sql="DELETE FROM students WHERE indexno=$indexno";


	$result=mysqli_query($con,$sql);

	
	if ($con->query($sql) === TRUE) {
    	echo "Record Delete successfully: $result<br />";
	} else {
    	echo "Error updating record: " . $con->error;
	}
		
	mysqli_close($con);

}

?>





<html>
<head>
<title>Delete Students</title>
<link href="style/deleteUsers.css" rel="stylesheet" type="text/css"/>
</head>

<body class="body">


<form method="post" action="#" name="form" class="form1" style="text-align:center" >
	<h1>Search Student</h1>
	Enter Index: <input type="text" name="searchid" size="10px"/>
	<input type="submit" name="search" class="search" value="Search" value="<?php echo $index; ?>" />
</form>


<div class="logbox">
<h1>Delete Student</h1>
<form name="form" action="#" method="post"  enctype="multipart/form-data">
<table class="tabledate">

<tr>
    <td>Image</td>
    <td><img src="http://localhost/NIBMProject/students/<?php echo  $row[0] ?>" style="height: 100px; width: 100px;"></td>
</tr> 

<tr>
<td>Index Number: </td>
<td><input name="indexno" type="text"  maxlength="20" value="<?php echo $row[1]; ?>"></td>
</tr>

<tr>
<td>Full Name: </td>
<td><input name="fullname" type="text" value="<?php echo $row[2]; ?>" ></td>
</tr>

<tr>
<td>Name With Initial: </td>
<td><input name="ininame" type="text" value="<?php echo $row[3]; ?>" ></td>
</tr>

<tr>
<td>Address: </td>
<td><textarea name="address" ><?php echo $row[4]; ?></textarea></td>
</tr>

<tr>
<td>Date of Birth: </td>
<td><input name="dob" type="date" value="<?php echo $row[5]; ?>" ></td>
</tr>

<tr>
<td>Gender: </td>
<?php if($row[6]=="Male"){ ?>
<td>Male:<input value="Male" name="gender" type="radio" checked>
Female:<input value="Female" name="gender" type="radio" ></td>
<?php } else{?>
	<td>Male:<input value="Male" name="gender" type="radio" >
Female:<input value="Female" name="gender" type="radio" checked></td>
<?php }?>
</tr>

<tr>
<td>School:</td>
<td><input name="school" type="text" value="<?php echo $row[7]; ?>" ></td>
</tr>

<tr>
<td>Grade: </td>
<td><input name="grade" type="text" value="<?php echo $row[8]; ?>" ></td>
</tr>

<tr>
<td>Parent Name: </td>
<td><input name="parentname" type="text" value="<?php echo $row[9]; ?>" ></td>
</tr>


<tr>
<td>Phone: </td>
<td>Mobile: <input name="mobile" type="text" value="<?php echo $row[10]; ?>" ><br/>Fixed: <input name="fixed" type="text" value="<?php echo $row[11]; ?>" ></td>
</tr>



<tr>
<td></td>
<td></td>
</tr> 

<tr>
<td></td>
<td></td>
</tr>

<tr>
<td></td>
<td><input class="button1" name="delete" type="submit" value="Delete"><input class="button2" name="Reset" type="reset" value="Reset"></td>
</tr>



</table>

</form>

</div>

</body>

</html>
