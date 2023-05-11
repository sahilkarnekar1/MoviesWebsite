





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spot My Movies</title>
    <link rel="shortcut icon" href="spotmymovieslogo.png" type="image/x-icon">
    <link rel="stylesheet" href="movies.css">
    <link rel="stylesheet" href="css/forcategoriesonly.css">
    <link rel="stylesheet" href="css/forsearchbar.css">
    <link rel="stylesheet" href="css/newli.css">
    <link rel="stylesheet" href="css/viewweb.css">
    <link rel="stylesheet" href="pages.css">



    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@600&display=swap" rel="stylesheet">
    










    
<script>
      if (window.history.replaceState) {
        window.history.replaceState(null,null,window.location.href);
      }
    </script>


 <style>
  /* new */

 </style>


</head>
<body style="background: rgb(3,78,187);
background: linear-gradient(90deg, rgba(3,78,187,1) 31%, rgba(39,101,255,1) 48%, rgba(154,0,81,1) 100%);">
    <header>
        <nav>
            <ul>
                <li><button><a href="#">&#9410;</a></button></li>
                <li><button><a href="#">&#9889;</a></button></li>
                <li><button><a href="#">&#128013;</a></button></li>
                

            </ul>
            
            
        </nav>
        
    </header>
    
    <!-- logo -->

    <?php 
    
    include 'websitelogo.php';
    
    ?>



    <div class="welcome">
    <p> WELCOME</p></div>

    </div>
    
    <?php 
    
    include 'buttons.php';
    
    ?>

    
    
    <div class="newone">
    <form action="index.php" id="hbz-searchbox" method="post">
<input id="hbz-input" name="search" placeholder="Search here ... " type="search">
<button id="hbz-submit" name="submit" type="submit">Search</button>
</form>

</div>

<center>
    <div class="movies">
    
    


    <!-- bodystart -->


<?php
include 'admin7875632522/config.php';


if (isset($_POST['submit'])) {
    $search=$_POST['search'];

    // Get the total number of records from our table "students".
  $total_pages = $con->query("SELECT COUNT(*) FROM movies WHERE Name like '%$search%' ORDER BY Id DESC")->fetch_row()[0];

  // Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
  $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
  
  // Number of results to show on each page.
  $num_results_on_page = 10;
            
  
  if ($stmt = $con->prepare("SELECT * FROM movies WHERE Name like '%$search%' ORDER BY Id DESC LIMIT ?,?")) {
    // Calculate the page to get the results we need from our table.
    $calc_page = ($page - 1) * $num_results_on_page;
    $stmt->bind_param('ii', $calc_page, $num_results_on_page);
    $stmt->execute(); 
    // Get the results...
    $result = $stmt->get_result();
    $stmt->close();
  }


  ?>
<?php

while ($row = $result->fetch_assoc()) { 
$ID=$row['Id'];

  ?>

<?php echo "<td><a class='atextdeco' href='viewmovie.php?Id=".$ID."'>"; ?> 
                    <div> 
                    <img src="./uploadImage/<?php echo $row['Bannerimage'] ?>" alt="Loading....">
                    <p><?php echo" $row[Name] " ?></p>
                    </div>
                  
                    <?php echo "</a> </td>"; ?>

                    
                
<?php } ?>


<center>
<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
<ul class="pagination">
	<?php if ($page > 1): ?>
	<li class="prev"><a href="index.php?page=<?php echo $page-1 ?>">Prev</a></li>
	<?php endif; ?>

	<?php if ($page > 3): ?>
	<li class="start"><a href="index.php?page=1">1</a></li>
	<li class="dots">...</li>
	<?php endif; ?>

	<?php if ($page-2 > 0): ?><li class="page"><a href="index.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
	<?php if ($page-1 > 0): ?><li class="page"><a href="index.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

	<li class="currentpage"><a href="index.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

	<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="index.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
	<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="index.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
	<li class="dots">...</li>
	<li class="end"><a href="index.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
	<?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
	<li class="next"><a href="index.php?page=<?php echo $page+1 ?>">Next</a></li>
	<?php endif; ?>
</ul>
<?php endif; ?>
          
</center>



<!-- elselcondition -->
  <?php
}else {
    
    include 'admin7875632522/config.php';


  // Get the total number of records from our table "students".
  $total_pages = $con->query('SELECT COUNT(*) FROM movies ORDER BY Id DESC')->fetch_row()[0];

  // Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
  $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
  
  // Number of results to show on each page.
  $num_results_on_page = 10;
            
  
  if ($stmt = $con->prepare('SELECT * FROM movies ORDER BY Id DESC LIMIT ?,?')) {
    // Calculate the page to get the results we need from our table.
    $calc_page = ($page - 1) * $num_results_on_page;
    $stmt->bind_param('ii', $calc_page, $num_results_on_page);
    $stmt->execute(); 
    // Get the results...
    $result = $stmt->get_result();
    $stmt->close();
  }
?>

<?php

while ($row = $result->fetch_assoc()) { 
$ID=$row['Id'];

  ?>

<?php echo "<td><a class='atextdeco' href='viewmovie.php?Id=".$ID."'>"; ?> 
                    <div> 
                    <img src="./uploadImage/<?php echo $row['Bannerimage'] ?>" alt="Loading....">
                    <p><?php echo" $row[Name] " ?></p>
                    </div>
                  
                    <?php echo "</a> </td>"; ?>

                    
                
<?php } ?>

<center>
<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
<ul class="pagination">
	<?php if ($page > 1): ?>
	<li class="prev"><a href="index.php?page=<?php echo $page-1 ?>">Prev</a></li>
	<?php endif; ?>

	<?php if ($page > 3): ?>
	<li class="start"><a href="index.php?page=1">1</a></li>
	<li class="dots">...</li>
	<?php endif; ?>

	<?php if ($page-2 > 0): ?><li class="page"><a href="index.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
	<?php if ($page-1 > 0): ?><li class="page"><a href="index.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

	<li class="currentpage"><a href="index.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

	<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="index.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
	<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="index.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
	<li class="dots">...</li>
	<li class="end"><a href="index.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
	<?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
	<li class="next"><a href="index.php?page=<?php echo $page+1 ?>">Next</a></li>
	<?php endif; ?>
</ul>
<?php endif; ?>
          
</center>


<?php

}

?>
            
    </div>
     </center>



<!-- categories -->


<center>
    <div class="cat">
        <ul>
       <a href="cataction.php"><li>Action</li></a> 
       <a href="catadult.php"><li>Adult</li></a> 
       <a href="catadventure.php"><li>Adventure</li></a> 
       <a href="catbollywood.php"><li>Bollywood</li></a> 
       <a href="catcomedy.php"><li>Comedy</li></a>
       <a href="catdc.php"><li>DC</li></a> 
       <a href="catdrama.php"><li>Drama</li></a> 
       <a href="catfantasy.php"><li>Fantasy</li></a> 
       <a href="cathollywood.php"><li>Hollywood</li></a> 
       <a href="cathorror.php"><li>Horror</li></a> 
       <a href="catmystry.php"><li>Mystry</li></a> 
       <a href="catmarvel.php"><li>Marvel</li></a> 
       <a href="catnetflix.php"><li>Netflix</li></a> 
       <a href="catromance.php"><li>Romance</li></a> 
       <a href="catsci.php"><li>SCI-FI</li></a> 
       
       </ul>
    </div>
</center>





     
    <div class="media">
        <h1>Follow Us</h1>
        <div>
            <a href="#"><img src="logo/insta.png" alt=""></a>
            <a href="#"><img src="logo/fb.png" alt=""></a>
            <a href="#"><img src="logo/twit.png" alt=""></a>
            <a href="#"><img src="logo/tele.png" alt=""></a>


        </div>
    </div>
    <hr>
    
    <!-- request movie -->

    <?php
include 'requestmovieform.php';
  ?>




    <!-- footer -->
 <?php
 
 include 'footer.php';
 
 ?>


    <!-- scipts -->




</body>
</html>