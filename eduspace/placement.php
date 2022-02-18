<?php

$con = mysqli_connect('localhost','root','','eduspace');

if(!$con)
{
	echo "not connected to server";
}
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA_Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EDUSPACE : SPACE OF EDUCATION</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
  <style type="text/css">
    *{
      margin:0px;
      padding:0px;
    }
    body{
      font-family: 'Poppins', sans-serif;
      overflow-x:hidden;
    }
    nav{
      background-color:white;
    }
    #header-nav{
      background:#eaeaea;
  border-radius: 0;
  border: 0;
  padding-bottom: 10px;
 
}
.nav-link{
  font-size:17px;

}
.custom-nav-item:hover {
  background-color: #f8f8f8;
  border-radius: 10px;
  color:white;
}

.navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: #e7e7e7;
    margin-top: 10px;
}
.custom-nav-item .active {
 background-color:#f8f8f8;
  border-radius: 10px;
}


.tstyle{
  margin-left: 15%;
  margin-right: 20px;

}

.tstyle .cname {
 
  padding: 20px 20px 20px 20px;
  font-size: 20px;
  text-align: center;
  background-color: #225470;
  color:white;
  text-transform:capitalize;
  font-weight:200;
  width: 45%;
}

.scname{
  padding: 5px 5px 5px 5px;
  font-size: 20px;
  font-weight:200;
  width: 45%;
  text-align: center;

}

.btn{
  margin-left: 30%;
  font-size: 20px;
  box-sizing: border-box;
  border : 2px solid blue;
}

.procedure{
  text-align: center;
  font-size: 20px;
  color: red;
  margin-right: 40px;
}

</style>
</head>

<body>
<nav id="header-nav" class="navbar navbar-default fixed top">
      <div class="container">
        <div class="navbar-header ">
          <a href="index.php" class="pull-left visible-md visible-lg">
            <div id="logo-img" alt="logo image"></div>
            <img src="images/home_logo.png" alt="eduspace-logo" height="60" width="100">
          </a>
          <div class="navbar-brand">
           
          </div>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded = "false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div id="collapsable-nav" class="collapse navbar-collapse">
          <ul id="nav-list" class="nav navbar-nav navbar-right">
          <li class="nav-item home custom-nav-item ">
              <a class="nav-link " href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="index.php" class="about">Logout</a>
            </li>
             
  </div>
</nav>

     <h1 style="font-size: 20px; text-align: center; text-decoration: underline; color: purple; font-style: bold; margin-right: 80px;">CHECK THE STATUS OF ADDED COURSES AND APPLIED COURSES HERE</h1>
	<hr>
	
<div>

	<form action="placement.php" method="post">
		<input type="submit" name="student" value="student" class="btn">
	</form>


<table class="tstyle" border all>
	<tr>
		<td class="cname">Student Name</td>
		<td class="cname">Applied Course</td>
		<td class="cname">Status</td>
		
	</tr>
  
  <hr>

<?php
if(isset($_POST['student'])){
$q1= 'select student.sname , course.cname ,apply.status from student , course , apply where student.sid=apply.sid and course.cid=apply.cid';

$result3 = mysqli_query($con,$q1);
    if($result3==true){
    while($row=mysqli_fetch_assoc($result3))
      {
         echo 

            '<tr>
             <td class = "scname">'.$row['sname'].'</td>
             <td class = "scname">'.$row['cname'].'</td>
             <td class = "scname">'.$row['status'].'</td>

             </tr>';
      }
    }
    else{
      echo "not found";
    }
}
?>
</table>

<hr>

<form action="placement.php" method="post">
		<input type="submit" name="teacher" value="Teacher" class="btn">
	</form>
	<table class=" tstyle" border all style="width: 60%";>
  <tr>
    <td class="cname">Teacher Name</td>
    <td class="cname">Added Courses</td>
  </tr>
  <hr>
<?php
if(isset($_POST['teacher']))
{

$q = 'select teacher.tname , course.cname from teacher , course where course.tid=teacher.tid';
    $result3 = mysqli_query($con,$q);
    if($result3==true){
    while($row=mysqli_fetch_assoc($result3))
      {
         echo 

            '<tr>
             <td class = "scname">'.$row['tname'].'</td>
             <td class = "scname">'.$row['cname'].'</td>

             </tr>';
      }
    }
    else{
      echo "not found";
 }
}
?>
</table>
<hr>

<?php

$q = "CALL `course_count`(@p0)"; 
$result = mysqli_query($con,$q);
$result1 = mysqli_query($con,"SELECT @p0 AS `tot_course`;");
$row=mysqli_fetch_assoc($result1);
    echo '
    <p class = "procedure">TOTAL NO OF COURSES : '.$row['tot_course'].'</p>';

?>

</div>
</body>
</html>
