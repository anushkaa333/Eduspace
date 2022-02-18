<?php

$con = mysqli_connect('localhost','root','','eduspace');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>MY Courses</title>
<link rel="stylesheet" type="text/css" href="course_his.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">



<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
<style type="text/css">
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
 }

body {
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
  background-color: white;
  
}


#header-nav{
  background:#eaeaea;
  border-radius: 0;
  border: 0;
  padding-bottom: 10px;
}
.navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: #e7e7e7;
    margin-top: 10px;
}
.nav-link{
  font-size:18px;
}
img{
  margin-left: -100px;
  margin-right: 100px;
}

.navbar-brand{
  padding-top: 25px;
  font-size: 1.1em;
  font-weight: bold;

}

.navbar-brand h1{
  font-family: 'Lora', serif;
  color : black;
  font-size: 1.4em;
  text-transform: uppercase;
  font-weight: bold;
  text-shadow: 1px 1px 1px #222;
  margin-top: 0;
  margin-bottom: 20px;
  line-height: .75;
  text-decoration: underline;
}

.navbar-brand a:hover , .navbar-brand a:focus{
  text-decoration: none;
}




.custom-nav-item:hover{
  background-color:#d5d5d5;
  border-radius: 10px;
  border:none;
}


.custom-nav-item .active{
 background-color: #d5d5d5;
  border-radius: 10px; 
  border:none;
}
.navbar-default {
    background-color: #eaeaea;
    border-color: #e7e7e7;
}


  h1{
text-align: center;
  color: black;
  margin-left: -40px;
  text-decoration: underline;
  }


.tstyle .cname {
  padding: 20px 20px 20px 20px;
  font-size: 20px;
  text-align: center;
  background-color: #225470;
  color:white;
  text-transform:capitalize;
  font-weight:200;
}

.scname{
  padding: 5px 5px 5px 5px;
  font-size: 20px;
  font-weight:200;
}

  .cimg{
    margin-left: 90px;
  }
  
</style>
</head>
<body>

<!--<div class="topnav">
  <a href="index.php">logout</a>
  <a href="#">Home</a>
  <a href="#">Profile</a>
  
  <a href="#">Add Courses</a>-->



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
              <a class="nav-link " href="teacher_home.php">Add courses<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="#">Course history</a>
            </li>

              <li class="nav-item custom-nav-item">
              <a class="nav-link" href="students.php ">Student</a>
            </li>

            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="teacher_prof.php">Profile</a>
            </li>

             <li class="nav-item custom-nav-item">
              <a class="nav-link" href="#"><?php echo $_SESSION['username'];?></a>   
            </li>

            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="index.php">Logout</a>   
            </li>

           </ul>
         </div>
       </div>
     </nav>
	

  <h1 style="text-decoration:none;"> My Applied Courses</h1>
  <center>
  <table  class="tstyle" border=all>
        <tr>
            
            <td class="cname">course name </td>
            <td class="cname">discription</td>
            <td class="cname">course added date</td>
            
        </tr>
	
		<?php
		$tid = $_SESSION['tid'];
		$q = 'select * from course where tid='.$tid;
		$result3 = mysqli_query($con,$q);
		if($result3==true){
		while($row=mysqli_fetch_assoc($result3))
    	{
         echo 
            '<tr>
            
             <td class="scname">'.$row['cname'].'</td>
             <td class="scname">'.$row['description'].'</td>
              <td class="scname">'.$row['ad_date'].'</td>
             <td><form action ="course_his.php" method= "post" ><input type="hidden" name="cid" value='.$row['cid'].'></form></td>
             </tr>';
    	}
    }
    else{
    	echo "not found";
    }
    ?>
     </table>
  </center>

  <div class="container-fluid" style="width:100%; height:30px; background-color:black; margin-top: 26%; ">
     <p class="text-center" style="color:white;position:relative; top:5px;"> Copyright @ 2020 : Team EDUSPACE</p>
  </div>

</body>
</html>