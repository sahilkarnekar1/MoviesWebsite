<?php
session_start();
session_regenerate_id(true);
if(!isset($_SESSION['user'])){

	header('location:index.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css2/cssfile6.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>



<?php 
include 'adminblocks/adminnav.php';
?>

<!-- php -->

<?php

include 'config.php';

$ID = $_GET['Id'];
// $Uname=$_GET['userName'];
// $Uenail=$_GET['userEmail'];
// $Uphone=$_GET['userphone'];
// $Umessage=$_GET['Enquiry'];
$userSelect=mysqli_query($con,"SELECT * FROM `contact` WHERE Id =$ID");
$row=mysqli_fetch_array($userSelect);

?>




<div class="viewdata">
    <h5 class="text-justify para"><?php echo" $row[Id] " ?></h5>
    <h5 class="text-justify para"><?php echo" $row[userName] " ?></h5>
    <h5 class="text-justify para"><?php echo" $row[userEmail] " ?></h5>
    <h5 class="text-justify para"><?php echo" $row[userphone] " ?></h5>
    <br>
    <h3>Message</h3>

    <p class="text-justify para parabag"><?php echo" $row[Enquiry] " ?></p>
</div>







<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>