<?php

$con = mysqli_connect('localhost','root','','eduspace');

if(!$con)
{
  echo "not connected to server";
}
session_start();
?>



<!DOCTYPE html>
<html>
<head>
  <title>Eduspace</title>
</head>
<body>

</body>
</html>

<table class=border all>
  <tr>
    <td>Teacher Name</td>
    <td>Added Courses</td>
  </tr>
<?php
if(isset($_POST['teacher']))
{

$q = 'select teacher.tname , course.cname from teacher , course where course.tid=teacher.tid';
    $result3 = mysqli_query($con,$q);
    if($result3==true){
    while($row=mysqli_fetch_assoc($result3))
      {
         echo 

            '<tr>
             <td >'.$row['tname'].'</td>
             <td >'.$row['cname'].'</td>

             </tr>';
      }
    }
    else{
      echo "not found";
 }
}
?>
</table>