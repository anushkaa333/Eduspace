<?

session_start();
$con = mysqli_connect('localhost','root','','eduspace');

if(!$con)
{
	echo "not connected to server";
}

if (isset($_POST['submit'])) {
	$cname = $_POST['cname'];
$desc = $_POST['desc'];
$tid = $_SESSION['tid'];

$q = "insert into course(cname, discription,tid)values('$cname','$desc','tid');";
echo $q;
$result = mysqli_query($con,$q);

if($result==true){
	echo "sucess";
}
else{
	echo "fail";
}
}
?>