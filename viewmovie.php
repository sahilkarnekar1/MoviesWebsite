<?php

include 'admin7875632522/config.php';



// currenturl
function getFullURL(){
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443)? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $uri = $_SERVER['REQUEST_URI'];
    return $protocol.$host.$uri;
}






$ID = $_GET['Id'];
// $Uname=$_GET['userName'];
// $Uenail=$_GET['userEmail'];
// $Uphone=$_GET['userphone'];
// $Umessage=$_GET['Enquiry'];
$movieSelect=mysqli_query($con,"SELECT * FROM `movies` WHERE Id =$ID");
$row=mysqli_fetch_array($movieSelect);




$meta_image="http://spotmymovies.epizy.com/uploadImage/".$row['Bannerimage'];
$fullurl = "https://spotmymovies.epizy.com/viewmovie.php?Id=$ID";

?>




<!DOCTYPE html>
<html lang="en">
<head>

<!-- featuredimage -->
<meta property="og:image" content="https://spotmymovies.epizy.com/uploadImage/<?php echo $row['Bannerimage']; ?>">
<meta property="og:type" content="article">
<meta property="og:url" content="<?php echo $fullurl; ?>">
<meta property="og:title" content="<?php echo" $row[Name] " ?>">
<meta property="og:description" content="<?php echo" $row[Description] " ?>">

<meta property="og:image:width" content="300">

<meta property="og:image:height" content="300">








    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="spotmymovieslogo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/cssfile2.css">
    <link rel="stylesheet" href="css/cssfile1.css">
    <link rel="stylesheet" href="css/cssfile3.css">
    <link rel="stylesheet" href="css/setstyleforh2only.css">
    <link rel="stylesheet" href="css/forsearchbar.css">    
    <link rel="stylesheet" href="css/forepisodesbtn.css">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title><?php  echo" $row[Name] " ?> </title>
    <link rel="stylesheet" href="style.css">  
    
</head>
<body class="bgc">


<div class="newone">
    <form action="index.php" id="hbz-searchbox" method="post">
<input id="hbz-input" name="search" placeholder="Search here ... " type="search">
<button id="hbz-submit" name="submit" type="submit">Search</button>
</form>

</div>








    <div class="descmovie">
        <div class="movieinfo rounded border border-warning">
            <h2 class="setstyle" style="margin-left: 5%; font-size: 27px;"><?php echo" $row[Name] " ?></h2>

            <div class="imagediv">
            <img style="padding:8px" class="setimage" src="./uploadImage/<?php echo $row['Bannerimage'] ?>" alt="">
            </div>
            <p class="textal"><?php echo" $row[Description] " ?></p>


            <div class="download">
            <?php 
            if ($row['WebEp']!=="") { ?>
                <h3>Complete Season</h3>

                <?php } ?>

            <?php 
            if ($row['Link480']!=="") { ?>
                <a href="<?php echo $row['Link480'] ?>"> <button type="button" class="btn btn-primary">Download 480P</button></a>
          <?php  } ?>

          <?php 
            if ($row['Link720']!=="") { ?>
                <a href="<?php echo $row['Link720'] ?>"> <button type="button" class="btn btn-secondary">Download 720P</button></a>
          <?php  } ?>

          <?php 
            if ($row['Link1080']!=="") { ?>
               <a href="<?php echo $row['Link1080'] ?>"> <button type="button" class="btn btn-success">Download 1080P</button></a>
          <?php  } ?>

</div>
        </div>
    </div>

 <!-- webep -->

 <?php 
            if ($row['WebEp']!=="") { ?>
                <div class="web_ep">
        <?php
        $webEpisodes=unserialize($row['WebEp']);
        $weblength = count($webEpisodes);
       
        for ($i=0; $i < $weblength ; $i++) { ?>

            <div class="webepinline">
    <h3>Episode <?php echo $i+1; ?></h3>
    
          <a href="<?php echo $webEpisodes[$i]; ?>">  <button type="button" class="btn btn-success">Download 1080P</button></a>
    </div> 
            
       <?php }?>
    
    </div>
          <?php  } ?>

    




    <div class="setdiv">
    <div class="screendiv">
<h3>Screenshots</h3>
    </div>

    <div class="screenshotdiv">
            <img class="setimagescreenshot" src="./screenshots/<?php echo $row['Screenshot1'] ?>" alt="">
            </div>
            <div class="screenshotdiv">
            <img class="setimagescreenshot" src="./screenshots/<?php echo $row['Screenshot2'] ?>" alt="">
            </div>
            <div class="screenshotdiv">
            <img class="setimagescreenshot" src="./screenshots/<?php echo $row['Screenshot3'] ?>" alt="">
            </div>
            
    </div>
    




<!-- footer -->

<?php
 
 include 'footer.php';
 
 ?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>