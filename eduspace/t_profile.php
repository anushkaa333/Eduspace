<?php
$con = mysqli_connect('localhost','root','','eduspace');
session_start();

if(!isset($_SESSION['tid']))
{
    header("location:teacher_login.php");
}
else
{
  $sid=$_SESSION['sid'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	 $sql="select * from student  WHERE tid=".$tid;
	$result=mysqli_query($con,$sql);
  	if($result)
  	{
      $row=mysqli_fetch_assoc($result);
  	}
	echo "<p> student name =".$row['sname']."</p>";
	echo "<p> student name =".$row['sname']."</p>";
	echo "<p> student name =".$row['sname']."</p>";
	echo "<p> student name =".$row['sname']."</p>";
	echo "<p> student name =".$row['sname']."</p>";
	?>

</body>
</html>
