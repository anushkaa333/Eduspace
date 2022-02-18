<!DOCTYPE html>
<html>
<head>
	<title>display video</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
$con = mysqli_connect('localhost','root','','video');

$q ="select * from video";
$query = mysqli_query($con,$q);
while ($row = mysqli_fetch_array($query)) {
	$name = $row['name'];
	?>

	<div class="col-md-4">
		<video id="myvideo" width="100%" controls>
			<source src="<?php echo 'eduspace/upload video/'.$name;?>">
			</video>
		</div>

<?php }

?>


</body>
</html>