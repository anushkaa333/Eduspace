<?php

session_start();
$con = mysqli_connect('localhost','root','','eduspace');

if(!$con)	
{
	echo "not connected to server";
}


if (empty(trim($_POST['no'])) || strlen(trim($_POST['no'])) != 10) {
	$err = "invalid phone no" ;
	echo die($err);
}
else
{
	$phone1 = trim($_POST['no']);
}
/*mysqli_select_db($con ,'eduspace');*/

$username = $_POST['user'];
$pass = $_POST['password'];
$tname = $_POST['tname'];
$email = $_POST['email'];
$desig = $_POST['desig'];
$phone1 = $_POST['no'];
$phone2 = $_POST['an_no'];


$cpassword = $_POST['cpassword'];

$q="select * from teacher where username='$username' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num == 1){
	echo "duplicate data";
}
else{
	if($pass==$cpassword){

$q1 = "insert into teacher (tname,t_email,designation,username,password) values ('$tname','$email','$desig','$username','$pass');";
mysqli_query($con,$q1);

$q="select * from teacher where username='$username' ";
$result = mysqli_query($con,$q);
$r = mysqli_fetch_assoc($result);
	$tid = $r['tid'];
	$q2 = "insert into teacher_phone values ('$tid','$phone1');";
	mysqli_query($con,$q2);
	$q3 = "insert into teacher_phone values ('$tid','$phone2');";
	mysqli_query($con,$q3);

	header('location:teacher_login.php');}
	else{
		$error = 'password not matched!';
	}

}	

?>