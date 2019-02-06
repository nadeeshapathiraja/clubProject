<?php
	
	$hostname= "localhost";
	$username="swimming";
	$password="12345";
	


	$sid="";
	$name="";
	$age="";
	$address="";
		
if (isset($_REQUEST["searchid"])){
		$searchid=$_REQUEST["searchid"];
	
	
	$con=mysqli_connect($hostname,$username,$password);
	
	
	$database=mysqli_select_db($con,"students");
	
	
	$sql="SELECT * FROM student WHERE index='$index' ";
	
	
	$result=mysqli_query($con,$sql);
 
 	if($row = mysqli_fetch_array($result)){
		$sid=$row[0];
		$name=$row[1];
		$age=$row[2];
		$address=$row[3];
		//echo "Records Updated";
	}else{
		echo "Not  This Record In Database<br/>";	
	}
	
//CLOSE CONNECTION
	mysqli_close($con);
	
	
	}
	
?>