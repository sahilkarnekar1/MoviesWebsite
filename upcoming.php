<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include 'blocks/mainfavicon.php';
    ?>
    <title>Upcoming Movies</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="pagination.css">
  <link rel="stylesheet" href="css/upcoming.css">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    


   
</head>
<body>
    
<script>
      if (window.history.replaceState) {
        window.history.replaceState(null,null,window.location.href);
      }
    </script>




<?php
include 'blocks/topnav.php';
?>
<div id="hidediv">
<?php 
    
    include 'blocks/websitelogo.php';
    
    ?>
<?php
include 'blocks/welcome.php';
?>
<?php 
    
    include 'blocks/buttons.php';
    
    ?>

<?php 
    
    include 'blocks/searchbar.php';
    
    ?>

<!-- mainbody -->
<div class="mbody">

<!-- upcoming  -->
<div class="moviesbody">

<div class="container" style="border-style:solid; border-color:blue; border-radius:16px; background-color:white;">


<center>
<iframe src="https://www.bollywoodhungama.com/upcoming-movies/yr-2023/" id="q" allowfullscreen="" frameborder="0" width="100%" height="1080px"></iframe>
</center>


    </div>
    </div>








<?php
include 'blocks/optionsbody.php';
?>







</div>
</div>


<?php 
include 'blocks/footer.php';
?>



      



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>




