<?php
$con = mysqli_connect('localhost','root','','eduspace');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>videos</title>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stud_home.css">
<link rel="stylesheet" type="text/css" href="applied_courses.css">
<link rel="stylesheet" type="text/css" href="css/applied_courses.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
*{
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
  
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
  font-size:20px;
}

.custom-nav-item a{
	color: black !important;

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

table th{

	width:20%;
	height:50px;
	text-align:center;
	background-color: #225470;
	font-weight:200;
	color:white;

}
td{
	width:200px;
	height:50px;
	text-align:center;

}

.con{
  margin-right:auto;
  margin-left:auto;
  padding:100px;
}
.course_name{
  text-align: center;
}


.course{
     
     width: 20%;
     display: inline-block;
     box-shadow: grey 0px 0px 8px;
     border:2px solid white;
     border-radius: 5px; 
     margin-left: 40px;
     text-align: center;
     background-color:#0000007d;
     margin-top: 20px;
     margin-bottom: 20px;
     margin-left: 40%;
    
    
    }

.course:hover{
  
  transition: 1s;

}

.image img{
  width: 100%;
  border-top-right-radius: 2px;
  border-top-left-radius: 0px; 
  margin-left: 0px;
 } 


.title{
  text-align: center;
  padding: 10px;
  color:white;
 }

h1{
  font-size: 20px;
  color:white;
 }

.des{
  padding: 3px;
  text-align: center;
 color:white;
  padding-top: 10px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}

.btn{
  margin-top: 15px;
  margin-bottom: 10px;
  background-color: #225470;
  border-radius: 0px;
  padding:10px;
  color:white;
  text-transform:capitalize;
  
}
.btn:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}


.Add{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
     margin-left: 42%;
     background-color: white;
   }

.Add:hover{
     box-shadow: 2px 2px 20px darkblue;
     transition: 1s;

}

input{
  width: 40%;
  height: 5%;
  border : 2px solid grey;
  border-radius: 0px;
  padding: 8px 15px 8px 15px;
  margin : 10px 0px 15px 0px;
}


	</style>
</head>

<body>


	<nav id="header-nav" class="navbar navbar-default top" >
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
              <a class="nav-link active" href="stud_home.php" style="margin-right: 10px;">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="applied_course.php">Applied courses</a>
            </li>

            </li>

            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="contact.php">View teacher</a>
            </li>

            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="profile_con.php">Profile</a>
            </li>

            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="#"><img src="images/icon.png" alt="image" width="25" height="25" style="border-radius: 12px; margin-left: -2px; margin-right: 2px;"><?php echo $_SESSION['username'];?></a>   
            </li>


            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="index.php">Logout</a>   
            </li>

           </ul>
         </div>
       </div>
     </nav>
     <hr>
<div style="background-color: #011b32; margin-bottom: 10%;">

<?php
$cid= $_GET['cid'];
  $q = 'select * from course where cid='.$cid;
    $result3 = mysqli_query($con,$q);
    if($result3==true){
    while($row=mysqli_fetch_assoc($result3))
      {
         echo 
         '<tr>
            <div class="course">
            <div class="image">
            
   <td><a href=" '.$row['picsource'].'"><img src=" '.$row['picsource'].' "height=150 width=600 /></a></td>
  </div>
  </tr>

  <div class="title">
    <h1>'.$row['cname'].'</h1>
  </div>

  <div class="des">
    <p>'.$row['description'].'</p>
  </div>
</div>';
             
      }
    }
?>

</div>

 <center>
	<table border=all>
		<tr>
			<th>VIDEO LINK</td>
			<th>VIDEO NAME</td>
		</tr>
			
		
<?php

if (isset($_GET['cid'])) {
	$cid= $_GET['cid'];
	$q = 'select * from video where cid='.$cid;
	$result = mysqli_query($con,$q);
	while($row=mysqli_fetch_assoc($result)){
		echo
		'
		</tr>
             <td ><a href='.$row['vname'].'>Watch</a></td>
             <td >'.$row['title'].'</td>
             </tr>';
	}
}
else{
	header('location:applied_course.php');
}

?>
	</table>
</center>


<div class="container-fluid" style="width:100%; height:30px; background-color:black; margin-top: 10% ">
     <p class="text-center" style="color:white;position:relative; top:5px;"> Copyright @ 2020 : Team EDUSPACE</p>
  </div>

</body>
</html>