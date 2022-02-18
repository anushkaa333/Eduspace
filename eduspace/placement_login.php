
<!DOCTYPE html>
<html>
<head>
	<title>Placement cell</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	body{
	margin: 0;
	padding: 0;
	background-color: lightblue;
	font-family: sans-serif;
	}

	.loginbox{
		width: 320px;
		height: 250px;
		background-color: black;
		top: 50%;
		left: 50%;
		position: absolute;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		padding: 20px 20px;
	}

	h1{
		margin: 0;
		padding: 0 0 20px;
		text-align: center;
		font-size: 22px;
		color: #fff;
	}
	
	.loginbox p{
		margin: 5px;
		padding: 0;
		font-weight: bold;
		color: #fff;
	}

	.loginbox input{
		width: 90%;
		margin-bottom: 20px;
	}

	.loginbox input[type="text"],input[type="password"]{
		border: none;
		border-bottom: 1px solid #fff;
		background: transparent;
		outline: none;
		height: 20px;
		color: #fff;
	}

	.loginbox input[type="submit"]{
		border: none;
		outline: none;
		height: 30px;
		background: #fb2525;
		color : #fff;
		font-size: 15px;
		border-radius: 20px;
	}

	.loginbox input[type="submit"]: hover{
		cursor: pointer;
		background-color:#ffc107; 
		color : #000;
	}

</style>
</head>
<body>
	<div class="loginbox">
		<h1>Login Here</h1>
		<form action="placement_login.php" method="post">
			<p>Username</p>
			<input type="text" name="user" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" name="submit" value="Login">
			
		</form>
	</div>	

</body>
</html>


<?php

$con = mysqli_connect('localhost','root','','eduspace');

if(!$con)
{
	echo "not connected to server";
}
/*mysqli_select_db($con ,'eduspace');*/
if(isset($_POST['submit'])){
$username = $_POST['user'];
$pass = $_POST['password'];

$q="select * from placement_cell where username='$username' && PASSWORD='$pass' ";
$result = mysqli_query($con,$q);
$r = mysqli_fetch_assoc($result);
if($result==true){

	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $pass;
	$_SESSION['username'] =$r['username'];
	header('location:placement.php');

}

else{

	echo "user not exist";

}
}	

?>