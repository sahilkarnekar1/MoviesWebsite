<?php

include 'config.php';

$ID = $_GET['Id'];
mysqli_query($con,"DELETE FROM `contact` WHERE Id =$ID");
header('location:enquiries.php');

?>