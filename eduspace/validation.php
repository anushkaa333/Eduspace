<?php

$con = mysqli_connect('localhost','root','','eduspace');

if(!$con)
{
	echo "not connected to server";
}

/*mysqli_select_db($con ,'eduspace');*/

$username = $_POST['user'];
$pass = $_POST['password'];



	$q="select * from student where username='$username' && password='$pass' ";



$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
$r = mysqli_fetch_assoc($result);

if($num == 1){

	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $pass;
	$_SESSION['sid'] = $r['sid'];
	header('location:stud_home.php');

}
else{

	echo "user not exist";
	header('location:stud_login.php');

}	

?>