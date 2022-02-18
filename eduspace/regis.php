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
if(isset($_POST['register']))
{
$username = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];
$sname = $_POST['name'];
$phone2 = $_POST['an_no'];
$cpassword = $_POST['cpassword'];

$q="select * from student where username='$username' ";
$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);
if($num == 1){
	echo "duplicate data";
}
else{

	if($pass==$cpassword)
	{
	
		$q1 = "insert into student (username,password,email,sname) values ('$username','$pass','$email','$sname');";
		mysqli_query($con,$q1);

		$q="select * from student where username='$username' ";
		$result = mysqli_query($con,$q);
		$r = mysqli_fetch_assoc($result);
		$sid = $r['sid'];
		$q2 = "insert into stud_phone values ('$sid','$phone1');";
		mysqli_query($con,$q2);
		$q3 = "insert into stud_phone values ('$sid','$phone2');";
		mysqli_query($con,$q3);
		header('location:stud_login.php');
}

	else{
		$error = 'password not matched!';
	}
}
}
?>

