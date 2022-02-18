<?php


$con = mysqli_connect('localhost','root','','eduspace');

if(!$con)
{
	echo "not connected to server";
}

/*mysqli_select_db($con ,'eduspace');*/

$username = $_POST['user'];
$pass = $_POST['password'];



$q="select * from teacher where username='$username' && password='$pass' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

$r = mysqli_fetch_assoc($result);
	
if($num == 1){

	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $pass;
	$_SESSION['tid'] = $r['tid'];
	echo $_SESSION['tid'];
	header('location:teacher_home.php');

}

else{

header('location:teacher_login.php');
}	

?>