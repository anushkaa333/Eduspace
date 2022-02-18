<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA_Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EDUSPACE : SPACE OF EDUCATION</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
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
 
    .remove-vid-marg{
	margin: 0px;
	padding: 0px;
	margin-top: -20px;
  margin-bottom: -5px;
  height:857px;
	
}
    video{
      width:100%;
      height:100%;
     
      padding:0px;
    }
    .vid-content{
      margin:0px;
      text-align:center;
      position:absolute;
      top:250px;
     width:100%;
      right:auto;
      z-index:2;
    }
    .vid-content h1{
      color:white;
      text-align:center;
      font-size:63px;
      font-family: 'Poppins', sans-serif;
    }
    .vid-content small{
      color:white;
      font-size:18px;
    }
    .btn-danger{
      margin-top:20px;
      background-color:#225470;
      border:none;
      height:36px;
      font-size:18px;
      border-radius:0px;
    }
   
 
   .vid-overlay{
     width:100%;
     position:absolute;
     height:854px;
     opacity:0.4;
     background-color: #225470;
   }
   

.custom-nav-item a{
	color: black !important;

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
.about{
  font-size:40px;
  font-weight:bolder;
}
.about-us{
  display:flex;
  align-items:center;
  justify-content:center;
  margin-top:40px;
}
.box{
  width:500px;
  height:330px;
}
.box img{
  width:500px;
  height:330px;
}
.box p{
  font-size:15px;
  font-weight:200px;
}
.categories h1{
   font-size:40px;
  font-weight:bolder;
  margin-top:30px;
}
.mainbox{
  display:flex;
  align-items:center;
  justify-content:center;
  margin:auto;
}
.icons{
  display:flex;
  align-items:center;
  justify-content:center;  
  flex-direction:column;
  width:200px;
  height:200px;
  padding:20px;
  margin:60px;
  box-shadow: grey 0px 0px 8px;
}
.icons .image{
  width:120px;
  height:120px;
  margin-left: 100px;
}
.icons p{
  margin-top:10px;
}

@media screen and (min-width:0px) and (max-width: 700px){
	.my-content{
		display: none;
	}
	
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
              <a class="nav-link" href="#about" class="about">About</a>
            </li>
             <li class="nav-item dropdown custom-nav-item">
        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="stud_login.php">Student Login</a></li>
         <li><a href="teacher_login.php">Teacher Login</a></li>
        <li><a href="placement_login.php">placement  cell</a></li>
      </li>
    </ul>
  </div>
</nav>

   
    <div class="container-fluid remove-vid-marg">
    <div class="vid-overlay"></div>
        <video playsinline autoplay muted loop height="400px;" controls>
          <source src="videos/homepage.mp4" >
        </video>
       
    
  <center>
      <div class="vid-content">
      <h1 class="my-content"> Welcome to Eduspace </h1>
      <small class="my-content">Learn and Implement</small><br>
      <a href="stud_login.php" class="btn btn-danger">Get started</a>
    </div>
</center>
    </div>
    <h1 class="text-center about" id="about">About Us</h1>
    <div class="about-us">
     
      <div class="box">
        <img src="images/laptop.jpg" alt="">
      </div>
      <div class="box">
        <p>Eduspace is a platform that allows instructors to build online courses on their preferred topics. ... Eduspace also offers Udemy for Business, enabling businesses access to a targeted suite of over 7,000 training courses on topics from digital marketing tactics to office productivity, design, management, programming, and more. Courses are offered across a breadth of categories, including business and entrepreneurship, academics, the arts, health and fitness, language, music, and technology.[citation needed] Most classes are in practical subjects such as Excel software or using an iPhone camera.[22] eduspace also offers eduspace for Business, enabling businesses access to a targeted suite of over 7,000 training courses[23] on topics from digital marketing tactics to office productivity, design, management, programming, and more. With eduspace for Business, organizations can also create custom learning portals for corporate training.[24]</p>
      </div>
    </div>
    <div class="categories">
      <h1 class="text-center">Our Categories</h1>
      <div class="mainbox">
         <div class="icons">
           <img src="images/desktop.png" alt="" class="image">
           <p class="text-center">Android Development</p>
         </div>
         <div class="icons">
         <img src="images/programming.png" alt="" class="image">
         <p class="text-center">Web Development</p>
         </div>
         <div class="icons">
         <img src="images/learning.png" alt="" class="image">
         <p class="text-center">Artificial Intelligence</p>
         </div>
      </div>
    </div>
    <div class="container-fluid" style="width:100%; height:30px; background-color:black; ">
     <p class="text-center" style="color:white;position:relative; top:5px;"> Copyright @ 2020 : Team EDUSPACE</p>
  </div>
  

  

 

  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>