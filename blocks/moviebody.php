  

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/newli.css">
    <link rel="stylesheet" href="css/viewweb.css">
    <link rel="stylesheet" href="pages.css">
    </head>
<body>
  
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
<div class="moviesbody">

<div class="container">

    
  
  <div class="row">

  <?php

while ($row = $result->fetch_assoc()) { 
$ID=$row['Id'];

  ?>
<?php echo "<td><a class='atextdeco' href='viewmovie.php?Id=".$ID."'>"; ?> 


<div class="col-6 setfix" style="margin-bottom:10px;">
<div class="card setfix" >
    <div class="imgsetdiv">
<img src="./uploadImage/<?php echo $row['Bannerimage'] ?>" class="card-img-top minmaximg" alt="...">
</div>
<div class="card-body titleoverflow">

<p class="card-text"><?php echo" $row[Name] " ?></p>

<?php echo "</a> </td>"; ?>

                
            



</div>
</div>
</div>

<?php } ?>
</div>
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
</div>

</div>



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

<div class="moviesbody">

<div class="container">

    
  
  <div class="row">
    
  <?php

while ($row = $result->fetch_assoc()) { 
$ID=$row['Id'];

  ?>

<?php echo "<td><a class='atextdeco' href='viewmovie.php?Id=".$ID."'>"; ?> 


    <div class="col-6 setfix" style="margin-bottom:10px;">
    <div class="card setfix" >
        <div class="imgsetdiv">
  <img src="./uploadImage/<?php echo $row['Bannerimage'] ?>" class="card-img-top minmaximg" alt="...">
  </div>
  <div class="card-body titleoverflow">
 
    <p class="card-text"><?php echo" $row[Name] " ?></p>

    <?php echo "</a> </td>"; ?>

                    
                


  
  </div>
</div>
    </div>

    <?php } ?>



   






  </div>
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
</div>

</div>

<?php

}

?>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>