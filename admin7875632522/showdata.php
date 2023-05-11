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
    <link rel="stylesheet" href="css2/cssfile4.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script>
      if (window.history.replaceState) {
        window.history.replaceState(null,null,window.location.href);
      }
    </script>

    
    <title>Document</title>


    <style>
table {
  
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
  
  
  
}

th, td {
  text-align: left;
  padding: 8px;
  overflow:hidden;
  

}

tr:nth-child(even){background-color: #f2f2f2}


/* new */

.pagination {
	list-style-type: none;
	padding: 10px 0;
	display: inline-flex;
	justify-content: space-between;
	box-sizing: border-box;
}
.pagination li {
	box-sizing: border-box;
	padding-right: 10px;
}
.pagination li a {
	box-sizing: border-box;
	background-color: #e2e6e6;
	padding: 8px;
	text-decoration: none;
	font-size: 12px;
	font-weight: bold;
	color: #616872;
	border-radius: 4px;
}
.pagination li a:hover {
	background-color: #d4dada;
}
.pagination .next a, .pagination .prev a {
	text-transform: uppercase;
	font-size: 12px;
}
.pagination .currentpage a {
	background-color: #518acb;
	color: #fff;
}
.pagination .currentpage a:hover {
	background-color: #518acb;
}



</style>

</head>
<body>

<!-- navbar -->

<?php 
include 'adminblocks/adminnav.php';
?>


<!-- Top1 -->

<style>
  .top1{
    margin: 10px;
    border-style: solid;
   border-radius: 16px;
   border-color: blue;
   padding: 8px;
   width: 50%;
}
.setflex{
  display: flex;
  width: 100%;
}
</style>
<div class="setflex">
  <!-- top1 -->
<div class="top1">
  <h4>Top 1</h4>
<form action="showdata.php" method="post">
<div class="form-group">
    <label for="exampleInputPassword1">Enter Changable ID</label>
    <input name="id1" type="text" class="form-control"  placeholder="Enter Changable ID" required>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Enter ID For Update</label>
    <input name="id2" type="text" class="form-control"  placeholder="Update ID > Recent ID">
  </div>
  
  <button type="submit" name="updateid" class="btn btn-primary">Top1</button>
</form>
</div>

<!-- popular -->
<div class="top1">
  <h4>popular</h4>
<form action="" method="post">
<div class="form-group">
    <label for="exampleInputPassword1">Enter Popular ID</label>
    <input name="popularid1" type="text" class="form-control"  placeholder="Enter Popular ID" required>
  </div>
  
  <button type="submit" name="popularbtn" class="btn btn-primary">Pop</button>
</form>
</div>


</div>
<!-- top1 -->

<?php

include 'config.php';

if (isset($_POST['updateid'])) {
    $ID1=$_POST['id1'];
    $ID2=$_POST['id2'];

    mysqli_query($con,"UPDATE `movies` SET `Id`='$ID2' WHERE Id=$ID1");

header('location:showdata.php');
}
?>

<!-- popular -->
<?php

include 'config.php';

if (isset($_POST['popularbtn'])) {
    $PID=$_POST['popularid1'];
    
    $popsql = "UPDATE `movies` SET `Popular`= NULL WHERE Popular='pop'";
    if ($con->query($popsql) === TRUE) {
      mysqli_query($con,"UPDATE `movies` SET `Popular`='pop' WHERE Id=$PID");
    }

}
?>



<!-- // fetch date_ -->

<!-- <div style="overflow-x:auto;">
  <table border="1" width="100%" style='table-layout:fixed'>

  <col width="20">
  <col width="41">
  <col width="41">
  <col width="70">
  <col width="25">
  <col width="25">

    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Desc</th>
      <th>Image</th>
      <th><img src='delete.png'></th>
      <th><img src='edit.png'></th>
    </tr>
    <?php

// include 'config.php';
// $pic=mysqli_query($con,"SELECT * FROM `movies`");
// while ($row=mysqli_fetch_array($pic)) {
//    echo"
//     <tr>
   
// <td>$row[Id]</td>
// <td>$row[Name]</td>
// <td>$row[Description]</td>
// <td> <img src='$row[Bannerimage]' width = '100%' height = '85px' ></td>
// <td><a href='delete.php? Id= $row[Id]'><img src='delete.png'></a></td>
// <td><a href='update.php? Id= $row[Id]'><img src='edit.png'></a></td>
   
//    </tr>
//    ";
// }
?>
    
  </table>
</div> -->






<div style="overflow-x:auto;">
  <table border="1"  width="100%" style='table-layout:fixed'>

  <col width="20" >
  <col width="41" >
  <col width="41" >
  <col width="70" >
  <col width="25" >
  <col width="25" >

    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Desc</th>
      <th>Image</th>
      <th><img src='delete.png'></th>
      <th><img src='edit.png'></th>
    </tr>
    
<?php
include 'config.php';


if (isset($_POST['submit'])) {
  $search=$_POST['search'];
 
 // Get the total number of records from our table "students".
 $total_pages = $con->query("SELECT COUNT(*) FROM movies WHERE Id like '%$search%' or Name like '%$search%' ORDER BY Id DESC")->fetch_row()[0];

 // Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
 $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
 
 // Number of results to show on each page.
 $num_results_on_page = 17;
           
 
 if ($stmt = $con->prepare("SELECT * FROM movies WHERE Id like '%$search%' or Name like '%$search%' ORDER BY Id DESC LIMIT ?,?")) {
   // Calculate the page to get the results we need from our table.
   $calc_page = ($page - 1) * $num_results_on_page;
   $stmt->bind_param('ii', $calc_page, $num_results_on_page);
   $stmt->execute(); 
   // Get the results...
   $result = $stmt->get_result();
   $stmt->close();
 }


 while ($row = $result->fetch_assoc()) {
  echo"
   <tr>
  
   <td>$row[Id]</td>
    <td>$row[Name]</td>
    <td><div style='max-height:85px'>$row[Description]</div></td>
    <td> <img src='../uploadImage/$row[Bannerimage]' width = '100%' height = '85px' ></td>
   <td><a href='delete.php? Id= $row[Id]'><img src='delete.png'></a></td>
   <td><a href='update.php? Id= $row[Id]'><img src='edit.png'></a></td>
  
  </tr>
  ";
}
?>

</table>
</div>

<br><br>

<center>
<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
<ul class="pagination">
	<?php if ($page > 1): ?>
	<li class="prev"><a href="showdata.php?page=<?php echo $page-1 ?>">Prev</a></li>
	<?php endif; ?>

	<?php if ($page > 3): ?>
	<li class="start"><a href="showdata.php?page=1">1</a></li>
	<li class="dots">...</li>
	<?php endif; ?>

	<?php if ($page-2 > 0): ?><li class="page"><a href="showdata.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
	<?php if ($page-1 > 0): ?><li class="page"><a href="showdata.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

	<li class="currentpage"><a href="showdata.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

	<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="showdata.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
	<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="showdata.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
	<li class="dots">...</li>
	<li class="end"><a href="showdata.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
	<?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
	<li class="next"><a href="showdata.php?page=<?php echo $page+1 ?>">Next</a></li>
	<?php endif; ?>
</ul>
<?php endif; ?>
          
</center>

<?php
} else {
  include 'config.php';
  // Get the total number of records from our table "students".
  $total_pages = $con->query('SELECT COUNT(*) FROM movies ORDER BY Id DESC')->fetch_row()[0];

  // Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
  $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
  
  // Number of results to show on each page.
  $num_results_on_page = 17;
            
  
  if ($stmt = $con->prepare('SELECT * FROM movies ORDER BY Id DESC LIMIT ?,?')) {
    // Calculate the page to get the results we need from our table.
    $calc_page = ($page - 1) * $num_results_on_page;
    $stmt->bind_param('ii', $calc_page, $num_results_on_page);
    $stmt->execute(); 
    // Get the results...
    $result = $stmt->get_result();
    $stmt->close();
  }


  while ($row = $result->fetch_assoc()) {
    echo"
     <tr>
    
     <td>$row[Id]</td>
      <td>$row[Name]</td>
      <td><div style='max-height:85px'>$row[Description]</div></td>
      <td> <img src='../uploadImage/$row[Bannerimage]' width = '100%' height = '85px' ></td>
     <td><a href='delete.php? Id= $row[Id]'><img src='delete.png'></a></td>
     <td><a href='update.php? Id= $row[Id]'><img src='edit.png'></a></td>
    
    </tr>
    ";
 }

?>

</table>
</div>

<br><br>

 <center>
 <?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
 <ul class="pagination">
   <?php if ($page > 1): ?>
   <li class="prev"><a href="showdata.php?page=<?php echo $page-1 ?>">Prev</a></li>
   <?php endif; ?>
 
   <?php if ($page > 3): ?>
   <li class="start"><a href="showdata.php?page=1">1</a></li>
   <li class="dots">...</li>
   <?php endif; ?>
 
   <?php if ($page-2 > 0): ?><li class="page"><a href="showdata.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
   <?php if ($page-1 > 0): ?><li class="page"><a href="showdata.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>
 
   <li class="currentpage"><a href="showdata.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>
 
   <?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="showdata.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
   <?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="showdata.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>
 
   <?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
   <li class="dots">...</li>
   <li class="end"><a href="showdata.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
   <?php endif; ?>
 
   <?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
   <li class="next"><a href="showdata.php?page=<?php echo $page+1 ?>">Next</a></li>
   <?php endif; ?>
 </ul>
 <?php endif; ?>
           
 </center>


 <?php
}

?>

<?php

// include 'config.php';
//   // Get the total number of records from our table "students".
//   $total_pages = $con->query('SELECT COUNT(*) FROM movies ORDER BY Id DESC')->fetch_row()[0];

//   // Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
//   $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
  
//   // Number of results to show on each page.
//   $num_results_on_page = 17;
            
  
//   if ($stmt = $con->prepare('SELECT * FROM movies ORDER BY Id DESC LIMIT ?,?')) {
//     // Calculate the page to get the results we need from our table.
//     $calc_page = ($page - 1) * $num_results_on_page;
//     $stmt->bind_param('ii', $calc_page, $num_results_on_page);
//     $stmt->execute(); 
//     // Get the results...
//     $result = $stmt->get_result();
//     $stmt->close();
//   }




// while ($row = $result->fetch_assoc()) {
//    echo"
//     <tr>
   
//     <td>$row[Id]</td>
//      <td>$row[Name]</td>
//      <td><div style='max-height:85px'>$row[Description]</div></td>
//      <td> <img src='../uploadImage/$row[Bannerimage]' width = '100%' height = '85px' ></td>
//     <td><a href='delete.php? Id= $row[Id]'><img src='delete.png'></a></td>
//     <td><a href='update.php? Id= $row[Id]'><img src='edit.png'></a></td>
   
//    </tr>
//    ";
// }


// ?>
    




<!-- pagination -->








<!-- scripts -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/action.js"></script>

</body>
</html>