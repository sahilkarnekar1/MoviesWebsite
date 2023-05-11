<?php

include 'config.php';

if (isset($_POST['update'])) {
    $ID=$_POST['Id'];
    




$Record = mysqli_query($con,"SELECT * FROM `movies` WHERE Id=$ID");
$data = mysqli_fetch_array($Record);
$ban=$data['Bannerimage'];
$ss1=$data['Screenshot1'];
$ss2=$data['Screenshot2'];
$ss3=$data['Screenshot3'];
    unlink("../uploadImage/". $ban);
    unlink("../screenshots/". $ss1);
    unlink("../screenshots/". $ss2);
    unlink("../screenshots/". $ss3);






    $MOVIENAME=$_POST['movieName'];
    $moviename = mysqli_real_escape_string($con,  $MOVIENAME);
 
    $DESCRIPTION=$_POST['movieDescription'];
    $description = mysqli_real_escape_string($con,  $DESCRIPTION);
 
    $CATEGORY=$_POST['categories'];
    $categories = mysqli_real_escape_string($con,  $CATEGORY);
 
    $LINK1=$_POST['movieLink480'];
    $link1 = mysqli_real_escape_string($con,  $LINK1);
 
    $LINK2=$_POST['movieLink720'];
    $link2 = mysqli_real_escape_string($con,  $LINK2);
 
    $LINK3=$_POST['movieLink1080'];
    $link3 = mysqli_real_escape_string($con,  $LINK3);


 
 
 //bannerimage

 $BANNERIMAGE=$_FILES['bannerImg'];
 $img_name=$_FILES['bannerImg']['name'];
 $img_name=preg_replace("/\s+/","_",$img_name);
 $img_loc=$_FILES['bannerImg']['tmp_name'];
 $img_ext=pathinfo($img_name,PATHINFO_EXTENSION);
 $img_name=pathinfo($img_name,PATHINFO_FILENAME);
 $img_name=$img_name."_".date("dmYHis").".". $img_ext;

$img_des="../uploadImage/". $img_name;

move_uploaded_file($img_loc,"../uploadImage/". $img_name);


// screenshots 1

$SS1=$_FILES['screenshotno1'];
$ss1_name=$_FILES['screenshotno1']['name'];
$ss1_name=preg_replace("/\s+/","_",$ss1_name);
 $ss1_loc=$_FILES['screenshotno1']['tmp_name'];
 $ss1_ext=pathinfo($ss1_name,PATHINFO_EXTENSION);
 $ss1_name=pathinfo($ss1_name,PATHINFO_FILENAME);
 $ss1_name=$ss1_name."_".date("dmYHis").".". $ss1_ext;
$ss1_des="../screenshots/". $ss1_name;

move_uploaded_file($ss1_loc,'../screenshots/'. $ss1_name);

// // screenshots 2

$SS2=$_FILES['screenshotno2'];
$ss2_name=$_FILES['screenshotno2']['name'];
$ss2_name=preg_replace("/\s+/","_",$ss2_name);
 $ss2_loc=$_FILES['screenshotno2']['tmp_name'];
 $ss2_ext=pathinfo($ss2_name,PATHINFO_EXTENSION);
 $ss2_name=pathinfo($ss2_name,PATHINFO_FILENAME);
 $ss2_name=$ss2_name."_".date("dmYHis").".". $ss2_ext;
$ss2_des="../screenshots/". $ss2_name;

move_uploaded_file($ss2_loc,'../screenshots/'. $ss2_name);

// // screenshots 3

$SS3=$_FILES['screenshotno3'];
$ss3_name=$_FILES['screenshotno3']['name'];
$ss3_name=preg_replace("/\s+/","_",$ss3_name);
 $ss3_loc=$_FILES['screenshotno3']['tmp_name'];
 $ss3_ext=pathinfo($ss3_name,PATHINFO_EXTENSION);
 $ss3_name=pathinfo($ss3_name,PATHINFO_FILENAME);
 $ss3_name=$ss3_name."_".date("dmYHis").".". $ss3_ext;
$ss3_des="../screenshots/". $ss3_name;


move_uploaded_file($ss3_loc,'../screenshots/'. $ss3_name);

// insert
 
mysqli_query($con,"UPDATE `movies` SET `Name`='$moviename',`Description`='$description',`Link480`='$link1',`Link720`='$link2',`Link1080`='$link3',`Bannerimage`='$img_name',`Screenshot1`='$ss1_name',`Screenshot2`='$ss2_name',`Screenshot3`='$ss3_name' ,`Categories`='$categories' WHERE Id=$ID");

header('location:showdata.php');
}
?>