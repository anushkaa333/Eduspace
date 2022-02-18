<?php
$con = mysqli_connect('localhost','root','','eduspace');

if(!isset($_SESSION['username']))

session_start();
if(isset($_POST['delete']))
{
  $sid = $_SESSION['sid'];
  $cid=$_POST['cid'];
  $q= "delete from apply where cid='$cid' and sid='$sid' ";
  mysqli_query($con,$q);
 /* header('location:applied_course.php');*/
}

if(isset($_POST['delete']))
{
  $sid = $_SESSION['sid']; 
   $tid=$_POST['tid'];
  $q= "delete from contact where tid='$tid' and sid='$sid' ";
  
  $result3 = mysqli_query($con,$q);
  if($result3==true)
  {
    echo " Deleted successfully";
  }
  else
  {
    echo "not found";
  }
 /* header('location:applied_course.php');*/
}

if(isset($_POST['complete'])){
  $sid = $_SESSION['sid'];
  $cid=$_POST['cid'];
  $q = "update apply set Status = 'completed' where sid='$sid' and cid='$cid' ";
  $result = mysqli_query($con , $q);
  if($result==true){
    echo "updates successfully";
  }
  else{
    echo "not found";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>MY Courses</title>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css/stud_home.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
<script src="https://kit.fontawesome.com/a73d299641.js" crossorigin="anonymous"></script>
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

.tstyle{
  margin-left: 20px;
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

  <nav id="header-nav" class="navbar navbar-default ">
      <div class="container">
        <div class="navbar-header fixed-top">
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
              <a class="nav-link" href="index.php">logout</a>   
            </li>

           </ul>
         </div>
       </div>
     </nav>

<header>
     <h1 style="text-decoration: underline; font-weight: bold; font-size: 30px; color: black; text-align: center;margin-bottom: 50px;">MY COURSES</h1>

	<table class="tstyle" border=all>
		<tr>
			<td class="cname">COURSE NAME</td>
			<td class="cname">COURSE DISCRIPTION</td>
			<td class="cname">STATUS</td>
        <td class="cname">date</td>
        <td class="cname">status_block</td>
        <td class="cname">course</td>
        <td class="cname">Press here after completing course</td>
           
		</tr>
		<?php
    
    $sid = $_SESSION['sid'];
		$q = 'select * from course , apply ,student where course.cid=apply.cid and  student.sid = apply.sid and student.sid='.$sid;
		$result3 = mysqli_query($con,$q);
		if($result3==true){
		while($row=mysqli_fetch_assoc($result3))
    	{
         echo 

            '<tr>
             <td class = "scname">'.$row['cname'].'</td>
             <td class= "scname">'.$row['description'].'</td>
             <td class ="scname">'.$row['Status'].'</td>
             <td class = "scname">'.$row['add_date'].'</td>
             <td class="scname"><form action ="applied_course.php" method= "post" ><input type="hidden" name="cid" value='.$row['cid'].'>
             <input type="hidden" name="tid" value='.$row['tid'].'><button name="delete" class="btn">Unenroll</button></form></td>
              <td class="scname"><a href= "video.php? cid='.$row['cid'].' " class="btn1"</a>continue learning</td>
                <td class="scname"><form action ="applied_course.php" method= "post" ><input type="hidden" name="cid" value='.$row['cid'].'><button name="complete" class="btn">complete</button></form></td
             </tr>';
    	}
    }
    else{
    	echo "not found";
    }
    ?>
	</table>
</header>

<div class="container-fluid" style="width:100%; height:30px; background-color:black; margin-top: 32%; ">
     <p class="text-center" style="color:white;position:relative; top:5px;"> Copyright @ 2020 : Team EDUSPACE</p>
  </div>

</body>
</html>