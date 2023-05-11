<?php

include 'config.php';

$ID = $_GET['Id'];

$sql = "SELECT * FROM movies WHERE Id =$ID";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$img_name=$row['Bannerimage'];

$img_ss1=$row['Screenshot1'];
$img_ss2=$row['Screenshot2'];
$img_ss3=$row['Screenshot3'];

mysqli_query($con,"DELETE FROM `movies` WHERE Id =$ID");

unlink("../uploadImage/". $img_name);

unlink("../screenshots/". $img_ss1);
unlink("../screenshots/". $img_ss2);
unlink("../screenshots/". $img_ss3);
header('location:showdata.php');

?>