<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	
.header{
	text-align:center;
	font-size:24px;
	font-family:Arial, Helvetica, sans-serif;
	
		
}

.schoolName{
  color: green; 
  font-weight: bold;
	font-size: 65px;
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
}
.club{
  color: blue; 
  font-weight: bold;
  font-size: 55px;
  text-align: center;
  font-style: italic;
}

* {box-sizing: border-box;}

body {
  background:url(Image/8.jpg) no-repeat;
  background-size:100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>


<div class="topnav">
  		<a class="active" href="#home"><i class="fa fa-fw fa-home"></i> Home</a>
  		<a href="ViewUpdateDeleteStudents.php"><i class="fa fa-user" aria-hidden="true"></i>
Users</a>
  		<a href="displayNews.php"><i class="fa fa-calendar" aria-hidden="true"></i>
 News</a>
  		<a href="aboutUs.php"><i class="fa fa-user-o" aria-hidden="true"></i>
 About Us</a>
  		<a href="#contact"><i class="fa fa-fw fa-envelope"></i>Contact</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<div>
		<pre class="schoolName">C.W.W KANNANGARA CENTRAL COLLAGE
     MATHUGAMA</pre>
 <p class="club">SWIMMING CLUB</p>
	</div>

</body>
</html>

