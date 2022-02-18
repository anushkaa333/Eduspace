<?php
$con = mysqli_connect('localhost','root','','eduspace');
session_start();

if(!isset($_SESSION['sid']))
{
    header("location:stud_login.php");
}
else
{
  $sid=$_SESSION['sid'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>PROFILe</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <script src="https://kit.fontawesome.com/a73d299641.js" crossorigin="anonymous"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
 * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
  background-color: white;
  background-color: #011727;
  
}
.navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: #e7e7e7;
    margin-top: 10px;
}
.nav-link{
  font-size:18px;
  
}
.navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a {
    color: black;
}

#header-nav{
  background-color:  #eaeaea;
  border-radius: 0;
  border: 0;
  padding-bottom: 10px;
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

.pro{
  background-color: #011b32;
  width:350px;
  height:500px;
  margin-top: 100px;
 
}

.profile img{
  margin-right:auto;
  margin-left:auto;
  width:200px;
  height:200px;
  border-radius:50%;
  border:3px solid white;
  margin-top:20px;
}
.name{
  color:white;
  text-transform:capitalize;
  margin-top:15px;
  font-size:25px;
  font-weight:200;
}
.email,.phone{
  color:white;
}

header{
}

body{
}

</style>
</head>
<body>

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
              <a class="nav-link" href="index.php">Logout</a>   
            </li>

           </ul>
         </div>
       </div>
     </nav>

<header>

<?php
   $sql="select * from student WHERE  sid=".$sid;
  $result=mysqli_query($con,$sql);
  if($result==true){
  $row=mysqli_fetch_assoc($result);
  }  
  $sql1 = "select * from stud_phone where sid =" .$sid;
  $result=mysqli_query($con,$sql1);
  if($result==true){
 $i=0;
    while($row2=mysqli_fetch_assoc($result))
    {
        $phone_no[$i++]=$row2['contact_no'];
    }
  }
     echo "<center><div class='pro'>
        <div class='profile'>
        <center>
          <img src='images/user.png'>
          <p class= 'name'>".$row['sname']."</p>
          <p class='email'><i class='fas fa-envelope' style='color:white;'></i> &nbsp; ".$row['email']."</p>
          <p class='phone'> <i class='fas fa-phone' style='color:white;'></i>"; 
          foreach ($phone_no as $i) {
            echo $i."  | ";
          }
          echo "
          </p>
        </center>
        </div>
    
 </div></center>";

?>
</header>

<div class="container-fluid" style="width:100%; height:30px; background-color:black; margin-top: 5%; ">
     <p class="text-center" style="color:white;position:relative; top:5px;"> Copyright @ 2020 : Team EDUSPACE</p>
  </div>

</body>
</html>
