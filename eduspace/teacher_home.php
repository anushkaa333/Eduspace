<?php

$con = mysqli_connect('localhost','root','','eduspace');
session_start();
if(!isset($_SESSION['username']))
  header('location:teacher_login.php');

$tid = $_SESSION['tid'];
if(!$con)
{
  echo "not connected to server";
}

if(isset($_POST['submit']))
{
$cname = $_POST['cname'];
$desc = $_POST['desc'];
$tid= $_SESSION['tid'];
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder ="upload image/".$filename;
$vname = $_POST['vname'];
$title= $_POST['title'];
move_uploaded_file($tempname,$folder);

$q = "insert into course(cname, description,tid,picsource,ad_date)values('$cname','$desc','$tid','$folder',current_date());";
$result = mysqli_query($con,$q);

$cid = mysqli_insert_id($con);
for($a = 0; $a < count($_POST['vname']); $a++){
  $q = "insert into video (cid,vname ,title) values ('$cid','". $_POST["vname"][$a] ."', '". $_POST["title"][$a]."')";
  mysqli_query($con, $q);
}

header('location:course_his.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA_Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EDUSPACE : SPACE OF EDUCATION</title>
  <link rel="stylesheet" type="text/css" href="teacher_home.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
  <script src="https://kit.fontawesome.com/a73d299641.js" crossorigin="anonymous"></script>
  <style type="text/css">
  body{
    background: #225470  ;
    font-family: 'Poppins', sans-serif;
  }
    .course-form h1{
margin-top: 0;
font-weight: 200;
}

.txtb{
border: 1px solid grey;
margin: 8px 0;
padding: 12px 18px;
border-radius: 8px;
}

.txtb label{
display: block;
text-align: left;
color: #333;
text-transform: uppercase;
font-size: 14px;
}

.txtb input, .txtb textarea{
width: 100%;
border: none;
background: none;
outline: none;
font-size:18px;
margin-top: 6px;
}

.btn{
display: inline-block;
background: #225470 ;
padding: 14px 0;
color: white;
text-transform: uppercase;
cursor: pointer;
margin-top: 8px;
width:100%;
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
  font-size:17px;
}

.custom-nav-item a{
  color: black !important;
  margin-left: 20px;

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


.course-form{
width:85%  !important;
max-width: 600px;
background: white;
position: absolute;
top:35%;
left:50%;
transform: translate(-50%, -50%);
padding: 30px 40px;
box-sizing: border-box;
border-radius: 8px;
text-align: center;
box-shadow: 0 0 20px #000000b3;
font-family: 'Poppins', sans-serif;
margin-top: 100px;
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
              <a class="nav-link " href="#">Add course<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="course_his.php">Course history</a>
            </li>

              <li class="nav-item custom-nav-item">
              <a class="nav-link" href="students.php">Students</a>
              </li>
              <li class="nav-item custom-nav-item">
              <a class="nav-link" href="teacher_prof.php">Profile</a>
            
            </li>

            <li class="custom-nav-item ">
              <a href="teacher_home.php"><img src="images/icon.png" alt="image" width="25" height="25" style="border-radius: 12px; margin-left: -2px; margin-right: 2px;"><?php echo $_SESSION['username'];?></a>   
            </li>

            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="index.php" >logout</a>
            </li>
    </ul>
  </div>
</nav>

<header style="">

<div class="bg">
<div class="course-form">
<h1>Add Course</h1>

  <form action="teacher_home.php" method="post" enctype="multipart/form-data">
  <div class="txtb">
  <label> Course Name : </label>
  <input type="text" name="cname"  placeholder="Enter Course Name">
</div>
<div class="txtb">
<label> Course Discription :</label>
<input type="text" name="desc" placeholder="Enter course discription">
</div>
<div class="txtb">
<label> Upload image here :</label>
<input type="file" name="uploadfile" value="image">
</div>

<table border=all>

  <tr>
  
  <th style="width:80px; text-align:center;">Video Link</th>
  <th style="width:60px;text-align:center;">Title</th>

  
</tr>
<tbody id="tbody"></tbody>
<tr>
<!-- <td><input type="button" value="Delete Row" onclick="deleteRows()" /></td> -->
</tr>
</table>

<p>
  <button type="button" onclick="addItem();" style="margin-top: 10px;
color: white;
background-color: #004480;
border: none;
height: 36px;
width: 100px;">Add Item</button>
</p>



 <input class="btn" type="submit" name="submit" value="add">
</form>
</div>
</div>
</header>

<script>
 var items = 0;
  function addItem(){
    items++;

    var html = "<tr>";
  
    html+= "<td><input name='vname[]' style='background:white; border:none; width:220px;'></td>";
     html+= "<td><input name='title[]' style='background:white; border:none; width:220px;'></td>";
     html+= "<td><button type='button'  onclick='deleteRows()' style='width:76px;border:none;'><i class='far fa-times-circle' style='color:red; background:white;border:none;'></i></button</td>";
    html+= "<tr>";
    document.getElementById("tbody").insertRow().innerHTML = html;
  } 

  function deleteRows(){

  var table = document.getElementById('tbody');
  var items = table.rows.length;
  if(items > '0'){
    var row = table.deleteRow(items-1);
    items--;
     items++;
  }
  else{
    alert('There should be atleast one row');
  }
} 


</script>

<div class="container-fluid" style="width:100%; height:30px; background-color:black; margin-top: 45%; ">
     <p class="text-center" style="color:white;position:relative; top:5px;"> Copyright @ 2020 : Team EDUSPACE</p>
  </div>


</body>
</html>