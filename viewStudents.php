
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  -webkit-column-rule: 4px double #ff00ff; /* Chrome, Safari, Opera */
  -moz-column-rule: 4px double #ff00ff; /* Firefox */
  column-rule: 4px double #ff00ff;
}

.left {
  width: 80%;
}

.right {
  width: 20%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  background-color: #f1f1c1;
}

</style>
</head>
<body>

<h2>Two Unequal Columns</h2>

<div class="row">
  <div class="column left">
   <?php
	
	$hostname= "localhost";
	$username="swimming";
	$password="12345";
	
	$con = mysqli_connect($hostname,$username,$password);
	
	$dbconect=mysqli_select_db($con,"swimmingclub");
	
	$sql="SELECT * FROM students";

	$result= mysqli_query($con,$sql);
?>
	
	<table , th, td style="border: 1px solid black;
  				border-collapse: collapse;
  	">
		<tr>
			<th>Image </th>
			<th>Index </th>
			<th>Full Name </th>
			<th>Name With Initial </th>
			<th>Address </th>
			<th>Date of Birth </th>
			<th>Gender </th>
			<th>School </th>
			<th>Grade </th>
			<th>Parent Name </th>
			<th>Mobile </th>
			<th>Fixed </th>

		</tr>
	
		<?php
		$data  = array();
		while($row=mysqli_fetch_assoc($result)){
			$data[]=$row;
		}	
		foreach($data as $d){
			?>

		sort($d);
		<tr>
			
				<td><img src="http://localhost/NIBMProject/students/<?php echo  $d['image']; ?>" style="height: 100px; width: 100px;"></td>
				<td><?php echo $d['indexno']; ?></td>
				<td><?php echo $d['fullname']; ?></td>
				<td><?php echo $d['ininame']; ?></td>
				<td><?php echo $d['address']; ?></td>
				<td><?php echo $d['dob']; ?></td>
				<td><?php echo $d['gender']; ?></td>
				<td><?php echo $d['school']; ?></td>
				<td><?php echo $d['grade']; ?></td>
				<td><?php echo $d['parentname']; ?></td>
				<td><?php echo $d['mobile']; ?></td>
				<td><?php echo $d['fixed']; ?></td>
			
		</tr>
		<?php
			}
		?>
		
	</table>
	
	</div>
  <div class="column right" style="background-color:#FFF8DC;">
    <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  </div>
</div>

</body>
</html>
